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

<body class="font-sans antialiased bg-gray-50 transition-all duration-300">
    <div class="relative h-screen">
        <!-- Main Content -->
        <div class="flex-1 transition-all duration-300">
            <!-- Main Content Area -->
            <main class="h-screen flex-1">
                <div class="py-4 h-full">
                    <div class="max-w-7xl mx-auto h-full sm:px-6 lg:px-8">
                        <div class="bg-white shadow-sm sm:rounded-lg h-full flex flex-row">
                            <!-- Sidebar di sebelah kiri -->
                            <div class="w-full h-full flex flex-col">
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
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>