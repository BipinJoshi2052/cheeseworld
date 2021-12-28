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
        <input type="hidden" name="lang_code" id="lang_code" value="en">
    </section>
    <!-- Whole Body Wrapper Ends -->

    @include('includes.frontend.script')
    </section>

    @include('modal.modals')
</body>

<script>
    $(document).ready(function(){
        $(document).on('keyup', '#search-product', function(){
            var key = $(this).val();
            if(key == ''){
                $('.modal-footer').attr('hidden', 'hidden');
            }else{
                $('.modal-footer').removeAttr('hidden');
                var url = "{{ route('search-product', ":key") }}";
                url = url.replace(':key', key);
                $.ajax({
                    url: url,
                    success: function(response){
                        console.log(response);
                        if(response){
                            var list = ''
                            $.each(response, function(i, e){
                                if(e.image_url){
                                    imageUrl = '{{ asset('') }}' + e.image_url.substring(1);
                                }else{
                                    imageUrl = '{{ asset('/public/images/no-image.png') }}';
                                }
                                list += '<li class="mb-2 p-1">' +
                                    '<a href="">' +
                                        '<div class="row">' +
                                            '<div class="col-2">' +
                                                '<div class="image"> <img src="' + imageUrl + '" class="img-fluid"></div>' +
                                            '</div>' +
                                            '<div class="col-10 m-auto">' +
                                                '<p class="m-0">' + e.title + '</p>' +
                                            '</div>' +
                                        '</div>' +
                                    '</a>' +
                                '</li>';
                            });
                            $('#search-result-list').html(list);
                        }
                    }
                })
            }
        });
    })
</script>

</html>
