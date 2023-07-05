<span
    class="absolute text-white text-4xl top-5 left-4 cursor-pointer"
    onclick="openSidebar()"
>
    <i class="fa-solid fa-bars  px-2 bg-gray-900 rounded-md"></i>
    </span>
<div
    class="sidebar fixed top-0 bottom-0 lg:left-0 p-2 w-[300px] overflow-y-auto text-center bg-gray-900"
>
    <div class="text-gray-100 text-xl">
        <div class="p-2.5 mt-1 flex items-center">
            <i class="fa-brands fa-squarespace"></i>
            <h1 class="font-bold text-gray-200 text-[15px] ml-3">Dashboard</h1>
            <i class="fa-solid fa-xmark cursor-pointer ml-28 lg:hidden" onclick="openSidebar()"></i>
        </div>
        <div class="my-2 bg-gray-600 h-[1px]"></div>
    </div>

    <div
        class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
    >
        <i class="fa-solid fa-house"></i>
        <span class="text-[15px] ml-4 text-gray-200 font-bold">Home</span>
    </div>
    <div
        class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
    >
        <i class="fa-solid fa-bookmark"></i>
        <span class="text-[15px] ml-4 text-gray-200 font-bold">Bookmark</span>
    </div>
    <div class="my-4 bg-gray-600 h-[1px]"></div>
    <div
        class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
        onclick="dropdown()"
    >
        <i class="fa-solid fa-user"></i>
        <div class="flex justify-between w-full items-center">
            <span class="text-[15px] ml-4 text-gray-200 font-bold">User Management</span>
            <span class="text-sm" id="arrow">
            <i class="fa-solid fa-chevron-up"></i>
          </span>
        </div>
    </div>
    <div
        class="text-left text-sm mt-2 w-4/5 mx-auto text-gray-200 font-bold"
        id="submenu"
    >
        <a href="{{ route('admin.users.index') }}"><h1
                class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1 {{request()->routeIs('admin.users.index') ? 'bg-blue-600' : ''}}">
                Users</h1>
        </a>

        <a href="{{ route('admin.roles.index') }}"><h1
                class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1 {{request()->routeIs('admin.roles.index') ? 'bg-blue-600' : ''}}">
                Roles</h1>
        </a>

        <a href="{{route('admin.permissions.index')}}">
            <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1 {{request()->routeIs('admin.permissions.index') ? 'bg-blue-600' : ''}}">
                Permissions
            </h1>
        </a>

    </div>
    <form method="POST" action="{{ route('logout') }}">
        <div
            class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
            onclick="event.preventDefault();this.closest('form').submit();"
        >
            <i class="fa-solid fa-right-from-bracket"></i>
            @csrf

            <span class="text-[15px] ml-4 text-gray-200 font-bold"
                  onclick="event.preventDefault();this.closest('form').submit();">
                Logout
            </span>

        </div>
    </form>
</div>

<script type="text/javascript">
    function dropdown() {
        document.querySelector("#submenu").classList.toggle("hidden");
        document.querySelector("#arrow").classList.toggle("rotate-180");
    }
    dropdown();
    function openSidebar() {
        document.querySelector(".sidebar").classList.toggle("hidden");
    }
</script>
