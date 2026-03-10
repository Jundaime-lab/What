<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Grid - Tailwind</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="grid grid-cols-3 gap-4 w-full max-w-2xl p-6">
        
        <div class="bg-indigo-200 text-indigo-800 h-24 rounded-xl flex items-center justify-center font-bold text-xl shadow-sm">01</div>
        <div class="bg-indigo-200 text-indigo-800 h-24 rounded-xl flex items-center justify-center font-bold text-xl shadow-sm">02</div>
        <div class="bg-indigo-200 text-indigo-800 h-24 rounded-xl flex items-center justify-center font-bold text-xl shadow-sm">03</div>

        <div class="col-span-2 bg-indigo-600 text-white h-24 rounded-xl flex items-center justify-center font-bold text-xl shadow-md">04</div>

        <div class="bg-indigo-200 text-indigo-800 h-24 rounded-xl flex items-center justify-center font-bold text-xl shadow-sm">05</div>
        <div class="bg-indigo-200 text-indigo-800 h-24 rounded-xl flex items-center justify-center font-bold text-xl shadow-sm">06</div>

        <div class="col-span-2 bg-indigo-600 text-white h-24 rounded-xl flex items-center justify-center font-bold text-xl shadow-md">07</div>

    </div>

</body>
</html>