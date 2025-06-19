<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Fonts
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    Tailwind CSS -->
    <!-- <link rel="stylesheet" href="../../src/output.css"> -->
</head>

<body class="bg-white dark:bg-neutral-900 min-h-screen">
    <div class="flex min-h-screen justify-end md:ml-64">
        <!-- Main Content -->
        <div class="flex items-center justify-end w-full p-4">
            <div class="w-full max-w-7xl space-y-6 mx-auto">
                <!-- Grid Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                    <!-- Card Hari Ini -->
                    <div class="bg-gradient-to-r from-cyan-500 to-sky-500 text-white rounded-xl p-6 shadow-md">
                        <h5 class="text-lg font-semibold mb-2">Hari Ini</h5>
                        <div class="flex items-end justify-start">
                            <span class="text-4xl font-bold">19</span>
                            <span class="text-xl ml-2">Juni 2025</span>
                        </div>
                    </div>

                    <!-- Card Pengumuman -->
                    <div class="bg-gradient-to-r from-lime-500 to-green-500 text-white rounded-xl p-6 shadow-md">
                        <h5 class="text-lg font-semibold mb-2">Pengumuman Hari Ini</h5>
                        <div class="flex items-end justify-between">
                            <span class="text-2xl font-bold">Tidak ada</span>
                        </div>
                    </div>

                    <!-- Card Nilai -->
                    <div class="bg-gradient-to-r from-rose-500 to-red-500 text-white rounded-xl p-6 shadow-md cursor-pointer hover:scale-105 transition-transform duration-200">
                        <h5 class="text-lg font-semibold mb-2">Nilai Siswa</h5>
                        <div class="flex items-end justify-between">
                            <span class="text-2xl font-bold">Lihat Nilai</span>
                        </div>
                    </div>
                </div>

                <!-- Card Nama Siswa -->
                <div class="bg-gradient-to-r from-amber-500 to-yellow-500 text-white rounded-xl p-6 shadow-md w-full mx-auto">
                    <h5 class="text-lg font-semibold mb-2">Nama Siswa</h5>
                    <div class="text-2xl font-bold">Alexander Mulyono Assegaf</div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>