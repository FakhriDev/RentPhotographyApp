@extends('layouts.dashuser')
  
@section('content')
            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-6">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <div class="ms-3">
                                <h3 class="mb-2">Ubah Pesanan</h3>
                                <b class="mb-2">Sesuaikan Dengan Jadwal yang tersedia pada kalender Yubimoto.</b>
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
                            <h6 class="mb-0">Ubah Pesanan</h6>
                        </div>
                        <form method="post" action="/uporder" enctype="multipart/form-data">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" name="id" class="form-control d-none" id="floatingInput"
                                    value="{{$orders->id}}">
                                <input type="text" name="title" class="form-control" id="floatingInput"
                                    value="{{$orders->title}}">
                                <label for="floatingInput">Nama Pemesan</label>
                            </div>
                        <div class="form-floating mb-3">
                            <input type="number" name="notlp" class="form-control" id="floatingInput"
                                value="{{$orders->notlp}}">
                            <label for="floatingInput">Nomor Telepon</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" name="id_paket" id="floatingSelect"
                                aria-label="Floating label select example">
                                @foreach ($packages as $package)
                                <option value="{{$package->id}}">{{$package->nama}} Rp.{{$package->harga}}</option>
                                @endforeach
                            </select>
                            <label for="floatingSelect">Pilih Paket</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="datetime-local" name="start" class="form-control" id="floatingInput"
                                value="{{$orders->start}}">
                            <label for="floatingInput">Mulai Acara</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="datetime-local" name="end" class="form-control" id="floatingInput"
                                value="{{$orders->end}}">
                            <label for="floatingInput">Selesai Selesai</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea name="alamat" class="form-control" id="floatingInput">{{$orders->alamat}}</textarea>
                            <label for="floatingInput">Alamat Kegiatan</label>
                        </div>
                        <div class="form-floating mt-3">
                                <button type="submit" class="btn btn-primary m-2">Ubah Pesanan</button>
                                <a href="{{ URL::previous() }}" class="btn btn-danger m-2">Kembali</a>
                        </div>
                        
                    </form>
                    </div>
                </div>


                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Jadwal Yubimoto</h6>
                            </div>
                            <div id='full_calendar_events'></div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- Widgets End -->


            
        </div>
        <!-- Content End -->
        <script>
            $(document).ready(function () {
                var SITEURL = "{{ url('/') }}";
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var calendar = $('#full_calendar_events').fullCalendar({
                    editable: false,
                    editable: false,
                    events: SITEURL + "/editOrder",
                    displayEventTime: false,
                    timeFormat: {
                            agenda: 'H(:mm)' //h:mm{ - h:mm}'
                        },
                    eventRender: function (event, element, view) {
                        if (event.allDay === 'true') {
                            event.allDay = true;
                        } else {
                            event.allDay = false;
                        }
                    },
                    selectable: false,
                });
            });
        </script>
        @endsection

       