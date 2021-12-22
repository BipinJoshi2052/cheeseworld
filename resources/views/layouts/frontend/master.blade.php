<!doctype html>
<html>

<head>
@include('includes.frontend.head')
</head>

<body onload="myFunction()">
    <div id="loading"></div>

    @yield('content')
    
    @include('includes.frontend.footer')
</section>

@include('modal.modals')

</body>

</html>
