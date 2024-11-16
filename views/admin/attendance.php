<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="5"> -->
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
                            <!-- Sidebar di sebelah kiri -->
                            <div class="basis-4/12 h-full border-r flex flex-col">
                                <div class="p-4 pb-2">
                                    <p class="text-muted-foreground">Terbaru</p>
                                    <input type="text" name="search" id="search" class="w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500">
                                </div>
                                <div class="flex-grow p-4 overflow-y-auto">
                                    <div class="flex flex-col gap-y-2 max-h-[calc(100vh-240px)]">
                                        <!-- Daftar nama -->
                                        <?php foreach ($students as $student): ?>
                                            <div x-data="{ open: false }" class="rounded-lg border p-3 text-left text-sm transition-all hover:bg-gray-100">
                                                <div @click="open = true" class="flex w-full justify-between gap-1">
                                                    <div class="flex flex-col">
                                                        <div class="font-semibold"><?= $student->name ?></div>
                                                        <div class="text-xs"><?= $student->classroom ?></div>
                                                    </div>
                                                    <div class="">
                                                        <div class="text-xs">Saturday</div>
                                                        <div class="ml-auto inline-flex items-center rounded-md bg-red-500 text-white px-2.5 py-0.5 text-xs font-semibold shadow">
                                                            Terlambat
                                                        </div>
                                                    </div>
                                                    <!-- <div class="flex items-center">
                                                        <div class="flex items-center gap-2">
                                                            <div class="font-semibold"><?= $student->name ?></div>
                                                        </div>
                                                        <div class="ml-auto text-xs text-muted-foreground">07:25</div>
                                                    </div>
                                                    <div class="flex items-start">
                                                        <div class="text-xs"><?= $student->classroom ?></div>
                                                        <div class="ml-auto inline-flex items-center rounded-md bg-red-500 text-white px-2.5 py-0.5 text-xs font-semibold shadow">
                                                            Terlambat
                                                        </div>
                                                    </div> -->
                                                </div>
                                                <!-- Popup dialog overlay and content -->
                                                <div x-show="open" x-transition:enter class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-75 z-50" @click.outside="open = false" style="display: none;">
                                                    <div @click.outside="open = false" class="bg-white w-full max-w-md p-6 rounded-lg shadow-lg relative">
                                                        <!-- Close button -->
                                                        <button @click="open = false" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                            </svg>
                                                        </button>

                                                        <!-- Dialog content -->
                                                        <h2 class="text-xl font-semibold text-gray-800 mb-4"><div class="font-semibold"><?= $student->name ?></div></h2>
                                                        <p class="text-gray-600 mb-6">
                                                            Ini adalah contoh detail dari sebuah post. Anda bisa menampilkan informasi apapun di sini, seperti deskripsi post, tanggal, penulis, atau data lainnya.
                                                        </p>

                                                        <!-- Close dialog button -->
                                                        <button @click="open = false" class="w-full bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition">
                                                            Tutup
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                        <!-- Tambahkan item absensi lainnya di sini -->
                                    </div>
                                </div>
                            </div>

                            <!-- Konten utama di sebelah kanan -->
                            <div class="basis-8/12 flex-1 h-full flex flex-col items-center justify-center relative p-4">
                                <!-- Preview kamera -->
                                <div class="w-full max-w-xl relative overflow-hidden rounded-lg shadow-md">
                                    <img src="http://127.0.0.1:5001/video_feed" class="w-full h-full">
                                    <div class="absolute top-0 left-0 right-0 p-2 bg-gray-800 bg-opacity-50 text-white text-sm rounded-b-lg">
                                        <p>Pratinjau Kamera</p>
                                    </div>
                                    <!-- Detail siswa di dalam preview -->
                                    <div class="absolute bottom-0 left-0 right-0 p-2 bg-gray-800 bg-opacity-50 text-white text-sm rounded-t-lg">
                                        <!-- <p class="font-bold">Nama: {{ $detectedNames[0] ?? 'Tidak Diketahui' }}</p> -->
                                        <p>Kelas: XII-MIPA 7</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>