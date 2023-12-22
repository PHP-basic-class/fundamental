<?php
    require_once('../controller/CategoriesController.php');
    $controller = new CategoriesController();
    $products = $controller->index();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Table</title>
    <!-- bootstrap cdn css1 js1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- bootstrap icon cdn css 1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row">
            <div class="col-6 bg-dark shadow rounded p-3 m-auto">
                <div class="col-12 d-flex justify-content-between">
                    <h3 class="text-light">Products</h3>
                    <div>
                        <a href="./form.php" class="btn btn-warning me-2 ">Recycle Bin</a>
                        <a href="./create.php" class="btn btn-success"><i class="bi bi-plus"></i>Add</a>
                    </div>
                </div>

                <table class="table table-light table-striped mt-4">
                    <thead>
                        <tr class="text-center">
                            <th>ID</th>
                            <th>Name</th>
                            <th>created_at</th>
                            <th>updated_at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-secondary">
                        <?php foreach($products as $product) : ?>
                        <tr class="text-center">
                            <td><?php echo $product->id ?></td>
                            <td><?php echo $product->name ?></td>
                            <td><?php echo $product->created_at ?></td>
                            <td><?php echo $product->updated_at ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $product->id ?>" class="btn btn-primary btn-sm">Edit</a>
                                <a href="destroy.php?id=<?php echo $product->id ?>" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- bootstrap cdn css1 js1  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

