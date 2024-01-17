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
}

?>