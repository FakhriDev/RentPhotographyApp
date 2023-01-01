@extends('layouts.app')
  
@section('content')

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_1 black_overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12">
                            <div class="slider_text text-center ">
                                <h3 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".1s" >
                                    Hai, Ini Yubimoto, Fotografer profesional <br>
                                    Siap Mengabadikan Momen kamu</h3>
                                <div class="video_service_btn wow fadeInDown" data-wow-duration="1s" data-wow-delay=".1s">
                                    <a href="/home" class="boxed-btn3">Pesan Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->
    
    <!-- gallery_area  -->
    <div class="gallery_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-7">
                    <div class="section_title text-center mb-50">
                        <h3>Portofolio Terbaik Saya</h3>
                        <p>album dibawah ini merupakan hasil karya saya.</p>
                            
                    </div>
                </div>
            </div>
        </div>
        
            </div>
        </div>
    </div>
    <!-- /gallery_area  -->
    <!-- team_area  -->
    <div class="team_area">
        <div class="container">
            <div class="border_bottom">
                <div class="row">
                    @foreach ($albums as $album)
                    <div class="col-xl-3 col-lg-3 col-md-3">
                        <a  href="/detailalbum{{$album['id']}}" class="hover ">
                        <div class="single_team">
                            <div class="team_thumb rounded">
                                <img src="public/Albums/{{$album->gambar}}" alt="">
                            </div>
                            <div class="team_info text-center">
                                <h3>{{$album->nama}}</h3>
                                <p>{{$album->kategori}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- /team_area  -->

   

    

    <!-- instragram_area  
    <div class="instragram_area">
        @foreach($photos as $photo)
        <div class="single_instagram">
            <img src="public/photos/{{$photo->img}}">
        </div>
        @endforeach
    </div>
    -->
    <!-- /instragram_area  -->
    @endsection  
    