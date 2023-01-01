@extends('layouts.dashuser')
  
@section('content')
            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-6">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <h3 class="mb-2">Riwat Pemesanan</h3>
                            <div class="ms-3">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->

            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-md-12 col-xl-12">
                    <div class="bg-light text-center rounded p-4">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                        </div>
                        <div class="table-responsive">
                            <table class="table text-start align-middle table-bordered table-hover mb-0">
                                <thead>
                                    <tr class="text-dark">
                                        <th scope="col">Nama Pemesan</th>
                                        <th scope="col">Tanggal Acara</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Paket</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Bukti Pembayaran</th>
                                        
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($orders as $order)
                                    <tr>
                                        <td>{{$order->title}}</td>
                                        <td>{{$order->start}} - {{$order->end}}</td>
                                        <td>{{$order->alamat}}</td>
                                        <td>{{$order->package->nama}}</td>
                                        <td>Rp.{{$order->package->harga}}</td>
                                        <td>{{$order->status}}</td>
                                        @if(($order->transaksi) === null)
                                        <td>-</td>
                                        <td><a class="btn btn-sm btn-danger" href="/hapusorder{{$order['id']}}">Hapus</a> | <a class="btn btn-sm btn-warning" href="/editOrder{{$order['id']}}">Ubah</a> | <a class="btn btn-sm btn-success" href="/payment{{$order['id']}}">Bayar</a></td>
                                        @else
                                        <td><a  href="/public/transaksi/{{$order->transaksi}}">Bukti pembayaran</a></td>
                                        @endif
                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- Widgets End -->


            
        </div>
        <!-- Content End -->
        @endsection

       