<x-app-layout>

    <div class="w-full">
        <div class="max-w-7xl m-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden">
                <div class="flex justify-between lg:flex-row md:flex-row pt-6 pl-6 pr-6 text-gray-900">
                    <h1 class="font-bold">Roles</h1>

                    <a href="{{route('admin.roles.create')}}" class="px-4 py-2 text-white rounded-md bg-slate-800 hover:bg-slate-600">
                        Create <i class="fa-solid fa-plus"></i>
                    </a>
                </div>


                <!-- component -->
                <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">

                    <table class="w-full border-collapse bg-white text-center text-sm text-gray-500">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Role Name</th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Action</th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 border-t border-gray-100">

                        @foreach($roles as $role)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4">
                                    {{$role->name}}
                                </td>

                                <td class="flex justify-center mt-4">
                                    <a href="{{route('admin.roles.edit', $role->id)}}" class="mr-4" title="Edit"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <form method="post" action="{{route('admin.roles.destroy', $role->id)}}">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" title="Delete"><i class="fa-solid fa-trash"></i></button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
