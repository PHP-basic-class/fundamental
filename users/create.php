<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="w-[40%] mx-auto shadow-lg my-12 py-5">
        <h1 class="text-center">Create User</h1>
        <form class="w-[90%] mx-auto" action="store.php" method="POST">
            <div class="my-3">
                <label for="username">Username</label>
                <input required type="text" name="user_name" class="w-full border-2 border-blue-600 px-5 py-2">
            </div>
            <div class="my-3">
                <label for="first_name">First Name</label>
                <input required type="text" name="first_name" class="w-full border-2 border-blue-600 px-5 py-2">
            </div>
            <div class="my-3">
                <label for="last_name">Last Name</label>
                <input required type="text" name="last_name" class="w-full border-2 border-blue-600 px-5 py-2">
            </div>
            <div class="my-3">
                <label for="email">Email</label>
                <input required type="email" name="email" class="w-full border-2 border-blue-600 px-5 py-2">
            </div>
            <div class="my-3">
                <label for="password">Password</label>
                <input required type="password" name="password" class="w-full border-2 border-blue-600 px-5 py-2">
            </div>
            <div class="my-3">
                <label for="role">Choose Role</label>
                <select name="role" class="w-full border-2 border-blue-600 px-5 py-2" required>
                    <option selected></option>         
                    <option value="users">
                        Users
                    </option>
                    <option value="admin">
                        Admin
                    </option>
                </select>
            </div>  
            <button class="w-full py-2 bg-blue-600 text-white my-3 rounded-md">Save</button>
            <div class="my-2 py-2 w-full bg-gray-800 text-white rounded-md text-center">
                <a href="index.php" class="w-full">Back</a>
            </div>
        </form>
    </div>
</body>
</html>