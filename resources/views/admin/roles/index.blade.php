<x-app-layout>

    <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
        <div class="mr-6">
          <h1 class="text-4xl font-semibold mb-2">Roles</h1>
          <h2 class="text-gray-600 ml-0.5">Manage All Roles</h2>
        </div>
        <div class="flex flex-wrap items-start justify-end -mb-3">
          
          <a href="{{route('admin.roles.create')}}" class="inline-flex px-5 py-3 text-white bg-blue-600 hover:bg-blue-700 focus:bg-blue-700 rounded-lg ml-6 mb-3">
            <i class="fa-solid fa-plus mt-1 mr-2"></i>
            Create
          </a>
        </div>
      </div>

      <section>
        <div class="rounded-lg bg-white p-4">
            <table class="w-full border-collapse bg-white text-center text-sm text-gray-500">
                <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Role Name</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Permissions</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Action</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 border-t border-gray-100">

                @foreach($roles as $role)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            {{$role->name}}
                        </td>
                        <td class="px-6 py-4">
                          <div class="flex flex-row justify-center space-x-2">
                          @forelse($role->permissions as $permission)
                                  <span class="bg-green-400 text-white rounded-full py-1 px-2 text-sm">{{$permission->name}}</span>
                           @empty
                               <span>No Permission Assigned!</span>
                          @endforelse
                              </div>
                        </td>
                        <td class="flex justify-center mt-4">
                            <a href="{{route('admin.roles.assign.permission.form', $role->id)}}" class="mr-4" title="Permissions"><i class="fa-solid fa-shield-halved"></i></a>
                            <a href="{{route('admin.roles.edit', $role->id)}}" class="mr-4" title="Edit"><i class="fa-solid fa-pen-to-square"></i></a>
                            <form method="post" action="{{route('admin.roles.destroy', $role->id)}}" onsubmit="return confirm('Are you sure ?')">
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
        
    
      </section>

    </div>
               

                   
  
</x-app-layout>

