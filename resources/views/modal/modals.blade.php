<!-- Popup Search Modal -->
<!-- Modal -->
<div class="modal fade" id="searchpopupmodal" tabindex="-1" role="dialog" aria-labelledby="searchpopupmodallabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="searchpopupmodallabel">Search your favourite item here !</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="text" id="search-product" autocomplete="off">
            </div>
            <div class="modal-footer my-auto border-0 w-100" hidden>
                <ul class="search-list-wrapper w-100" id="search-result-list">
                    {{-- <li class="mb-2 p-1">
                        <a href="">
                            <div class="row">
                                <div class="col-2">
                                    <div class="image"> <img
                                            src="{{ asset('public/frontend/assets/images/product-images/1.jpg') }}"
                                            alt="search-list-image" class="img-fluid"></div>
                                </div>
                                <div class="col-10 m-auto">
                                    <p class="m-0">Ham Cheese Burger</p>
                                </div>
                            </div>
                        </a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Popup Search Modal Ends-->
<!-- Nav Cart Pop Up -->
<div class="modal fade" id="nav-cart" tabindex="-1" role="dialog" aria-labelledby="navcartlabel" aria-hidden="true">
    <div class="modal-dialog mini-cart-content" role="document">
        @include('pages.ajax-pages.mini-cart-html2')
    </div>
</div>
<!-- Nav Cart Pop Up Ends -->
<!-- Mobile Filter Pop Up -->
<!-- Modal -->
<div class="modal fade" id="leftsidebarfilter" tabindex="-1" role="dialog" aria-labelledby="leftsidebarfilterlabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="leftsidebarfilterlabel">Product Filter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="left-side-wrapper px-4 py-4">
                    <!-- Content -->
                    <div class="card-wrapper mb-2">
                        <div class="card-group-item">
                            <div class="card-head">
                                <div class="heading d-flex align-items-center text-center flex-wrap">
                                    <div class="head">
                                        <h5 class="text-uppercase pl-5 m-0">Categories</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-content1">
                                <div class="card-body p-3">
                                    <ul class="mb-0">
                                        <li>
                                            <div class="item">
                                                <a href="" class="category-item py-1 active">Cheese Category 1</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item">
                                                <a href="" class="category-item py-1">Cheese Category 1</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item">
                                                <a href="" class="category-item py-1">Cheese Category 1</a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="collapse" id="expand1">
                                        <ul>
                                            <li>
                                                <div class="item">
                                                    <a href="" class="category-item py-1">Cheese Category 1</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item">
                                                    <a href="" class="category-item py-1">Cheese Category 1</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item">
                                                    <a href="" class="category-item py-1">Cheese Category 1</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item">
                                                    <a href="" class="category-item py-1">Cheese Category 1</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item">
                                                    <a href="" class="category-item py-1">Cheese Category 1</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item">
                                                    <a href="" class="category-item py-1">Cheese Category 1</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item">
                                                    <a href="" class="category-item py-1">Cheese Category 1</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item">
                                                    <a href="" class="category-item py-1">Cheese Category 1</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item">
                                                    <a href="" class="category-item py-1">Cheese Category 1</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="expand text-center">
                                        <a data-toggle="collapse" href="#expand1" role="button" aria-expanded="false"
                                            aria-controls="expand1">View more</a>
                                    </div>
                                </div>
                                <!-- card-body.// -->
                            </div>
                        </div>
                        <!-- card-group-item.// -->
                    </div>
                    <!-- Content -->
                    <div class="card-wrapper mt-4 mb-2">
                        <div class="card-group-item">
                            <div class="card-head">
                                <div class="heading d-flex align-items-center text-center flex-wrap">
                                    <div class="head">
                                        <h5 class="text-uppercase pl-5 m-0">Product</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-content2">
                                <div class="card-body">
                                    <form>
                                        <label class="form-check d-flex align-items-center">
                                            <input class="form-check-input" type="checkbox" value="">
                                            <span class="form-check-label">
                                                Brand 1
                                            </span>
                                        </label>
                                        <!-- form-check.// -->
                                        <label class="form-check d-flex align-items-center">
                                            <input class="form-check-input" type="checkbox" value="">
                                            <span class="form-check-label">
                                                Brand 2
                                            </span>
                                        </label>
                                        <!-- form-check.// -->
                                        <label class="form-check d-flex align-items-center">
                                            <input class="form-check-input" type="checkbox" value="">
                                            <span class="form-check-label">
                                                Brand 3
                                            </span>
                                        </label>
                                        <!-- form-check.// -->
                                        <label class="form-check d-flex align-items-center">
                                            <input class="form-check-input" type="checkbox" value="">
                                            <span class="form-check-label">
                                                Brand 1
                                            </span>
                                        </label>
                                        <!-- form-check.// -->
                                        <label class="form-check d-flex align-items-center">
                                            <input class="form-check-input" type="checkbox" value="">
                                            <span class="form-check-label">
                                                Brand 2
                                            </span>
                                        </label>
                                        <!-- form-check.// -->
                                        <label class="form-check d-flex align-items-center">
                                            <input class="form-check-input" type="checkbox" value="">
                                            <span class="form-check-label">
                                                Brand 3
                                            </span>
                                        </label>
                                        <!-- form-check.// -->
                                        <div class="collapse" id="expand2">
                                            <!-- form-check.// -->
                                            <label class="form-check d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <span class="form-check-label">
                                                    Brand 3
                                                </span>
                                            </label>
                                            <!-- form-check.// -->
                                            <label class="form-check d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <span class="form-check-label">
                                                    Brand 3
                                                </span>
                                            </label>
                                            <label class="form-check d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <span class="form-check-label">
                                                    Brand 1
                                                </span>
                                            </label>
                                            <!-- form-check.// -->
                                            <label class="form-check d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <span class="form-check-label">
                                                    Brand 2
                                                </span>
                                            </label>
                                            <!-- form-check.// -->
                                            <label class="form-check d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <span class="form-check-label">
                                                    Brand 3
                                                </span>
                                            </label>
                                            <!-- form-check.// -->
                                            <!-- form-check.// -->
                                            <label class="form-check d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <span class="form-check-label">
                                                    Brand 3
                                                </span>
                                            </label>
                                        </div>
                                        <div class="expand text-center">
                                            <a data-toggle="collapse" href="#expand2" role="button"
                                                aria-expanded="false" aria-controls="expand2">View more</a>
                                        </div>
                                    </form>
                                </div>
                                <!-- card-body.// -->
                            </div>
                        </div>
                        <!-- card-group-item.// -->
                    </div>
                    <!-- Content -->
                    <div class="card-wrapper mb-2">
                        <div class="card-group-item">
                            <div class="card-head">
                                <div class="heading d-flex align-items-center text-center flex-wrap">
                                    <div class="head">
                                        <h5 class="text-uppercase pl-5 m-0">Categories</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-content1">
                                <div class="card-body p-3">
                                    <ul class="mb-0">
                                        <li>
                                            <div class="item">
                                                <a href="" class="category-item py-1 active">Cheese Category 1</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item">
                                                <a href="" class="category-item py-1">Cheese Category 1</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item">
                                                <a href="" class="category-item py-1">Cheese Category 1</a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="collapse" id="expand1">
                                        <ul>
                                            <li>
                                                <div class="item">
                                                    <a href="" class="category-item py-1">Cheese Category 1</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item">
                                                    <a href="" class="category-item py-1">Cheese Category 1</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item">
                                                    <a href="" class="category-item py-1">Cheese Category 1</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item">
                                                    <a href="" class="category-item py-1">Cheese Category 1</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item">
                                                    <a href="" class="category-item py-1">Cheese Category 1</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item">
                                                    <a href="" class="category-item py-1">Cheese Category 1</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item">
                                                    <a href="" class="category-item py-1">Cheese Category 1</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item">
                                                    <a href="" class="category-item py-1">Cheese Category 1</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item">
                                                    <a href="" class="category-item py-1">Cheese Category 1</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="expand text-center">
                                        <a data-toggle="collapse" href="#expand1" role="button" aria-expanded="false"
                                            aria-controls="expand1">View more</a>
                                    </div>
                                </div>
                                <!-- card-body.// -->
                            </div>
                        </div>
                        <!-- card-group-item.// -->
                    </div>
                    <!-- Content -->
                    <div class="card-wrapper mt-4 mb-2">
                        <div class="card-group-item">
                            <div class="card-head">
                                <div class="heading d-flex align-items-center text-center flex-wrap">
                                    <div class="head">
                                        <h5 class="text-uppercase pl-5 m-0">Product</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-content2">
                                <div class="card-body">
                                    <form>
                                        <label class="form-check d-flex align-items-center">
                                            <input class="form-check-input" type="checkbox" value="">
                                            <span class="form-check-label">
                                                Brand 1
                                            </span>
                                        </label>
                                        <!-- form-check.// -->
                                        <label class="form-check d-flex align-items-center">
                                            <input class="form-check-input" type="checkbox" value="">
                                            <span class="form-check-label">
                                                Brand 2
                                            </span>
                                        </label>
                                        <!-- form-check.// -->
                                        <label class="form-check d-flex align-items-center">
                                            <input class="form-check-input" type="checkbox" value="">
                                            <span class="form-check-label">
                                                Brand 3
                                            </span>
                                        </label>
                                        <!-- form-check.// -->
                                        <label class="form-check d-flex align-items-center">
                                            <input class="form-check-input" type="checkbox" value="">
                                            <span class="form-check-label">
                                                Brand 1
                                            </span>
                                        </label>
                                        <!-- form-check.// -->
                                        <label class="form-check d-flex align-items-center">
                                            <input class="form-check-input" type="checkbox" value="">
                                            <span class="form-check-label">
                                                Brand 2
                                            </span>
                                        </label>
                                        <!-- form-check.// -->
                                        <label class="form-check d-flex align-items-center">
                                            <input class="form-check-input" type="checkbox" value="">
                                            <span class="form-check-label">
                                                Brand 3
                                            </span>
                                        </label>
                                        <!-- form-check.// -->
                                        <div class="collapse" id="expand2">
                                            <!-- form-check.// -->
                                            <label class="form-check d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <span class="form-check-label">
                                                    Brand 3
                                                </span>
                                            </label>
                                            <!-- form-check.// -->
                                            <label class="form-check d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <span class="form-check-label">
                                                    Brand 3
                                                </span>
                                            </label>
                                            <label class="form-check d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <span class="form-check-label">
                                                    Brand 1
                                                </span>
                                            </label>
                                            <!-- form-check.// -->
                                            <label class="form-check d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <span class="form-check-label">
                                                    Brand 2
                                                </span>
                                            </label>
                                            <!-- form-check.// -->
                                            <label class="form-check d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <span class="form-check-label">
                                                    Brand 3
                                                </span>
                                            </label>
                                            <!-- form-check.// -->
                                            <!-- form-check.// -->
                                            <label class="form-check d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <span class="form-check-label">
                                                    Brand 3
                                                </span>
                                            </label>
                                        </div>
                                        <div class="expand text-center">
                                            <a data-toggle="collapse" href="#expand2" role="button"
                                                aria-expanded="false" aria-controls="expand2">View more</a>
                                        </div>
                                    </form>
                                </div>
                                <!-- card-body.// -->
                            </div>
                        </div>
                        <!-- card-group-item.// -->
                    </div>
                </div>
            </div>
            <!-- <div class="modal-footer">
            </div> -->
        </div>
    </div>
</div>
<!-- Mobile Filter Pop Up Ends -->
<!-- Mobile Nav -->
<div class="modal fade" id="rightsidebarfilter" tabindex="-1" role="dialog"
    aria-labelledby="rightsidebarfilterlabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content h-100">
            <div class="modal-header px-3 py-3 align-items-center">
                <div class="cart-wishlist">
                    <div class="image">
                        <a class="navbar-brand" href="index.html">
                            <!-- <img src="{{ asset('public/frontend/assets/images/logo/logo.png') }}" alt="navigation-logo" class="img-fluid"> -->
                            <h2 class="m-0 font-weight-bold"><span>Cheese</span> World !</h2>
                        </a>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body d-flex justify-content-between h-100 px-4">
                <ul class="navbar-nav w-100">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.html"> <span class="nav-indication mr-2"><i
                                    class="fa fa-eercast" aria-hidden="true"></i></span> Home</a>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <a class="nav-link add-on" data-toggle="modal" data-target="#nav-cart">
                            <span class="nav-indication mr-2"><i class="fa fa-eercast"
                                    aria-hidden="true"></i></span>My Cart <span class="mx-2"><i
                                    class="fa fa-shopping-bag" aria-hidden="true"></i></span> <sup
                                class="cart-items text-white">2</sup>
                        </a>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <a class="nav-link add-on" data-toggle="modal" data-target="#nav-cart">
                            <span class="nav-indication mr-2"><i class="fa fa-eercast"
                                    aria-hidden="true"></i></span>Wishlist <span class="mx-2"><i
                                    class="fa fa-heart-o" aria-hidden="true"></i></span> <sup
                                class="cart-items text-white">2</sup>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <span class="nav-indication mr-2"><i class="fa fa-eercast"
                                    aria-hidden="true"></i></span>Products<span class="ml-1">
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="container d-block">
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head font-weight-bold"
                                                    href="under-construction.html">Heading 29</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 1</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-12  -->
                                    <div class="col-md-12">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head font-weight-bold"
                                                    href="under-construction.html">Heading 27</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 1</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-12  -->
                                    <div class="col-md-12">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head font-weight-bold"
                                                    href="under-construction.html">Heading 39</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 1</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-12  -->
                                    <div class="col-md-12">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head font-weight-bold"
                                                    href="under-construction.html">Heading 4</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 1</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-12  -->
                                    <div class="col-md-12">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head font-weight-bold"
                                                    href="under-construction.html">Heading 1</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 1</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-12  -->
                                    <div class="col-md-12">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head font-weight-bold"
                                                    href="under-construction.html">Heading 2</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 1</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-12  -->
                                    <div class="col-md-12">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head font-weight-bold"
                                                    href="under-construction.html">Heading 3</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 1</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-12  -->
                                    <div class="col-md-12">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head font-weight-bold"
                                                    href="under-construction.html">Heading 4</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 1</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-12  -->
                                </div>
                            </div>
                            <!--  /.container  -->
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <span class="nav-indication mr-2"><i class="fa fa-eercast"
                                    aria-hidden="true"></i></span>Category<span class="ml-1">
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="container d-block">
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head font-weight-bold"
                                                    href="under-construction.html">Heading 29</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 1</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-12  -->
                                    <div class="col-md-12">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head font-weight-bold"
                                                    href="under-construction.html">Heading 27</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 1</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-12  -->
                                    <div class="col-md-12">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head font-weight-bold"
                                                    href="under-construction.html">Heading 39</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 1</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-12  -->
                                    <div class="col-md-12">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head font-weight-bold"
                                                    href="under-construction.html">Heading 4</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 1</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-12  -->
                                    <div class="col-md-12">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head font-weight-bold"
                                                    href="under-construction.html">Heading 1</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 1</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-12  -->
                                    <div class="col-md-12">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head font-weight-bold"
                                                    href="under-construction.html">Heading 2</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 1</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-12  -->
                                    <div class="col-md-12">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head font-weight-bold"
                                                    href="under-construction.html">Heading 3</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 1</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-12  -->
                                    <div class="col-md-12">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head font-weight-bold"
                                                    href="under-construction.html">Heading 4</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 1</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-12  -->
                                </div>
                            </div>
                            <!--  /.container  -->
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <span class="nav-indication mr-2"><i class="fa fa-eercast" aria-hidden="true"></i></span>
                            Recipes<span class="ml-1">
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="container d-block">
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head font-weight-bold"
                                                    href="under-construction.html">Heading 29</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 1</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-12  -->
                                    <div class="col-md-12">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head font-weight-bold"
                                                    href="under-construction.html">Heading 27</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 1</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-12  -->
                                    <div class="col-md-12">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head font-weight-bold"
                                                    href="under-construction.html">Heading 39</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 1</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-12  -->
                                    <div class="col-md-12">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head font-weight-bold"
                                                    href="under-construction.html">Heading 4</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 1</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-12  -->
                                    <div class="col-md-12">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head font-weight-bold"
                                                    href="under-construction.html">Heading 1</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 1</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-12  -->
                                    <div class="col-md-12">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head font-weight-bold"
                                                    href="under-construction.html">Heading 2</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 1</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-12  -->
                                    <div class="col-md-12">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head font-weight-bold"
                                                    href="under-construction.html">Heading 3</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 1</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-12  -->
                                    <div class="col-md-12">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head font-weight-bold"
                                                    href="under-construction.html">Heading 4</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 1</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="under-construction.html">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-12  -->
                                </div>
                            </div>
                            <!--  /.container  -->
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact-us.html"> <span class="nav-indication mr-2"><i
                                    class="fa fa-eercast" aria-hidden="true"></i></span> Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="modal-footer py-3">
                <a class="w-50 text-center" href="under-construction.html"> <span class="mr-2"><i
                            class="fa fa-sign-in" aria-hidden="true"></i></span>Login</a>
                <a class="w-50 text-center" href="under-construction.html"> <span class="mr-2"><i
                            class="fa fa-paper-plane" aria-hidden="true"></i></span>Register</a>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Nav -->
<!-- Mobile Profile Nav Pop Up -->
<div class="modal fade" id="profilemobilenav" tabindex="-1" role="dialog" aria-labelledby="profilemobilenavtitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content h-100  border-0">
            <!-- <div class="modal-header">
                        <h5 class="modal-title" id="profilemobilenavtitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                        </button>
                    </div> -->
            <div class="modal-body d-flex align-items-center justify-content-around h-100 w-100 p-0">
                <div class="dashboard-list2 px-2 py-0">
                    <div class="d-user-avater text-center mb-4">
                        <img src="{{ asset('public/frontend/assets/images/product-images/1.jpg') }}"
                            class="img-fluid avater" alt="profile-image">
                        <h5>Adam Harshvardhan</h5>
                        <a href=""> <span class="mr-1"><i class="fa fa-pencil"
                                    aria-hidden="true"></i></span> Upload Image</a>
                    </div>
                    <ul class="sidebar">
                        <li class="active mb-3 p-2">
                            <a href="dashboard-profile.html"><span class="mr-2"><i class="fa fa-user"
                                        aria-hidden="true"></i></span>Profile</a>
                        </li>
                        <li class="mb-3 p-2">
                            <a href="dashboard-order-status.html"><span class="mr-2"><i
                                        class="fa fa-sort" aria-hidden="true"></i></span>Order Status</a>
                        </li>
                        <li class="mb-3 p-2">
                            <a href="dashboard-cart.html"><span class="mr-2"><i class="fa fa-shopping-bag"
                                        aria-hidden="true"></i></span>My Cart</a>
                        </li>
                        <li class="mb-3 p-2">
                            <a href="dashboard-wishlist.html"><span class="mr-2"><i
                                        class="fa fa-shopping-bag" aria-hidden="true"></i></span>Wishlist</a>
                        </li>
                        <li class="mb-3 p-2">
                            <a href="dashboard-change-password.html"><span class="mr-2"><i
                                        class="fa fa-lock" aria-hidden="true"></i></span>Change Password</a>
                        </li>
                        <li class="mb-3 p-2">
                            <a href="index.html"><span class="mr-2"><i class="fa fa-sign-out"
                                        aria-hidden="true"></i></span>Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div> -->
        </div>
    </div>
</div>
<!-- Mobile Profile Nav Pop Up Ends -->
