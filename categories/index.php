<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class=" bg-slate-500">
    <!-- 
        to work alert need to parse type data after create or delete or update
        eg. header("Location:http://localhost:3000/categories/index.php?message=$message&category_name=$name&type=store");
    -->
    <?php if (isset($_GET['type'])) : ?>
        <?php if ($_GET['type'] == 'store') : ?>
            <div class=" flex justify-center">
                <div id="alert-border-3" class="p-4 w-[1200px] flex items-center mt-1 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800" role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <div class="ms-3 text-sm font-medium">
                        <span>
                            <?php echo $_GET['message'] ?>
                        </span>
                        <span class=" font-bold pl-3 italic text-emerald-500 underline">
                            <?= $_GET['product_name'] ?>
                        </span>
                    </div>
                    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-border-3" aria-label="Close">
                        <span class="sr-only">Dismiss</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
            </div>
        <?php endif; ?>
        <?php if ($_GET['type'] == 'delete') : ?>
            <div class=" justify-center flex">
                <div id="alert-border-2" class="w-[1200px] flex items-center p-4 mb-4 text-red-800 border-t-4 border-red-300 bg-red-50 dark:text-red-400 dark:bg-gray-800 dark:border-red-800" role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <div class="ms-3 text-sm font-medium">
                        <span><?= $_GET['message'] ?></span>
                        <span class=" font-bold pl-3 italic text-emerald-500 underline">
                            <?= $_GET['product_name'] ?>
                        </span>
                    </div>
                    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-border-2" aria-label="Close">
                        <span class="sr-only">Dismiss</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
            </div>
        <?php endif; ?>
        <?php if ($_GET['type'] == 'update') : ?>
            <div class=" flex justify-center">
                <div id="alert-border-4" class="w-[1200px] flex items-center p-4 mb-4 text-yellow-800 border-t-4 border-yellow-300 bg-yellow-50 dark:text-yellow-300 dark:bg-gray-800 dark:border-yellow-800" role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <div class="ms-3 text-sm font-medium">
                        <span><?= $_GET['message'] ?></span>
                        <span class=" font-bold pl-3 italic text-emerald-500 underline">
                            <?= $_GET['product_name'] ?>
                        </span>
                    </div>
                    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-yellow-50 text-yellow-500 rounded-lg focus:ring-2 focus:ring-yellow-400 p-1.5 hover:bg-yellow-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-yellow-300 dark:hover:bg-gray-700" data-dismiss-target="#alert-border-4" aria-label="Close">
                        <span class="sr-only">Dismiss</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
            </div>
        <?php endif; ?>
    <?php endif; ?>
    <div class="flex justify-center w-[1200px] mx-auto">
        <div class="me-auto mt-2">
            <a href="../index.php" class="text-4xl font-bold text-gray-800 flex items-center">
                <span>&#8592;</span>
                <span class=" text-base font-bold">
                    Back
                </span> </a>
        </div>
        <h2 class=" text-center font-bold text-2xl p-3 text-slate-200 me-auto">Category Table<h2>
    </div>
    <div class="relative overflow-x-auto sm:rounded-lg flex  justify-center mt-3">
        <table class="w-[1200px] text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-4">
                        NO
                    </th>
                    <th scope="col" class="px-6 py-4">
                        Category name
                    </th>
                    <th scope="col" class="px-6 py-4">
                        Created_at
                    </th>
                    <th scope="col" class="px-6 py-4 text-center">
                        Updated_at
                    </th>
                    <th scope="col" class="px-6 py-4 text-center">
                        Actions
                    </th>
                    <th scope="col" class=" text-right pr-4 py-4">
                        <a href="./create.php" type="button" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">+ Create</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once '../controller/CategoryController.php';

                $controller = new CategoryController();
                $categories = $controller->index();
                if ($categories) {
                    $no = 0;
                    foreach ($categories as $category) {
                ?>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <?= ++$no ?>
                            </th>
                            <th scope="row" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <?= $category->name ?>
                            </th>
                            <td class="px-6 py-2">
                                <?= $category->created_at ?>
                            </td>
                            <td class="px-6 py-2 text-center">
                                <?= $category->updated_at ?>
                            <td class="px-6 py-2 text-center">
                                <a href="edit.php?id=<?php echo $category->id; ?>" type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2 text-center">Edit</a>
                                <a href="destroy.php?id=<?php echo $category->id;?>" type="button" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-4 py-2 text-center me-2 mb-2">Delete</a>
                            </td>
                            <td class="px-3 py-2">
                            </td>
                        </tr>
                    <?php
                    }
                } else { ?>
            </tbody>
        </table>
    </div>
    <!-- 
        check category have or not using if statement
    -->
    <div class=" flex justify-center">
        <div class="flex items-center justify-center w-[500px] p-4 mt-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <div>
                <span class="font-medium">No Category Found! Create One!</span>
            </div>
        </div>
    </div>
<?php } ?>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</html>