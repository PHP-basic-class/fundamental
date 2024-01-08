<?php 

function redirect ($route)
{
    header("Location: http://localhost:8000$route");
}