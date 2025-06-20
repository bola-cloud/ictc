<!DOCTYPE html>
<html class="loading" lang="en" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Ictc</title>
    <link rel="apple-touch-icon" href="{{asset("app-assets/images/ico/apple-icon-120.png")}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/ictc.jpeg')}}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
    rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
    rel="stylesheet">
    @if (app()->getLocale() == 'ar')
        <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css-rtl/core/colors/palette-gradient.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css-rtl/pages/timeline.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css-rtl/pages/dashboard-ecommerce.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("assets/css/style-rtl.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css-rtl/core/menu/menu-types/vertical-content-menu.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css-rtl/core/colors/palette-gradient.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css-rtl/app.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css-rtl/custom-rtl.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css-rtl/vendors.css")}}">
        <style>
            button.btn-close {
                margin-right: auto !important;
                margin-left: unset !important;
            }
        </style>
    @else
        <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/core/colors/palette-gradient.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/pages/timeline.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/pages/dashboard-ecommerce.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("assets/css/style.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/core/menu/menu-types/vertical-content-menu.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/core/colors/palette-gradient.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/app.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/custom.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/vendors.css")}}">
    @endif

    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/vendors/css/weather-icons/climacons.min.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/fonts/meteocons/style.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/vendors/css/charts/morris.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/vendors/css/charts/chartist.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/vendors/css/charts/chartist-plugin-tooltip.css")}}">

    <!-- END VENDOR CSS-->
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/fonts/simple-line-icons/style.css")}}">
    <link rel="stylesheet" type="text/css"href="{{asset("assets/css/style-rtl.css")}}">
    <link rel="stylesheet" type="text/css"href="{{asset("assets/css/custom.css")}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
    @stack('css')
  	@livewireStyles
    <style>
        @media (max-width: 720px) {
            .card.p-5 {
                padding: 0px !important;
            }
        }
    </style>
