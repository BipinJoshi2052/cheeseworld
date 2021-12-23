<!doctype html>
<html>

<head>
@include('includes.frontend.head')
</head>

<body onload="myFunction()">
    <div id="loading"></div>

    <!-- Whole Body Wrapper Starts -->
    <section id="@yield('page-wrapper')">

        @include('includes.frontend.header')
        
        @yield('content')

        @include( 'frontend-templates.footer.black-crazy.black-crazy' )

        @include('includes.frontend.footer')
        
    </section>
    <!-- Whole Body Wrapper Ends -->

    @include('includes.frontend.script')
</section>

@include('modal.modals')

</body>

</html>
