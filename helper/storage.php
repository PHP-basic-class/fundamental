<?php

class Storage
{
    protected static $dir = '../storage/';

    public static function upload($file)
    {
        $saved_path = static::$dir . $file['name'];
        $tmp_path = $file['tmp_name'];
        move_uploaded_file($tmp_path, $saved_path);
        return $saved_path;
    }
}
