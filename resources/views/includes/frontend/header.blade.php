<!-- Navigation Starts -->
<section id="navigation-wrapper" class="navigation-wrap">
    <nav class="navbar header-sticky">
        <div class="image">
            <a class="navbar-brand" href="{{ url('/') }}">
                <!-- <img src="frontend/assets/images/logo/logo.png" alt="navigation-logo" class="img-fluid"> -->
                <h3 class="m-0 font-weight-bold"><span>Cheese</span> World !</h3>
            </a>
        </div>
        <div class="navbar-menus d-xl-block d-lg-block d-none" id="navbarmain">
            <ul class="navbar-nav py-4 py-md-0 d-flex flex-row flex-wrap" role="menu">
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                    <a class="nav-link active" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                    <a class="nav-link" href="javascript:void(0)">
                        Category
                        <span class="ml-1">
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="mega-menu-wrapper">
                        <div class="row p-4">
                            @foreach ($productCategoriesTree as $category)
                                <!-- /.col-md-3  -->
                                <div class="col-md-3">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link head font-weight-bold" href="{{ url('/product/categories') }}/{{ $category['slug'] }}">{{ $category['name'] }}</a>
                                        </li>
                                        @foreach ($category['children'] as $child)
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="{{ url('/product/categories') }}/{{ $category['slug'] }}">{{ $category['name'] }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endforeach

                    </div>
                </li>
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                    <a class="nav-link" href="{{ url('/shop') }}">Shop</a>
                </li>
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                    <a class="nav-link" href="{{ url('/contact-us') }}">Contact Us</a>
                </li>
                <!-- Popup Saerch Modal Anchor -->
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                    <a class="btn" data-toggle="modal" data-target="#searchpopupmodal"><i
                            class="fa fa-search"></i></a>
                </li>
            </ul>
        </div>
        <div class="cart-wishlist desk-nav d-xl-block d-lg-block d-none">
            <ul class="d-flex align-items-center justify-content-between m-0">
                <li>
                    <a class="nav-link add-on px-xl-2 px-lg-1 px-md-2 px-2" data-toggle="modal"
                        data-target="#nav-cart">
                        <span class="mr-1"><i class="fa fa-shopping-bag" aria-hidden="true"></i></span> <sup
                            class="cart-items text-white">2</sup>
                    </a>
                </li>
                <li>
                    <a class="nav-link add-on px-xl-2 px-lg-1 px-md-2 px-2" href="{{ url('user/account/my-saved-items') }}">
                        <span class="mr-1"><i class="fa fa-heart-o" aria-hidden="true"></i></span> <sup
                            class="cart-items text-white">2</sup>
                    </a>
                </li>
                <li class="nav-item">
                    @if (Session::has('shopist_frontend_user_id'))
                    <a class="nav-link m-auto add-on" href="javascript:void(0)" id="profilenav">
                        <span class="mr-1"><i class="fa fa-user-o" aria-hidden="true"></i></span> <label
                            class="mb-0">{{ Session::get('shopist_frontend_user_name') }}</label> <span class="ml-1">
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="profilenav-dropdown custom-position p-0" aria-labelledby="profilenav">
                        <a class="dropdown-item" href="{{ route('user-account-page') }}"> <span class="mr-2"><i
                                    class="fa fa-sign-in" aria-hidden="true"></i></span>Profile</a>
                        <form method="post" action="{{ route('user-logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                <span class="mr-2"><i class="fa fa-paper-plane" aria-hidden="true"></i></span>Logout</a>
                            </button>
                        </form>
                    </div>

                    @else
                    <a class="nav-link m-auto add-on" href="javascript:void(0)" id="profilenav">
                        <span class="mr-1"><i class="fa fa-user-o" aria-hidden="true"></i></span> <label
                            class="mb-0">Profile</label> <span class="ml-1">
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="profilenav-dropdown custom-position p-0" aria-labelledby="profilenav">
                        <a class="dropdown-item" href="{{ route('user-login-page') }}"> <span class="mr-2"><i
                                    class="fa fa-sign-in" aria-hidden="true"></i></span>Login</a>
                        <a class="dropdown-item" href="{{ route('user-login-page') }}"> <span class="mr-2"><i
                                    class="fa fa-paper-plane" aria-hidden="true"></i></span>Register</a>
                    </div>
                    @endif
                </li>
            </ul>
        </div>
        <!-- Mobile Popup Search Modal Anchor -->
        <a class="btn d-xl-none d-lg-none d-md-block search-button" data-toggle="modal"
            data-target="#searchpopupmodal"><i class="fa fa-search"></i></a>

        <!-- Mobile Popup Search Modal Anchor Ends -->
        <!-- Small Desktop & mobile Cart-wishlist and Profile -->
        <!-- Button trigger modal -->
        <div class="mobile-menu d-lg-none d-md-block mr-4 position-absolute" data-toggle="modal"
            data-target="#rightsidebarfilter"><span><i class="fa fa-bars fa-2x" aria-hidden="true"></i></span> </div>
        <!-- Button trigger modal -->

        <!-- Small Desktop & mobile Cart-wishlist and Profile End-->
    </nav>
</section>
<!-- Navigation Ends -->
