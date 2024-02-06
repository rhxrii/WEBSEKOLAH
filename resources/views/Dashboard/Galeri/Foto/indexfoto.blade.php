<x-dcore.head />
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
        <x-dcore.modal />
        @include('sweetalert::alert')
        <div class="main-content">
            <section class="section">
                <!-- MAIN OF CENTER CONTENT -->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <h4>Daftar Foto</h4>
                            </div>


                            <div class="card-body">
                            <div class="row">
                                    @foreach($data as $fotos)
                                    <div class="col-md-6">

                                        <div class="card">
                                          
                                            <img alt="Card image cap" class="card-img-top img-fluid"
                                                src="{{asset('GFOTO/'. $fotos->gfoto)}}">
                                           
                                            <div class="card-block">
                                                <div class="container">
                                                    <h4 class="card-title mt-2">{{Str::limit($fotos->judul_foto, 15, '...')}}</h4>
                                                    <p class="card-text">Uploaded At :{{$fotos->created_at->format('D, d M Y - h:i:s')}}</p>
                                                    <p class="card-text">{!! Str::limit($fotos->deskripsi_foto, 100, "....")
                                                        !!}</p>
                                                </div>
                                            </div>
                                            <div class="card-body d-flex justify-content-center">
                                                <a href="{{route('hapusfoto', $fotos->id)}}" class="btn btn-danger ml-2" data-confirm-delete="true"><i class="fa fa-trash" ></i></a>

                                            </div>
                                        </div>


                                    </div>
                                    @endforeach
                                </div>
                                <div class="d-flex justify-content-center">

                            {{$data->links()}}
                            </div>
                            </div>
                            

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h4>Tambah Foto</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{route('uploadfoto')}}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <label>Foto</label>
                                        <input type="file" class="form-control-file" name="gfoto" id="">
                                    </div>
                                    <div class="form-group">
                                        <label>Judul Foto</label>
                                        <input type="text" class="form-control" placeholder="Judul Foto" name="judul_foto" id="">
                                    </div>
                                    <div class="form-group">
                                        <label>Deskripsi Foto</label>
                                        <textarea name="deskripsi_foto" class="form-control" id="" cols="30" rows="10"
                                            placeholder="Deskripsi Foto"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success btn-block" value="Upload Foto">
                                    </div>
                                </form>
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
