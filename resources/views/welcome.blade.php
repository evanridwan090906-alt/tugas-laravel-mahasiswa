<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 1 - Laravel 12</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen text-gray-800">

    <div class="bg-white p-10 rounded-2xl shadow-xl max-w-md w-full text-center border border-gray-100 transform transition hover:-translate-y-1 hover:shadow-2xl duration-300">
        
        <div class="inline-block px-3 py-1 mb-6 text-xs font-bold tracking-wider text-red-600 uppercase bg-red-100 rounded-full">
            Modul 1 • Web Lanjut
        </div>

        <h1 class="text-4xl font-extrabold mb-4 text-gray-900 tracking-tight">
            Selamat Datang, <br>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-orange-500">
                {{ $nama }}!
            </span>
        </h1>

        <p class="text-gray-500 text-lg leading-relaxed mb-8">
            Ini adalah halaman pertama saya di <span class="font-semibold text-gray-800">Laravel 12</span> dengan bantuan AI. Siap untuk coding lebih dalam?
        </p>

        <div class="space-y-3">
            <button class="w-full bg-gray-900 hover:bg-gray-800 text-white font-bold py-3 px-6 rounded-xl transition duration-300 shadow-lg">
                Mulai Eksplorasi 🚀
            </button>
            <p class="text-xs text-gray-400 mt-4">
                Dibuat di Cirebon, {{ date('Y') }}
            </p>
        </div>

    </div>

</body>
</html>