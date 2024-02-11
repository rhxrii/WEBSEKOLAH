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
                                <h4>Daftar Video</h4>
                            </div>


                            <div class="card-body">
                               
                            <div class="row">
                                @foreach($dt as $vid)
                                    <div class="col-md-6">
                                        @php
                                        $data = $vid->kodevideo;
                                        $video = Youtube::getVideoInfo($data);
                                        $tb = $video->snippet->thumbnails->high;
                                        $judul = $video->snippet->title;
                                        $channel = $video->snippet->channelTitle;
                                        $deskripsi = $video->snippet->description;
                                        @endphp
                                        <div class="card">
                                          
                                            <img alt="Card image cap" class="card-img-top img-fluid"
                                                src="{{$tb->url}}">
                                           
                                            <div class="card-block">
                                                <div class="container">
                                                    <h4 class="card-title mt-2">{{ Str::limit($judul, 30, '...')}}</h4>
                                                    <p class="card-text">Channel : {{$channel}}</p>
                                                    <p class="card-text">{{ Str::limit($deskripsi, 100, '...')}}</p>
                                                </div>
                                            </div>
                                            <div class="card-body d-flex justify-content-center">
                                                <a href="" class="btn btn-danger ml-2" data-confirm-delete="true"><i class="fa fa-trash" ></i></a>

                                            </div>
                                        </div>


                                    </div>
                                    @endforeach
                                </div>
                                <div class="d-flex justify-content-center">
                                    {{$dt->links()}}
                            </div>
                            </div>
                            

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h4>Tambah Video</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{route('uploadvideo')}}" method="POST">
                                    @csrf

                                    <div class="form-group">
                                        <label>Kode Link Youtube</label>
                                        <input type="text" class="form-control" placeholder="Kode Video Youtube" name="kodevideo" id="">
                                    </div>
                                  
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success btn-block" value="Upload Video">
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
