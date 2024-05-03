<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nomor Handphone</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Tambahkan custom styling di sini jika diperlukan */
    </style>
</head>

<body class="bg-gray-800 text-white flex justify-center items-center h-screen">
    <div class="bg-gray-900 p-16 rounded-lg shadow-lg">
        <h1 class="text-2xl font-semibold mb-4">Form Nomor Handphone</h1>
        <form action="insert.php" method="post">
            <div class="mb-4">
                <label for="no_hanphone" class="block text-sm mb-2">Nomor Handphone:</label>
                <input type="tel" id="no_hanphone" name="no_hanphone" class="block w-full bg-gray-700 border border-gray-600 rounded-md px-3 py-2 text-sm focus:outline-none focus:border-gray-500" placeholder="Masukkan nomor handphone Anda" required>
            </div>
            <div class="mb-4">
                <label for="owner" class="block text-sm mb-2">Owner:</label>
                <input type="text" id="owner" name="owner" class="block w-full bg-gray-700 border border-gray-600 rounded-md px-3 py-2 text-sm focus:outline-none focus:border-gray-500" placeholder="Masukkan nama Anda" required>
            </div>
            <button type="submit" class="bg-gray-600 hover:bg-gray-700 text-white py-2 px-4 rounded-md text-sm mt-8">Submit</button>
        </form>
    </div>
</body>

</html>
