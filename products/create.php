<?php
require_once "../controller/ProductController.php";
$controller = new ProductController();
$categories = $controller->create();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="w-[40%] mx-auto shadow-lg my-12 py-5">
        <h1 class="text-center">Create Product</h1>
        <form class="w-[90%] mx-auto" action="store.php" method="POST" enctype="multipart/form-data">
            <div class="my-3">
                <label for="name">Name</label>
                <input required type="text" name="name" class="w-full border-2 border-blue-600 px-5 py-2">
            </div>
            <div class="my-3">
                <label for="price">Price</label>
                <input required type="number" name="price" class="w-full border-2 border-blue-600 px-5 py-2">
            </div>
            <div class="my-3">
                <label for="stock">Stock</label>
                <input required type="number" name="stock" class="w-full border-2 border-blue-600 px-5 py-2">
            </div>
            <div class="my-3">
                <label for="description">Description</label>
                <textarea required name="description" class="w-full border-2 border-blue-600 px-5 py-2"></textarea>
            </div>
            <div class="my-3">
                <label for="category">Category</label>
                <select required name="category_id" class="w-full border-2 border-blue-600 px-5 py-2">
                    <option value="" disabled selected></option>
                    <?php foreach ($categories as $category) : ?>
                        <option value="<?php echo $category->id ?>"><?php echo $category->name ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="my-3">
                <label for="image">Image</label>
                <input type="file" name="image" class="w-full border-2 border-blue-600 px-5 py-2" required>
            </div>
            <button class="w-full py-2 bg-blue-600 text-white my-3 rounded-md">Save</button>
            <div class="my-2 py-2 w-full bg-gray-800 text-white rounded-md text-center">
                <a href="index.php" class="w-full">Back</a>
            </div>
        </form>
    </div>
</body>

</html>