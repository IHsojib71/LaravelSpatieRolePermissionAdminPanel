<aside class="flex flex-col" :class="{ 'hidden sm:flex sm:flex-col': window.outerWidth > 768 }">
    <a href="#"
        class="inline-flex items-center justify-center h-20 w-full bg-blue-600 hover:bg-blue-500 focus:bg-blue-500">
        <svg class="h-12 w-12 text-white" fill="currentColor" version="1.1" viewBox="0 0 215 215" stroke="none"
            xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#"
            xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:osb="http://www.openswatchbook.org/uri/2009/osb"
            xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
            <title>Company logo</title>
            <path transform="matrix(1.28 0 0 1.28 13.057 10.462)"
                d="m121.65 15.95-11.2 11.2q-5.9-4.75-12.8-7.3-5.7-2.35-10.05-3.15v-16.7h-22.8v16.35l-6.9 1.75q-8.1 2.55-16.15 7.5l-11.6-11.65-15.95 15.75 11.8 11.65q-6.1 8.85-8.85 19.65l-0.8 4.55h-16.35v21.65h16.75l2.15 7.45q2.35 7.9 7.3 14.4l-12 11.6 15.35 15.35 12-11.8 6.5 3.95q8.85 4.3 16.75 5.7v16.15h22.8v-16.55q8.05-1.8 15.75-5.7l5.55-3.35 11.4 11.4 16.15-16.15-11.25-11.4q5.1-7.85 7.5-16.9l1.2-4.15h16.1v-21.65h-15.75q-1.55-8.5-4.5-15.35l-3.55-5.9 12-12.05-16.55-16.3m-7.65 58.85q-0.05 15.9-11.25 27.55-11.6 11-27.55 11-16.15 0-27.55-11.4-11.2-10.85-11.2-27.15 0-15.95 11.2-27.55 11.8-11.25 27.55-11.25 15.75 0 27.55 11.25 11.2 11.8 11.25 27.55"
                stroke-linecap="square" stroke-width="1" />
            <path transform="matrix(.34872 0 0 .34872 83.818 78.7)"
                d="m144.75 65.137-94.088 94.088-50.662-50.663v-65.138l50.662 50.663 94.088-94.088v65.137"
                stroke-linecap="square" stroke-width="6" />
        </svg>
        <span class="text-white text-4xl ml-2" x-show="menu">Best</span>
    </a>
    <div class="flex-grow flex flex-col justify-between text-gray-500 bg-gray-800">
        <nav class="flex flex-col mx-4 my-6 space-y-4">

            <a href="{{ route('admin.index') }}"
                class="inline-flex items-center py-3 rounded-lg hover:text-gray-400 hover:bg-gray-700 {{request()->routeIs('admin.index') ? 'text-blue-600 bg-white rounded-lg ' : ''}} px-2"
                :class="{ 'justify-start': menu, 'justify-center': menu == false }">
                <i class="fa-solid fa-chart-column h-4 w-6"></i>
                <span class="ml-2" x-show="menu">Dashboard</span>
            </a>
            <a href="{{route('admin.users.index')}}"
            class="inline-flex items-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg px-2
            {{request()->routeIs('admin.users.index') ? 'text-blue-600 bg-white rounded-lg ' : ''}} "
            :class="{ 'justify-start': menu, 'justify-center': menu == false }">
            <i class="fa-regular fa-user h-4 w-4"></i>
            <span class="ml-2" x-show="menu">Users</span>
        </a>
        <a href="{{route('admin.roles.index')}}"
            class="inline-flex items-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg px-2
            {{request()->routeIs('admin.roles.index') ? 'text-blue-600 bg-white rounded-lg ' : ''}} "
            :class="{ 'justify-start': menu, 'justify-center': menu == false }">
            <i class="fa-regular fa-user h-4 w-4"></i>
            <span class="ml-2" x-show="menu">Roles</span>
        </a>
        <a href="{{route('admin.permissions.index')}}"
            class="inline-flex items-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg px-2
            {{request()->routeIs('admin.permissions.index') ? 'text-blue-600 bg-white rounded-lg ' : ''}} "
            :class="{ 'justify-start': menu, 'justify-center': menu == false }">
            <i class="fa-solid fa-shield-halved h-4 w-4"></i>
            <span class="ml-2" x-show="menu">Permissions</span>
        </a>
            {{-- <div   class="inline-flex items-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg px-2"
                onclick="dropdown()"
                :class="{ 'justify-start': menu, 'justify-center': menu == false }"
                >
                <i class="fa-solid fa-user"></i>
        
                <div class="flex justify-between items-center">
                    <span class="mx-2">Users</span>
                    <span class="text-sm" id="arrow">
                        <i class="fa-solid fa-chevron-up"></i>
                    </span>
                </div>
            </div>
            <div class="flex flex-col" id="submenu">
                <a href="{{route('admin.users.index')}}"
                class="inline-flex items-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg px-2"
                :class="{ 'justify-start': menu, 'justify-center': menu == false }">
                <i class="fa-regular fa-user h-4 w-6"></i>
                <span class="ml-2" x-show="menu">Users</span>
            </a>
            <a href="{{route('admin.roles.index')}}"
                class="inline-flex items-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg px-2"
                :class="{ 'justify-start': menu, 'justify-center': menu == false }">
                <i class="fa-regular fa-user h-4 w-6"></i>
                <span class="ml-2" x-show="menu">Roles</span>
            </a>
            <a href="{{route('admin.permissions.index')}}"
                class="inline-flex items-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg px-2"
                :class="{ 'justify-start': menu, 'justify-center': menu == false }">
                <i class="fa-solid fa-shield-halved h-4 w-6"></i>
                <span class="ml-2" x-show="menu">Permissions</span>
            </a>
            </div>



        </nav>
        <div class="flex justify-end">
            <a
                class="inline-flex p-3 hover:text-gray-400 justify-center border-gray-700 h-15 w-full border-t hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 px-2">
                <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <span class="ml-2" x-show="menu">Settings</span>
            </a>
        </div>
    </div> --}}
</aside>

<script type="text/javascript">
    function dropdown() {
        document.querySelector("#submenu").classList.toggle("hidden");
        document.querySelector("#arrow").classList.toggle("rotate-180");
    }
    dropdown();
</script>
