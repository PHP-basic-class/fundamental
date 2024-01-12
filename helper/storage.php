<?php 

class Storage
{
    protected static $directory = "../storage/";
    public static function upload($file)
    {
        $fileName = self::$directory . basename($file["name"]);
        $tmp_path = $file["tmp_name"];
        move_uploaded_file($tmp_path, $fileName);
        return "http://localhost:8000/storage/" . basename($file["name"]);
    }
}
