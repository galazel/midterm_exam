<!DOCTYPE html>
<html lang="en" data-theme="lofi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($title) ? $title . ' - Laravel Setup' : 'Laravel' }}</title>
    <link rel="preconnect" href="<https://fonts.bunny.net>">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="min-h-screen grid grid-rows-[8vh_1fr_8vh] bg-base-200 font-sans">
     @yield('content')
    <header class="body-font text-black bg-white h-[7.5vh]">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center h-full ">
            <span class="ml-3 text-xl text-red-500">Laravel</span>
            <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
                <a class="mr-5 hover:text-gray-900">Home</a>
                <a class="mr-5 hover:text-gray-900">About</a>
                <a class="mr-5 hover:text-gray-900">Gallery</a>

            </nav>
            <button
                class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">
                Download

            </button>
        </div>
    </header>
    <main>
        {{ $slot }}
    </main>
    <footer class="footer footer-center p-5 bg-base-300 text-base-content text-xs">
        <div>
            <p>© 2025 Galagar, Glyzel - Built with Laravel and ❤️</p>
        </div>
    </footer>
      <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
