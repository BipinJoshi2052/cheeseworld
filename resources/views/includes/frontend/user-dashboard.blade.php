<?php 
$profileNav = Request::is('user/account') || Request::is('user/account/my-profile');
$orderNav = Request::is('user/account/my-orders');
$wishlistNav = Request::is('user/account/my-saved-items');
$cartNav = Request::is('cart');
?>

<div class="col-xl-3 col-lg-3 col-md-12 col-12 mb-xl-0 mb-lg-0 mb-3">
    <div class="dashboard-list py-lg-5 px-lg-3 d-lg-block d-none">
        <div class="d-user-avater text-center mb-4">
            <?php 
                if($login_user_details['user_photo_url']){
                    $user_photo = get_image_url($login_user_details['user_photo_url']);
                } else {
                    $user_photo = default_avatar_img_src();
                }
                    
            ?>
            <img src="{{ $user_photo }}"
                class="img-fluid avater" alt="profile-image" id="profile_img">
            <h5>{{ $login_user_details['user_display_name'] }}</h5>
            <form>
                <a href="javascript:void(0)" onclick="changeProfile()"> <span class="mr-1"><i class="fa fa-pencil"
                        aria-hidden="true"></i></span> Upload Image</a>
                <input type="file" id="prf-pic" style="display: none"/>
            </form>
        </div>
        <ul class="sidebar">
            <li class="{{ $profileNav ? 'active' : '' }} mb-3 p-2">
                <a href="{{ route('my-profile-page') }}"><span class="mr-2"><i class="fa fa-user"
                            aria-hidden="true"></i></span>Profile</a>
            </li>
            <li class="{{ $orderNav ? 'active' : '' }} mb-3 p-2">
                <a href="{{ route('my-orders-page') }}"><span class="mr-2"><i class="fa fa-sort"
                            aria-hidden="true"></i></span>Order Status</a>
            </li>
            <li class="{{ $cartNav ? 'active' : '' }} mb-3 p-2">
                <a href="{{ route('cart-page') }}"><span class="mr-2"><i class="fa fa-shopping-bag"
                            aria-hidden="true"></i></span>My Cart</a>
            </li>
            <li class="{{ $wishlistNav ? 'active' : '' }} mb-3 p-2">
                <a href="{{ route('my-saved-items-page') }}"><span class="mr-2"><i class="fa fa-shopping-bag"
                            aria-hidden="true"></i></span>Wishlist</a>
            </li>
            <li class="mb-3 p-2">
                <a href="{{ route('user-change-password-post') }}"><span class="mr-2"><i
                            class="fa fa-lock" aria-hidden="true"></i></span>Change Password</a>
            </li>
            <form action="{{ route('user-logout') }}" method="post">
                @include('includes.csrf-token')
                <li class="mb-3 p-2">
                    <button type="submit"><span class="mr-2"><i class="fa fa-sign-out"
                        aria-hidden="true"></i></span>Logout</button>
                    {{-- <a href=""><span class="mr-2"><i class="fa fa-sign-out"
                                aria-hidden="true"></i></span>Logout</a> --}}
                </li>
            </form>
            
        </ul>
    </div>
    <!-- Mobile Profile Nav -->
    <ul class="mobile-profile-nav d-lg-none d-flex flex justify-content-around align-items-center h-100"
        data-toggle="modal" data-target="#profilemobilenav">
        <li>
            <span class="active"><i class="fa fa-user" aria-hidden="true"></i></span>
        </li>
        <li>
            <span><i class="fa fa-sort" aria-hidden="true"></i></span>
        </li>
        <li>
            <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
        </li>
        <li>
            <span><i class="fa fa-lock" aria-hidden="true"></i></span>
        </li>
        <li>
            <span><i class="fa fa-sign-out" aria-hidden="true"></i></span>
        </li>
    </ul>
    </button>
    <!-- Mobile Profile Nav Ends-->
</div>