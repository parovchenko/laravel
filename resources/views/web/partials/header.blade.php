<div class="header-area header-area--default">
    <div class="header-top-wrap border-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <p class="text-center top-message">
                        <a href="javascript:void(0);">Now Hiring:</a> Are you a driven and motivated 1st Line IT Support Engineer?
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom-wrap header-sticky">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header default-menu-style position-relative">
                        <div class="header__logo">
                            <a href="{{ url('/') }}">
                                <img src="assets/images/logo/logo-dark.png" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="header-midle-box">
                            <div class="header-bottom-wrap d-md-block d-none">
                                <div class="header-bottom-inner">
                                    <div class="header-bottom-left-wrap">
                                        <div class="header__navigation d-none d-xl-block">
                                            <nav class="navigation-menu primary--menu">
                                                @include('web.partials.nav.menu', ['notMobileMenu' => true])
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-right-box">
                            <div class="header-right-inner" id="hidden-icon-wrapper">
                                <div class="language-menu">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <img class="ls-flag" src="assets/images/flags/en.png" alt="en" title="{{ __('English') }}">
                                                <span class="wpml-ls-native">{{ __('English') }}</span>
                                            </a>
                                            <ul class="ls-sub-menu">
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <img class="ls-flag" src="assets/images/flags/fr.png" alt="en" title="{ __('Français') }}">
                                                        <span class="wpml-ls-native">{{ __('Français') }}</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <img class="wpml-ls-flag" src="assets/images/flags/de.png" alt="de" title="{{ __('Deutsch') }}">
                                                        <span class="wpml-ls-native">{{ __('Deutsch') }}</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="header-search-form default-search">
                                    <form action="/" class="search-form-top">
                                        <input class="search-field" type="search" name="search" value="{{ request('search') }}" placeholder="{{ __('Search') }}">
                                        <button class="search-submit">
                                            <i class="search-btn-icon fa fa-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="mobile-navigation-icon d-block d-xl-none" id="mobile-menu-trigger">
                                <i></i>
                            </div>
                            <div class="hidden-icons-menu d-block d-md-none" id="hidden-icon-trigger">
                                <a href="javascript:void(0);">
                                    <i class="far fa-ellipsis-h-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
