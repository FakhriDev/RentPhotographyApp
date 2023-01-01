<?php
  
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\photo;
use App\Models\album;
use App\Models\event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
  
class PagesController extends Controller
{
    public function pesanan()
    {

        $orders = event::orderBy('start', 'asc')->get();
        
        return view('pesanan',compact('orders'));
    }
    public function approved($id)
    {
        $status = event::where('id',$id)->first();
        $status->status = 'Distujui';
        $status->save();
        return redirect('/pesanan')->with('success', 'Pesanan Berhasil Distujui.');
    }
    public function cancelled($id)
    {
        $status = event::where('id',$id)->first();
        $status->status = 'Ditolak';
        $status->save();
        return redirect('/pesanan')->with('success', 'Pesanan Berhasil Ditolak.');
    }

    public function detailalbum(album $album)
    {
        $id = $album->id;
        $albums = DB::table('albums')->where('id', $id)->first();
        $photos = $album->albums('id')->paginate(12);
        return view('detailalbum', compact('photos','albums')); 
    } 
    public function index()
    {
        $photos = photo::get();
        $albums = album::InRandomOrder()->paginate(12);
        return view('index', compact('albums','photos'));
    } 
    public function savealbums(Request $request)
    {
        if($request->file('img')){
            $file= $request->file('img');
            
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Albums'), $filename);
            $data['img']= $filename;
        }
            $albums = new album();
            $albums->nama = $request->nama;
            $albums->kategori = $request->kategori;
            $albums->gambar = $filename;
    
            $albums->save();
            return redirect('/album')->with('success', 'Post Uploaded Successfuly.');
    }
    public function paynow(Request $request)
    {
        if($request->file('img')){
            $file= $request->file('img');
            
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/transaksi'), $filename);
            $data['img']= $filename;
        }
        DB::table('events')->where('id',$request->id)->update([
            'status' => 'Prosess',
            'transaksi' => $filename,
        ]);
        return redirect('rOrder');
    }
    public function savephotos(Request $request)
    {
        if($request->file('img')){
            $file= $request->file('img');
            
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Photos'), $filename);
            $data['img']= $filename;
        }
            $photos = new photo();
            $photos->kategori_id = $request->kategori;
            $photos->img = $filename;
    
            $photos->save();
            return redirect()->back()->with('success', 'Post Uploaded Successfuly.');
    }
    

    public function dphoto($id){
        $photo = photo::find($id);

        $photo->delete();
        return redirect()->back()->with('success', 'Ads has been Deleted.');
    }
    public function dalbum($id){
        $album = album::find($id);

        $album->delete();
        return redirect()->back()->with('success', 'Ads has been Deleted.');
    }
    public function edit($id){
        $albums = album::find($id);
        return view('/editalbum',compact('albums'));
    }
    public function update(request $request){
        if($request->img !== null){
            if($request->file('img')){
                $file= $request->file('img');
                
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('public/Albums'), $filename);
                $data['img']= $filename;
            }
            DB::table('albums')->where('id',$request->id)->update([
                    'nama' => $request->nama,
                    'gambar' => $filename,
                    'kategori' => $request->kategori,
            ]);
            return redirect()->back()->with('success', 'Post Uploaded Successfuly.');
        }else{
            DB::table('albums')->where('id',$request->id)->update([
                    'nama' => $request->nama,
                    'kategori' => $request->kategori,
            ]);
            return redirect()->back()->with('success', 'Post Uploaded Successfuly.');
        }
        return redirect()->back()->with('success', 'Post Uploaded Successfuly.');
    }
}