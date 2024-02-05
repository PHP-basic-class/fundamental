<?php 

class View {
    public static function render ($view, $data = [])
    {
        extract($data);
        require_once __DIR__ . "/../view/" . $view . ".php";
    }
}