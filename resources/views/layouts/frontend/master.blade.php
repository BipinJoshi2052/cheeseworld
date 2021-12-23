{{-- {{ dd(get_defined_vars()) }} --}}
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

        @include('includes.frontend.footer')

    </section>
    <!-- Whole Body Wrapper Ends -->

    @include('includes.frontend.foot')
    </section>

    @include('modal.modals')
</body>

</html>
