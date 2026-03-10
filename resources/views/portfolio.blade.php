<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio - Arsakatiryanegara</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<body class="bg-slate-900 text-slate-100 p-6 md:p-12">

    <div class="max-w-5xl mx-auto">
        <header class="mb-12 border-b border-slate-700 pb-8">
            <h1 class="text-4xl font-extrabold mb-2 text-indigo-400">Arsakatiryanegara</h1>
            <p class="text-slate-400 text-lg">Software Engineering Student & Content Creator</p>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            
            <div class="md:col-span-2 md:row-span-2 bg-slate-800 p-8 rounded-3xl border border-slate-700 flex flex-col justify-between">
                <div>
                    <h2 class="text-2xl font-bold mb-4">Tentang Saya</h2>
                    <p class="text-slate-400 leading-relaxed mb-4">
                        Sedang mendalami infrastruktur jaringan dan pengembangan perangkat lunak menggunakan Laravel dan Linux. Senang berbagi pengetahuan melalui tutorial video.
                    </p>
                </div>
                <div class="flex gap-3">
                    <span class="px-4 py-2 bg-indigo-900/50 text-indigo-300 rounded-full text-sm font-semibold">Laravel</span>
                    <span class="px-4 py-2 bg-slate-700 text-slate-300 rounded-full text-sm font-semibold">Linux</span>
                </div>
            </div>

            <div class="bg-indigo-600 p-6 rounded-3xl flex flex-col justify-center items-center shadow-lg shadow-indigo-500/20">
                <span class="text-3xl font-bold">10+</span>
                <span class="text-sm opacity-80">Proyek Git</span>
            </div>

            <div class="bg-slate-800 p-6 rounded-3xl border border-slate-700 flex flex-col justify-center items-center">
                <span class="text-3xl font-bold text-indigo-400">Linux</span>
                <span class="text-sm text-slate-500">Main OS</span>
            </div>

            <div class="md:col-span-2 bg-slate-800 p-6 rounded-3xl border border-slate-700 hover:border-indigo-500 transition-colors group">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="font-bold text-xl mb-1">Project "What"</h3>
                        <p class="text-slate-500 text-sm">Laravel & Tailwind CSS Grid Experiment</p>
                    </div>
                    <div class="text-indigo-400 group-hover:translate-x-1 transition-transform">→</div>
                </div>
            </div>

        </div>
    </div>

</body>
</html>