</head>
<body class="vertical-layout vertical-content-menu 2-columns menu-expanded fixed-navbar"
    data-open="click" data-menu="vertical-content-menu" data-col="2-columns">
    <!-- fixed-top-->
        <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-light navbar-hide-on-scroll navbar-border navbar-shadow navbar-brand-center">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item">
                        <a class="navbar-brand" href="{{route('home')}}">
                          <img class="brand-logo" alt="modern admin logo" src="{{asset('img/461161.png')}}"
                          style="height: 55px; width: 178px;">
                          {{-- <h3 class="brand-text">Screen Video </h3> --}}
                        </a>
                    </li>
                    <li class="nav-item d-md-none">
                        <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
                    </li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="nav-item">
                            <a class="nav-link" !data-widget="fullscreen"
                            href="{{ App::getLocale() == 'ar' ? LaravelLocalization::getLocalizedURL('en') : LaravelLocalization::getLocalizedURL('ar') }}"
                            role="button">
                                <span class="text-uppercase badge badge-pill badge-dark">{{ App::getLocale() == 'ar' ? 'en' : 'ar' }}</span>
                            </a>
                        </li>

                        <li class="dropdown dropdown-user nav-item">
                            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                @auth
                                <span class="mr-1">{{ __('lang.hello') }},
                                    <span class="user-name text-bold-700">{{ Auth::user()->name }}</span>
                                </span>
                                @endauth
                                @guest
                                <span class="mr-1">{{ __('lang.hello') }}, <span class="user-name text-bold-700">{{ __('lang.guest') }}</span></span>
                                @endguest
                                <span class="avatar avatar-online">
                                    <img src="{{ asset('app-assets/images/portrait/small/avatar-s-19.png') }}" alt="avatar"><i></i>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="ft-power"></i> {{ __('lang.logout') }}
                                </a>

                                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row"></div>
            <div class="main-menu menu-static menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
                <div class="main-menu-content">
                    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

                        <li class="nav-item {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}">
                            <a href="{{ route('dashboard') }}">
                                <i class="la la-share-alt"></i>
                                <span class="menu-title" data-i18n="nav.morris_charts.main">{{ __('lang.dashboard') }}</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="">
                                <i class="la la-tv"></i> <!-- Changed icon to represent TVs -->
                                <span class="menu-title" data-i18n="nav.dash.main">{{ __('lang.gallery_administration') }}</span>
                            </a>
                            <ul class="menu-content">
                                <li class="{{ Route::currentRouteName() == 'admin.galleries.index' ? 'active' : '' }}">
                                    <a class="menu-item" href="{{ route('admin.galleries.index') }}" data-i18n="nav.dash.crypto">{{ __('lang.index') }}</a>
                                </li>
                                <li class="{{ Route::currentRouteName() == 'admin.galleries.create' ? 'active' : '' }}">
                                    <a class="menu-item" href="{{ route('admin.galleries.create') }}" data-i18n="nav.dash.sales">{{ __('lang.create') }}</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#">
                                <i class="la la-newspaper-o"></i> <!-- News icon -->
                                <span class="menu-title" data-i18n="nav.dash.main">{{ __('lang.news_administration') }}</span>
                            </a>
                            <ul class="menu-content">
                                <li class="{{ Route::currentRouteName() == 'admin.news.index' ? 'active' : '' }}">
                                    <a class="menu-item" href="{{ route('admin.news.index') }}" data-i18n="nav.dash.crypto">{{ __('lang.index') }}</a>
                                </li>
                                <li class="{{ Route::currentRouteName() == 'admin.news.create' ? 'active' : '' }}">
                                    <a class="menu-item" href="{{ route('admin.news.create') }}" data-i18n="nav.dash.sales">{{ __('lang.create') }}</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#">
                                <i class="la la-image"></i> <!-- Main Banner icon -->
                                <span class="menu-title" data-i18n="nav.dash.main">{{ __('lang.banner_administration') }}</span>
                            </a>
                            <ul class="menu-content">
                                <li class="{{ Route::currentRouteName() == 'admin.main_banners.index' ? 'active' : '' }}">
                                    <a class="menu-item" href="{{ route('admin.main_banners.index') }}" data-i18n="nav.dash.crypto">{{ __('lang.index') }}</a>
                                </li>
                                <li class="{{ Route::currentRouteName() == 'admin.main_banners.create' ? 'active' : '' }}">
                                    <a class="menu-item" href="{{ route('admin.main_banners.create') }}" data-i18n="nav.dash.sales">{{ __('lang.create') }}</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#">
                                <i class="la la-image"></i> <!-- Main Banner icon -->
                                <span class="menu-title" data-i18n="nav.dash.main">{{ __('lang.user_administration') }}</span>
                            </a>
                            <ul class="menu-content">
                                <li class="{{ Route::currentRouteName() == 'admin.users.index' ? 'active' : '' }}">
                                    <a class="menu-item" href="{{ route('admin.users.index') }}" data-i18n="nav.dash.crypto">{{ __('lang.index') }}</a>
                                </li>
                                <li class="{{ Route::currentRouteName() == 'admin.users.create' ? 'active' : '' }}">
                                    <a class="menu-item" href="{{ route('admin.users.create') }}" data-i18n="nav.dash.sales">{{ __('lang.create') }}</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#">
                                <i class="la la-image"></i> <!-- Main Banner icon -->
                                <span class="menu-title" data-i18n="nav.dash.main">{{ __('lang.partners_administration') }}</span>
                            </a>
                            <ul class="menu-content">
                                <li class="{{ Route::currentRouteName() == 'admin.partners.index' ? 'active' : '' }}">
                                    <a class="menu-item" href="{{ route('admin.partners.index') }}" data-i18n="nav.dash.crypto">{{ __('lang.index') }}</a>
                                </li>
                                <li class="{{ Route::currentRouteName() == 'admin.partners.create' ? 'active' : '' }}">
                                    <a class="menu-item" href="{{ route('admin.partners.create') }}" data-i18n="nav.dash.sales">{{ __('lang.create') }}</a>
                                </li>
                                <li class="{{ Route::currentRouteName() == 'admin.partner_categories.index' ? 'active' : '' }}">
                                    <a class="menu-item" href="{{ route('admin.partner_categories.index') }}" data-i18n="nav.dash.sales">{{ __('lang.partner_categories') }}</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#">
                                <i class="la la-image"></i> <!-- Main Banner icon -->
                                <span class="menu-title" data-i18n="nav.dash.main">{{ __('lang.scopes_administration') }}</span>
                            </a>
                            <ul class="menu-content">
                                <li class="{{ Route::currentRouteName() == 'admin.scopes.index' ? 'active' : '' }}">
                                    <a class="menu-item" href="{{ route('admin.scopes.index') }}" data-i18n="nav.dash.crypto">{{ __('lang.index') }}</a>
                                </li>
                                <li class="{{ Route::currentRouteName() == 'admin.scopes.create' ? 'active' : '' }}">
                                    <a class="menu-item" href="{{ route('admin.scopes.create') }}" data-i18n="nav.dash.sales">{{ __('lang.create') }}</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#">
                                <i class="la la-cogs"></i> <!-- Services Icon -->
                                <span class="menu-title" data-i18n="nav.services.main">{{ __('lang.service_administration') }}</span>
                            </a>
                            <ul class="menu-content">
                                <li class="{{ Route::currentRouteName() == 'admin.services.index' ? 'active' : '' }}">
                                    <a class="menu-item" href="{{ route('admin.services.index') }}" data-i18n="nav.services.index">{{ __('lang.index') }}</a>
                                </li>
                                <li class="{{ Route::currentRouteName() == 'admin.services.create' ? 'active' : '' }}">
                                    <a class="menu-item" href="{{ route('admin.services.create') }}" data-i18n="nav.services.create">{{ __('lang.create') }}</a>
                                </li>
                            </ul>
                        </li>

                        <!-- 🔽 New Team Management Section -->
                        <li class="nav-item">
                            <a href="#">
                                <i class="la la-users"></i> <!-- Team Icon -->
                                <span class="menu-title" data-i18n="nav.team.main">{{ __('lang.team_administration') }}</span>
                            </a>
                            <ul class="menu-content">
                                <li class="{{ Route::currentRouteName() == 'admin.team_sections.index' ? 'active' : '' }}">
                                    <a class="menu-item" href="{{ route('admin.team_sections.index') }}" data-i18n="nav.team_sections.index">{{ __('lang.team_sections_index') }}</a>
                                </li>
                                <li class="{{ Route::currentRouteName() == 'admin.team_members.index' ? 'active' : '' }}">
                                    <a class="menu-item" href="{{ route('admin.team_members.index') }}" data-i18n="nav.team_members.index">{{ __('lang.team_members_index') }}</a>
                                </li>
                            </ul>
                        </li>

                        <!-- 🔽 Interest Administration Section -->
                        <li class="nav-item">
                            <a href="#">
                                <i class="la la-file-alt"></i> <!-- Icon for Interests -->
                                <span class="menu-title" data-i18n="nav.interests.main">{{ __('lang.interest_administration') }}</span>
                            </a>
                            <ul class="menu-content">
                                <li class="{{ Route::currentRouteName() == 'admin.interests.jobs.index' ? 'active' : '' }}">
                                    <a class="menu-item" href="{{ route('admin.interests.jobs.index') }}" data-i18n="nav.interests.jobs">{{ __('lang.job_interests') }}</a>
                                </li>
                                <li class="{{ Route::currentRouteName() == 'admin.interests.consultancies.index' ? 'active' : '' }}">
                                    <a class="menu-item" href="{{ route('admin.interests.consultancies.index') }}" data-i18n="nav.interests.consultancies">{{ __('lang.consultancy_interests') }}</a>
                                </li>
                                <li class="{{ Route::currentRouteName() == 'admin.interests.internships.index' ? 'active' : '' }}">
                                    <a class="menu-item" href="{{ route('admin.interests.internships.index') }}" data-i18n="nav.interests.internships">{{ __('lang.internship_interests') }}</a>
                                </li>
                            </ul>
                        </li>

                        <!-- 🔽 Vacancy Administration Section -->
                        <li class="nav-item">
                            <a href="#">
                                <i class="la la-briefcase"></i> <!-- Icon for Vacancies -->
                                <span class="menu-title" data-i18n="nav.vacancies.main">{{ __('lang.vacancy_administration') }}</span>
                            </a>
                            <ul class="menu-content">
                                <li class="{{ Route::currentRouteName() == 'admin.jobs.index' ? 'active' : '' }}">
                                    <a class="menu-item" href="{{ route('admin.jobs.index') }}" data-i18n="nav.vacancies.jobs">{{ __('lang.job_vacancies') }}</a>
                                </li>
                                <li class="{{ Route::currentRouteName() == 'admin.consultancies.index' ? 'active' : '' }}">
                                    <a class="menu-item" href="{{ route('admin.consultancies.index') }}" data-i18n="nav.vacancies.consultancies">{{ __('lang.consultancy_vacancies') }}</a>
                                </li>
                                <li class="{{ Route::currentRouteName() == 'admin.internships.index' ? 'active' : '' }}">
                                    <a class="menu-item" href="{{ route('admin.internships.index') }}" data-i18n="nav.vacancies.internships">{{ __('lang.internship_vacancies') }}</a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item {{ Route::currentRouteName() == 'admin.messages.index' ? 'active' : '' }}">
                            <a href="{{ route('admin.messages.index') }}">
                                <i class="la la-share-alt"></i>
                                <span class="menu-title" data-i18n="nav.morris_charts.main">{{ __('lang.show_messages') }}</span>
                            </a>
                        </li>

                        <li class="nav-item {{ Route::currentRouteName() == 'admin.settings.index' ? 'active' : '' }}">
                            <a href="{{ route('admin.settings.index') }}">
                                <i class="la la-cog"></i>
                                <span class="menu-title" data-i18n="nav.settings">{{ __('lang.settings') }}</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="content-body">
                {{-- {{ $slot }} --}}
                @yield('content')
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <footer class="footer footer-static footer-light navbar-border">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
        <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2025 <a class="text-bold-800 grey darken-2"
            target="_blank">Bola </a>, All rights reserved. </span>
        </p>
    </footer>
    <!-- BEGIN VENDOR JS-->
    <script src="{{asset("app-assets/vendors/js/vendors.min.js")}}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{asset("app-assets/vendors/js/ui/headroom.min.js")}}" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="{{asset("app-assets/vendors/js/charts/raphael-min.js")}}" type="text/javascript"></script>
    <script src="{{asset("app-assets/vendors/js/charts/morris.min.js")}}" type="text/javascript"></script>
    <script src="{{asset("app-assets/vendors/js/timeline/horizontal-timeline.js")}}" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->
    <script src="{{asset("app-assets/js/core/app-menu.js")}}" type="text/javascript"></script>
    <script src="{{asset("app-assets/js/core/app.js")}}" type="text/javascript"></script>
    <script src="{{asset("app-assets/js/scripts/customizer.js")}}" type="text/javascript"></script>
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    {{-- <script src="{{asset("app-assets/js/scripts/pages/dashboard-ecommerce.js")}}" type="text/javascript"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.13.0/Sortable.min.js"></script>

    <script>
        document.addEventListener('livewire:load', function () {
            let sortableList = document.getElementById('sortable-list');
            let confirmButton = document.getElementById('confirm-order-btn');
            let updatedOrder = [];

            // Ensure that the sortableList exists in the DOM
            if (sortableList) {
                // Initialize SortableJS manually
                new Sortable(sortableList, {
                    animation: 150,
                    handle: 'div',
                    onEnd: function (event) {
                        // Capture the new order
                        updatedOrder = Array.from(event.target.children).map((el, index) => el.getAttribute('wire:sortable.item'));

                        // Show the confirm button
                        confirmButton.style.display = 'block';
                    }
                });
            }

            // Handle the confirm button click
            confirmButton.addEventListener('click', function () {
                // Emit the Livewire event with the updated order
                Livewire.emit('updateOrder', updatedOrder);

                // Hide the confirm button after order is confirmed
                confirmButton.style.display = 'none';
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to check body class and toggle the visibility of all h3 elements with class menu-title
            function checkBodyClass() {
                var body = document.body;
                var menuTitles = document.querySelectorAll('h3.menu-title');

                menuTitles.forEach(function(title) {
                    if (body.classList.contains('menu-collapsed')) {
                        title.style.display = 'none';
                    } else {
                        title.style.display = 'block';
                    }
                });
            }

            // Initial check
            checkBodyClass();

            // Monitor class changes on the body element
            var observer = new MutationObserver(checkBodyClass);
            observer.observe(document.body, { attributes: true, attributeFilter: ['class'] });
        });
    </script>

    @livewireScripts
    @stack('js')

</body>
</html>
