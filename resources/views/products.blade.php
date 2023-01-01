@extends('layouts.dashboard')
  
@section('content')
<div class="container-fluid px-4">
    
   
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Poducts Table
        </div>
        
        <div class="card-body">
            
            <table id="datatablesSimple">
                
                <thead>
                   
                    <tr>
                        <th>Image</th>
                        <th>Name Product</th>
                        <th>Desc</th>
                        <th>Quantity</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Image</th>
                        <th>Name Product</th>
                        <th>Desc</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Action</th>
    
                    </tr>
                </tfoot>
                
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td><img src="public/photos/{{$product->img}}" class="rounded" style="width:100px" alt="Responsive image"></td>
                        <td>{{$product->name_product}}</td>
                        <td>{{$product->detail_product}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->price}}</td>
                        <td>
                          <a href="/editproduct{{$product->id}} " class="btn btn-warning" > <i class="fa-solid fa-trash"></i> Edit Data</a> 
                          | <a href="/deleteproduct{{$product->id}}" class="btn btn-danger">Delete</a></td>
                          <!-- Modal Input End -->
                    </tr>
                    @endforeach
                </tbody>
                
            </table>
            <div class="float-sm-right">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fa-solid fa-plus"></i> Input Data
              </button>
              <!-- Modal Input -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Input Product</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="/postproduct" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                              <div class="col">
                                <label>Product Name</label>
                                <input type="text" class="form-control" name="name_product" >
                              </div>
                              
                            </div>
                            <div class="row">
                                <div class="col">
                                  <label>Quantity</label>
                                  <input type="text" class="form-control" name="quantity">
                                </div>
                                <div class="col">
                                  <label>Price</label>
                                  <input type="text" class="form-control" name="price" >
                                </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <label>Product Desc</label>
                                <textarea type="textarea" class="form-control" name="detail_product"></textarea>
                              </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="image">Image</label>
                                    <div class="input-group mb-3">
                                    <input type="file" name="img" class="form-control" id="img">
                                    </div>
                            </div>
                          </div>
                          
                          
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save Product</button>
                    </div>
                </form>
                  </div>
                </div>
              </div>
              <!-- Modal Input End -->
              
            </div>
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