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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Tambah Kegiatan</h4>
                            </div>
                            <form action="{{route('uploadagenda')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="card-body">

                                    <div class="form-group">
                                        <label>Judul Kegiatan</label>
                                        <input type="text" name="judul" class="form-control"
                                            placeholder="Judul Kegiatan">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Kegiatan</label>
                                        <input type="date" name="tanggal" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Waktu Kegiatan (PM = MALAM, AM = SIANG)</label>
                                        <input type="time" name="waktu" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select name="status" class="form-control">
                                            <option disabled selected value>Silahkan Pilih Status</option>
                                            <option value="Akan">Akan</option>
                                            <option value="Selesai">Selesai</option>
                                            <option value="Berjalan">Berjalan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control @error('kegiatan') is-invalid @enderror"
                                            id="content" placeholder="Enter the Description" rows="5"
                                            name="kegiatan"></textarea>
                                        @error('kegiatan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success btn-block" value="Upload Kegiatan">
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
