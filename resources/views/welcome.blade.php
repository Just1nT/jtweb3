<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Justin Tannenbaum</title>
        <meta name="description" content="#"/>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <nav class="flex items-center justify-between flex-wrap bg-black mt-4 p-6">
        <div class="flex items-center flex-shrink-0 text-white lg:ml-8 mr-6">
            <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
            <span class="font-semibold text-xl tracking-tight">Justin Tannenbaum</span>
        </div>
        <div class="block lg:hidden">
            <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
            </button>
        </div>
        <div class="relative right-0 w-full block flex-grow lg:flex lg:absolute lg:items-center lg:w-auto mr-8">
            <div class="font-display text-md lg:flex-grow">
                <a href="/" class="block mt-4 lg:inline-block lg:mt-0 text-white mr-6">
                    Work
                </a>
                <a href="/about" class="block mt-4 lg:inline-block lg:mt-0 text-white mr-6">
                    About
                </a>
                <a href="mailto:justinedwardtannenbaum@gmail.com" class="block mt-4 mr-6 lg:inline-block lg:mt-0 text-white">
                    Contact
                </a>
            </div>
        </div>
    </nav>
    <body class="bg-black">
        <div class="container mx-auto px-4">
            <div class="font-display text-white text-5xl justify-center flex mt-24 mb-8">
                <h1>Welcome to my product portfolio.</h1>
            </div>
            <div class="flex flex-wrap mt-12 mb-4">
                <div class="lg:w-1/3 bg-gray-500 h-64">
                    
                </div>
                <div class="lg:w-2/3 bg-white h-64">
                    
                </div>
            </div>
        </div>
    </body>
</html>
