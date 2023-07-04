<x-app-layout>

    <div class="w-full">
        <div class="max-w-7xl m-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden">
                <div class="flex justify-between lg:flex-row md:flex-row pt-6 pl-6 pr-6 text-gray-900">
                    <h1 class="font-bold">Create Role</h1>
                    <a href="{{route('admin.roles.index')}}" class="px-4 py-2 text-white rounded-md bg-slate-800 hover:bg-slate-600">
                        <i class="fa-solid fa-chevron-left"></i>  Back
                    </a>
                </div>
                {{--                form start  --}}
                <form action="{{route('admin.roles.assign.permission', $role->id)}}" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-semibold leading-6 text-gray-900 mb-4">Permissions</label>
                        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-4">
                               @foreach($permissions as $permission)
                                    <div>
                                        <input type="checkbox" class="form-checkbox text-slate-600 mr-4" value="{{$permission->name}}" name="selected_permissions[]" @foreach($role->permissions as $rp) {{ $rp->name == $permission->name ? 'checked' : '' }} @endforeach>
                                        <label>{{$permission->name}}</label><br>
                                    </div>
                               @endforeach
                           </div>
                    </div>

                    <div class="flex justify-end">
                        <button
                            type="submit"
                            class="border border-gray-800 bg-gray-800 text-white rounded-md px-4 py-2 mt-4 transition duration-500 ease select-none hover:bg-gray-600 focus:outline-none focus:shadow-outline"
                        >
                            Assign
                        </button>
                    </div>

                </form>

                {{--                end form--}}
            </div>
        </div>
    </div>
</x-app-layout>
