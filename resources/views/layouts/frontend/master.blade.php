<!doctype html>
<html>

<head>
    @include('includes.frontend.head')
</head>

<body onload="myFunction()">
    <div id="loading"></div>
    <!-- Whole Body Wrapper Starts -->
    <section id="index-wrapper">
		{{-- @include('includes.frontend.content-custom-css') --}}
		@include('includes.frontend.header')

		@yield('content')
		
		@include('includes.frontend.footer')
	</section>
    {{-- @include('modal.quick-view')
    @include('modal.subscribe-content') --}}
</body>

</html>
