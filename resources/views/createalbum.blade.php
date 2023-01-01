@extends('layouts.dashboard')
  
@section('content')


             <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    
                   
                    <div class="col-sm-12 col-xl-12">
                        
                            <div class="bg-light rounded h-100 p-4">
                                <form method="post" action="/savealbums" enctype="multipart/form-data">
                                    @csrf
                                <h6 class="mb-4">Input Album</h6>
                                <div class="form-floating mb-3">
                                    <input type="text" name="nama" class="form-control" id="floatingInput"
                                        placeholder=" Naufal & Salsa">
                                    <label for="floatingInput">Nama Album</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" name="kategori" id="floatingSelect"
                                        aria-label="Floating label select example">
                                        <option selected>Open this select menu</option>
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
                                        <button type="submit" class="btn btn-primary m-2">Simpan</button>
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