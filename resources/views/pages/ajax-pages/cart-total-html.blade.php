{{-- Working on shipping cost --}}
<?php 
    if((!$shipping_data['shipping_option']['enable_shipping']) || ($shipping_data['shipping_option']['enable_shipping'] && !$shipping_data['flat_rate']['enable_option'] && !$shipping_data['free_shipping']['enable_option'] && !$shipping_data['local_delivery']['enable_option'])){
        $cart_shipping_cost = "Free";
    } elseif (($shipping_data['shipping_option']['enable_shipping']) && ($shipping_data['flat_rate']['enable_option'] || $shipping_data['free_shipping']['enable_option'] || $shipping_data['local_delivery']['enable_option'])) {
        $str = '';
        if($shipping_data['shipping_option']['display_mode'] == 'radio_buttons'){
            if($shipping_data['flat_rate']['enable_option'] && $shipping_data['flat_rate']['method_cost']){
                if(Cart::getShippingMethod()['shipping_method'] == 'flat_rate'){
                    $str = Lang::get('frontend.flat_rate');
                    $checked = "checked";
                    $cart_shipping_cost = price_html(get_product_price_html_by_filter($shipping_data['flat_rate']['method_cost']), get_frontend_selected_currency());
                } else {
                    $str = Lang::get('frontend.flat_rate');
                    $checked = "";
                    $cart_shipping_cost = price_html(get_product_price_html_by_filter($shipping_data['flat_rate']['method_cost']), get_frontend_selected_currency());
                }
            }

            if($shipping_data['free_shipping']['enable_option'] && (Cart::getSubTotalAndTax() <= $shipping_data['free_shipping']['order_amount'])){
                if(Cart::getShippingMethod()['shipping_method'] == 'free_shipping'){
                    $str = Lang::get('frontend.free_shipping');
                    $cart_shipping_cost = Lang::get('frontend.free_shipping');
                    $checked = "checked";
                } else {
                    $str = Lang::get('frontend.free_shipping');
                    $cart_shipping_cost = Lang::get('frontend.free_shipping');
                    $checked = "";
                }
            }

            if($shipping_data['local_delivery']['enable_option'] && $shipping_data['local_delivery']['fee_type'] === 'fixed_amount' && $shipping_data['local_delivery']['delivery_fee']){
                if(Cart::getShippingMethod()['shipping_method'] == 'local_delivery'){
                    $str = Lang::get('frontend.local_delivery');
                    $checked = "checked";
                    $cart_shipping_cost = price_html( get_product_price_html_by_filter($shipping_data['local_delivery']['delivery_fee']), get_frontend_selected_currency());
                } else {
                    $str = Lang::get('frontend.local_delivery');
                    $checked = "";
                    $cart_shipping_cost = price_html( get_product_price_html_by_filter($shipping_data['local_delivery']['delivery_fee']), get_frontend_selected_currency());
                }
            } elseif ($shipping_data['local_delivery']['enable_option'] && $shipping_data['local_delivery']['fee_type'] === 'cart_total' && $shipping_data['local_delivery']['delivery_fee']) {
                if(Cart::getShippingMethod()['shipping_method'] == 'local_delivery'){
                    $str = Lang::get('frontend.local_delivery');
                    $checked = "checked";
                    $cart_shipping_cost = price_html(get_product_price_html_by_filter(Cart::getLocalDeliveryShippingPercentageTotal()), get_frontend_selected_currency());
                } else {
                    $str = Lang::get('frontend.local_delivery');
                    $checked = "";
                    $cart_shipping_cost = price_html(get_product_price_html_by_filter(Cart::getLocalDeliveryShippingPercentageTotal()), get_frontend_selected_currency());
                }
            } elseif ($shipping_data['local_delivery']['enable_option'] && $shipping_data['local_delivery']['fee_type'] === 'per_product' && $shipping_data['local_delivery']['delivery_fee']) {
                if(Cart::getShippingMethod()['shipping_method'] == 'local_delivery'){
                    $str = Lang::get('frontend.local_delivery');
                    $checked = "checked";
                    $cart_shipping_cost = price_html(get_product_price_html_by_filter(Cart::getLocalDeliveryShippingPerProductTotal()), get_frontend_selected_currency());
                } else {
                    $str = Lang::get('frontend.local_delivery');
                    $checked = "";
                    $cart_shipping_cost = price_html(get_product_price_html_by_filter(Cart::getLocalDeliveryShippingPerProductTotal()), get_frontend_selected_currency());
                }
            }
        }
    }
?>

{{-- End shipping cost --}}
{!! Session::get('eBazar_shipping_method') !!}
<div class="d-flex flex-wrap justify-content-center align-items-center text-center">
  <div class="col-xl-4 col-lg-7 col-md-6 col-12 my-3">
      <div class="cart-summary sub_border_shadow p-xl-4 p-lg-4 p-md-3 p-3 text-left">
          <strong class="cart_text mb-3 d-block font-weight-bold">Cart Summary</strong>
          <div class="cart-price d-flex justify-content-between mb-2">
              <h6 class="">Sub Total</h6>
              <span class="cart_text">{!! price_html(get_product_price_html_by_filter(Cart::getTotal()), get_frontend_selected_currency()) !!}</span>
          </div>
          <div class="cart-price d-flex justify-content-between mb-2">
              <h6 class="">Shipping Cost</h6>
              <span class="cart_text">{{ $cart_shipping_cost }}</span>
          </div>
          @if(Cart::is_coupon_applyed())
          <div class="coupon-price d-flex justify-content-between mb-2">
              <h6 class="">{!! trans('frontend.coupon_label') !!}</h6>
              <span class="cart_text">{!! price_html( get_product_price_html_by_filter(Cart::couponPrice()), get_frontend_selected_currency()) !!}</span>
          </div>
          @endif
          <hr>
          <div class="cart-price d-flex justify-content-between mb-2">
              <h6 class="">Grand Total</h6>
              <span class="cart_text">{!! price_html(get_product_price_html_by_filter(Cart::getCartTotal()), get_frontend_selected_currency()) !!}</span>
          </div>
      </div>
  </div>
  <div class="col-xl-4 col-lg-4 col-md-6 col-12 my-3">
      <button type="button" onclick="location.href='{{ route('checkout-page') }}'" class="effect">Proceed Checkout</button>
  </div>
</div>









