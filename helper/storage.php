<?php 

class Storage
{
    protected static $directory = __DIR__ . "/../storage/";
    public static function upload($file)
    {
        $fileName = self::$directory . basename($file["name"]);
        $tmp_path = $file["tmp_name"];
        move_uploaded_file($tmp_path, $fileName);
        return "http://localhost:8000/storage/" . basename($file["name"]);
    }

    public static function remove($filePath) 
    {
        $fileName = basename($filePath);
        unlink(self::$directory . $fileName);
    } 
}
