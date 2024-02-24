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
                                <h4>Edit Berita</h4>
                            </div>
                            <form action="{{route('update_beritaadm', $databerita->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                           
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Gambar Berita</label>
                                    <input type="file" name="gambarberita" class="form-control-file">
                                </div>
                                <div class="form-group">
                                    <label>Judul Berita</label>
                                    <input type="text" name="judulberita" class="form-control"
                                        placeholder="Judul Berita" value="{{$databerita->judul}}">
                                </div>
                                <div class="form-group">
                                    <label>Tag* ( Jika tidak ada pilih (-) )</label>
                                    <select name="tag" class="form-control">
                                        <option disabled selected value>Silahkan Pilih Tag</option>
                                        <option @if($databerita->tag == '-') selected @endif>-</option>
                                        @foreach($tagOut as $tagselect)
                                        <option value="{{$tagselect->tag}}" @if($databerita->tag == $tagselect->tag) selected @endif>{{$tagselect->tag}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="content" placeholder="Enter the Description"
                                        rows="5" name="deskripsi">{{$databerita->deskripsi}}</textarea>
                                        @error('deskripsi')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success btn-block" value="Upload Berita,">
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h4>Daftar Tag Berita</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <table class="table">
                                        <tr>
                                            <td>No</td>
                                            <td>Tag</td>
                                            
                                        </tr>
                                        @php $no = 1; @endphp
                                        @foreach($tagOut as $tag)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$tag->tag}}</td>
                                           
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
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
