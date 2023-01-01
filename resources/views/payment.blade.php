@extends('layouts.dashuser')
  
@section('content')
            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-6">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <div class="ms-3">
                                <h3 class="mb-2">Pembayaran</h3>
                                <b class="mb-2">Lakukan Pembayaran dengan memilih satu metode pembayaran kemudian unggah bukti pembayaran.</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->

            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-md-6 col-xl-6">
                    <div class="bg-light text-center rounded p-4">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h6 class="mb-0">Upload Bukti Pembayaran</h6>
                        </div>
                        <form method="post" action="/paynow" enctype="multipart/form-data">
                            @csrf
                        <div class="form-floating mb-3">
                            <input type="text" name="id" class="form-control d-none" id="floatingInput"
                                value="{{$orders->id}}">
                            <input type="file" name="img" class="form-control" id="floatingInput"
                                value="">
                            <label for="floatingInput">Upload Bukti Pembayaran</label>
                        </div>
                        <div class="form-floating mt-3">
                                <button type="submit" class="btn btn-primary m-2">Upload</button>
                                <a href="{{ URL::previous() }}" class="btn btn-danger m-2">Kembali</a>
                        </div>
                    </form>
                    </div>
                </div>


                    <div class="col-sm-12 col-md-6 col-xl-6">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Metode Pembayaran</h6>

                            </div>
                            <b class="mb-0">Lakukan pembayaran sesuai harga paket yang dipilih 
                                dengan mengirimkan melalui salah satu no rekening dibawah ini.
                            </b><br>
                            <div class="d-flex justify-content-around">
                                <img class="img-thumbnail " src="img/gallery/bca.png" alt="">
                                
                            </div>
                            <div class="d-flex justify-content-center">
                                <b>Atas Nama : Yubimoto</b>
                            </div>
                            <div class="d-flex justify-content-center">
                                <b>Nomor Rekening : 6019 0052 4329 9455</b>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- Widgets End -->


            
        </div>
        <!-- Content End -->
        @endsection

       