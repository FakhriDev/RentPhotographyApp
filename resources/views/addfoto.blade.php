@extends('layouts.dashboard')
  
@section('content')


             <!-- Sale & Revenue Start -->
             <div class="container-fluid pt-4 px-4">
                <div class="d-flex justify-content-start">
                    
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <h4 class="text-warning"><i class="fa fa-exclamation text-warning" aria-hidden="true"></i> Album {{$albums->nama}}</h4>
                            
                            <div class="ms-3">
                                
                            </div>
                        </div>
                </div>
                <div class="d-flex justify-content-end">
                    
                    <button class="bg-light rounded d-flex align-items-center justify-content-between p-4" data-bs-toggle="modal" data-bs-target="#myModal">
                        <h2> <i class="fas fa-pencil-alt fa-1x text-primary p-4"> </i>Tambah Foto</h2>
                    </button>
                    <!-- The Modal -->
                    <div class="modal" id="myModal">
                        <div class="modal-dialog modal-dialog-centered ">
                          <div class="modal-content">
                      
                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h4 class="modal-title">Ungah Foto</h4>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                      
                            <!-- Modal body -->
                            <div class="modal-body">
                              <form method="post" action="/savephotos" enctype="multipart/form-data">
                                @csrf
                            <h6 class="mb-4">File Foto</h6>
                            <div class="form-floating mb-3">
                                <input type="text" name="kategori" class="form-control d-none" id="floatingInput"
                                    value="{{$albums->id}}">
                                <label for="floatingInput"></label>
                            </div>
                            <div class="form-floating">
                                <div>
                                <input class="form-control form-control-lg" id="formFileLg" type="file" name="img">
                                </div>
                            </div>
                            
                        
                            </div>
                      
                            <!-- Modal footer -->
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-primary">Simpan</button>
                          </form>
                              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Kembali</button>
                            </div>
                      
                          </div>
                        </div>
                      </div>
                      
                      
            </div>
            </div>
            <!-- Sale & Revenue End -->

            <!-- Chart Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    @foreach ($photos as $photo)
                    <div class="col-sm-12 col-xl-3">
                        <div class="bg-light rounded h-100 p-4 mb-2">
                            <img src="public/Photos/{{$photo->img}}" class="img-fluid rounded" alt="">
                                <div class="d-flex justify-content-center">
                                    <a href="/dphoto{{$photo['id']}}" class="btn  btn-danger m-3"><i class="fa fa-trash-alt fa-1x"> </i> Hapus</a>
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