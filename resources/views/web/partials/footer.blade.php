<div class="footer-area-wrapper reveal-footer bg-gray">
    <div class="footer-area section-space--ptb_80">
        <div class="container">
            <div class="row footer-widget-wrapper">
                <div class="col-lg-4 col-md-6 col-sm-6 footer-widget">
                    <div class="footer-widget__logo mb-30">
                        <img src="assets/images/logo/dark-logo-160x48.png" class="img-fluid" alt="">
                    </div>
                    <ul class="footer-widget__list">
                        <li>
                            {{ __('58 Howard Street #2 San Francisco, CA 941') }}
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="hover-style-link">
                                test-email@example.net
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="hover-style-link text-black font-weight--bold">
                                (+380) XX XXX XX XX
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="hover-style-link text-color-primary">
                                 https://www.example.net
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                    <h6 class="footer-widget__title mb-20">{{ __('IT Services') }}</h6>
                    <ul class="footer-widget__list">
                        <li><a href="javascript:void(0);" class="hover-style-link">{{ __('Managed IT') }}</a></li>
                        <li><a href="javascript:void(0);" class="hover-style-link">{{ __('IT Support') }}</a></li>
                        <li><a href="javascript:void(0);" class="hover-style-link">{{ __('IT Consultancy') }}</a></li>
                        <li><a href="javascript:void(0);" class="hover-style-link">{{ __('Cloud Computing') }}</a></li>
                        <li><a href="javascript:void(0);" class="hover-style-link">{{ __('Cyber Security') }}</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                    <h6 class="footer-widget__title mb-20">{{ __('Quick links') }}</h6>
                    <ul class="footer-widget__list">
                        <li><a href="javascript:void(0);" class="hover-style-link">{{ __('Pick up locations') }}</a></li>
                        <li><a href="javascript:void(0);" class="hover-style-link">{{ __('Terms of Payment') }}</a></li>
                        <li><a href="javascript:void(0);" class="hover-style-link">{{ __('Privacy Policy') }}</a></li>
                        <li><a href="javascript:void(0);" class="hover-style-link">{{ __('Where to Find Us') }}</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                    <h6 class="footer-widget__title mb-20">{{ __('Support') }}</h6>
                    <ul class="footer-widget__list">
                        <li><a href="javascript:void(0);" class="hover-style-link">{{ __('Forum Support') }}</a></li>
                        <li><a href="javascript:void(0);" class="hover-style-link">{{ __('Help & FAQ') }}</a></li>
                        <li><a href="javascript:void(0);" class="hover-style-link">{{ __('Contact Us') }}</a></li>
                        <li><a href="javascript:void(0);" class="hover-style-link">{{ __('Pricing and plans') }}</a></li>
                        <li><a href="javascript:void(0);" class="hover-style-link">{{ __('Cookies Policy') }}</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                    <div class="footer-widget__title section-space--mb_50"></div>
                    <ul class="footer-widget__list">
                        <li>
                            <a href="javascript:void(0);" class="image_btn">
                                <img class="img-fluid" src="assets/images/icons/aeroland-button-google-play.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="image_btn">
                                <img class="img-fluid" src="assets/images/icons/aeroland-button-app-store.jpg" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright-area section-space--pb_30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-left">
                    <span class="copyright-text">
                        &copy; {{ now()->year }} {{ config('app.name') }}. <a href="javascript:void(0);">{{ __('All Rights Reserved.') }}</a>
                    </span>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <ul class="list ht-social-networks solid-rounded-icon">
                        @foreach(['twitter', 'facebook', 'instagram', 'linkedin'] as $social)
                            <li class="item">
                                <a href="javascript:void(0);" target="_blank" aria-label="{{ Str::ucfirst($social) }}" class="social-link hint--bounce hint--top hint--primary">
                                    <i class="fab fa-{{ $social }} link-icon"></i>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
