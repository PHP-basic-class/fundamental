<?php 
require_once "../controller/CategoryController.php";
$controller = new CategoryController();
$product = $controller->categoryEdit($_GET["id"]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="from-amber-200 via-amber-300 to-amber-500 bg-gradient-to-br">
    <div class="w-[40%] rounded-lg mx-auto shadow-lg my-32 py-5 dark:bg-gray-700">
        <h1 class="text-center font-bold text-lg text-white">CREATE CATEGORY</h1>
        <form class="w-[90%] mx-auto" action="update.php?id=<?php echo $product->id; ?>" method="POST">
            <div class="">
                <label for="name" class="text-sm text-white">CATEGORY NAME</label>
                <input required value="<?php echo $product->name;?>" type="text" name="name" class="w-full border-2 rounded-md border-amber-500 px-3 py-1">
            </div>
            <div class="">
                <input required value="<?php echo $product->created_at;?>" type="hidden" name="created_at" class="w-full border-2 rounded-md border-amber-500 px-3 py-1">
            </div>
            <button class="w-full py-1 bg-amber-400 text-gray-800 my-3 rounded-md hover:bg-amber-300 btn-save">Save</button>
            <div class="my-2 py-1 w-full bg-gray-800 text-white rounded-md rounded-md hover:bg-gray-600 text-center cursor-pointer">
                <a href="./index.php" class="w-full">Back</a>
            </div>
        </form>
    </div>
</body>
</html>

