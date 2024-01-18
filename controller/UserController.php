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
}

?>