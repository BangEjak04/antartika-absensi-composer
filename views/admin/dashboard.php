<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    <!-- CSS & JS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <style>
        [x-cloak] {
            display: none;
        }
    </style>
</head>

<body class="font-sans antialiased bg-gray-50 transition-all duration-300" x-data="{ sidebarOpen: false }">
    <div class="relative h-screen">
        <!-- Sidebar Overlay -->
        <div x-show="sidebarOpen"
            class="fixed inset-0 z-40 bg-black bg-opacity-50 transition-opacity"
            @click="sidebarOpen = false"
            x-transition:enter="transition-opacity ease-linear duration-300"
            x-transition:leave="transition-opacity ease-linear duration-300"
            x-cloak>
        </div>

        <!-- Sidebar -->
        <div x-show="sidebarOpen"
            class="fixed top-0 left-0 z-50 w-64 h-full bg-white shadow-lg transition-transform duration-300"
            x-transition:enter="transform transition-transform ease-in-out duration-300"
            x-transition:enter-start="-translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="transform transition-transform ease-in-out duration-300"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full"
            style="display: none;"
            x-bind:style="sidebarOpen ? 'display: block;' : 'display: none;'"
            x-cloak>
            <?php include '../views/partials/admin/sidebar.php'; ?>
        </div>

        <!-- Main Content -->
        <div class="flex-1 transition-all duration-300">
            <?php include '../views/partials/admin/breadcrumbs.php'; ?>

            <!-- Main Content Area -->
            <main class="h-screen pt-12 flex-1">
                <div class="py-4 h-full">
                    <div class="max-w-7xl mx-auto h-full sm:px-6 lg:px-8">
                        <div class="bg-white shadow-sm sm:rounded-lg h-full flex flex-row">

                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>