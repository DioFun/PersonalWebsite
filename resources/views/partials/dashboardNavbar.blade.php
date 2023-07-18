<header>
    <div class="h-12 flex place-content-between content-center text-2xl text-white">
        <div class="sm:hidden my-auto"><i id="mobile-menu" class="fa-solid fa-bars w-6 ml-4 my-auto text-right"><div class="sr-only">Menu</div></i></div>
        <a href="{{ route('publicHome') }}" class="my-auto"><i class="fa-solid fa-home w-6 my-auto mx-4 mr-4"></i></a>
    </div>
    <div id="menu" class="hidden h-auto select-none sm:block">
        <div class="sm:flex sm:flex-col">
            <a href="{{ route('adminHome') }}" class="py-4 group h-auto w-auto sm:hover:bg-blue-500 sm:dark:hover:bg-blue-700 sm:px-6 lg:px-12">
                <div class="group-hover:bg-blue-500 dark:group-hover:bg-blue-700 py-2 text-center h-full w-full text-2xl block sm:table sm:py-0">
                    <span class="sm:table-cell sm:align-middle">Home</span>
                </div>
            </a>
            <a href="{{ route('adminAbout') }}" class="py-4 group h-auto w-auto sm:hover:bg-blue-500 sm:dark:hover:bg-blue-700 lg:px-12 sm:px-6">
                <div class="group-hover:bg-blue-500 dark:group-hover:bg-blue-700 py-2 text-center h-full w-full text-2xl block sm:table sm:py-0">
                    <span class="sm:table-cell sm:align-middle">About</span>
                </div>
            </a>
            <a href="#Projects" class="py-4 group h-auto w-auto sm:hover:bg-blue-500 sm:dark:hover:bg-blue-700 sm:px-6 lg:px-12">
                <div class="group-hover:bg-blue-500 dark:group-hover:bg-blue-700 py-2 text-center h-full w-full text-2xl block sm:table sm:py-0">
                    <span class="sm:table-cell sm:align-middle">Projects</span>
                </div>
            </a>
            <a href="{{ route('adminMessages') }}" class="py-4 group h-auto w-auto sm:hover:bg-blue-500 sm:dark:hover:bg-blue-700 sm:px-6 lg:px-12">
                <div class="group-hover:bg-blue-500 dark:group-hover:bg-blue-700 py-2 text-center h-full w-full text-2xl block sm:table sm:py-0">
                    <span class="sm:table-cell sm:align-middle">Messages</span>
                </div>
            </a>
            <a href="#" class="py-4 group h-auto w-auto sm:hover:bg-blue-500 sm:dark:hover:bg-blue-700 sm:px-6 lg:px-12">
                <div class="group-hover:bg-blue-500 dark:group-hover:bg-blue-700 py-2 text-center h-full w-full text-2xl block sm:table sm:py-0">
                    <span class="sm:table-cell sm:align-middle">Users</span>
                </div>
            </a>
            <a href="#" class="py-4 group h-auto w-auto sm:hover:bg-blue-500 sm:dark:hover:bg-blue-700 sm:px-6 lg:px-12">
                <div class="group-hover:bg-blue-500 dark:group-hover:bg-blue-700 py-2 text-center h-full w-full text-2xl block sm:table sm:py-0">
                    <span class="sm:table-cell sm:align-middle">Account</span>
                </div>
            </a>
            <a href="{{ route('logout') }}" class="py-4 group h-auto w-auto sm:hover:bg-blue-500 sm:dark:hover:bg-blue-700 sm:px-6 lg:px-12">
                <div class="group-hover:bg-blue-500 dark:group-hover:bg-blue-700 py-2 text-center h-full w-full text-2xl block sm:table sm:py-0">
                    <span class="sm:table-cell sm:align-middle">Logout</span>
                </div>
            </a>
        </div>
    </div>
</header>


<!--
<i class="mr-2 fa-solid fa-power-off"></i>
-->