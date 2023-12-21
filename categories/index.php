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
    <title>Category List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="p-4 flex items-center justify-between bg-white shadow-md">
        <p class="text-lg sm:text-xl text-blue-700 font-bold">Category List</p>
        <div>
        <a href="../recycle_bin/categories.php" class="bg-black hover:bg-blue-700 text-white font-bold py-2 px-4 mx-3  rounded">
            Recycle
        </a>

        <a href="create.php" class="bg-blue-700 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            New +
        </a>
        </div>
        
    </div>

    <div class="overflow-x-auto shadow-md sm:rounded-lg bg-white mt-4">
        <table class="w-full text-sm sm:text-base text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs sm:text-sm text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Category name
                    </th>
            
                    <th scope="col" class="px-6 py-3">
                        Created at
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Updated at
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categories as $category) : ?>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?php echo $category->name; ?>
                        </td>
                       
                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?php echo $category->created_at; ?>
                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?php echo $category->updated_at; ?>
                        </td>
                        <td class="px-6 py-4">
                        <a href="edit.php?id=<?php echo $category->id; ?>&name=<?php echo $category->name; ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        |
                        <a href="destroy.php?id=<?php echo $category->id; ?>" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>
