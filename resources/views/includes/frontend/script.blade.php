<!-- 1st Jquery Link Starts-->
<script src="{{ asset('public/frontend/assets/jquery-3.5.1/jquery-3.5.1.js') }}"></script>
<!-- Jquery Link Ends-->

<!-- 2nd Popper Js Starts -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN " crossorigin="anonymous "></script>
<!-- Popper Js Ends -->

<!-- 3rd Bootstrap Js Link Starts -->
<script src="{{ asset('public/frontend/assets/bootstrap-4.3.1/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/frontend/assets/bootstrap-4.3.1/js/bootstrap.min.js.map') }}"></script>
<!-- Bootstrap Js Link Ends -->

<!-- Slick Js -->
<script src="{{ asset('public/frontend/assets/slick/slick.min.js') }}"></script>
<!-- Slick Js Ends-->

<!-- 1st Jquery Link Starts-->
<script src="{{ asset('public/frontend/assets/jquery-3.5.1/jquery-3.5.1.js') }}"></script>
<!-- Jquery Link Ends-->
<!-- 2nd Popper Js Starts -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<!-- Popper Js Ends -->
<!-- 3rd Bootstrap Js Link Starts -->
<script src="{{ asset('public/frontend/assets/bootstrap-4.3.1/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/frontend/assets/bootstrap-4.3.1/js/bootstrap.min.js.map') }}"></script>
<!-- Bootstrap Js Link Ends -->
<!-- Slick Js -->
<script src="{{ asset('public/frontend/assets/slick/slick.min.js') }}"></script>
<!-- Slick Js Ends-->

<!-- Custom Js Starts -->
<script src="{{ asset('public/frontend/assets/js/main.js') }}"></script>
<!-- Custom Js Ends -->
<!-- Toastr  starts-->
<script src="{{ URL::asset('public/frontend/js/toastr.min.js') }}"></script>
<!-- Toastr Ends -->

<script>
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-container",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
    @if (Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}";
        switch (type) {
        case 'info':
        toastr.info("{{ Session::get('message') }}");
        break;
    
        case 'warning':
        toastr.warning("{{ Session::get('message') }}");
        break;
    
        case 'success':
        toastr.success("{{ Session::get('message') }}");
        break;
    
        case 'error':
        toastr.error("{{ Session::get('message') }}");
        break;
        }
    @endif
</script>

@yield('script')