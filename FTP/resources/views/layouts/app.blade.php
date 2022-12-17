<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome To Fatoni Travel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <link href="http://unpkg.com/tailwindcdd@^@/dist/tailwind.min.css"  rel="stylesheet" > 

    </head>
    <body>
                            <header class="text-gray-600 body-font">
                        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
                            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                            </svg>
                            <span class="ml-3 text-xl">Fatoni travel</span>
                            </a>
                            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                            <a class="mr-5 hover:text-gray-900" href="hajj">Hajj</a>
                            <a class="mr-5 hover:text-gray-900" href="/umrah">Umrah</a>
                            <a class="mr-5 hover:text-gray-900" href="/travel">Travel</a>
                            <a class="mr-5 hover:text-gray-900" href="/about">About</a>
                            </nav>
                            <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Button
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                            </button>
                        </div>
                        </header>

                        <main class="max-w-6xl mx-auto"> 
                            {{$slot}} 
                        </main>
   
    </body>
</html>
