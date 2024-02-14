<x-dcore.head />
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
                                <h4>Daftar Media Download</h4>
                            </div>

                            <div class="card-body">
                                <table class="table" id="tableberita">
                                    <thead>
                                        <tr>
                                            <td>No</td>
                                            <td>Judul File</td>
                                            <td>Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @foreach($data as $down)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$down->judul}}</td>
                                            <td>
                                                <a href="{{route('downloadfile', $down->id)}}" class="btn btn-sm btn-success"><i class="fa fa-download"></i> Download File</a>
                                                <a href="{{route('hapusdownloadfile', $down->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</a>
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
                                <h4>Tambah Media Download</h4>
                            </div>
                            <form action="{{route('uploadmdownload')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Judul Media</label>
                                    <input type="text" class="form-control" name="judul"
                                        placeholder="Judul Media Download">
                                </div>
                                <div class="form-group">
                                    <label>File Media ( PDF / DOCX, DOC / XLS, XLSX / PPT, PPTX / JPG, JPEG, PNG )</label>
                                    <input type="file" class="form-control-file @error('filedownload') is-invalid @enderror" name="filedownload">
                                    @error('filedownload')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success btn-block" value="Upload File">
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
