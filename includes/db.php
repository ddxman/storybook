<?php
$connection = mysqli_connect('127.0.0.1', 'root', '', 'test_database');
if(!$connection){
    echo 'Не удалось подключиться к БД';
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    exit();
}
?>