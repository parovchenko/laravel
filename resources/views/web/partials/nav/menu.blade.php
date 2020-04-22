<ul>
    <li class="has-children{{ $notMobileMenu ? ' has-children--multilevel-submenu' : ''  }}">
        <a href="javascript:void(0);"><span>{{ __('Company') }}</span></a>
        <ul class="sub{{ $notMobileMenu ? '' : '-'  }}menu">
            <li><a href="{{ route('aboutUs') }}"><span>{{ __('About us') }}</span></a></li>
            <li><a href="{{ route('contactUs') }}"><span>{{ __('Contact us') }}</span></a></li>
            <li><a href="{{ route('leadership') }}"><span>{{ __('Leadership') }}</span></a></li>
            <li><a href="{{ route('whyChooseUs') }}"><span>{{ __('Why choose us') }}</span></a></li>
            <li><a href="{{ route('ourHistory') }}"><span>{{ __('Our history') }}</span></a></li>
            <li><a href="{{ route('careers') }}"><span>{{ __('Careers') }}</span></a></li>
        </ul>
    </li>
    <li class="has-children{{ $notMobileMenu ? ' has-children--multilevel-submenu' : ''  }}">
        <a href="javascript:void(0);"><span>{{ __('IT solutions') }}</span></a>
        <ul class="sub{{ $notMobileMenu ? '' : '-'  }}menu">
            <li><a href="javascript:void(0);"><span>{{ __('IT Services') }}</span></a></li>
            <li><a href="javascript:void(0);"><span>{{ __('Managed IT Services') }}</span></a></li>
            <li><a href="javascript:void(0);"><span>{{ __('Industries') }}</span></a></li>
            <li><a href="javascript:void(0);"><span>{{ __('Business solution') }}</span></a></li>
            <li><a href="javascript:void(0);"><span>{{ __('IT Services Details') }}</span></a></li>
        </ul>
    </li>
    <li class="has-children{{ $notMobileMenu ? ' has-children--multilevel-submenu' : ''  }}">
        <a href="javascript:void(0);"><span>{{ __('Case Studies') }}</span></a>
        <ul class="sub{{ $notMobileMenu ? '' : '-'  }}menu">
            <li><a href="javascript:void(0);"><span>{{ __('Case Studies 01') }}</span></a></li>
            <li><a href="javascript:void(0);"><span>{{ __('Case Studies 02') }}</span></a></li>
            <li><a href="javascript:void(0);"><span>{{ __('Single Layout') }}</span></a></li>
        </ul>
    </li>
    <li>
        <a href="javascript:void(0);"><span>Blog</span></a>
    </li>
</ul>
