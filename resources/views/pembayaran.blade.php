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
					  <h2>Validasi dan Cara Pembayaran Pemesanan</h2>
					  <p class="excert">
						<h4>Tahap Pertama</h4>
						 Untuk melakukan Pembayaran Anda cukup membuka halaman Riwayat Pemesanan dan <b> Pilih Tombol Bayar</b> pada pesanan yang ingin anda bayar
						 <div class="quote-wrapper">
							<div class="quotes">
								<img class="img-fluid d-flex justify-content-center" src="img/blog/3.jpg" alt="">
							</div>
						 </div>
						 Kemudian Anda akan dialihkan pada halaman Pembayaran, lakukan pembayaran sesuai dengan harga yang telah dicantumpan pada informasi pemesanan anda melalui bank yang tersedia dibawah ini</b>.
						 <div class="quote-wrapper">
							<div class="quotes">
								<img class="img-fluid d-flex justify-content-center" src="img/blog/bca.jpg" alt="">
							</div>
						 </div>
						 Setelah itu dimohon untuk unggah/Upload bukti pembayaran pada formulir yang tersedia pada halaman pembayaran.
						 <div class="quote-wrapper">
							<div class="quotes">
								<img class="img-fluid d-flex justify-content-center" src="img/blog/validasi.jpg" alt="">
							</div>
						 </div>
						 jika anda sudah mengungah/upload bukti pembayaran maka pada status pesanan anda akan berubah menjadi <b> Proses </b> dan dimohon untuk menunggu konfirmasi pada pihak Yubimoto.
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