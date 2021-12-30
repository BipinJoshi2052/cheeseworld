 <!-- Breadcrumbs -->
 <section id="breadcrumb-wrapper" class="position-relative">
     <div class="image">
         <img src="{{ asset('public/frontend/assets/images/banner/banner.jpg') }}" alt="breadcrumb-image" class="img-fluid">
     </div>
     <div class="overlay position-absolute">
         <div class="title p-4">Product Listing</div>
     </div>
 </section>
 <!-- Breadcrumbs Ends -->

 <!-- Product Listing -->
 <section id="product-listing-wrapper" class="py-5">
     <div class="container">
         <div class="product-lists">
             <div class="row">
                 <div class="col-xl-3 col-lg-3 col-12">
                     <div class="left-side-wrapper px-4 py-4 d-lg-block d-none">
                       <!--Categories Start -->
                      @include('includes.frontend.categories')
                      @yield('categories-content')
                      <!--Categories End -->
                         <!-- Content -->
                         <div class="card-wrapper mt-4 mb-2">
                             <div class="card-group-item">
                                 <div class="card-head">
                                     <div class="heading d-flex align-items-center text-center flex-wrap">
                                         <div class="head">
                                             <h5 class="text-uppercase pl-5 m-0">Filter</h5>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="filter-content2">
                                    <div class="card-body sort-filter-option">
                                        {{-- <form> --}}
                                            <label class="form-check d-flex align-items-center">
                                                <input class="form-check-input sort-by-filter" type="checkbox" value="all" {{ $all_products_details['sort_by'] == 'all' ? 'checked' : '' }}>
                                                <span class="form-check-label">
                                                    All
                                                </span>
                                            </label>
                                            <!-- form-check.// -->
                                            <label class="form-check d-flex align-items-center">
                                                <input class="form-check-input sort-by-filter" type="checkbox" value="alpaz" {{ $all_products_details['sort_by'] == 'alpaz' ? 'checked' : '' }}>
                                                <span class="form-check-label">
                                                    {{ trans('frontend.sort_filter_alpaz_label') }}
                                                </span>
                                            </label>
                                            <!-- form-check.// -->
                                            <label class="form-check d-flex align-items-center">
                                                <input class="form-check-input sort-by-filter" type="checkbox" value="alpza" {{ $all_products_details['sort_by'] == 'alpza' ? 'checked' : '' }}>
                                                <span class="form-check-label">
                                                    {{ trans('frontend.sort_filter_alpza_label') }}
                                                </span>
                                            </label>
                                            <!-- form-check.// -->
                                            <label class="form-check d-flex align-items-center">
                                                <input class="form-check-input sort-by-filter" type="checkbox" value="low-high" {{ $all_products_details['sort_by'] == 'low-high' ? 'checked' : '' }}>
                                                <span class="form-check-label">
                                                    {{ trans('frontend.sort_filter_low_high_label') }}
                                                </span>
                                            </label>
                                            <!-- form-check.// -->
                                            <label class="form-check d-flex align-items-center">
                                                <input class="form-check-input sort-by-filter" type="checkbox" value="high-low" {{ $all_products_details['sort_by'] == 'high-low' ? 'checked' : '' }}>
                                                <span class="form-check-label">
                                                    {{ trans('frontend.sort_filter_high_low_label') }}
                                                </span>
                                            </label>
                                            <!-- form-check.// -->
                                            <label class="form-check d-flex align-items-center">
                                                <input class="form-check-input sort-by-filter" type="checkbox" value="old-new" {{ $all_products_details['sort_by'] == 'old-new' ? 'checked' : '' }}>
                                                <span class="form-check-label">
                                                    {{ trans('frontend.sort_filter_old_new_label') }}
                                                </span>
                                            </label>
                                            <!-- form-check.// -->
                                            <!-- form-check.// -->
                                            <label class="form-check d-flex align-items-center">
                                                <input class="form-check-input sort-by-filter" type="checkbox" value="new-old" {{ $all_products_details['sort_by'] == 'new-old' ? 'checked' : '' }}>
                                                <span class="form-check-label">
                                                    {{ trans('frontend.sort_filter_new_old_label') }}
                                                </span>
                                            </label>
                                            <!-- form-check.// -->
                                            {{-- <div class="collapse" id="expand2">
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
                                            </div> --}}
                                        {{-- </form> --}}
                                    </div>
                                    <!-- card-body.// -->
                                </div>
                                 {{-- <div class="expand text-center">
                                     <a data-toggle="collapse" href="#expand2" role="button" aria-expanded="false"
                                         aria-controls="expand2">View more</a>
                                 </div> --}}
                             </div>
                             <!-- card-group-item.// -->
                         </div>
                         <!-- Content Ends -->
                     </div>
                     <!-- Mobile Filter  -->
                     <!-- Button trigger modal -->
                     <button type="button" class="effect d-xl-none d-lg-none d-md-block mb-4" data-toggle="modal"
                         data-target="#leftsidebarfilter">
                         Product Filter
                         <span class="ml-2">
                             <i class="fa fa-list" aria-hidden="true"></i>
                         </span>
                     </button>
                     <!-- Mobile Filter Ends -->
                 </div>
                 <div class="col-xl-9 col-lg-9 col-12 mx-auto text-center">
                    @include('includes.frontend.products')
                    @yield('products-content')
                     
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Product Listing Ends -->
