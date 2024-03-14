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
    <x-comdepan.navgaleri :link="$link" />
    <!-- Navbar & Hero End -->

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 my-responsive-text">Galeri</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Beranda</a></li>
                    <li class="breadcrumb-item active text-white">Galeri</li>
                    <li class="breadcrumb-item active text-white">Foto</li>

                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Blog Start -->
    <div class="container-fluid gallery py-5 my-5">
        <div class="tab-class text-center">
           
            <div class="tab-content">
                <div id="GalleryTab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-2">
                        @foreach($foto as $gf)
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="gallery-item h-100">
                                <img src="{{asset('GFOTO/'. $gf->gfoto)}}" class="img-fluid rounded card-img-top" alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">{{$gf->judul_foto}}</h5>
                                        <h5 class="text-white text-uppercase mb-2">{{$gf->created_at}}</h5>

                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{asset('GFOTO/'. $gf->gfoto)}}" data-lightbox="gallery-1" class="my-auto"><i
                                            class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="col-md-12 d-flex justify-content-center mt-3">
                            {{$foto->links()}}
                        </div>
                    </div>
                </div>
               
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
