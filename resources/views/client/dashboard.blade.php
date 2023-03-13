@extends('layouts.main')
@section('content')
    <!--end::Head-->

    <body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true"
        data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true"
        data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true"
        class="app-default">

        <script>
            var defaultThemeMode = "dark";
            var themeMode;
            if (document.documentElement) {
                if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                    themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
                } else {
                    if (localStorage.getItem("data-bs-theme") !== null) {
                        themeMode = localStorage.getItem("data-bs-theme");
                    } else {
                        themeMode = defaultThemeMode;
                    }
                }
                if (themeMode === "system") {
                    themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
                }
                document.documentElement.setAttribute("data-bs-theme", themeMode);
            }
        </script>

        <div class="d-flex flex-column flex-root app-root" id="kt_app_root">

            <div class="app-page flex-column flex-column-fluid" id="kt_app_page">

                @include('layouts.topbar')

                <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

                    @include('layouts.sidebar')

                    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">

                        <div class="d-flex flex-column flex-column-fluid">

                            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">

                                <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">

                                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">

                                        <h1
                                            class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                                            Dashboard</h1>

                                    </div>

                                    <div class="d-flex align-items-center gap-2 gap-lg-3">


                                        <a href="#" class="btn btn-sm fw-bold btn-primary">Order New Service</a>

                                    </div>

                                </div>

                            </div>
                            <div id="kt_app_content" class="app-content flex-column-fluid">

                                <div id="kt_app_content_container" class="app-container container-xxl">
                                    <div class="row g-5 g-xl-10 mb-xl-10">
                                        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">

                                            <div
                                                class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-center border-0 h-md-50 mb-5 mb-xl-10">

                                                <div class="card-header pt-5">

                                                    <a href="">
                                                        <div class="card-title d-flex flex-column">

                                                            <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">0</span>

                                                            <span
                                                                class="text-gray-400 pt-1 fw-semibold fs-6">Services</span>

                                                        </div>
                                                    </a>

                                                </div>


                                            </div>

                                            <div class="card card-flush h-md-50 mb-5 mb-xl-10">

                                                <div class="card-header pt-5">

                                                    <a href="">
                                                        <div class="card-title d-flex flex-column">

                                                            <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">0</span>

                                                            <span
                                                                class="text-gray-400 pt-1 fw-semibold fs-6">Domains</span>

                                                        </div>
                                                    </a>

                                                </div>


                                            </div>

                                        </div>

                                        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">

                                            <div class="card card-flush h-md-50 mb-5 mb-xl-10">

                                                <div class="card-header pt-5">

                                                    <a href="">
                                                        <div class="card-title d-flex flex-column">

                                                            <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">0</span>

                                                            <span
                                                                class="text-gray-400 pt-1 fw-semibold fs-6">Tickets</span>

                                                        </div>
                                                    </a>

                                                </div>


                                            </div>

                                            <div class="card card-flush h-lg-50">

                                                <div class="card-header pt-5">

                                                    <a href="">
                                                        <div class="card-title d-flex flex-column">

                                                            <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">0</span>

                                                            <span
                                                                class="text-gray-400 pt-1 fw-semibold fs-6">Invoices</span>

                                                        </div>
                                                    </a>
                                                </div>


                                            </div>

                                        </div>

                                        <div class="col-lg-12 col-xl-12 col-xxl-6 mb-5 mb-xl-0">

                                            <div class="card h-md-100">

                                                <div class="card-header border-0 pt-5">
                                                    <h3 class="card-title align-items-start flex-column">
                                                        <span class="card-label fw-bold text-dark">Latest
                                                            Transactions</span>

                                                    </h3>

                                                </div>


                                            </div>


                                        </div>

                                    </div>


                                </div>

                            </div>

                        </div>

                        <div id="kt_app_footer" class="app-footer">

                            <div
                                class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">

                                <div class="text-dark order-2 order-md-1">
                                    <span class="text-muted fw-semibold me-1">2023&copy;</span>
                                    <a href="https://oucheshosting.com" target="_blank"
                                        class="text-gray-800 text-hover-primary">Ouches Hosting</a>
                                </div>


                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        @include('layouts.help')
    @endsection
