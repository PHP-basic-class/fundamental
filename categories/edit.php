<?php
require_once "../controller/CategoriesController.php";
$controller = new CategoriesController();
$category = $controller->edit($_GET["id"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
    <!-- bootstrap cdn css1 js1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-5 m-auto shadow rounded p-4 bg-dark text-white">
                <h3 class="text-center">Edit Category</h3>
            
                <!-- form start  -->
                <form action="./update.php?id=<?= $category->id ?>" method="POST">
                    <div class="col-12">
                        <label for="name" class="text-uppercase my-2" style="font-weight: bold;">Name</label>
                        <input type="text" id="name" name="name" class="form-control form-control-sm" value="<?= $category->name; ?>" autocomplete="off"/>
                    </div>
                    <div class="d-flex justify-content-">
                        <button class="btn btn-primary btn-sm w-100 mt-3 me-2">Save</button>
                        <a href="./index.php" class="btn btn-warning btn-sm w-100 mt-3 ms-2">Back</a>
                    </div>
                </form>
                <!-- form end -->
            </div>
        </div>
    </div>

    <!-- bootstrap cdn css1 js1  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>