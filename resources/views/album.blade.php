@extends('layouts.dashboard')
  
@section('content')


             <!-- Sale & Revenue Start -->
             <div class="container-fluid pt-4 px-4">
                <div class="d-flex justify-content-end">
                    
                        <a href="/createalbum" class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <h2> <i class="fas fa-pencil-alt fa-1x text-primary p-4"> </i>Tambah Album</h2>
                            
                            <div class="ms-3">
                                
                            </div>
                        </a>
                </div>
            </div>
            <!-- Sale & Revenue End -->

            <!-- Chart Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    @foreach ($albums as $album)
                    <div class="col-sm-12 col-xl-3">
                        <div class="bg-light rounded h-100 p-4">
                            <img src="public/Albums/{{$album->gambar}}" class="img-fluid rounded" alt="">
                            <div class="d-flex justify-content-center mt-3">
                                <h6 class="mb-3">{{$album->nama}}</h6>
                            </div> 
                            <div class="d-flex justify-content-center mb-1 ">
                                <b>{{$album->kategori}} </b>
                            </div> 
                                <div class="d-flex justify-content-center">
                                    <a href="/edit{{$album['id']}}" class="btn  btn-warning m-3"><i class="fas fa-pencil-alt fa-1x"> </i> Ubah</a>
                                    <a href="/dalbum{{$album['id']}}" class="btn  btn-danger m-3"><i class="fa fa-trash-alt fa-1x"> </i> Hapus</a>
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