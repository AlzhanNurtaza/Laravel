<nav
    class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-nowrap md:justify-start flex items-center p-4">
    <div class="w-full mx-auto items-center flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4">
        <a class="text-white text-sm uppercase hidden lg:inline-block font-semibold" href="#">
            {{-- Dashboard --}}
        </a>

        {{-- If you use user icon and menu add margin mr-3 to search --}}
        {{-- <form class="md:flex hidden flex-row flex-wrap items-center lg:ml-auto mr-3"> --}}
        <form class="md:flex hidden flex-row flex-wrap items-center lg:ml-auto">

        </form>



        {{-- User icon and menu --}}


        <ul class="flex-col md:flex-row list-none items-center hidden md:flex">
            <a class="text-blueGray-500 block" href="#" onclick="openDropdown(event,'user-dropdown')">
                <div class="items-center flex ">
                    <i class="fa-fw c-sidebar-nav-icon fas fa-user-circle text-white"></i>
                    <p class="text-sm py-2 px-2 font-semibold block w-full whitespace-nowrap bg-transparent text-white">
                        {{ Auth::user()->name }}</p>
                </div>
            </a>
            <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                id="user-dropdown">
                <a href="{{ route('profile.show') }}"
                    class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                    <i class="fa-fw c-sidebar-nav-icon fas fa-user-circle"></i>
                    {{ trans('global.my_profile') }}
                </a>
                <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();"
                    class="sidebar-nav text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                    <i class="fa-fw fas fa-sign-out-alt"></i>
                    {{ trans('global.logout') }}
                </a>
            </div>
        </ul>

    </div>
</nav>
