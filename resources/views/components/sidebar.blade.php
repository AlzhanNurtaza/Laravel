<nav class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
    <div class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
        <button class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" type="button" onclick="toggleNavbar('example-collapse-sidebar')">
            <i class="fas fa-bars"></i>
        </button>
        <a class="md:block text-left md:pb-2 text-blueGray-700 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0" href="{{ route('admin.home') }}">
            {{ trans('panel.site_title') }}
        </a>
        <div class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden" id="example-collapse-sidebar">
            <div class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-blueGray-300">
                <div class="flex flex-wrap">
                    <div class="w-6/12">
                        <a class="md:block text-left md:pb-2 text-blueGray-700 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0" href="{{ route('admin.home') }}">
                            {{ trans('panel.site_title') }}
                        </a>
                    </div>
                    <div class="w-6/12 flex justify-end">
                        <button type="button" class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" onclick="toggleNavbar('example-collapse-sidebar')">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>



            <!-- Divider -->
            <div class="flex md:hidden">
                @if(file_exists(app_path('Http/Livewire/LanguageSwitcher.php')))
                    <livewire:language-switcher />
                @endif
            </div>
            <hr class="mb-6 md:min-w-full" />
            <!-- Heading -->

            <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                <li class="items-center">
                    <a href="{{ route("admin.home") }}" class="{{ request()->is("admin") ? "sidebar-nav-active" : "sidebar-nav" }}">
                        <i class="fas fa-tv"></i>
                        {{ trans('global.dashboard') }}
                    </a>
                </li>

                @can('user_management_access')
                    <li class="items-center">
                        <a class="has-sub {{ request()->is("admin/permissions*")||request()->is("admin/roles*")||request()->is("admin/users*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="#" onclick="window.openSubNav(this)">
                            <i class="fa-fw fas c-sidebar-nav-icon fa-users">
                            </i>
                            {{ trans('cruds.userManagement.title') }}
                        </a>
                        <ul class="ml-4 subnav hidden">
                            @can('permission_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/permissions*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.permissions.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-unlock-alt">
                                        </i>
                                        {{ trans('cruds.permission.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('role_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/roles*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.roles.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-briefcase">
                                        </i>
                                        {{ trans('cruds.role.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('user_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/users*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.users.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-user">
                                        </i>
                                        {{ trans('cruds.user.title') }}
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('kpi_general_access')
                    <li class="items-center">
                        <a class="has-sub {{ request()->is("admin/kpi-gen-anpzs*")||request()->is("admin/kpi-gen-pnhzs*")||request()->is("admin/kpi-gen-pkops*")||request()->is("admin/kpi-gen-c-bs*")||request()->is("admin/kpi-klpes*")||request()->is("admin/kpi-kpis*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="#" onclick="window.openSubNav(this)">
                            <i class="fa-fw fas c-sidebar-nav-icon fa-chart-line">
                            </i>
                            {{ trans('cruds.kpiGeneral.title') }}
                        </a>
                        <ul class="ml-4 subnav hidden">
                            @can('kpi_gen_anpz_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/kpi-gen-anpzs*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.kpi-gen-anpzs.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon far fa-chart-bar">
                                        </i>
                                        {{ trans('cruds.kpiGenAnpz.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('kpi_gen_pnhz_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/kpi-gen-pnhzs*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.kpi-gen-pnhzs.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon far fa-chart-bar">
                                        </i>
                                        {{ trans('cruds.kpiGenPnhz.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('kpi_gen_pkop_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/kpi-gen-pkops*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.kpi-gen-pkops.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon far fa-chart-bar">
                                        </i>
                                        {{ trans('cruds.kpiGenPkop.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('kpi_gen_c_b_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/kpi-gen-c-bs*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.kpi-gen-c-bs.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon far fa-chart-bar">
                                        </i>
                                        {{ trans('cruds.kpiGenCB.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('kpi_klpe_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/kpi-klpes*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.kpi-klpes.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon far fa-chart-bar">
                                        </i>
                                        {{ trans('cruds.kpiKlpe.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('kpi_kpi_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/kpi-kpis*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.kpi-kpis.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon far fa-chart-bar">
                                        </i>
                                        {{ trans('cruds.kpiKpi.title') }}
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('kpi_zpp_access')
                    <li class="items-center">
                        <a class="{{ request()->is("admin/kpi-zpps*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.kpi-zpps.index") }}">
                            <i class="fa-fw c-sidebar-nav-icon far fa-chart-bar">
                            </i>
                            {{ trans('cruds.kpiZpp.title') }}
                        </a>
                    </li>
                @endcan
            </ul>
        </div>
    </div>
</nav>