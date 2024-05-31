<div class="app-sidebar-menu overflow-hidden flex-column-fluid">

    <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5"
        data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto"
        data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
        data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px">

        <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold px-3"
            id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">

            <div class="menu-item here show menu-accordion">

                <a href="/">
                    <span class="menu-link">

                        <span class="menu-icon">
                            <img src="https://img.icons8.com/fluency/28/null/dashboard-layout.png"/>
                        </span>
                        <span class="menu-title"> Dashboards</span>

                    </span>
                </a>


            </div>


            <div class="menu-item here show menu-accordion">

                <a href="services">
                    <span class="menu-link">

                        <span class="menu-icon">
                            <img src="https://img.icons8.com/neon/28/null/services.png"/>
                        </span>

                        <span class="menu-title">Services</span>

                    </span>
                </a>


            </div>
            <div class="menu-item here show menu-accordion">

                <a href="/domain">
                    <span class="menu-link">

                        <span class="menu-icon">
                            <img src="https://img.icons8.com/color/28/domain--v1.png" />
                        </span>

                        <span class="menu-title">Domains</span>

                    </span>
                </a>


            </div>
            <div class="menu-item here show menu-accordion">

                <a href="/tickets">
                    <span class="menu-link">

                        <span class="menu-icon">
                            <img  src="https://img.icons8.com/color/28/000000/two-tickets.png" />
                        </span>

                        <span class="menu-title">Tickets</span>

                    </span>
                </a>


            </div>
            <div class="menu-item here show menu-accordion">

                <a href="/ssl">
                    <span class="menu-link">

                        <span class="menu-icon">
                            <img  src="https://img.icons8.com/fluency/28/tls.png" />
                        </span>

                        <span class="menu-title">SSL</span>

                    </span>
                </a>


            </div>

            @if (Auth::user()->role == 'admin')

            <div class="menu-item here show menu-accordion">

                <a href="/clients">
                    <span class="menu-link">

                        <span class="menu-icon">
                            <img  src="https://img.icons8.com/fluency/28/group.png" />
                        </span>

                        <span class="menu-title">Cpanel Users</span>

                    </span>
                </a>


            </div>
            <div class="menu-item here show menu-accordion">

                <a href="/transactions">
                    <span class="menu-link">

                        <span class="menu-icon">
                            <img src="https://img.icons8.com/color-glass/28/transaction.png"/>
                        </span>

                        <span class="menu-title">Transactions</span>

                    </span>
                </a>


            </div>
            @endif

            <div class="menu-item here show menu-accordion">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf


                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                        <span class="menu-link">

                            <span class="menu-icon">
                                <img  src="https://img.icons8.com/fluency/28/exit--v1.png" />
                            </span>

                            <span class="menu-title">Logout</span>

                        </span>
                    </a>
                </form>


            </div>


        </div>

    </div>

</div>
