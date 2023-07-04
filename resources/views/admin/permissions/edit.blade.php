<x-app-layout>

    <div class="w-full">
        <div class="max-w-7xl m-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden">
                <div class="flex justify-between lg:flex-row md:flex-row pt-6 pl-6 pr-6 text-gray-900">
                    <h1 class="font-bold">Edit Permission</h1>
                    <a href="{{route('admin.permissions.index')}}" class="px-4 py-2 text-white rounded-md bg-slate-800 hover:bg-slate-600">
                        <i class="fa-solid fa-chevron-left"></i>  Back
                    </a>
                </div>

                {{--                form start  --}}
                <form action="{{route('admin.permissions.update', $permission->id)}}" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="name" class="block text-sm font-semibold leading-6 text-gray-900">Name</label>
                        <div class="mt-2.5">
                            <input type="text" name="name" id="name" autocomplete="given-name" value="{{$permission->name}}" class="w-full rounded-md focus:outline-none border-2 border-solid">
                        </div>
                        @error('name') <span class="text-red-400 text-sm">{{$message}}</span>@enderror
                    </div>

                    <div class="flex justify-end">
                        <button
                            type="submit"
                            class="border border-gray-800 bg-gray-800 text-white rounded-md px-4 py-2 mt-4 transition duration-500 ease select-none hover:bg-gray-600 focus:outline-none focus:shadow-outline"
                        >
                            Update
                        </button>
                    </div>

                </form>

                {{--                end form--}}
            </div>
        </div>
    </div>
</x-app-layout>
