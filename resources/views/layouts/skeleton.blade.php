<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Helpdesk @yield('title')</title>

    @livewireStyles

    <link rel="stylesheet" href="{{ asset('/custom/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/mazer-theme/compiled/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/mazer-theme/compiled/css/app-dark.css') }}">
</head>

<body>
    <div id="app">
        <div id="sidebar">
            @include('layouts.side-menu')
        </div>

        <div id="main" class='layout-navbar navbar-fixed'>

            <header>
                <nav class="navbar navbar-expand navbar-top">
                    <div class="container-fluid">
                        <a href="#" class="burger-btn d-block">
                            <i class="bi bi-justify fs-3"></i>
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-lg-0">
                            </ul>

                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="user-menu d-flex">
                                        <div class="user-name text-end me-3">
                                            <h6 class="mb-0 text-gray-600">John Ducky</h6>
                                            <p class="mb-0 text-sm text-gray-600">Administrator</p>
                                        </div>
                                        <div class="user-img d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                                <img src="./assets/compiled/jpg/1.jpg">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>

            <div id="main-content">
                {{-- main content --}}
                @section('content')
                @show
            </div>

        </div>
    </div>

    @livewireScripts

    <script src="{{ asset('/mazer-theme/static/js/initTheme.js') }}"></script>
    <script src="{{ asset('/mazer-theme/static/js/components/dark.js') }}"></script>
    <script src="{{ asset('/mazer-theme/extensions/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('/mazer-theme/compiled/js/app.js') }}"></script>
</body>

</html>
