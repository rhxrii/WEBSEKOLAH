<x-dcore.head />
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <x-dcore.nav />
        <x-dcore.sidebar  :logo="$logo"/>
        <x-dcore.modal />
        @include('sweetalert::alert')
        <div class="main-content">
            <section class="section">
                <!-- MAIN OF CENTER CONTENT -->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <h4>Struktur Organisasi Sekolah</h4>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    @forelse($data as $sekolah)
                                    <div class="col-md-12 d-flex justify-content-center">
                                        @if($sekolah->foto == null)
                                        <img alt="img-fluid" class="card-img-top img-fluid"
                                            src="{{asset('GBERITA/noimage.jpg')}}">
                                        @else
                                        <img alt="img-fluid" class="card-img-top img-fluid"
                                            src="{{asset('PROFIL/'. $sekolah->foto)}}">
                                        @endif
                                    </div>

                                    @empty
                                    <div class="col-md-12 d-flex justify-content-center">

                                        <img alt="img-fluid" class="card-img-top img-fluid"
                                            src="{{asset('GBERITA/noimage.jpg')}}">

                                    </div>

                                    @endforelse
                                

                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h4>Upload / Edit Struktur Organisasi</h4>
                        </div>
                        <form action="{{route('uploadstruktur')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">

                                <div class="form-group">
                                    <label>Foto Struktur Organisasi</label>
                                    <input type="file" class="form-control-file" name="foto">
                                </div>

                                <div class="form-group">
                                    <input type="submit" class="btn btn-success btn-block"
                                        value="Upload / Update Struktur Organisasi">
                                </div>
                            </div>
                        </form>
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
