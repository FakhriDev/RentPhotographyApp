@extends('layouts.app')
  
@section('content')
<div class="bradcam_area breadcam_bg_2 black_overlay">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="bradcam_text text-center">
					<h3>Panduan Yubimoto</h3>
				</div>
			</div>
		</div>
	</div>
</div>
<section class="blog_area section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 posts-list">
				<div class="single-post">
				   <div class="blog_details">
					  <h2>Cara Melakukan Pemesanan</h2>
					  <p class="excert">
						<h4>Tahap Pertama</h4>
						 Tahap pertama yaitu dengan menekan Pesanan pada Halaman Home seperti gambar dibawah ini
						 <div class="quote-wrapper">
							<div class="quotes">
								<img class="img-fluid d-flex justify-content-center" src="img/blog/1.jpg" alt="">
							</div>
						 </div>
						 Kemudian Anda akan dialihkan pada halaman Pemesan, dan lakukan pengisian formulir pemesanan pada yang tersedia pada halaman tersebut
						 sesuaikan dengan jadwal yang tersedia pada saat anda memesan jika seluruh form terisi dengan benar lalu tekan Tombol <b>Pesan Sekarang!</b>.
						 <div class="quote-wrapper">
							<div class="quotes">
								<img class="img-fluid d-flex justify-content-center" src="img/blog/2.jpg" alt="">
							</div>
						 </div>
						 jika anda sudah melakukan pemesanan, pesanan anda akan terekam pada sistem dan anda dapat melihat pesanan anda pada halaman Riwayat Pemesanan.
						 <div class="quote-wrapper">
							<div class="quotes">
								<img class="img-fluid d-flex justify-content-center" src="img/blog/3.jpg" alt="">
							</div>
						 </div>
						 pada halaman ini anda dapat melihat status pemesanan yang anda lakukan dan tunggu hingga pemesanan anda distujui oleh pihak Yubimoto.
						 <div class="quote-wrapper">
							<div class="quotes">
								<img class="img-fluid d-flex justify-content-center" src="img/blog/4.jpg" alt="">
							</div>
						 </div>
					  </p>
				   </div>
				</div>
				
				
				
			 </div>
			<div class="col-lg-4">
				<div class="blog_right_sidebar">
					<aside class="single_sidebar_widget post_category_widget">
						<h4 class="widget_title">Panduan Aplikasi Yubimoto</h4>
						<ul class="unordered-list">
							<li><b>Akun</b>
								<ul>
									<a href="/pregistrasi" class="d-flex"><p>Cara melakukan Registari Akun</p></a>
								</ul>
							</li>
							<li><b>Tata cara Pemesanan</b>
								<ul>
									<a href="/panduan" class="d-flex"><p>Cara melakukan pemesanan</p></a>
									<a href="/pembayaran" class="d-flex"><p>Validasi dan Cara Pembayaran Pemesanan</p></a>
									<a href="/pbatal" class="d-flex"><p>Pembatalan Pemesanan</p></a>
								</ul>
							</li>
						</ul>
					</aside>
				</div>
			</div>
		</div>
	</div>
</section>

	

	<!-- Start Align Area -->
	<div class="whole-wrap">
		<div class="container box_1170">
			
			<div class="section-top-border">
				<div class="row">
					<div class="col-md-4 mt-sm-30">
						
					</div>
					<div class="col-md-4 mt-sm-30">
						
					</div>
				</div>
			</div>
			
		</div>
	</div>
	<!-- End Align Area -->

    @endsection