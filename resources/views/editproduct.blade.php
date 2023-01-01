@extends('layouts.dashboard')
  
@section('content')

<div class="container-fluid px-4">
  <h1 class="mt-4">Edit Product</h1>
  <div class="row">
    <div class="col-lg-6">
        <div class="card mb-4">
            <div class="card-header"><i class="fa-solid fa-pencil"></i>
            </div>
            <div class="container-fluid px-4">
                <form method="post" action="/updateproduct" enctype="multipart/form-data">
                    @csrf
                    <div class="row mt-4">
                         <div class="col-12">
                            <label >Name Product</label>
                            <input type="text" class="form-control d-none" name="id" id="inlineFormInput" value="{{$products->id}}">
                            <input type="text" class="form-control mb-2" name="name_product" id="inlineFormInput" value="{{$products->name_product}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label >Quantity</label>
                           <input type="text" class="form-control mb-2" name="quantity" id="inlineFormInput" value="{{$products->quantity}}">
                       </div>
                       <div class="col-6">
                            <label >Price</label>
                           <input type="text" class="form-control mb-2" name="price" id="inlineFormInput" value="{{$products->price}}">
                       </div>
                   </div>
                   <div class="row">
                        <div class="col-12">
                            <label >Detail Product</label>
                        <textarea type="text" class="form-control mb-2" name="detail_product" id="inlineFormInput" value="">{{$products->detail_product}} </textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12">
                            <label >Photo Product</label>
                            <input type="file" name="img" class="form-control" id="img">
                        </div>
                    </div>
                    <div class="mb-4">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Update Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fa-solid fa-eye"></i><!-- <i class="fas fa-chart-pie me-1"></i> Font Awesome fontawesome.com -->
                Preview Product
            </div>
            <div class="card-body">
                <div class="row">
                  <div class="col-lg-5">
                    <img src="public/photos/{{$products->img}}" class="rounded" style="width:320px" alt="Responsive image">
                  </div>
                  <div class="col-lg-6">
                    <h2>{{$products->name_product}}</h2>
                    <b>Rp. {{$products->price}}</b>
                    <p color="gray">Stock: {{$products->quantity}}</p><br>
                    <p> {{$products->detail_product}}</p>
                  </div>
                </div>
              </div>
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