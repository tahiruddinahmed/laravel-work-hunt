<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Job Board') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    @vite('resources/css/app.css')
    @vite('resources/css/styles.css')

</head>

<body class="bg-gray-100 min-h-screen">
    <header class="bg-blue-900 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-semibold">
                <a href="index.html">WorkHunt</a>
            </h1>
            <nav class="hidden md:flex items-center space-x-4">
                <a href="jobs.html" class="text-white hover:underline py-2">All Jobs</a>
                <a href="login.html" class="text-white hover:underline py-2">Login</a>
                <a href="register.html" class="text-white hover:underline py-2">Register</a>
                <a href="dashboard.html" class="hover:underline py-2 font-bold text-yellow-500">
                    <i class="fa fa-gauge mr-1"></i> Dashboard
                </a>
                <a href="create-job.html"
                    class="bg-yellow-500 hover:bg-yellow-600 text-black px-4 py-2 rounded hover:shadow-md transition duration-300">
                    <i class="fa fa-edit"></i> Create Job
                </a>
            </nav>
            <button id="hamburger" class="text-white md:hidden flex items-center">
                <i class="fa fa-bars text-2xl"></i>
            </button>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-blue-900 text-white mt-5 pb-4 space-y-2">
            <a href="jobs.html" class="block px-4 py-2 hover:bg-blue-700">All Jobs</a>
            <a href="dashboard.html" class="block px-4 py-2 hover:bg-blue-700">Dashboard</a>
            <a href="login.html" class="block px-4 py-2 hover:bg-blue-700">Login</a>
            <a href="register.html" class="block px-4 py-2 hover:bg-blue-700">Register</a>
            <a href="dashboard.html" class="block hover:underline py-2 font-bold text-yellow-500">
                <i class="fa fa-gauge mr-1"></i> Dashboard
            </a>
            <a href="create-job.html" class="block px-4 py-2 bg-yellow-500 hover:bg-yellow-600 text-black">
                <i class="fa fa-edit"></i> Create Job
            </a>
        </div>
    </header>

    
    {{ $slot }}
</body>

</html>
