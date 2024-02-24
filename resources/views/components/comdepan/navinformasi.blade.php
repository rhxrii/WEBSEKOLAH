<div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0">SMKTI</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="" class="nav-item nav-link">Beranda</a>
                        <a href="" class="nav-item nav-link active">Informasi</a>
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
                                @endforeach                            </div>
                        </div>
                        <a href="" class="nav-item nav-link">Kontak</a>
                    </div>
                    <a href="" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Daftar Sekarang !</a>
                </div>
            </nav>
        </div>