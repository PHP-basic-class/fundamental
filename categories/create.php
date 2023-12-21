
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="w-[40%] rounded-md mx-auto shadow-lg my-32 py-5 bg-black">
        <h1 class="text-center text-white">CREATE CATEGORY</h1>
        <form class="w-[90%] mx-auto" action="store.php" method="POST">
            <div class="my-3">
                <label for="name" class="text-white">CATEGORY NAME</label>
                <input required type="text" name="name" class="w-full border-4 rounded-md border-amber-500 px-5 py-2">
            </div>
            <div class="my-3">
                <label for="price" class="text-white">STOCK</label>
                <input required type="text" name="price" class="w-full border-4 rounded-md border-amber-500 px-5 py-2 bg-neutral-100">
            </div>
            <button class="w-full py-2 bg-amber-500 text-white my-3 rounded-md hover:bg-amber-400 btn-save">Save</button>
            <div class="my-2 py-2 w-full bg-gray-800 text-white rounded-md text-center cursor-pointer">
                <a href="index.php" class="w-full">Back</a>
            </div>
        </form>
    </div>
</body>
</html>

