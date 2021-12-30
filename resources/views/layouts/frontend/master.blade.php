{{-- {{ dd(get_defined_vars()) }} --}}
<!doctype html>
<html>

<head>
    @include('includes.frontend.head')
</head>
<style>
.pagination {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    padding-left: 0;
    list-style: none;
    justify-content: center;
    align-items: center;
    border-radius: 0.25rem;
}
.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color 0.3s;

}
.pagination li:hover
{
transform: unset !important;
}
.page-item.active .page-link {
    z-index: 1;
    color: #fff;
    background-color: var(--third-color);
    border-color: var(--third-color);
    border: 2px solid var(--third-color);


    }
    .page-item.active .page-link:focus {
        outline: 0;
        box-shadow: unset !important;
    }

    #shadow-layer {
  position: fixed;
  min-height: 100%;
  width: 100%;
  top: 0;
  left: 0;
  background: rgba(67, 87, 121, 0.6);
  cursor: pointer;
  z-index:999;
  display: none;
}

  .esewa-payment-loader{
  width: 300px;
  height: 100px;
  background: #f7f7f7;
  position: fixed;
  top:50%;
  left: 50%;
  margin-top: -75px;
  margin-left: -150px;
  display: none;
  text-align: center;
  z-index: 9999;
}

.esewa-payment-loader img, .esewa-payment-loader .esewa_ordering_msg{
  display: inline-block;
  vertical-align: middle;
}

.esewa-payment-loader .esewa_ordering_msg{
  font-size: 12px;
  color: #3d4246;
  font-weight: bold;

}
  
</style>
<body onload="myFunction()">
    <div id="loading"></div>
    <div id="shadow-layer"></div>
    <div class="esewa-payment-loader">
        <img src="{{ asset('public/images/ajax-loader.gif') }}" id="img-load" />
        <div class="esewa_ordering_msg">Your order is submitting</div>
    </div>
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
