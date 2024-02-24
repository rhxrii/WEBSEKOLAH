<x-dcore.head />
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <x-dcore.nav />
      <x-dcore.sidebar  :logo="$logo"/>
      <div class="main-content">
        <section class="section">
        <!-- MAIN OF CENTER CONTENT -->
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4>Lihat Berita {{$data->judul}}</h4>
                </div>
                <div class="card-body">
                 <center>
                    <h3>{{$data->judul}}</h3>
                    <h6>Tag : {{$data->tag}}</h6>
                    <h6>Uploaded At : {{$data->created_at->format('D, d M Y')}}</h6>

                    @if($data->gberita == null)
                    <img src="{{asset('GBERITA/noimage.jpg')}}" class="img-fluid mb-4" alt="">
                    @else
                    <img src="{{asset('GBERITA/'. $data->gberita)}}" class="img-fluid mb-4" alt="">
                    @endif
                 </center>
                 {!! $data->deskripsi !!}
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