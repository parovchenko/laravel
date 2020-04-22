<div class="search-overlay" id="search-overlay">
    <div class="search-overlay__header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6 ml-auto col-4">
                    <div class="search-content text-right">
                        <span class="mobile-navigation-close-icon" id="search-close-trigger"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="search-overlay__inner">
        <div class="search-overlay__body">
            <div class="search-overlay__form">
                <form action="/">
                    <input type="search" name="search" value="{{ request('search') }}" placeholder="{{ __('Search') }}">
                </form>
            </div>
        </div>
    </div>
</div>
