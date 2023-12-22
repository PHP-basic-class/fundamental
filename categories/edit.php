<?php
    require_once "../controller/CategoryController.php";
    $controller = new CategoryController();
    $category = $controller->edit($_GET["id"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200">
    <div class="w-[30%] mx-auto shadow-lg my-12  py-4 rounded" >
        <h1 class="text-center text-gray-100 text-xl px-5 py-2 bg-gray-700 rounded">Category</h1>
        <form class="w-[90%] mx-auto" action="../categories/update.php?id=<?php echo $category->id; ?>" method="POST">
            <div class="my-3">
                <label for="name">Name</label>
                <input class="w-full px-3 py-2 bg-gray-200 border-2 border-slate-300" required value="<?php echo $category->name; ?>" type="text" name="name">
            </div>
            <div class="my-3">
                <input class="w-full px-3 border-2 border-indigo-500 ring-blue-500" required value="<?php echo $category->created_at; ?>" type="hidden" name="created_at">
            </div>
            <button class="w-full bg-gradient-to-b from-blue-700 to-blue-800 rounded py-2 my-2 text-gray-100 hover:ring ring-blue-400">Update</button>
        </form>
        <div class="w-[90%] mx-auto">
            <a href="../categories/index.php">
            <button  class="w-full bg-gradient-to-b from-gray-700 via-gray-900 to-black rounded py-2 text-gray-100 hover:ring ring-gray-400">Back</button>

            </a>
        </div>
    </div>
</body>
</html>
