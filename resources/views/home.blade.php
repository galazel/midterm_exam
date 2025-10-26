<x-layout>
    <x-slot:title>
        Home
    </x-slot:title>
    <section
        class="flex justify-center text-white body-font h-screen "style="background-size: cover; background-image: url('{{ asset('hero.jpg') }}') ">
        <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
            <div class="text-center lg:w-2/3 w-full">
                <h1 class="section-title">Welcome to Laravel Setup
                </h1>
                <p class="mb-8 leading-relaxed"> Learn how to set up Laravel, the powerful PHP framework for building
                    modern web applications.
                    From installing dependencies to configuring your environment, this guide will help you get your
                    Laravel project running smoothly in no time.</p>
                <div class="flex justify-center">
                    <button
                        class="inline-flex text-red-500 bg-white border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                        <a href="https://youtu.be/DKnn8TlJ4MA?si=5kXKCe0Jnak6r4C5" target="_blank">Watch
                            Tutorial</a></button>

                </div>
            </div>
        </div>
    </section>
    <section class="text-gray-600 body-font p-5">
        <div class="container px-5 py-24 mx-auto">
            <div class="text-center mb-20">
                <h1 class="section-title">INTRODUCTION TO LARAVEL
                </h1>
                <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500s">Laravel is a free,
                    open-source PHP web framework used for developing modern web
                    applications using the MVC (Model–View–Controller) architectural pattern. It was
                    created by Taylor Otwell and first released in 2011. Laravel focuses on:</p>
                <div class="flex mt-6 justify-center">
                    <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
                </div>
            </div>
            <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
                @foreach ($focuses as $focus)
                    <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                        <div
                            class="w-40 h-40 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
                            <img src={{ $focus['logo'] }} alt="">
                        </div>
                        <div class="flex-grow">
                            <h2 class="text-gray-900 text-lg title-font font-medium mb-3">{{ $focus['title'] }}</h2>
                            <p class="leading-relaxed text-base">{{ $focus['message'] }}
                            </p>

                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <section class="flex justify-center m-10">
        <div class="flex flex-col gap-10">
            <div class="flex items-center justify-center  ">
                <p class="section-title">FEATURES</p>
            </div>
            <div>
                @foreach ($features as $feature)
                    <div class="flex relative pb-12">
                        <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                            <div class="h-full w-1 bg-gray-200 pointer-events-none">

                            </div>
                        </div>
                        <div
                            class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>

                        </div>
                        <div class="flex-grow pl-4">
                            <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">
                                {{ $feature['title'] }}</h2>
                            <p class="leading-relaxed">{{ $focus['message'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="flex flex-col gap-10 items-center py-16 px-4 sm:px-6 lg:px-8">
        <h3 class="section-title">
            LARAVEL DEVELOPMENT ENVIRONMENT SETUP
        </h3>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl w-full">


            <div class="card p-6 bg-white border rounded-xl hover:shadow-2xl transition duration-300">

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                </svg>

                <h5 class="mb-3 text-2xl font-bold tracking-tight text-gray-900">Step 1: Prerequisites</h5>

                <p class="mb-4 font-normal text-gray-600">
                    Before installing Laravel, ensure you have the following software installed and properly configured
                    on your machine:
                </p>
                <ul class="list-disc list-inside space-y-1 text-gray-700 font-medium">
                    <li>PHP 8.2 (Recommended)</li>
                    <li>Composer (PHP Package Manager)</li>
                    <li>Database: MySQL, Postgres, or SQLite</li>
                    <li>Web Server: Apache or Nginx</li>
                </ul>
            </div>

            <div class="card p-6 bg-white border  rounded-xl  hover:shadow-2xl transition duration-300">

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m7.875 14.25 1.214 1.942a2.25 2.25 0 0 0 1.908 1.058h2.006c.776 0 1.497-.4 1.908-1.058l1.214-1.942M2.41 9h4.636a2.25 2.25 0 0 1 1.872 1.002l.164.246a2.25 2.25 0 0 0 1.872 1.002h2.092a2.25 2.25 0 0 0 1.872-1.002l.164-.246A2.25 2.25 0 0 1 16.954 9h4.636M2.41 9a2.25 2.25 0 0 0-.16.832V12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 12V9.832c0-.287-.055-.57-.16-.832M2.41 9a2.25 2.25 0 0 1 .382-.632l3.285-3.832a2.25 2.25 0 0 1 1.708-.786h8.43c.657 0 1.281.287 1.709.786l3.284 3.832c.163.19.291.404.382.632M4.5 20.25h15A2.25 2.25 0 0 0 21.75 18v-2.625c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125V18a2.25 2.25 0 0 0 2.25 2.25Z" />
                </svg>

                <h5 class="mb-3 text-2xl font-bold tracking-tight text-gray-900">Step 2: Installing Laravel</h5>
                <p class="mb-4 font-normal text-gray-600">
                    Use Composer to create a new Laravel project in your desired directory.
                </p>

                <div class="space-y-4">
                    <h6 class="font-semibold text-gray-800">Using Composer (Recommended):</h6>
                    <code class="command">composer create-project laravel/laravel my-project</code>
                </div>

                <div class="space-y-4 mt-4">
                    <h6 class="font-semibold text-gray-800">Or Using the Laravel Installer:</h6>
                    <code class="command">composer global require laravel/installer</code>
                    <code class="command">laravel new my-project</code>
                </div>
            </div>


            <div class="card p-6 bg-white border rounded-xl hover:shadow-2xl transition duration-300">

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>

                <h5 class="mb-3 text-2xl font-bold tracking-tight text-gray-900">Step 3: Directory Structure Overview
                </h5>
                <p class="mb-4 font-normal text-gray-600">
                    Key folders and their purposes after a successful installation:
                </p>
                <ul class="list-disc list-inside space-y-1 text-gray-700">
                    <li>app/: Contains the core application logic (Models, Controllers).</li>
                    <li>routes/: Defines all application routes (web, api, console).</li>
                    <li>resources/: Houses your application views (Blade templates).</li>
                    <li>database/: Stores migrations and seeders for database setup.</li>
                    <li>config/: Contains application-wide configuration files.</li>
                    <li>public/: The public entry point for the web server.</li>
                </ul>
            </div>


            <div class="card p-6 bg-white border  rounded-xl hover:shadow-2xl transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M5.25 14.25h13.5m-13.5 0a3 3 0 0 1-3-3m3 3a3 3 0 1 0 0 6h13.5a3 3 0 1 0 0-6m-16.5-3a3 3 0 0 1 3-3h13.5a3 3 0 0 1 3 3m-19.5 0a4.5 4.5 0 0 1 .9-2.7L5.737 5.1a3.375 3.375 0 0 1 2.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 0 1 .9 2.7m0 0a3 3 0 0 1-3 3m0 3h.008v.008h-.008v-.008Zm0-6h.008v.008h-.008v-.008Zm-3 6h.008v.008h-.008v-.008Zm0-6h.008v.008h-.008v-.008Z" />
                </svg>

                <h5 class="mb-3 text-2xl font-bold tracking-tight text-gray-900">Step 4: Running the Server</h5>
                <p class="mb-4 font-normal text-gray-600">
                    Navigate into your new project directory and use Artisan to start the local development server.
                </p>
                <ol class="list-decimal list-inside space-y-2 text-gray-700 font-medium">
                    <li>Change directory: <code class="command">cd my-project</code></li>
                    <li>Start the server: <code class="command">php artisan serve</code></li>
                    <li>Access your app at: <code class="command">http://127.0.0.1:8000</code></li>
                </ol>
            </div>

            <div class="md:col-span-2 card p-6 bg-white border  rounded-xl  hover:shadow-2xl transition duration-300">

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 0 0 2.25-2.25V6.75a2.25 2.25 0 0 0-2.25-2.25H6.75A2.25 2.25 0 0 0 4.5 6.75v10.5a2.25 2.25 0 0 0 2.25 2.25Zm.75-12h9v9h-9v-9Z" />
                </svg>

                <h5 class="mb-3 text-2xl font-bold tracking-tight text-gray-900">Step 5: Environment Configuration
                    (.env)</h5>
                <p class="mb-4 font-normal text-gray-600">
                    Laravel uses the .env file for environment variables like application details and database
                    credentials. You must update this file to connect to your database.
                </p>
                <h6 class="font-semibold text-gray-800 mb-2">Example Database Configuration:</h6>
                <pre class="command text-sm">
APP_NAME=MyLaravelApp
APP_ENV=local
APP_DEBUG=true

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mydatabase_name
DB_USERNAME=root
DB_PASSWORD=your_password
                </pre>
            </div>

        </div>
    </section>
    <section class="flex flex-col gap-10 justify-center items-center h-screen">
        <p class="section-title">SUMMARY</p>
        <table class="w-[50vw] text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Concept
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Description
                    </th>

                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Laravel
                    </th>
                    <td class="px-6 py-4">
                        A modern PHP framework for web app
                        development
                    </td>


                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Architecture
                    </th>
                    <td class="px-6 py-4">
                        Follows MVC pattern
                    </td>


                </tr>
                <tr class="bg-white dark:bg-gray-800">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Setup Tools
                    </th>
                    <td class="px-6 py-4">
                        PHP, Composer, Artisan
                    </td>


                </tr>
                <tr class="bg-white dark:bg-gray-800">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Key Features
                    </th>
                    <td class="px-6 py-4">
                        Eloquent ORM, Blade, Routing,
                        Authenticatio
                    </td>


                </tr>
                <tr class="bg-white dark:bg-gray-800">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Run Command
                    </th>
                    <td class="px-6 py-4">
                        php artisan serve

                    </td>


                </tr>
            </tbody>
        </table>


    </section>

</x-layout>
