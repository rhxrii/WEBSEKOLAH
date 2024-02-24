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
                                <h4>Daftar Media Link</h4>
                            </div>

                            <div class="card-body">
                                <table class="table" id="tableberita">
                                    <thead>
                                        <tr>
                                            <td>No</td>
                                            <td>Judul</td>
                                            <td>Link</td>
                                            <td>Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       @php $no = 1; @endphp
                                       @foreach($data as $link)
                                       <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$link->judul}}</td>
                                            <td>{{$link->link}}</td>
                                            <td>
                                                <a href="{{route('hapuslink', $link->id)}}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Hapus</a>
                                            </td>
                                       </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h4>Tambah Media Link</h4>
                            </div>
                            <form action="{{route('uploadmlink')}}" method="POST">
                                @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Judul Media Link</label>
                                    <input type="text" class="form-control" name="judul"
                                        placeholder="Judul Media Download">
                                </div>
                                <div class="form-group">
                                    <label>Link</label>
                                  <input type="text" name="link" class="form-control" placeholder="Link / URL ">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success btn-block" value="Upload Media Link">
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
