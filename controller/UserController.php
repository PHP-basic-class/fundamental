<?php
require_once "../helper/database.php";
require_once "../helper/redirect.php";
require_once "../model/User.php";

class UserController {
    public function index ()
    {
        $users = new User();
        return $users->all();
    }

    public function store ($request)
    {
        $userModel = new User();
        $userModel->create($request);
        redirect("/users/create.php");
    }

    public function edit ($id)
    {
        $userModel = new User();
        $user = $userModel->first($id);
        return ["users" => $user];
    }

    public function update ($request, $id)
    {
        $userModel = new User();
        $userModel->update($request, $id);
        redirect("/users");
    }

    public function destroy ($id)
    {
        $userModel = new User();
        $user = $userModel->delete($id);
        redirect("/users");
    }
}

?>