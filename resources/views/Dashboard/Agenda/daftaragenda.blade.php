<x-dcore.head />
@include('sweetalert::alert')
<style>
        .card-img-top {
            height: 20vw; /* adjust this value as needed */
            object-fit: cover;
        }
    </style>
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <x-dcore.nav />
        <x-dcore.sidebar  :logo="$logo"/>
       

        <div class="main-content">
            <section class="section">
                <!-- MAIN OF CENTER CONTENT -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Daftar Agenda</h4>
                            </div>
                            <div class="card-body">
                              <table class="table" id="tableberita">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>Judul Kegiatan</td>
                                        <td>Tanggal & Pukul</td>
                                        <td>Deskripsi</td>
                                        <td>Status</td>
                                        <td>Ubah Status</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach($data as $agenda)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$agenda->judul}}</td>
                                        <td>Tanggal : {{$agenda->tanggal}}, Waktu : {{$agenda->waktu}}</td>
                                        <td>{!! Str::limit($agenda->kegiatan, 100, '...') !!}</td>
                                        <td>
                                            @if($agenda->status == 'Akan')
                                                <p class="badge badge-warning">Akan Dilaksanakan</p>
                                            @elseif($agenda->status == 'Selesai')
                                            <p class="badge badge-success">Selesai</p>
                                            @elseif($agenda->status == 'Berjalan')
                                            <p class="badge badge-info">Sedang Dilaksanakan</p>
                                            @endif

                                        </td>
                                        <td>
                                            <a href="{{route('ubahsukses', $agenda->id)}}" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Selesai</a>
                                            <a href="{{route('ubahakan', $agenda->id)}}" class="btn btn-warning  btn-sm"><i class="fa fa-exclamation-triangle"></i> Akan</a>
                                            <a href="{{route('ubahsedang', $agenda->id)}}" class="btn btn-info  btn-sm"><i class="fa fa-info"></i> Sedang </a>

                                        </td>
                                        <td>
                                            <a href="{{route('hapusagenda', $agenda->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>
                                          

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                              </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- END OF CENTER CONTENT -->


            </section>
        </div>
        <x-dcore.footer />
    </div>
</div>
<x-dcore.script />
