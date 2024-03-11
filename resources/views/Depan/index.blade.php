<!DOCTYPE html>
<html lang="en">
<x-comdepan.head />

<body>

    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <x-comdepan.topbar />
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <x-comdepan.navbar :link="$link"/>
    <!-- Navbar & Hero End -->

    <!-- About Start -->
    <x-comdepan.about :tentang="$tentang"/>
    <!-- About End -->

    <!-- Services Start -->
    <x-comdepan.service />
    <!-- Services End -->

    <!-- Blog Start -->
    <x-comdepan.informasi :info="$info"/>
    <!-- Blog End -->
    <!-- <x-comdepan.berita :berita="$berita"/> -->
    <x-comdepan.informasi :info="$info"/>

    <!-- Gallery Start -->
    <x-comdepan.galery :foto="$foto"/>
    <!-- Gallery End -->

    <!-- Testimonial Start -->
    <x-comdepan.testi />
    <!-- Testimonial End -->

    <!-- Subscribe Start -->
    <x-comdepan.subs />
    <!-- Subscribe End -->

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
