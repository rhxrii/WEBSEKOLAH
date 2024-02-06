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
                                <h4>Edit Berita</h4>
                            </div>
                            <form action="{{route('update_informasiadm', $datainformasi->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                           
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Gambar Informasi</label>
                                    <input type="file" name="ginformasi" class="form-control-file">
                                </div>
                                <div class="form-group">
                                    <label>Judul Informasi</label>
                                    <input type="text" name="judul_informasi" class="form-control"
                                        placeholder="Judul Informasi" value="{{$datainformasi->judul_informasi}}">
                                </div>
                                <div class="form-group">
                                    <label>Tag* ( Jika tidak ada pilih (-) )</label>
                                    <select name="tag_informasi" class="form-control">
                                        <option disabled selected value>Silahkan Pilih Tag</option>
                                        <option @if($datainformasi->tag_informasi == '-') selected @endif>-</option>
                                        @foreach($tagOut as $tagselect)
                                        <option value="{{$tagselect->tag_informasi}}" @if($datainformasi->tag_informasi == $tagselect->tag_informasi) selected @endif>{{$tagselect->tag_informasi}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control @error('deskripsi_informasi') is-invalid @enderror" id="content" placeholder="Enter the Description"
                                        rows="5" name="deskripsi_informasi">{{$datainformasi->deskripsi_informasi}}</textarea>
                                        @error('deskripsi_informasi')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success btn-block" value="Update Informasi">
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h4>Daftar Tag Informasi</h4>
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
                                            <td>{{$tag->tag_informasi}}</td>
                                           
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
