<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Modul 1</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 min-h-screen flex items-center justify-center p-4">

    <div class="bg-white max-w-md w-full rounded-2xl shadow-xl overflow-hidden border border-slate-100 transform transition hover:-translate-y-1 hover:shadow-2xl duration-300">
        
        <div class="bg-gradient-to-r from-blue-600 to-indigo-600 p-8 text-center relative overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-full opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>
            
            <div class="bg-white/20 w-16 h-16 mx-auto rounded-full flex items-center justify-center backdrop-blur-sm mb-4">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
            </div>

            <h1 class="text-white text-2xl font-bold tracking-tight">Selamat Datang!</h1>
            <p class="text-blue-100 text-sm mt-1">Modul 1 Web Lanjut</p>
        </div>

        <div class="p-8 text-center">
            <h2 class="text-3xl font-extrabold text-slate-800 mb-2">
                {{ $nama }}
            </h2>
            
            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800 mb-6">
                <span class="w-2 h-2 bg-green-500 rounded-full mr-2 animate-pulse"></span>
                Mahasiswa Aktif
            </span>

            <p class="text-slate-500 leading-relaxed mb-8">
                Ini adalah halaman pertama saya di <span class="font-bold text-indigo-600">Laravel 12</span>. 
                Tampilan ini sudah di-upgrade menggunakan bantuan AI agar terlihat lebih profesional.
            </p>

            <div class="space-y-3">
                <button class="w-full bg-slate-900 hover:bg-slate-800 text-white font-semibold py-3 px-6 rounded-xl transition-all duration-200 shadow-lg hover:shadow-slate-500/30">
                    Mulai Coding 🚀
                </button>
            </div>
        </div>

        <div class="bg-slate-50 p-4 border-t border-slate-100 text-center">
            <p class="text-xs text-slate-400">
                &copy; {{ date('Y') }} Dibuat dengan ❤️ di Cirebon
            </p>
        </div>
    </div>

</body>
</html>