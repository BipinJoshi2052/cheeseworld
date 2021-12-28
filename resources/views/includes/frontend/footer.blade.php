<!-- Footer -->
<section id="footer-wrapper" class="text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-12 mb-2">
                <div class="image">
                    <a href="{{ url('/') }}"> <img src="{{ asset($siteSettings['general_settings']['general_options']['site_logo'] ) }}" alt="footer-logo-image" class="img-fluid"></a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-12 mb-2">
                <ul class="footer-nav-list">
                    <div class="heading">
                        <div class="head">
                            <a href="">
                                <h2>Connect with Us</h2>
                            </a>
                        </div>
                    </div>
                    <li>
                        <a href=" mailto:{{ isset($siteSettings['general_settings']['general_options']['email_address']) && $siteSettings['general_settings']['general_options']['email_address'] ? $siteSettings['general_settings']['general_options']['email_address'] : '' }}"><span class="mr-2"><i class="fa fa-envelope-square" aria-hidden="true"></i></span>{{ isset($siteSettings['general_settings']['general_options']['email_address']) && $siteSettings['general_settings']['general_options']['email_address'] ? $siteSettings['general_settings']['general_options']['email_address'] : '' }}</a>
                        </h5>
                    </li>
                    <li>
                        <a href="tel:{{ isset($siteSettings['general_settings']['general_options']['phone']) && $siteSettings['general_settings']['general_options']['phone'] ? $siteSettings['general_settings']['general_options']['phone']: '' }}"><span class="mr-2"><i class="fa fa-phone" aria-hidden="true"></i></span>{{ isset($siteSettings['general_settings']['general_options']['phone']) && $siteSettings['general_settings']['general_options']['phone'] ? $siteSettings['general_settings']['general_options']['phone']: '' }}</a></h5>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><span class="mr-2"><i class="fa fa-map" aria-hidden="true"></i></span>{{ isset($siteSettings['general_settings']['general_options']['address']) && $siteSettings['general_settings']['general_options']['address'] ? $siteSettings['general_settings']['general_options']['address']: '' }}</a></h5>
                    </li>
                </ul>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-12 mb-2">
                <ul class="footer-nav-list">
                    <div class="heading">
                        <div class="head">
                            <a href="">
                                <h2>Resources</h2>
                            </a>
                        </div>
                    </div>
                    <li>
                        <a href="javascript:void(0)">About Us</a></h5>
                    </li>
                    <li>
                        <a href="{{ url('shop') }}">Shop</a></h5>
                    </li>
                    <li>
                        <a href="{{ url('contact-us') }}">Contact Us</a></h5>
                    </li>
                </ul>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-12 mb-2">
                <ul class="footer-nav-list">
                    <div class="heading">
                        <div class="head">
                            <a href="">
                                <h2>Follow Us</h2>
                            </a>
                        </div>
                    </div>
                    <li>
                        <a href="{{ isset($appearance_all_data['footer_details']['follow_us_url']['fb']) ? $appearance_all_data['footer_details']['follow_us_url']['fb'] : 'javascript:void(0)' }}"><span class="mr-2"><i class="fa fa-facebook-official" aria-hidden="true"></i></span>Facebook</a>
                        </h5>
                    </li>
                    <li>
                        <a href="{{ isset($appearance_all_data['footer_details']['follow_us_url']['youtube']) ? $appearance_all_data['footer_details']['follow_us_url']['youtube'] : 'javascript:void(0)' }}"><span class="mr-2"><i class="fa fa-youtube" aria-hidden="true"></i></span>Youtube</a></h5>
                    </li>
                    <li>
                        <a href="{{ isset($appearance_all_data['footer_details']['follow_us_url']['twitter']) ? $appearance_all_data['footer_details']['follow_us_url']['twitter'] : 'javascript:void(0)' }}"><span class="mr-2"><i class="fa fa-twitter-square" aria-hidden="true"></i></span>Twitter</a></h5>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Footer Ends -->