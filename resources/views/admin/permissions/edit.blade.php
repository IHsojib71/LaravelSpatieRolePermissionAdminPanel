
<x-app-layout>

    <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
        <div class="mr-6">
          <h1 class="text-4xl font-semibold mb-2">Edit Permission</h1>
          <h2 class="text-gray-600 ml-0.5">Edit Permission Form</h2>
        </div>
        <div class="flex flex-wrap items-start justify-end -mb-3">
          
          <a href="{{route('admin.permissions.index')}}" class="inline-flex px-5 py-3 text-white bg-blue-600 hover:bg-blue-700 focus:bg-blue-700 rounded-lg ml-6 mb-3">
            <i class="fa-solid fa-chevron-left mt-1 mr-2"></i>
            Back
          </a>
        </div>
      </div>

      <section>
        <div class="rounded-lg bg-white p-4">
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

                <div class="flex justify-end mt-4">
                    <button
                        type="submit"
                        class="inline-flex px-5 py-3 text-white bg-blue-600 hover:bg-blue-700 focus:bg-blue-700 rounded-lg ml-6 mb-3"
                    >
                        Update
                    </button>
                </div>

            </form> 
        </div>
        
    
      </section>

    </div>
               

                   
  
</x-app-layout>


