<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_box text-center">
                    <h2 class="breadcrumb-title">
                        {{ $breadcrumb }}
                    </h2>
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item">
                            <a href="{{ url('/') }}">
                                {{ __('Home') }}
                            </a>
                        </li>
                        <li class="breadcrumb-item active">
                            {{ $breadcrumb }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
