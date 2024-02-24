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
                                <h4>Profil Kepala Sekolah</h4>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    @forelse($data as $kepsek)
                                    <div class="col-md-12 d-flex justify-content-center">
                                        @if($kepsek->foto == null)
                                        <img alt="img-fluid" class="card-img-top img-fluid"
                                            src="{{asset('GBERITA/noimage.jpg')}}">
                                        @else
                                        <img alt="img-fluid" class="card-img-top img-fluid"
                                            src="{{asset('PROFIL/'. $kepsek->foto)}}">
                                        @endif
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mt-3 d-flex justify-content-center">
                                            <h3>{{$kepsek->nama ?? 'Belum ada data'}}</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mt-3 d-flex justify-content-center">
                                            <h5>{{$kepsek->sambutan ?? 'Belum ada data'}}</h5>
                                        </div>
                                    </div>
                                    @empty
                                    <div class="col-md-12 d-flex justify-content-center">
                                      
                                        <img alt="img-fluid" class="card-img-top img-fluid"
                                            src="{{asset('GBERITA/noimage.jpg')}}">
                                       
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mt-3 d-flex justify-content-center">
                                            <h3>{{$kepsek->nama ?? 'Belum ada data'}}</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mt-3 d-flex justify-content-center">
                                            <h5>{{$kepsek->sambutan ?? 'Belum ada data'}}</h5>
                                        </div>
                                    </div>
                                    @endforelse
                                </div>


                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h4>Upload / Edit Kepala Sekolah</h4>
                            </div>
                            <form action="{{route('uploadkepsek')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">

                                    <div class="form-group">
                                        <label>Foto Kepala Sekolah</label>
                                        <input type="file" class="form-control-file" name="foto"
                                            placeholder="Judul Media Download">
                                    </div>
                                   
                                    <div class="form-group">
                                        <label>Nama Lengkap & Gelar ( Contoh Adit, S.Pd. )</label>
                                        <input type="text" name="nama" class="form-control"
                                            placeholder="Nama lengkap,Gelar" value="{{$form->nama ?? ''}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Sambutan Kepala Sekolah</label>
                                        <textarea name="sambutan" class="form-control" id="" cols="30"
                                            rows="10">{{$form->sambutan ?? ''}}</textarea>
                                    </div>
                                   
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success btn-block"
                                            value="Upload / Update Profil">
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
