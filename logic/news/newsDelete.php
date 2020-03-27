<?php
session_start();
// read category id from request 
$newsId = $_REQUEST['newId'];
echo $_REQUEST['id'];
include_once '../../database/conn.php';
include_once '../../database/news.php';

$newsResult = deleteNews($conn, $newsId);
if($newsResult === TRUE)
{
    header('Location: ../../html/admin/news/index.php');
}







?>