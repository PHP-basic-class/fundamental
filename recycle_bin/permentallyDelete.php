<?php
require_once "../controller/RecycleBinController.php";

$recycleBin = new RecycleBinController();
$recycleBin->permentallyDelete($_GET);
