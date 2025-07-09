<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mediakor - Services</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        /* Apply Inter font family */
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="flex flex-col min-h-screen bg-gray-100">

    <!-- Header Section -->
    <header class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white p-6 shadow-lg rounded-b-lg">
        <div class="container mx-auto flex items-center justify-between">
            <div class="flex items-center space-x-4">
                <!-- Placeholder for Logo -->
                <div class="bg-white rounded-full p-2 shadow-md">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h1 class="text-4xl font-extrabold tracking-tight">Mediakor</h1>
            </div>
            <!-- Optional: Add navigation items or user info here if needed -->
        </div>
    </header>

    <!-- Main Content Area -->
    <div class="flex flex-1 container mx-auto my-6 p-4 bg-white rounded-lg shadow-xl">
        <!-- Left Column for Links -->
        <aside class="w-1/4 pr-6 border-r border-gray-200">
            <nav>
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Navigation</h2>
                <ul class="space-y-3">
                    <li><a href="index.php" class="block py-2 px-3 rounded-md text-blue-600 hover:bg-blue-50 hover:text-blue-700 transition-colors duration-200">Home</a></li>
                    <li><a href="about.php" class="block py-2 px-3 rounded-md text-blue-600 hover:bg-blue-50 hover:text-blue-700 transition-colors duration-200">About Us</a></li>
                    <li><a href="services.php" class="block py-2 px-3 rounded-md text-blue-600 hover:bg-blue-50 hover:text-blue-700 transition-colors duration-200">Services</a></li>
                    <li><a href="page4.php" class="block py-2 px-3 rounded-md text-blue-600 hover:bg-blue-50 hover:text-blue-700 transition-colors duration-200">Contact</a></li>
                    <li><a href="page5.php" class="block py-2 px-3 rounded-md text-blue-600 hover:bg-blue-50 hover:text-blue-700 transition-colors duration-200">Blog</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Body Section (Right of links, under header) -->
        <main class="flex-1 pl-6">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Services:</h2>
            <p class="text-gray-700 leading-relaxed mb-4">
                Here at Mediakor, we do not compromise. We press on until we make things work. There are a large number of tools
                and services that we can provide, in little to no time. Other setups may require building in a test environment to
                get up and moving strong and reliably.
            </p>
            <p class="text-gray-700 leading-relaxed mb-4">
                Feel free to reach out and we can discuss what exactly you need and the approach we need to take to get there!
            </p>
            
            <section class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Media Servers</h3>
                    <p class="text-gray-600">Have you ever wanted to OWN your media? Are you sick of things that are added dissapearing? We can create a solution and get your media streaming through the web!</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Reliable Hypervisor</h3>
                    <p class="text-gray-600">Proxmox allows deployment of many types of container, and unlimited customizability.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">DNS/AdBlock</h3>
                    <p class="text-gray-600">Is your buisiness sick of tracking, ads and all the other nonsense that comes with the internet nowadays? We can keep you out of their loop!</p>
                </div>
            </section>
        </main>
    </div>

    <!-- Optional: Footer Section -->
    <footer class="bg-gray-800 text-white p-6 mt-auto shadow-inner rounded-t-lg">
        <div class="container mx-auto text-center text-sm">
            <p>&copy; 2025 Mediakor. All rights reserved.</p>
            <p class="mt-2">
                <a href="#" class="text-blue-300 hover:text-blue-100 transition-colors duration-200">Privacy Policy</a> |
                <a href="#" class="text-blue-300 hover:text-blue-100 transition-colors duration-200">Terms of Service</a>
            </p>
        </div>
    </footer>

</body>
</html>
