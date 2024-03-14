<div class="container-fluid gallery py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Informasi</h5>
            <h1 class="mb-4">Informasi Terupdate</h1>
            <p class="mb-0">Informasi Terupdate dari seputar Sekolah
            </p>
        </div>
        <div class="tab-class text-center">
           
            <div class="tab-content">
                <div id="GalleryTab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-2">
                        @foreach($info as $gf)
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="gallery-item h-100">
                                <img src="{{asset('GINFORMASI/'.$gf->ginformasi)}}" class="img-fluid rounded card-img-top" alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">{{Str::limit($gf->judul_informasi, 20, '....')}}</h5>
                                        <h5 class="text-white text-uppercase mb-2">{{$gf->created_at->diffForHumans()}}</h5>

                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{route('bacainformasi', $gf->id)}}" ><i
                                            class="fas fa-eye fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</div>
