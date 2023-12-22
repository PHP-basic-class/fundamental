<?php
    require_once "../controller/CategoryController.php";
    $controller = new CategoryController();
    $categories = $controller->index();
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
    <div class="flex justify-between py-4">
        <h1 class="text-lg ml-6 font-bold italic font-lg">Category Table</h1>
        <div>
            <a href="../categories/create.php" class="bg-gradient-to-b from-teal-700 via-teal-800 to-teal-900 py-2 px-3 text-gray-100 mr-2 rounded shadow-lg hover:ring-2 ring-teal-500">Add +</a>
        </div>
    </div>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs uppercase bg-gray-700 text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Created_at
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Updated_at
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($categories as $category): ?>
                <tr class="border-b text-grey-100 bg-gray-800 border-gray-700">
                    <td scope="row" class="px-6 py-4 font-medium  whitespace-nowrap text-white">
                        <?php echo $category->id; ?>
                    </td>
                    <td scope="row" class="px-6 py-4 font-medium  whitespace-nowrap text-white">
                        <?php echo $category->name; ?>
                    </td>
                    <td scope="row" class="px-6 py-4 font-medium  whitespace-nowrap text-white">
                        <?php echo $category->created_at; ?>
                    </td>
                    <td scope="row" class="px-6 py-4 font-medium  whitespace-nowrap text-white">
                        <?php echo $category->updated_at; ?>
                    </td>
                    <td scope="row" class="px-6 py-4 font-medium  whitespace-nowrap text-white">
                        <!-- <form action="destory.php" method="POST">
                            <input type="hidden" type="text" name="id" value="<?php echo $product->id; ?>">
                            <button class="px-4 py-2 bg-red-400 rounded-md">delete</button>
                        </form> -->
                        <a class="px-3 py-2 bg-gradient-to-b from-blue-700 via-blue-800 to-blue-900 rounded hover:ring-2" href="../categories/edit.php?id=<?php echo $category->id; ?>">Edit</a>

                        <a class="px-3 py-2 bg-gradient-to-b from-red-500 to-red-900 rounded hover:ring-2 ring-gray-600" href="../categories/destroy.php?id=<?php echo $category->id; ?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>
</html>