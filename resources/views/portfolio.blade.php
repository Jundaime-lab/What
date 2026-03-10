<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Interaktif - Arsakatiryanegara</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            scroll-behavior: smooth;
        }

        .glass {
            background: rgba(30, 41, 59, 0.7);
            backdrop-filter: blur(10px);
        }
    </style>
</head>

<body class="bg-slate-950 text-slate-100 p-6 md:p-12 overflow-x-hidden" x-data="{ open: false }">

    <div class="max-w-5xl mx-auto">
        <header class="mb-12 border-b border-slate-800 pb-8 animate-fade-in-down"
            style="animation: fadeIn 0.8s ease-out">
            <div class="flex justify-between items-center">
                <div>
                    <h1
                        class="text-4xl md:text-5xl font-extrabold mb-2 bg-gradient-to-r from-indigo-400 to-purple-400 bg-clip-text text-transparent">
                        Arsakatiryanegara
                    </h1>
                    <p class="text-slate-400 text-lg">Software Engineering Student & Content Creator</p>
                </div>
                <button @click="open = !open"
                    class="bg-indigo-600 hover:bg-indigo-500 px-6 py-2 rounded-full font-bold transition-all transform active:scale-95 shadow-lg shadow-indigo-500/20">
                    Kontak
                </button>
            </div>
        </header>

        <div x-show="open" x-transition
            class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/60 backdrop-blur-sm">
            <div @click.away="open = false"
                class="bg-slate-800 p-8 rounded-3xl max-w-sm w-full border border-slate-700 shadow-2xl">
                <h2 class="text-2xl font-bold mb-4">Ayo Ngobrol!</h2>
                <p class="text-slate-400 mb-6">Kamu bisa menghubungi saya melalui email atau GitHub.</p>
                <div class="space-y-3">
                    <a href="mailto:email@kamu.com"
                        class="block text-center bg-slate-700 p-3 rounded-xl hover:bg-slate-600 transition">Email
                        Saya</a>
                    <button @click="open = false" class="block w-full text-indigo-400 font-semibold mt-4">Tutup</button>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">

            {{-- TENTANG SAYA (Tetap Statis) --}}
            <div
                class="md:col-span-2 md:row-span-2 bg-slate-800/50 p-8 rounded-3xl border border-slate-700 flex flex-col justify-between hover:shadow-2xl hover:shadow-indigo-500/10 transition-all duration-300 transform hover:-translate-y-2 group">
                <div>
                    <h2 class="text-2xl font-bold mb-4 group-hover:text-indigo-400 transition">Tentang Saya</h2>
                    <p class="text-slate-400 leading-relaxed mb-4">
                        Sedang mendalami infrastruktur jaringan dan pengembangan perangkat lunak menggunakan Laravel dan
                        Linux. Senang berbagi pengetahuan melalui tutorial video.
                    </p>
                </div>
                <div class="flex flex-wrap gap-3">
                    <span
                        class="px-4 py-2 bg-indigo-900/40 text-indigo-300 rounded-full text-sm font-semibold border border-indigo-800/50 hover:bg-indigo-800 transition">Laravel</span>
                    <span
                        class="px-4 py-2 bg-slate-700/50 text-slate-300 rounded-full text-sm font-semibold border border-slate-600 hover:bg-slate-600 transition">Linux</span>
                </div>
            </div>

            {{-- STATS BOX --}}
            <div
                class="bg-indigo-600 p-6 rounded-3xl flex flex-col justify-center items-center shadow-lg shadow-indigo-500/20 hover:rotate-3 transition-transform">
                <span class="text-4xl font-black italic">{{ $projects->count() }}</span>
                <span class="text-sm font-bold uppercase tracking-wider opacity-80">Proyek Database</span>
            </div>

            {{-- OS BOX --}}
            <div
                class="bg-slate-800 p-6 rounded-3xl border border-slate-700 flex flex-col justify-center items-center group relative overflow-hidden">
                <div class="absolute inset-0 bg-indigo-500/5 group-hover:bg-indigo-500/10 transition"></div>
                <span class="text-3xl font-bold text-indigo-400 group-hover:scale-110 transition">Linux</span>
                <span class="text-sm text-slate-500 uppercase tracking-widest mt-1">ThinkPad T14</span>
            </div>

            {{-- LOOPING DATA DARI SQL SERVER --}}
            @foreach ($projects as $project)
                <a href="{{ $project->link }}" target="_blank"
                    class="md:col-span-2 bg-slate-800 p-8 rounded-3xl border border-slate-700 hover:border-indigo-500 hover:bg-slate-800/80 transition-all group relative overflow-hidden">
                    <div class="flex justify-between items-start relative z-10">
                        <div>
                            <div class="flex items-center gap-2 mb-2">
                                <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                                <span class="text-xs font-bold text-slate-500 uppercase">Live Project</span>
                            </div>
                            <h3 class="font-bold text-2xl mb-1 group-hover:text-indigo-400 transition">
                                {{ $project->title }}</h3>
                            <p class="text-slate-400">{{ $project->description }}</p>
                        </div>
                        <div
                            class="bg-slate-700 p-3 rounded-2xl text-indigo-400 group-hover:bg-indigo-500 group-hover:text-white transition-all transform group-hover:rotate-45">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </div>
                    </div>
                </a>
            @endforeach

        </div>
    </div>

    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

</body>

</html>
