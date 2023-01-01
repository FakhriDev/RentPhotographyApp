@extends('layouts.dashboard')
  
@section('content')
            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-6">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Pemesanan</p>
                                <h6 class="mb-0">{{$cevents}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-6">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-book fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Album</p>
                                <h6 class="mb-0">{{$calbums}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->

            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-md-6 col-xl-8">
                    <div class="bg-light text-center rounded p-4">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h6 class="mb-0">Pesanan</h6>
                            <a href="/pesanan">Semua pesanan</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table text-start align-middle table-bordered table-hover mb-0">
                                <thead>
                                    <tr class="text-dark">
                                        <th scope="col">Nama Pemesan</th>
                                        <th scope="col">Tanggal Acara</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Paket</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($orders as $order)
                                    <tr>
                                        <td>{{$order->title}}</td>
                                        <td>{{$order->start}} - {{$order->end}}</td>
                                        <td>{{$order->alamat}}</td>
                                        <td>{{$order->package->nama}}</td>
                                        <td>{{$order->status}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <div class="col-sm-12 col-md-6 col-xl-4">
                    <div class="h-100 bg-light rounded p-4">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h6 class="mb-0">Jadwal Anda</h6>
                        </div>
                        <div id='full_calendar_events'></div>
                        
                    </div>
                </div>
                </div>
            </div>
            <!-- Widgets End -->


            
        </div>
        <!-- Content End -->
        @endsection

       