<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Grid Task - Responsive</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 min-h-screen flex items-center justify-center p-4">

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 w-full max-w-4xl">
        
        <div class="bg-indigo-200 text-indigo-700 h-28 rounded-2xl flex items-center justify-center font-bold text-2xl shadow-sm transition transform hover:scale-105">01</div>
        <div class="bg-indigo-200 text-indigo-700 h-28 rounded-2xl flex items-center justify-center font-bold text-2xl shadow-sm transition transform hover:scale-105">02</div>
        <div class="bg-indigo-200 text-indigo-700 h-28 rounded-2xl flex items-center justify-center font-bold text-2xl shadow-sm transition transform hover:scale-105">03</div>

        <div class="md:col-span-2 bg-indigo-600 text-white h-28 rounded-2xl flex items-center justify-center font-bold text-2xl shadow-md transition transform hover:scale-105">04</div>
        
        <div class="bg-indigo-200 text-indigo-700 h-28 rounded-2xl flex items-center justify-center font-bold text-2xl shadow-sm transition transform hover:scale-105">05</div>
        <div class="bg-indigo-200 text-indigo-700 h-28 rounded-2xl flex items-center justify-center font-bold text-2xl shadow-sm transition transform hover:scale-105">06</div>

        <div class="md:col-span-2 bg-indigo-600 text-white h-28 rounded-2xl flex items-center justify-center font-bold text-2xl shadow-md transition transform hover:scale-105">07</div>

    </div>

</body>
</html>