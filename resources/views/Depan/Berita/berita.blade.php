<!DOCTYPE html>
<html lang="en">
<x-comdepan.head />

<body>
    <style>
        /*** Single Page Hero Header Start ***/
        .bg-breadcrumb {
            background: linear-gradient(rgba(19, 53, 123, 0.5), rgba(19, 53, 123, 0.5)),
            url('{{asset("Depan/img/guru.jpg")}}');
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            padding: 150px 0 50px 0;
        }

        .bg-breadcrumb .breadcrumb-item a {
            color: var(--bs-secondary) !important;
        }

        /* Small devices (landscape phones, 576px and up) */
        @media (min-width: 576px) {
            .my-responsive-text {
                font-size: 16px;
                /* Adjust this value as needed */
            }
        }

        /* Medium devices (tablets, 768px and up) */
        @media (min-width: 768px) {
            .my-responsive-text {
                font-size: 24px;
                /* Adjust this value as needed */
            }
        }

        /* Large devices (desktops, 992px and up) */
        @media (min-width: 992px) {
            .my-responsive-text {
                font-size: 32px;
                /* Adjust this value as needed */
            }
        }

        /* Extra large devices (large desktops, 1200px and up) */
        @media (min-width: 1200px) {
            .my-responsive-text {
                font-size: 40px;
                /* Adjust this value as needed */
            }
        }

    </style>
    <!-- Topbar Start -->
    <x-comdepan.topbar />
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <x-comdepan.navberita :link="$link" />
    <!-- Navbar & Hero End -->

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 my-responsive-text">Berita</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Beranda</a></li>
                    <li class="breadcrumb-item active text-white">Berita</li>

                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Blog Start -->
    <div class="container blog py-5">
        <div class="row g-4 justify-content-center">
            @foreach($berita as $iinf)
            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <div class="blog-img-inner">
                            <img class="img-fluid w-100 rounded-top card-img-top"
                                src="{{asset('GBERITA/'.$iinf->gberita)}}" alt="Image">
                            <div class="blog-icon">
                                <a href="{{route('bacaberita', $iinf->id)}}" class="my-auto"><i
                                        class="fas fa-link fa-2x text-white"></i></a>
                            </div>
                        </div>
                        <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-calendar-alt text-primary me-2"></i>{{$iinf->created_at}}</small>

                            <a href="#" class="btn-hover flex-fill text-center text-white py-2"><i
                                    class="fa fa-tag text-primary me-2"></i>{{$iinf->tag}}</a>
                        </div>
                    </div>
                    <div class="blog-content border border-top-0 rounded-bottom p-4">
                        <p class="mb-3">Posted By: Admin </p>
                        <a href="{{route('bacaberita', $iinf->id)}}"
                            class="h4">{{Str::limit($iinf->judul, 20, '....')}}</a>
                        <p class="my-3">{!! Str::limit($iinf->deskripsi, 20, '....') !!}</p>
                        <a href="{{route('bacaberita', $iinf->id)}}"
                            class="btn btn-primary rounded-pill py-2 px-4">Selengkapnya</a>
                    </div>
                </div>
            </div>
           
            @endforeach
            <div class="col-md-12 d-flex justify-content-center">
            {{$berita->links()}}
            </div>
        </div>
       
    </div>
    <!-- Blog End -->

    <!-- Footer Start -->
    <x-comdepan.footer />
    <!-- Footer End -->

    <!-- Copyright Start -->
    <x-comdepan.cc />
    </div>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i>
    </a>

    <x-comdepan.script />

</html>
