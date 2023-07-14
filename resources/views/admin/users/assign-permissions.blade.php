<x-app-layout>

    <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
        <div class="mr-6">
          <h1 class="text-4xl font-semibold mb-2">Assign Permissions</h1>
          <h2 class="text-gray-600 ml-0.5">Multiple Permissions Assignment For Selected User</h2>
        </div>
        <div class="flex flex-wrap items-start justify-end -mb-3">
          
          <a href="{{route('admin.users.index')}}" class="inline-flex px-5 py-3 text-white bg-blue-600 hover:bg-blue-700 focus:bg-blue-700 rounded-lg ml-6 mb-3">
            <i class="fa-solid fa-chevron-left mt-1 mr-2"></i>
            Back
          </a>
        </div>
      </div>

      <section>
        <div class="rounded-lg bg-white p-4">
            
            <form action="{{route('admin.users.assign.permission', $user->id)}}" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
                @csrf
                <div>
                    <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-4">
                           @foreach($permissions as $permission)
                                <div>
                                    <input type="checkbox" class="form-checkbox text-slate-600 mr-4" value="{{$permission->name}}" name="selected_permissions[]" @foreach($user->permissions as $rp) {{ $rp->name == $permission->name ? 'checked' : '' }} @endforeach>
                                    <label>{{$permission->name}}</label><br>
                                </div>
                           @endforeach
                       </div>
                </div>

                <div class="flex justify-end mt-4">
                    <button
                        type="submit"
                        class="inline-flex px-5 py-3 text-white bg-blue-600 hover:bg-blue-700 focus:bg-blue-700 rounded-lg ml-6 mb-3"
                    >
                        Assign
                    </button>
                </div>

            </form>
        </div>
        
    
      </section>

    </div>
               

                   
  
</x-app-layout>

                   
             


            
