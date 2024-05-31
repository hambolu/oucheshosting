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
                                    <div class="row g-5 g-xl-10 mb-xl-10 table-responsive">
                                        <div class="card">

                                            <table class="table align-middle table-row-dashed fs-6 gy-5 "
                                                id="kt_ecommerce_report_sales_table ">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <!--begin::Table row-->
                                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                        <th class="text-start">Start Date</th>
                                                        <th class="text-start ">User</th>
                                                        {{-- <th class="text-start ">Email</th> --}}
                                                        <th class="text-start ">Domain</th>
                                                        <th class="text-start ">Plan</th>
                                                        <th class="text-start ">Disk Used</th>
                                                        <th class="text-start ">Disk Limit</th>
                                                        <th class="text-start">Status</th>
                                                        <th class="text-start">Action</th>
                                                    </tr>
                                                    <!--end::Table row-->
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody class="fw-semibold text-gray-600">
                                                    <!--begin::Table row-->
                                                    @forelse ($whmdata as $item)
                                                        <tr>
                                                            <!--begin::Date=-->
                                                            <td>{{ $item->startdate }}</td>
                                                            <!--end::Date=-->
                                                            <!--begin::No Orders=-->
                                                            <td class="text-start">{{ $item->user }}</td>
                                                            <!--end::No Orders=-->
                                                            <!--begin::Products sold=-->
                                                            {{-- <td class="text-start">{{ $item->email }}</td> --}}
                                                            <!--end::Products sold=-->
                                                            <!--begin::Tax=-->
                                                            <td class="text-start">{{ $item->domain }}</td>
                                                            <!--end::Tax=-->
                                                            <!--begin::Total=-->
                                                            <td class="text-start">{{ $item->plan }}</td>
                                                            <td class="text-start">{{ $item->diskused }}</td>
                                                            <td class="text-start">{{ $item->disklimit }}</td>
                                                            <td class="text-start">
                                                                @if ($item->suspended == 0)
                                                                    <span class="bg-primary text-white p-3 rounded">Active</span>
                                                                @else
                                                                <span class="bg-danger text-white p-2 rounded">InActive</span>
                                                                @endif
                                                            </td>
                                                            <td class="text-start">
                                                                @if ($item->suspended == 0)
                                                                    <a href="http://" class="btn btn-sm fw-bold btn-warning">Suspend</a>
                                                                @else
                                                                <a href="http://" class="btn btn-sm fw-bold btn-warning">Unsuspend</a>
                                                                @endif
                                                            </td>
                                                            <!--end::Total=-->
                                                        </tr>
                                                        <!--end::Table row-->
                                                    @empty
                                                    @endforelse


                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
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
