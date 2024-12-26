</div>
<!--**********************************
    Content body end
***********************************-->
<!--**********************************
            Footer start
        ***********************************-->
{{-- <div class="footer">
    <div class="copyright">
        <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">DexignZone</a> 2023
        </p>
    </div>
</div> --}}
<!--**********************************
            Footer end
        ***********************************-->

<!--**********************************
           Support ticket button start
        ***********************************-->

<!--**********************************
           Support ticket button end
        ***********************************-->


</div>
<!--**********************************
        Main wrapper end
    ***********************************-->

<!--**********************************
        Scripts
    ***********************************-->
<!-- Required vendors -->
<script src="{{ asset('backend/vendor/global/global.min.js')}}"></script>
<script src="{{ asset('backend/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
<script src="{{ asset('backend/vendor/chart-js/chart.bundle.min.js')}}"></script>
<script src="{{ asset('backend/vendor/owl-carousel/owl.carousel.js')}}"></script>
<script src="{{ asset('backend/js/custom.min.js')}}"></script>
<script src="{{ asset('backend/js/deznav-init.js')}}"></script>
<script src="{{ asset('backend/js/demo.js')}}"></script>
{{-- <script src="{{ asset('backend/js/styleSwitcher.js')}}"></script> --}}


<!-- Dashboard 1 -->
<script src="{{ asset('backend/js/dashboard/my-wallet.js')}}"></script>

<!-- Chart piety plugin files -->
<script src="{{ asset('backend/vendor/peity/jquery.peity.min.js')}}"></script>

<!-- Apex Chart -->
<script src="{{ asset('backend/vendor/apexchart/apexchart.js')}}"></script>

<!-- Dashboard 1 -->
<script src="{{ asset('backend/js/dashboard/dashboard-1.js')}}"></script>
{{-- <script src="{{ asset('backend/js/styleSwitcher.js')}}"></script> --}}
<script src="{{ asset('backend/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('backend/js/plugins-init/datatables.init.js')}}"></script>
<script>
    function carouselReview() {
        /*  testimonial one function by = owl.carousel.js */
        /*  testimonial one function by = owl.carousel.js */
        jQuery('.testimonial-one').owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            nav: false,
            center: true,
            dots: false,
            navText: ['<i class="fas fa-caret-left"></i>', '<i class="fas fa-caret-right"></i>'],
            responsive: {
                0: {
                    items: 2
                },
                400: {
                    items: 3
                },
                700: {
                    items: 5
                },
                991: {
                    items: 6
                },

                1200: {
                    items: 4
                },
                1600: {
                    items: 5
                }
            }
        })
    }

    jQuery(window).on('load', function() {
        setTimeout(function() {
            carouselReview();
        }, 1000);
    });
</script>
</body>

<!-- Mirrored from mophy.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jul 2023 12:03:19 GMT -->

</html>
