@extends('layouts.dashboard')
  
@section('content')


             <!-- Sale & Revenue Start -->
             <div class="container-fluid pt-4 px-4">
                <div class="d-flex justify-content-start">
                    
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <h4 class="text-warning"><i class="fa fa-exclamation text-warning" aria-hidden="true"></i> Pilih Album untuk menambah Foto</h4>
                            
                            <div class="ms-3">
                                
                            </div>
                        </div>
                </div>
                
            </div>
            <!-- Sale & Revenue End -->

            <!-- Chart Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    @foreach ($albums as $album)
                    <div class="col-sm-12 col-xl-3">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-2"></h6>
                            <img src="public/Albums/{{$album->gambar}}" class="img-fluid rounded" alt="">
                            <div class="d-flex justify-content-center mt-3">
                                <h6 class="mb-3">{{$album->nama}}</h6>
                            </div> 
                            <div class="d-flex justify-content-center mb-1 ">
                                <b>{{$album->kategori}} </b>
                            </div>
                                <div class="d-flex justify-content-center">
                                    <a href="/addfoto{{$album['id']}}" type="button" class="btn  btn-primary m-3"><i class="fas fa-plus-alt fa-1x"> </i>Pilih</a>
                                </div>                                      
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
            <!-- Chart End -->


            
        </div>
        <!-- Content End -->

        @endsection