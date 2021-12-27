@if (Cart::count() > 0)
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title m-auto" id="navcartlabel"> <span class="mr-2"><i class="fa fa-opencart"
                        aria-hidden="true"></i></span> Items List</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <table class="w-100">
                <tbody>
                    @foreach (Cart::items() as $index => $items)
                        <tr>
                            <td class="pr-4 py-3">
                                <?php
                                if ($items->img_src) {
                                    $_cart_product_image = get_image_url($items->img_src);
                                    $_cart_alt = 'product';
                                } else {
                                    $_cart_product_image = default_placeholder_img_src();
                                    $_cart_alt = 'no_image';
                                }
                                ?>
                                <img src="{{ $_cart_product_image }}" class="img-fluid" alt="{{ $_cart_alt }}">
                            </td>
                            <td class="px-4 py-3">
                                <a href="{{ route('details-page', get_product_slug($items->id)) }}">
                                    <div class="head font-weight-bold">
                                        {!! $items->name !!} x <span
                                            class="cart-quantity">{{ $items->quantity }}</span>
                                    </div>
                                    <div class="price">
                                        {!! price_html(get_product_price_html_by_filter($items->price), get_frontend_selected_currency()) !!}
                                    </div>
                                </a>
                            </td>
                            <td class="px-4 py-3">
                                <a href="{{ route('removed-item-from-cart', $index) }}" class="btn">
                                    <span><i class="fa fa-trash" aria-hidden="true"></i></span></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="modal-footer flex-column">
            <div class="total-amount pb-3 text-center d-block">
                Total : <span class="font-weight-bold">{!! price_html(get_product_price_html_by_filter(Cart::getTotal())) !!}</span>
            </div>
            <div class="d-flex justify-content-around align-items-center w-100">
                <button type="button" onclick="location.href='{{ route('cart-page') }}'" class="effect m-auto">View
                    Cart</button>
                <button type="button" onclick="location.href = '{{ route('checkout-page') }}'"
                    class="effect m-auto">Proceed Checkout</button>
            </div>
        </div>
    </div>
@else
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="empty-cart-js">{!! trans('frontend.empty_cart_msg') !!}</h5>
        </div>
    </div>
@endif
