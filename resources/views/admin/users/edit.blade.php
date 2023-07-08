<x-app-layout>

    <div class="w-full">
        <div class="max-w-7xl m-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden">
                <div class="flex justify-between lg:flex-row md:flex-row pt-6 pl-6 pr-6 text-gray-900">
                    <h1 class="font-bold">Edit User</h1>
                    <a href="{{ route('admin.users.index') }}"
                        class="px-4 py-2 text-white rounded-md bg-slate-800 hover:bg-slate-600">
                        <i class="fa-solid fa-chevron-left"></i> Back
                    </a>
                </div>

                {{--                form start  --}}
                <div class="p-6">
                    <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
                        @csrf
                        @method('PUT')
                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                :value="$user->name ?? old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
    
                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="$user->email ?? old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
    
                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />
    
                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                                autocomplete="new-password" />
    
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
    
                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                name="password_confirmation" autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-4">
                                {{ __('Register') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
                

                {{--                end form --}}
            </div>
        </div>
    </div>
</x-app-layout>
