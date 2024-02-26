
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('Depan/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('Depan/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('Depan/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('Depan/lib/lightbox/js/lightbox.min.js')}}"></script>


    <!-- Template Javascript -->
    <script src="{{asset('Depan/js/main.js')}}"></script>
    <script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://smkti.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>

<script>
    $(document).ready( function () {
    $('#tableberita').DataTable();
} );
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
</body>