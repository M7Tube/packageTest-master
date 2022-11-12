<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    @yield('head')
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/dashboard_spcial.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    @livewireStyles
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading main-color no-select">Cloud Report</div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('dashboard') }}">
                    <svg width="18" height="18" viewBox="0 0 24 24" class="mb-1">
                        <g id="icons/nav/dashboard" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                            stroke-linecap="round" stroke-linejoin="round">
                            <polygon id="Path"
                                stroke="{{ request()->routeIs('dashboard') ? '#4740d4' : '#212529' }}" stroke-width="2"
                                points="12 3.40909091 3.42857143 9.95454545 3.42857143 20.5909091 9.42857143 20.5909091 9.42857143 14.8636364 14.5714286 14.8636364 14.5714286 20.5909091 20.5714286 20.5909091 20.5714286 9.95454545">
                            </polygon>
                        </g>
                    </svg>
                    <span style="color:{{ request()->routeIs('dashboard') ? '#4740d4' : '#212529' }};">Dashboard</span>
                </a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('index.template') }}">
                    <svg width="18" height="18" viewBox="0 0 24 24">
                        <g id="icons/nav/templates" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M15.9130435,4.42105263 L15.9130435,19.5789474" id="Path" stroke="{{ request()->routeIs('index.template') ? '#4740d4' : '#212529' }}"
                                stroke-width="1.5"></path>
                            <path d="M3.39130435,9.47368421 L15.9130435,9.47368421" id="Path" stroke="{{ request()->routeIs('index.template') ? '#4740d4' : '#212529' }}"
                                stroke-width="1.5"></path>
                            <path d="M3.39130435,14.5263158 L15.9130435,14.5263158" id="Path" stroke="{{ request()->routeIs('index.template') ? '#4740d4' : '#212529' }}"
                                stroke-width="1.5"></path>
                            <rect id="Rectangle" stroke="{{ request()->routeIs('index.template') ? '#4740d4' : '#212529' }}" stroke-width="1.5" x="3.39130435" y="4.42105263"
                                width="17.2173913" height="15.1578947" rx="2"></rect>
                        </g>
                    </svg>
                    <span style="color:{{ request()->routeIs('index.template') ? '#4740d4' : '#212529' }};">Templates</span>
                </a>
            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn" id="sidebarToggle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="28" fill="currentColor"
                            class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                        </svg>
                    </button>
                </div>
            </nav>
            <!-- Page content-->
            @yield('body')
        </div>
    </div>
    @yield('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/dashboaed.js') }}"></script>
    @livewireScripts
</body>

</html>
