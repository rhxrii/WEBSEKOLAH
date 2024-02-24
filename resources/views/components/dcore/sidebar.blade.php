<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            @forelse($logo as $lg)
            <img src="{{asset('PROFIL/'. $lg->foto)}}" class="img-fluid" width="50px" height="50px">
            @empty
            <a href="index.html">Dashboard Sekolah</a>
            @endforelse
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">DS</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main Menu</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Berita</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-lin beep beep-sidebar" href="{{route('tambah_berita')}}">Tambah Berita</a></li>                
                <li><a class="nav-lin beep beep-sidebar" href="{{route('daftar_berita')}}">Daftar Berita</a></li>                      

            </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Informasi</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('tambah_informasi')}}">Tambah Informasi</a></li>
                <li><a class="nav-link" href="{{route('daftar_informasi')}}">Daftar Informasi</a></li>

              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-file-image"></i> <span>Galeri</span></a>
              <ul class="dropdown-menu">
                <li><a href="{{route('indexfoto')}}">Foto</a></li>
                <li><a href="{{route('indexvideo')}}">Video</a></li>
              </ul>
            </li>            
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-calendar"></i> <span>Agenda</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('tambahagenda')}}">Tambah Agenda</a></li>
                <li><a class="nav-link" href="{{route('daftaragenda')}}">Daftar Agenda</a></li>

              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-backward"></i> <span>Media KBM</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('indexmediadownload')}}">Media Download</a></li>
                <li><a class="nav-link" href="{{route('indexmedialink')}}">Media Link</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-info"></i> <span>Profil</span></a>
              <ul class="dropdown-menu">
              <li><a class="nav-link" href="{{route('indexlogo')}}">Logo Sekolah</a></li>
                <li><a class="nav-link" href="{{route('indexkepsek')}}">Profil Kepala Sekolah</a></li>
                <li><a class="nav-link" href="{{route('indexsekolah')}}">Profil Sekolah</a></li>
                <li><a class="nav-link" href="{{route('indexvisimisi')}}">Visi & Misi</a></li>
                <li><a class="nav-link" href="{{route('indexstrukturorganisasi')}}">Struktur Organisasi</a></li>
              </ul>
            </li>
          </ul>

          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> Documentation
            </a>
          </div>        
        </aside>
      </div>
