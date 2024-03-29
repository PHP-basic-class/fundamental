<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="flex justify-between my-5">
        <h1>Category Table</h1>
        <div class="mr-10">
            <a class="bg-green-700 rounded-md shadow-xl py-2 px-5 text-white" href="/categories/create">ADD +</a>
        </div>
    </div>
    <div class="relative overflow-x-auto my-5">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Category Name
                    </th>

                    <th scope="col" class="px-6 py-3">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $category) : ?>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <?php echo $category->name; ?>
                    </td>

                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <a class="px-5 py-2 rounded-md bg-blue-600 text-white" href="/categories/edit?id=<?php echo $category->id;?>">edit</a>
                        <a class="px-5 py-2 rounded-md bg-red-600 text-white" href="/categories/destroy?id=<?php echo $category->id;?>">delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>
</html>