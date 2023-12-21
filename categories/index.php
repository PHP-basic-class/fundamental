

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="from-amber-200 via-amber-300 to-amber-500 bg-gradient-to-br">
    

    <div class="bg-gray-500 rounded-md shadow-xl py-1 px-3 mx-1 text-gray-300 text-sm font-bold inline"><a href="../"><-Back</a></div>
    <div class='flex min-h-screen items-center justify-center min-h-screen '>
        <div class="flex items-center justify-center min-h-[450px]">
            <div class="overflow-x-auto relative sm:rounded-lg">
                <div class="flex justify-between my-2">
                    <h1 class="font-bold text-sm text-white shadow-lg border-white bg-green-500 px-2 py-1">Product Table</h1>
                    <div class="">
                        <!-- <a class="bg-black rounded-md shadow-xl py-2 px-5 text-white" href="recycle_bin/products.php">Recycle Bin</a> -->
                        <a class="bg-gray-800 rounded-md shadow-xl py-1 px-3 text-white text-sm" href="./create.php">ADD +</a>
                    </div>
                </div>
                <div class="overflow-x-auto relative shadow-xl sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">Category Name</th>
                        <th scope="col" class="py-3 px-6">Total Stock</th>
                        <th scope="col" class="py-3 px-6">Created_at</th>
                        <th scope="col" class="py-3 px-6">Updated_at</th>
                        <th scope="col" class="py-3 px-6">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="py-4 px-6"><?php echo $product->stock ?>Something</td>
                        <td class="py-4 px-6"><?php echo $product->stock ?>Something</td>
                        <td class="py-4 px-6"><?php echo $product->stock ?>Something</td>
                        <td class="py-4 px-6"><?php echo $product->stock ?>Something</td>
                        <td class="py-4 px-6">
                        <a class="px-3 py-1 rounded-md bg-blue-600 text-white" href="/products/edit.php?id=<?php echo $product->id;?>">edit</a>
                        <a class="px-3 py-1 rounded-md bg-red-600 text-white" href="/products/destroy.php?id=<?php echo $product->id;?>">delete</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
                </div>
        </div>
        
    </div>
    </div>

</body>
</html>