<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
    <div class="flex flex-col lg:flex-row md:flex-row">
        <div class="basis-1/4 pt-4 w-12">
            @include('layouts.sidebar')
        </div>
        <div class="basis-3/4 pl-4 pt-8 md:pt-0 lg:pt-0">
            <div class="w-full m-6 pl-4" x-data="{open:true}" x-show="open">
                @if(Session::has('success'))
                    <span class="w-1/2 inline-flex items-center rounded-md bg-green-50 px-6 py-4 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">{{Session::get('success')}}
                    </span>
                    <button @click="open=false" class="ml-4" title="Close"><i class="fa-solid fa-xmark text-red-600 hover:font-bold hover:text-red-200"></i></button>
                @endif
                @if(Session::has('error'))
                    <span class="w-1/2 inline-flex items-center rounded-md bg-red-50 px-6 py-4 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/20">{{Session::get('error')}}</span>
                        <button @click="open=false" class="ml-4" title="Close"><i class="fa-solid fa-xmark text-red-600 hover:font-bold hover:text-red-200"></i></button>
                    @endif
            </div>
            {{$slot}}
        </div>
    </div>

    </body>
</html>
