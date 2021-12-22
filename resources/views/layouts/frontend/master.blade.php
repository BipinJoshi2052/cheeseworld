<!doctype html>
<html>

<head>
    @include('includes.frontend.head')
</head>

<body onload="myFunction()">
    <div id="loading"></div>
    {{-- @include('includes.frontend.content-custom-css') --}}

		@yield('content')
		
		@include('includes.frontend.footer')
	</section>
    @include('modal.modals')
    {{-- @include('modal.subscribe-content') --}}
</body>

</html>
