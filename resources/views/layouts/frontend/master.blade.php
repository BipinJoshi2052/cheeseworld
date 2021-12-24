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
        <input type="hidden" name="hf_base_url" id="hf_base_url" value="{{ url('/') }}">
        <input type="hidden" name="cart_url" id="cart_url" value="{{ route('cart-page') }}">
        <input type="hidden" name="currency_symbol" id="currency_symbol" value="{{ $_currency_symbol }}">
    </section>
    <!-- Whole Body Wrapper Ends -->

    @include('includes.frontend.script')
    </section>

    @include('modal.modals')
</body>

</html>
