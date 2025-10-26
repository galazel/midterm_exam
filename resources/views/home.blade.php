<x-layout>
    <x-slot:title>
        Home
    </x-slot:title>
    <section
        class="flex justify-center text-white body-font h-screen "style="background-size: cover; background-image: url('{{ asset('hero.jpg') }}') ">
        <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
            <div class="text-center lg:w-2/3 w-full">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium ">Welcome to Laravel Setup
                </h1>
                <p class="mb-8 leading-relaxed"> Learn how to set up Laravel, the powerful PHP framework for building
                    modern web applications.
                    From installing dependencies to configuring your environment, this guide will help you get your
                    Laravel project running smoothly in no time.</p>
                <div class="flex justify-center">
                    <button
                        class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Get
                        Started</button>
                    <button
                        class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Watch
                        Video</button>
                </div>
            </div>
        </div>
    </section>
    <section class="text-gray-600 body-font p-5">
        <div class="container px-5 py-24 mx-auto">
            <div class="text-center mb-20">
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4">Introduction to Laravel
                </h1>
                <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500s">Laravel is a free,
                    open-source PHP web framework used for developing modern web
                    applications using the MVC (Model–View–Controller) architectural pattern. It was
                    created by Taylor Otwell and first released in 2011. Laravel focuses on simplicity,
                    elegance, and readability, providing tools and features that make web development faster
                    and less error-prone.</p>
                <div class="flex mt-6 justify-center">
                    <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
                </div>
            </div>
            <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
                <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                    <div
                        class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                        </svg>
                    </div>
                    <div class="flex-grow">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Security</h2>
                        <p class="leading-relaxed text-base"> Laravel comes with built-in security features like hashed
                            passwords, protection against SQL injection, and CSRF tokens to keep your application safe.
                        </p>

                    </div>
                </div>
                <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                    <div
                        class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                            <circle cx="6" cy="6" r="3"></circle>
                            <circle cx="6" cy="18" r="3"></circle>
                            <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                        </svg>
                    </div>
                    <div class="flex-grow">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Scalability</h2>
                        <p class="leading-relaxed text-base"> Laravel supports scalable application development with
                            features like queues, caching, and support for microservices architecture.
                        </p>

                    </div>
                </div>
                <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                    <div
                        class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </div>
                    <div class="flex-grow">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Maintainability</h2>
                        <p class="leading-relaxed text-base"> With clear MVC architecture, reusable components, and
                            Laravel’s elegant syntax, your code stays organized and easy to maintain.
                        </p>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
            <div class="grid grid-cols-2 gap-5">
                <div>
                    <div class="flex relative pb-12">
                        <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                            <div class="h-full w-1 bg-gray-200 pointer-events-none">

                            </div>
                        </div>
                        <div
                            class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            </svg>
                        </div>
                        <div class="flex-grow pl-4">
                            <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">MVC
                                Architecture</h2>
                            <p class="leading-relaxed"> Separates logic, presentation, and data for cleaner and more
                                maintainable code.</p>
                        </div>
                    </div>
                    <div class="flex relative pb-12">
                        <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                            <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                        </div>
                        <div
                            class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                            </svg>
                        </div>
                        <div class="flex-grow pl-4">
                            <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">Routing System
                            </h2>
                            <p class="leading-relaxed"> Defines how URLs map to specific controllers and actions for
                                flexible web routing.</p>
                        </div>
                    </div>
                    <div class="flex relative pb-12">
                        <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                            <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                        </div>
                        <div
                            class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <circle cx="12" cy="5" r="3"></circle>
                                <path d="M12 22V8M5 12H2a10 10 0 0020 0h-3"></path>
                            </svg>
                        </div>
                        <div class="flex-grow pl-4">
                            <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">Eloquent ORM
                            </h2>
                            <p class="leading-relaxed"> Interact with databases using PHP syntax instead of raw SQL,
                                simplifying queries.
                            </p>
                            </p>
                        </div>
                    </div>
                    <div class="flex relative pb-12">
                        <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                            <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                        </div>
                        <div
                            class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <div class="flex-grow pl-4">
                            <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">Blade Template
                                Engine</h2>
                            <p class="leading-relaxed"> Simplifies the creation of dynamic views with clean and
                                readable syntax.
                            </p>
                            </p>
                        </div>
                    </div>
                    <div class="flex relative  pb-12">
                        <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                            <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                        </div>
                        <div
                            class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                        </div>
                        <div class="flex-grow pl-4">
                            <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">Artisan CLI
                            </h2>
                            <p class="leading-relaxed">Automates repetitive tasks with command-line commands for faster
                                development.</p>
                        </div>
                    </div>
                    <div class="flex relative pb-12">
                        <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                            <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                        </div>
                        <div
                            class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                        </div>
                        <div class="flex-grow pl-4">
                            <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">Security</h2>
                            <p class="leading-relaxed"> Protects your application against SQL injection, XSS, and CSRF
                                attacks.</p>
                        </div>
                    </div>
                    <div class="flex relative pb-12">
                        <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                            <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                        </div>
                        <div
                            class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                        </div>
                        <div class="flex-grow pl-4">
                            <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">Authentication
                                & Authorization</h2>
                            <p class="leading-relaxed"> Simplifies user login, registration, and access control for
                                secure applications.</p>
                        </div>
                    </div>
                    <div class="flex relative pb-12">
                        <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                            <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                        </div>
                        <div
                            class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                        </div>
                        <div class="flex-grow pl-4">
                            <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">Database
                                Migration & Seeding</h2>
                            <p class="leading-relaxed"> Manage database schema versioning and seed sample data for
                                development and testing.</p>
                        </div>
                    </div>
                </div>
                <div class="bg-red-500">
                    <img class=" h-full bg-center" src="/laravel.jpg" alt="step">
                </div>

            </div>
        </div>
    </section>
    <section class="flex flex-col items-center py-16 px-4 sm:px-6 lg:px-8">
        <h3 class="text-3xl sm:text-4xl font-extrabold text-gray-800 mb-12  pb-2">
            Laravel Development Environment Setup
             <div class="flex mt-6 justify-center">
                    <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
                </div>
        </h3>
       
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl w-full">


            <div
                class="card p-6 bg-white border border-gray-200 rounded-xl shadow-xl hover:shadow-2xl transition duration-300">

                <svg class="w-8 h-8 text-indigo-500 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.001 12.001 0 0012 21a12.001 12.001 0 008.618-18.016z">
                    </path>
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

            <div
                class="card p-6 bg-white border border-gray-200 rounded-xl shadow-xl hover:shadow-2xl transition duration-300">

                <svg class="w-8 h-8 text-indigo-500 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
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


            <div
                class="card p-6 bg-white border border-gray-200 rounded-xl shadow-xl hover:shadow-2xl transition duration-300">

                <svg class="w-8 h-8 text-indigo-500 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
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


            <div
                class="card p-6 bg-white border border-gray-200 rounded-xl shadow-xl hover:shadow-2xl transition duration-300">
                <svg class="w-8 h-8 text-indigo-500 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 10V3L4 14h7v7l9-11h-7z"></path>
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

            <div
                class="md:col-span-2 card p-6 bg-white border border-gray-200 rounded-xl shadow-xl hover:shadow-2xl transition duration-300">

                <svg class="w-8 h-8 text-indigo-500 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                    </path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                <h5 class="mb-3 text-2xl font-bold tracking-tight text-gray-900">Step 5: Environment Configuration
                    (.env)</h5>
                <p class="mb-4 font-normal text-gray-600">
                    Laravel uses the **`.env`** file for environment variables like application details and database
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
        <h4 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4">Summary </h4>
        <table class="w-[30vw] text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
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
