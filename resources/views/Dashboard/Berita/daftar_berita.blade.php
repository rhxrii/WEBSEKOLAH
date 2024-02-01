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
        <x-dcore.sidebar />
       

        <div class="main-content">
            <section class="section">
                <!-- MAIN OF CENTER CONTENT -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Daftar Berita</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    @foreach($daftarberita as $berita)
                                    <div class="col-md-4">

                                        <div class="card">
                                            @if($berita->gberita == null)
                                            <img alt="Card image cap" class="card-img-top img-fluid"
                                                src="{{asset('GBERITA/noimage.jpg')}}">
                                            @else
                                            <img alt="Card image cap" class="card-img-top img-fluid"
                                                src="{{asset('GBERITA/'. $berita->gberita)}}">
                                            @endif
                                            <div class="card-block">
                                                <div class="container">
                                                    <h4 class="card-title mt-2">{{Str::limit($berita->judul, 15, '...')}}</h4>
                                                    <p class="card-text">Tag : {{$berita->tag}} - Uploaded At :
                                                        {{$berita->created_at->format('D, d M Y - h:i:s')}}</p>
                                                    <p class="card-text">{!! Str::limit($berita->deskripsi, 100, "....")
                                                        !!}</p>
                                                </div>
                                            </div>
                                            <div class="card-body d-flex justify-content-center">
                                                <a href="{{route('lihat_beritaadm', $berita->id)}}" class="btn btn-info ml-2"><i class="fa fa-eye"></i></a>
                                                <a href="{{route('hapus_beritaadm', $berita->id)}}" class="btn btn-danger ml-2" data-confirm-delete="true"><i class="fa fa-trash" ></i></a>
                                                <a href="{{route('edit_beritaadm', $berita->id)}}" class="btn btn-warning ml-2"><i class="fa fa-edit"></i></a>

                                            </div>
                                        </div>


                                    </div>
                                    @endforeach
                                </div>
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
