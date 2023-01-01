@extends('layouts.app')
  
@section('content')

    <!-- bradcam_area  -->
    <div class="bradcam_area black_overlay" style="background-image: url('public/Albums/{{$albums->gambar}}');">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bradcam_text text-center">
                            <h3>Album {{$albums->nama}}</h3>
                            <h3>( {{$albums->kategori}} )</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / bradcam_area  -->
    <!-- gallery_area  -->
    <div class="gallery_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-7">
                    <div class="section_title text-center mb-50">
                        <h3>My world class photography</h3>
                        <p>Whether you’re about to create a website for the first time, or you’re looking 
                            for a theme that provides advanced capabilities, we have got them in 
                            Blacksilver theme.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="row no-gutters ">
                @foreach($photos as $photo)
                <div class="col-xl-4 col-md-4">
                    <div class="single_photography">
                        <div class="thumb">
                            <img src="public/Photos/{{$photo->img}}" alt="">
                        </div>
                        
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>
    <!-- /gallery_area  -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-7">
                <div class="section_title text-center mb-50">
                </div>
            </div>
        </div>
    </div>
    

    @endsection