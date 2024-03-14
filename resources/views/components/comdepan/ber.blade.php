<div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Berita</h5>
                <h1 class="mb-4">Berita Terupdate</h1>
                <p class="mb-0">Berita Terupdate dari seputar Sekolah
                </p>
            </div>
            <div class="row justify-content-center">
                @foreach($ber as $iinf)
                <div class="col-md-4">
                    <div class="blog-item">
                        <div class="blog-img">
                            <div class="blog-img-inner">
                                <img class="img-fluid rounded-top card-img-top" src="{{asset('GBERITA/'.$iinf->gberita)}}" alt="Image" width="100px" height="100px">
                                <div class="blog-icon">
                                    <a href="{{route('bacaberita', $iinf->id)}}" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                                </div>
                            </div>
                            <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-calendar-alt text-primary me-2"></i>{{$iinf->created_at}}</small>
                                
                                <a href="#" class="btn-hover flex-fill text-center text-white py-2"><i
                                        class="fa fa-tag text-primary me-2"></i>{{$iinf->tag}}</a>
                            </div>
                        </div>
                        <div class="blog-content border border-top-0 rounded-bottom p-4">
                            <p class="mb-3">Posted By: Admin </p>
                            <a href="{{route('bacaberita', $iinf->id)}}" class="h4">{{Str::limit($iinf->judul, 20, '....')}}</a>
                            <p class="my-3">{!! Str::limit($iinf->deskripsi, 20, '....') !!}</p>
                            <a href="{{route('bacaberita', $iinf->id)}}" class="btn btn-primary rounded-pill py-2 px-4">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                @endforeach
             
            </div>
        </div>
    </div>