<header class="flex items-center h-20 px-6 sm:px-10 bg-white">
    <div class="mr-8 cursor-pointer" @click="menu = !menu" >
      <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
</svg>
    </div>
    <div class="relative w-56 max-w-sm sm:-ml-2">
      <svg aria-hidden="true" viewBox="0 0 20 20" fill="currentColor" class="absolute h-6 w-6 mt-2.5 ml-2 text-gray-400">
        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
      </svg>
      <input type="text" role="search" placeholder="Search..." class="py-2 pl-10 pr-4 w-full border-4 border-transparent placeholder-gray-400 focus:bg-gray-50 rounded-lg" />
    </div>

     {{-- alert --}}
     <div class="m-6 pl-4" x-data="{open:true}" x-show="open">
      @if(Session::has('success'))
      <div class="animate-pulse bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-full relative" role="alert">
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline">{{Session::get('success')}}</span>
      <button @click="open=false" class="ml-4" title="Close"><i class="fa-solid fa-xmark text-red-600 hover:font-bold hover:text-red-200"></i></button>
      </div>
      @endif
      @if(Session::has('error'))
      <div class="animate-pulse bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-full relative" role="alert">
        <strong class="font-bold">Error!</strong>
        <span class="block sm:inline">{{Session::get('error')}}</span>
      <button @click="open=false" class="ml-4" title="Close"><i class="fa-solid fa-xmark text-red-600 hover:font-bold hover:text-red-200"></i></button>
      </div>
      @endif
      </div>

      {{-- end alert --}}
    <div class="flex flex-shrink-0 items-center ml-auto">
      <button class="relative inline-flex items-center p-2 hover:bg-gray-100 focus:bg-gray-100 rounded-lg" @click="panel = !panel" @click.away="panel = false">
        <span class="sr-only">User Menu</span>
        <div class="hidden md:flex md:flex-col md:items-end md:leading-tight" >
          <span class="font-semibold">Sinan AYDOĞAN</span>
          <span class="text-sm text-gray-600">Quality Engineer</span>
        </div>
        <span class="h-12 w-12 ml-2 sm:ml-3 mr-2 bg-gray-100 rounded-full overflow-hidden">
          <img src="https://randomuser.me/api/portraits/men/68.jpg" alt="user profile photo" class="h-full w-full object-cover">
        </span>
        <svg aria-hidden="true" viewBox="0 0 20 20" fill="currentColor" class="hidden sm:block h-6 w-6 text-gray-300">
          <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg> 
      </button>
      <div class="absolute top-20 bg-white border rounded-md p-2 w-56" x-show="panel" style="display:none">
        <div class="p-2 hover:bg-blue-100 cursor-pointer">Profile</div>
        <div class="p-2 hover:bg-blue-100 cursor-pointer">Messages</div>
        <div class="p-2 hover:bg-blue-100 cursor-pointer">To-Do's</div>
      </div>
      <div class="border-l pl-3 ml-3 space-x-1">
        <button class="relative p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-600 focus:bg-gray-100 focus:text-gray-600 rounded-full">
          <span class="sr-only">Notifications</span>
          <span class="absolute top-0 right-0 h-2 w-2 mt-1 mr-2 bg-red-500 rounded-full"></span>
          <span class="absolute top-0 right-0 h-2 w-2 mt-1 mr-2 bg-red-500 rounded-full animate-ping"></span>
          <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
          </svg>
        </button>
        <button class="relative p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-600 focus:bg-gray-100 focus:text-gray-600 rounded-full">
          <span class="sr-only">Log out</span>
          <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
</svg>
        </button>
      </div>
    </div>
  </header>