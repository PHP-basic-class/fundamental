<?php

class Storage
{
    protected static $directory = "../storage/";
    public static function upload($file)
    {
        $fileName = self::$directory . rand() . '_' . basename($file["name"]);
        $tmp_path = $file["tmp_name"];
        move_uploaded_file($tmp_path, $fileName);
        return $fileName;
    }

    public static function remove($filePath)
    {
        unlink($filePath);
    }
}
