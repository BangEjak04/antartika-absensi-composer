<?php
    // Ambil URL saat ini untuk memeriksa halaman aktif
    $currentUrl = $_SERVER['REQUEST_URI'];
?>

<aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 border-r">
        <ul class="space-y-1 font-medium">
            <li>
                <a href="/admin/dashboard"
                   class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 <?= strpos($currentUrl, 'dashboard') !== false ? 'bg-zinc-900 text-white shadow hover:bg-zinc-800' : 'hover:bg-accent' ?> h-9 px-4 py-2 group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-gauge w-5 h-5 <?= strpos($currentUrl, 'dashboard') !== false ? 'text-white' : 'text-gray-500' ?> transition duration-75">
                        <path d="m12 14 4-4" />
                        <path d="M3.34 19a10 10 0 1 1 17.32 0" />
                    </svg>
                    <span class="ms-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/admin/attendance"
                   class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 <?= strpos($currentUrl, 'attendance') !== false ? 'bg-zinc-900 text-white shadow hover:bg-zinc-800' : 'hover:bg-accent' ?> h-9 px-4 py-2 group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-gauge w-5 h-5 <?= strpos($currentUrl, 'attendance') !== false ? 'text-white' : 'text-gray-500' ?> transition duration-75">
                        <path d="m12 14 4-4" />
                        <path d="M3.34 19a10 10 0 1 1 17.32 0" />
                    </svg>
                    <span class="ms-3">Attendance</span>
                </a>
            </li>
            <li>
                <a href="/admin/student"
                   class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 <?= strpos($currentUrl, 'student') !== false ? 'bg-zinc-900 text-white shadow hover:bg-zinc-800' : 'hover:bg-accent' ?> h-9 px-4 py-2 group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-gauge w-5 h-5 <?= strpos($currentUrl, 'student') !== false ? 'text-white' : 'text-gray-500' ?> transition duration-75">
                        <path d="m12 14 4-4" />
                        <path d="M3.34 19a10 10 0 1 1 17.32 0" />
                    </svg>
                    <span class="ms-3">Student</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
