@extends('layouts.dashboard')
  
@section('content')


             <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-4">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Pratinjau</h6>
                            <img src="public/Albums/{{$albums->gambar}}" class="img-fluid rounded" alt="">
                            <div class="d-flex justify-content-center mt-3">
                                <h6 class="mb-3">{{$albums->nama}}</h6>
                            </div> 
                            <div class="d-flex justify-content-center mb-1 ">
                                <b>{{$albums->kategori}} </b>
                            </div> 
                            
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Ubah Album</h6>
                            <form method="post" action="/update" enctype="multipart/form-data">
                                @csrf
                            <div class="form-floating mb-3">
                                <input type="text" name="id" class="form-control d-none" id="floatingInput"
                                    value="{{$albums->id}}">
                                <input type="text" name="nama" class="form-control" id="floatingInput"
                                    value="{{$albums->nama}}">
                                <label for="floatingInput">Nama Album</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" name="kategori" id="floatingSelect"
                                    aria-label="Floating label select example">
                                    <option value="Wedding">Wedding</option>
                                    <option value="Ulang Tahun">Ulang Tahun</option>
                                    <option value="Dokumentasi">Dokumentasi</option>
                                </select>
                                <label for="floatingSelect">Kategori Album</label>
                            </div>
                            <div class="form-floating">
                                <div>
                                <input class="form-control form-control-lg" id="formFileLg" type="file" name="img">
                                </div>
                            </div>
                            <div class="form-floating mt-3">
                                    <button type="submit" class="btn btn-primary m-2">Perbarui</button>
                                    <a href="{{ URL::previous() }}" class="btn btn-danger m-2">Kembali</a>
                            </div>
                            
                        </form>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- Form End -->


            
        </div>
        <!-- Content End -->

        @endsection