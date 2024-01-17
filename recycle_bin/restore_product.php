<?php
require_once "../controller/RecycleBinController.php";

$recycleBin = new RecycleBinController();
$recycleBin->recoverProduct($_GET);
