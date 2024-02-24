        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0"><!--<i class="fa fa-map-marker-alt me-3"></i>-->SMKTI</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="" class="nav-item nav-link active">Beranda</a>
                        <a href="" class="nav-item nav-link">Informasi</a>
                        <a href="" class="nav-item nav-link">Berita</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profil</a>
                            <div class="dropdown-menu m-0">
                                <a href="" class="dropdown-item">Sekolah</a>
                                <a href="" class="dropdown-item">Kepala Sekolah</a>
                                <a href="" class="dropdown-item">Visi Misi</a>
                                <a href="" class="dropdown-item">Struktur Organisasi</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Media KBM</a>
                            <div class="dropdown-menu m-0">
                                <a href="" class="dropdown-item">Agenda</a>
                                <a href="" class="dropdown-item">Media Download</a>
                                @foreach($link as $lk)
                                <a href="{{$lk->link}}" class="dropdown-item">{{$lk->judul}}</a>
                                @endforeach
                            </div>
                        </div>
                        <a href="" class="nav-item nav-link">Kontak</a>
                    </div>
                    <a href="" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Daftar Sekarang !</a>
                </div>
            </nav>

            <!-- Carousel Start -->
            <div class="carousel-header">
                <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="{{asset('Depan/img/guru.jpg')}}" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 900px;">
                                    <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Selamat Datang !</h4>
                                    <h3 class="display-3 text-capitalize text-white mb-4">SMK Telematika Indramayu</h3>
                                    <p class="mb-5 fs-5"><i>" Pilihan Cerdas Generasi Emas "</i>
                                    </p>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5" href="#">Jelajahi Sekarang !</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon btn bg-primary" aria-hidden="false"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                        <span class="carousel-control-next-icon btn bg-primary" aria-hidden="false"></span>
                        <span class="visually-hidden">Next</span>
                    </button> -->
                </div>
            </div>
            <!-- Carousel End -->
        </div>
       