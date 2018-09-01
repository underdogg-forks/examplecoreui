<header class="app-header navbar">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    {{--{{ route('dashboard.index')}}--}}
    <a href="#" class="navbar-brand">
        <span class="navbar-brand-full">{{ config('fi.headerTitleText') }}</span>
        {{--<img src="{{ asset('assets/img/ip_logo_1x1.svg') }}" alt="{{ config('fi.headerTitleText') }}"
                class="navbar-brand-minimized">--}}
    </a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="nav navbar-nav ml-auto d-md-down-none">
        <li class="nav-item dropdown px-3">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                @lang('ip.settings')
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

            <a class="dropdown-item" href="">@lang('ip.addons')</a>
                <a class="dropdown-item" href="">@lang('ip.currencies')</a>
                <a class="dropdown-item" href="">@lang('ip.custom_fields')</a>
                <a class="dropdown-item" href="">@lang('ip.company_profiles')</a>
                <a class="dropdown-item" href="">@lang('ip.export_data')</a>
                <a class="dropdown-item" href="">@lang('ip.groups')</a>
                <a class="dropdown-item" href="">@lang('ip.import_data')</a>
                <a class="dropdown-item" href="">@lang('ip.item_lookups')</a>
                <a class="dropdown-item" href="">@lang('ip.mail_log')</a>
                <a class="dropdown-item" href="">@lang('ip.payment_methods')</a>
                <a class="dropdown-item" href="">@lang('ip.tax_rates')</a>
                <a class="dropdown-item" href="">@lang('ip.user_accounts')</a>
                <a class="dropdown-item" href="">@lang('ip.system_settings')</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle pr-3" data-toggle="dropdown" href="#" role="button"
               aria-haspopup="true" aria-expanded="false">
                @if (config('fi.displayProfileImage'))
                    <img src="{{ $profileImageUrl }}" alt="User Image"/>
                @else
                {{--{{ $userName }}--}}
                @endif
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header text-center">
                    <strong>Account</strong>
                </div>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-bell-o"></i> Updates
                    <span class="badge badge-info">42</span>
                </a>
                <div class="divider"></div>
                {{--{{ route('session.logout') }}--}}
                <a class="dropdown-item" href="#">
                    <i class="fa fa-lock"></i> Logout
                </a>
            </div>
        </li>
    </ul>
</header>
