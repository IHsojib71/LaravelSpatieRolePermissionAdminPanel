<x-app-layout>

    <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
        <div class="mr-6">
          <h1 class="text-4xl font-semibold mb-2">Permissions</h1>
          <h2 class="text-gray-600 ml-0.5">Manage All Permissions</h2>
        </div>
        <div class="flex flex-wrap items-start justify-end -mb-3">
          
          <a href="{{route('admin.permissions.create')}}" class="inline-flex px-5 py-3 text-white bg-blue-600 hover:bg-blue-700 focus:bg-blue-700 rounded-lg ml-6 mb-3">
            <i class="fa-solid fa-plus mt-1 mr-2"></i>
            Create
          </a>
        </div>
      </div>

      <section>
       
          <form>
            <div class="flex justify-between">
            <div class="flex mb-4">
            <x-text-input id="search"  type="text" name="search" :value="request('search')"  placeholder="search" />
            <x-secondary-button class="ml-2" type="submit">
              <i class="fa-solid fa-magnifying-glass"></i>
             </x-secondary-button>
              </div>  
              <div>
                <select onchange="this.form.submit()" id="per_page_result" name="per_page_result" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-32 p-2.5">
                  <option selected>Per Page</option>
                  <option value="10" {{ request('per_page_result') == 10 ? "selected" : "" }}>10</option>
                  <option value="20" {{ request('per_page_result') == 20 ? "selected" : "" }}>20</option>
                  <option value="30" {{ request('per_page_result') == 30 ? "selected" : "" }}>30</option>
                  <option value="40" {{ request('per_page_result') == 40 ? "selected" : "" }}>40</option>
                </select>
            
              </div>
            </div>
          </form>
       
        
        <div class="rounded-lg bg-white p-4">
            <table class="w-full border-collapse bg-white text-center text-sm text-gray-500">
                <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Permission Name</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Roles</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Action</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 border-t border-gray-100">

                @foreach($permissions as $permission)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            {{$permission->name}}
                        </td>
                        <td class="px-6 py-4">
                          <div class="flex flex-row justify-center space-x-2">
                          @forelse($permission->roles as $role)
                                  <span class="bg-green-400 text-white rounded-full py-1 px-2 text-sm">{{$role->name}}</span>
                           @empty
                               <span>No Role Assigned!</span>
                          @endforelse
                              </div>
                        </td>
                        <td class="flex justify-center mt-4">
                            <a href="{{route('admin.permissions.assign.role.form', $permission->id)}}" class="mr-4" title="Roles"><i class="fa-solid fa-shield-halved"></i></a>
                            <a href="{{route('admin.permissions.edit', $permission->id)}}" class="mr-4" title="Edit"><i class="fa-solid fa-pen-to-square"></i></a>
                            <form method="post" action="{{route('admin.permissions.destroy', $permission->id)}}" onsubmit="return confirm('Are you sure ?')">
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
        <div class="mt-4">
          {{ $permissions->links() }}
        </div>
    
      </section>

    </div>
               

                   
  
</x-app-layout>


