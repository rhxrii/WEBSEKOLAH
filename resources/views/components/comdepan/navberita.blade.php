<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="{{url('/')}}" class="navbar-brand p-0">
            <h1 class="m-0">SMKTI</h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                        <a href="{{url('/')}}" class="nav-item nav-link active">Beranda</a>
                        <a href="{{route('informasi')}}" class="nav-item nav-link">Informasi</a>
                        <a href="{{route('berita')}}" class="nav-item nav-link">Berita</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Galeri</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{route('galerifoto')}}" class="dropdown-item">Foto</a>
                                <a href="{{route('galerivideo')}}" class="dropdown-item">Video</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profil</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{route('sekolah')}}" class="dropdown-item">Sekolah</a>
                                <a href="{{route('kepsek')}}" class="dropdown-item">Kepala Sekolah</a>
                                <a href="{{route('visimisi')}}" class="dropdown-item">Visi Misi</a>
                                <a href="{{route('struktur')}}" class="dropdown-item">Struktur Organisasi</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Media KBM</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{route('agenda')}}" class="dropdown-item">Agenda</a>
                                <a href="{{route('download')}}" class="dropdown-item">Media Download</a>
                                @foreach($link as $lk)
                                <a href="{{$lk->link}}" class="dropdown-item">{{$lk->judul}}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <a href="https://ppdb.smkti.id" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Daftar Sekarang !</a>
            </div>
        </div>
    </nav>
</div>
