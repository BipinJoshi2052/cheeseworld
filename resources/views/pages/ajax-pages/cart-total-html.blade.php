{!! Session::get('eBazar_shipping_method') !!}
<div class="d-flex flex-wrap justify-content-center align-items-center text-center">
  <div class="col-xl-4 col-lg-7 col-md-6 col-12 my-3">
      <div class="cart-summary sub_border_shadow p-xl-4 p-lg-4 p-md-3 p-3 text-left">
          <strong class="cart_text mb-3 d-block font-weight-bold">Cart Summary</strong>
          <div class="cart-price d-flex justify-content-between mb-2">
              <h6 class="">Sub Total</h6>
              <span class="cart_text">NPR 200</span>
          </div>
          <div class="cart-price d-flex justify-content-between mb-2">
              <h6 class="">Shipping Cost</h6>
              <span class="cart_text">NPR 0</span>
          </div>
          <hr>
          <div class="cart-price d-flex justify-content-between mb-2">
              <h6 class="">Grand Total</h6>
              <span class="cart_text">NPR 200</span>
          </div>
      </div>
  </div>
  <div class="col-xl-4 col-lg-4 col-md-6 col-12 my-3">
      <button type="button" class="effect">Proceed Checkout</button>
  </div>
</div>