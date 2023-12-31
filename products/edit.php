<?php 
require_once "../controller/ProductController.php";
$controller = new ProductController();
$product = $controller->edit($_GET["id"])["product"];
$categories = $controller->edit($_GET["id"])["categories"];
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
        <form class="w-[90%] mx-auto" action="update.php?id=<?php echo $product->id; ?>" method="POST">
            <div class="my-3">
                <label for="name">Name</label>
                <input value="<?php echo $product->name;?>" type="text" name="name" class="w-full border-2 border-blue-600 px-5 py-2">
            </div>
            <div class="my-3">
                <label for="price">Price</label>
                <input value="<?php echo $product->price;?>" type="number" name="price" class="w-full border-2 border-blue-600 px-5 py-2">
            </div>
            <div class="my-3">
                <label for="stock">Stock</label>
                <input value="<?php echo $product->stock;?>" type="number" name="stock" class="w-full border-2 border-blue-600 px-5 py-2">
            </div>
            <div class="my-3">
                <label for="description">Description</label>
                <textarea name="description" class="w-full border-2 border-blue-600 px-5 py-2"><?php echo $product->description ?></textarea>
            </div>
            <select required name="category_id" class="w-full border-2 border-blue-600 px-5 py-2">
                <?php foreach ($categories as $category): ?>
                    <option value="<?php echo $category->id?>"  <?php if($category->id == $product->category_id) {echo "selected";} ?>>
                        <?php echo $category->name?>
                    </option>
                <?php endforeach; ?>
            </select>
            <button class="w-full py-2 bg-blue-600 text-white my-3 rounded-md">Save</button>
            <div class="my-2 py-2 w-full bg-gray-800 text-white rounded-md text-center">
                <a href="index.php" class="w-full">Back</a>
            </div>
        </form>
    </div>
</body>
</html>