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
    <x-comdepan.navprofil :link="$link" />
    <!-- Navbar & Hero End -->

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 my-responsive-text">Struktur Organisasi</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Beranda</a></li>
                    <li class="breadcrumb-item active text-white">Profil</li>
                    <li class="breadcrumb-item active text-white">Struktur Organisasi</li>

                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Blog Start -->
    <div class="container blog py-5">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                @if($visimisi == Null)
                <img src="{{asset('GBERITA/noimage.jpg')}}" class="img-fluid rounded card-foto-top" alt="">
                @else
                <img src="{{asset('PROFIL/'. $visimisi->foto)}}" class="img-fluid rounded" alt="">

                @endif
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
