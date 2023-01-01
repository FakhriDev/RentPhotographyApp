<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>One Page Wonder - Start Bootstrap Template</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container px-5">
                <a class="navbar-brand" href="/">KUPET Shop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        @auth
                        <li class="nav-item"><a class="nav-link" href="/dashboard">{{ Auth::user()->name }}</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @else
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                        @if (Route::has('register'))
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        @endif
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="masthead text-center text-white">
            
            <div class="masthead-content">
                
                
                <div class="container px-5">
                    <div class="row gx-5 align-items-center">
                            <div class="p-5"><img class="img-profile rounded-light" src="assets/img/logow.png" alt="" />
                                <h4 class="masthead-profile mt-5">Detail Product</h4>
                            </div>
                    </div>
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-7 order-lg-2">
                            <div class="card" style="width: auto;">
                                    <div class="card-body">
                                        <h3 class="color:black;">Form Address</h3>
                                        <form method="post" action="/ordernow" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row mt-4">
                                                 <div class="col-12">
                                                    <input type="text" class="form-control d-none" name="id_product" id="inlineFormInput" value="{{$products->id}}">
                                                    <input type="text" class="form-control d-none" name="price" id="inlineFormInput" value="{{$products->price}}">
                                                    <input type="text" class="form-control mb-2" name="name" id="inlineFormInput" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                   <input type="text" class="form-control mb-2" name="city" id="inlineFormInput" placeholder="City">
                                               </div>
                                               <div class="col-6">
                                                   
                                                   <input type="text" class="form-control mb-2" name="zip" id="inlineFormInput" placeholder="ZIP Code">
                                               </div>
                                           </div>
                                           <div class="row">
                                                <div class="col-12">     
                                                <textarea type="text" class="form-control mb-2" name="detail_address" id="inlineFormInput" placeholder="">Detail Address </textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-12">
                                                    <input type="text" class="form-control mb-2" name="quantity" id="inlineFormInput" placeholder="Quantity">
                                                </div>
                                            </div>
                                            <div class="mb-4">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Back</button>
                                                  <button type="submit" class="btn btn-primary">Order Now</button>
                                            </div>
                                        </form>
                                    </div>
                            </div>
                        </div>
                        <div class="col-lg-5 order-lg-2">
                            <div class="card" style="width: auto;">
                                    <div class="card-body">
                                        <img src="public/photos/{{$products->img}}" class="rounded" style="width:320px" alt="...">
                                        <div class="row">
                                            <div class="col">
                                                <p class="card-text"><h5>{{$products->name_product}}<h5></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <p class="card-text"><b>Rp.{{$products->price}}</b></p>
                                            </div>
                                            <div class="col">
                                                <p class="card-text mb-3"><b>Stock :{{$products->quantity}} Pcs</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <p class="card-text">{{$products->detail_product}}</p>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-circle-1 bg-circle"></div>
            <div class="bg-circle-2 bg-circle"></div>
            <div class="bg-circle-3 bg-circle"></div>
            <div class="bg-circle-4 bg-circle"></div>
        </header>
        <!-- Content section 1-->
        <div class="masthead-content">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">

                </div>
            </div>
        </div>
       
        <!-- Content section 1-->
       
        <!-- Content section 3-->
    
         <!-- Content section 3-->
         
        <!-- Footer-->
        <footer class="py-custom bg-black">
            <div class="container"><h2 class="masthead-contact text-center p-2">KUPET PETSHOP</h2></div>
        </footer>
        <footer class="py-3 bg-black">
            
            <div class="container px-3"><p class="m-0 text-center text-white small">Copyright &copy; FakhriAz Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
