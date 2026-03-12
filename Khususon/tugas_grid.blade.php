<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Grid Task</title>
    <style>
        body {
            font-family: 'figtree', sans-serif; /* Font default Laravel */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f3f4f6;
            margin: 0;
        }

        .grid-container {
            display: grid;
            /* Membuat 3 kolom dengan lebar yang sama */
            grid-template-columns: repeat(3, 1fr); 
            gap: 15px;
            width: 90%;
            max-width: 800px;
        }

        .grid-item {
            background-color: #d1d5ff; /* Ungu muda */
            color: #4a4a8c;
            font-size: 1.5rem;
            font-weight: bold;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 120px;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }

        /* Kotak 04 dan 07 yang memanjang */
        .span-2 {
            grid-column: span 2;
            background-color: #6366f1; /* Ungu tua */
            color: white;
        }
    </style>
</head>
<body>

    <div class="grid-container">
        <div class="grid-item">01</div>
        <div class="grid-item">02</div>
        <div class="grid-item">03</div>
        <div class="grid-item span-2">04</div>
        <div class="grid-item">05</div>
        <div class="grid-item">06</div>
        <div class="grid-item span-2">07</div>
    </div>

</body>
</html>