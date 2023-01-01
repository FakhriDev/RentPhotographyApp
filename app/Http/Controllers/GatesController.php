<?php
  
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\photo;
use App\Models\album;
use App\Models\event;
use App\Models\package;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
  
class GatesController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home(Request $request)
    {
        $packages = package::get();
        if($request->ajax()) {
       
            $data = event::whereDate('start', '>=', $request->start)
                      ->whereDate('end',   '<=', $request->end)
                      ->get(['id', 'title', 'start', 'end']);

            return response()->json($data);
       }
        return view('user',compact('packages'));
    } 
    public function editOrder(Request $request ,$id)
    {
        $orders = event::find($id);
        $packages = package::get();
        if($request->ajax()) {
       
            $data = event::whereDate('start', '>=', $request->start)
                      ->whereDate('end',   '<=', $request->end)
                      ->get(['id', 'title', 'start', 'end']);

            return response()->json($data);
       }
        return view('/editOrder',compact('packages','orders'));
    } 
    public function ordernow(Request $request)
    {
        $event = new event();
            $event->id_user = Auth::user()->id;
            $event->notlp = $request->notlp;
            $event->title = $request->title;
            $event->id_paket = $request->id_paket;
            $event->start = $request->start;
            $event->end = $request->end;
            $event->alamat = $request->alamat;
            $event->status = 'Belum Lunas';
            $event->save();
            return redirect('rOrder');
    } 
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome(Request $request)
    {
        $cevents = event::count();  
        $calbums = album::count();  
        $orders = event::orderBy('start', 'asc')->paginate(7);
        if($request->ajax()) {
       
            $data = event::whereDate('start', '>=', $request->start)
                      ->whereDate('end',   '<=', $request->end)
                      ->get(['id', 'title', 'start', 'end']);

            return response()->json($data);
       }
        return view('dashboard',compact('orders','cevents','calbums'));
    }
    public function payment($id)
    {
        $orders = event::find($id);
        return view('payment',compact('orders'));
    }
    public function rOrder()
    {
        $orders = event::get();
        $orders = Auth::user()->postBy()->paginate(12);
        return view('rOrder',compact('orders'));
    }
    public function album()
    {
        $albums = album::InRandomOrder()->paginate(12);
        return view('album', compact('albums'));
    }
    
    public function order(){
        return view('order');
    }

    public function foto()
    {
        $albums = album::InRandomOrder()->paginate(12);
        return view('foto', compact('albums'));
    }

    public function createalbum()
    {
        return view('createalbum');
    }
    public function addfoto(album $album)
    {
        $id = $album->id;
        $albums = DB::table('albums')->where('id', $id)->first();
        $photos = $album->albums('id')->paginate(12);
        return view('addfoto', compact('photos','albums')); 
        
    }
    public function dashboard()
    {
        $products = product::InRandomOrder()->paginate(12);
        return view('dashboard', compact('products'));
    }
    public function editproduct($id)
    {
        $products = product::find($id);
        return view('editproduct', compact('products'));
    }
    public function uporder(Request $request)
    {
        DB::table('events')->where('id',$request->id)->update([
            'notlp' => $request->notlp,
            'title' => $request->title,
            'id_paket' => $request->id_paket,
            'start' => $request->start,
            'end' => $request->end,
            'alamat' => $request->alamat,
        ]);
        return redirect('rOrder');
     }
    public function orders()
    {
        $orders = order::get();
        return view('orders', compact('orders'));
    }
    public function products()
    {
        $products = product::get();
        return view('products', compact('products'));
    }
    public function postproduct(Request $request)
    {
        
        if($request->file('img')){
            $file= $request->file('img');
            
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Photos'), $filename);
            $data['img']= $filename;
        }
            $product = new product();
            $product->name_product = $request->name_product;
            $product->detail_product = $request->detail_product;
            $product->quantity = $request->quantity;
            $product->price = $request->price;
            $product->img = $filename;
    
            $product->save();
            return redirect('/products')->with('success', 'Post Uploaded Successfuly.');
    }
    public function hapusorder($id){
        $event = event::find($id);
        $event->delete();
        return redirect('rOrder')->with('success', ' Ads has been Deleted.');
    }
}