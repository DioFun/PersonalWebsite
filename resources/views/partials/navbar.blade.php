<header>
    <div class="h-12 bg-primary-light dark:bg-primary-dark flex place-content-between content-center sm:hidden text-2xl text-white">
        <i id="mobile-menu" class="fa-solid fa-bars w-6 mr-4 ml-4 my-auto text-right"><div class="sr-only">Menu</div></i>
        @if((session()->get('user')) && session()->get('user')['admin'] == true)<a href="{{ route('adminHome') }}" class="my-auto"><i class="fa-solid fa-toolbox w-6"></i><div class="sr-only">Dashboard</div></a>@endif
        @if((session()->get('user')))<a href="{{ route('logout') }}" class="my-auto"><i class="fa-solid fa-power-off w-6 ml-4 mr-4 my-auto"></i><div class="sr-only">Logout</div></a>@endif
    </div>
    <div id="menu" class="hidden h-auto bg-primary-light dark:bg-primary-dark sm:h-16 sm:flex sm:flex-row sm:place-content-between select-none text-white">
        <div class="hidden sm:flex ml-4 text-2xl my-auto transition-all duration-200">
            @if((session()->get('user')) && session()->get('user')['admin'] == true)<a href="{{ route('adminHome') }}"><i class="fa-solid fa-toolbox"></i><div class="sr-only">Dashboard</div></a>@endif
        </div>
        <div class="sm:flex sm:flex-row">
            <a href="{{ route('publicHome') }}" class="group h-auto w-auto sm:hover:bg-secondary-light sm:dark:hover:bg-secondary-dark sm:px-6 lg:px-12 sm:hover:border-b-4 sm:hover:border-solid sm:hover:border-b-secondary-light dark:sm:hover:border-b-secondary-dark">
                <div class="group-hover:bg-secondary-light dark:group-hover:bg-secondary-dark py-2 text-center h-full w-full text-2xl sm:text-3xl block sm:table sm:py-0">
                    <span class="sm:table-cell sm:align-middle">Home</span>
                </div>
            </a>
            <a href="{{ route('publicAbout') }}" class="group h-auto w-auto sm:hover:bg-secondary-light sm:dark:hover:bg-secondary-dark lg:px-12 sm:px-6 sm:hover:border-b-4 sm:hover:border-solid sm:hover:border-b-secondary-light dark:sm:hover:border-b-secondary-dark">
                <div class="group-hover:bg-secondary-light dark:group-hover:bg-secondary-dark py-2 text-center h-full w-full text-2xl sm:text-3xl block sm:table sm:py-0">
                    <span class="sm:table-cell sm:align-middle">About</span>
                </div>
            </a>
            <a href="#Projects" class="group h-auto w-auto sm:hover:bg-secondary-light sm:dark:hover:bg-secondary-dark sm:px-6 lg:px-12 sm:hover:border-b-4 sm:hover:border-solid sm:hover:border-b-secondary-light dark:sm:hover:border-b-secondary-dark">
                <div class="group-hover:bg-secondary-light dark:group-hover:bg-secondary-dark py-2 text-center h-full w-full text-2xl sm:text-3xl block sm:table sm:py-0">
                    <span class="sm:table-cell sm:align-middle">Projects</span>
                </div>
            </a>
            <a href="{{ route('publicContact') }}" class="group h-auto w-auto sm:hover:bg-secondary-light sm:dark:hover:bg-secondary-dark sm:px-6 lg:px-12 sm:hover:border-b-4 sm:hover:border-solid sm:hover:border-b-secondary-light dark:sm:hover:border-b-secondary-dark">
                <div class="group-hover:bg-secondary-light dark:group-hover:bg-secondary-dark py-2 text-center h-full w-full text-2xl sm:text-3xl block sm:table sm:py-0">
                    <span class="sm:table-cell sm:align-middle">Contact</span>
                </div>
            </a>
        </div>
        <div class="hidden sm:flex text-2xl my-auto mr-4">
            @if((session()->get('user')))<a href="{{ route('logout') }}"><i class="fa-solid fa-power-off"></i><div class="sr-only">Logout</div></a>@endif
        </div>
    </div>
</header>