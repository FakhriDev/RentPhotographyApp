@extends('layouts.dashboard')
  
@section('content')
<div class="container-fluid px-4">
    
   
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Orders Table
        </div>
        
        <div class="card-body">
            
            <table id="datatablesSimple">
                
                <thead>
                   
                    <tr>
                        <th>Name Product</th>
                        <th>User Order</th>
                        <th>Name</th>
                        <th>City</th>
                        <th>ZIP Code</th>
                        <th>Detail Address</th>
                        <th>Quantity</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name Product</th>
                        <th>User Order</th>
                        <th>Name</th>
                        <th>City</th>
                        <th>ZIP Code</th>
                        <th>Detail Address</th>
                        <th>Quantity</th>
                        <th>Price</th>
    
                    </tr>
                </tfoot>
                
                <tbody>
                    @foreach ($orders as $order)
                    <tr>
                        <td>{{$order->id_product}}</td>
                        <td>{{$order->id_user}}</td>
                        <td>{{$order->name}}</td>
                        <td>{{$order->city}}</td>
                        <td>{{$order->zip}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->price}}</td>
                    </tr>
                    @endforeach
                  
                </tbody>
                
            </table>
            <div class="float-sm-right">
        </div>
    </div>
</div>
<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Your Website 2022</div>
            <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>
</body>
</html>
                    @endsection   