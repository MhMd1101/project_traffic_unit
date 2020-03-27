<?php  
session_start();
// read category id from request 
$newsId = $_REQUEST['newId'];

include_once '../../database/conn.php';
include_once '../../database/news.php';

$newsResult = findNews($conn, $newsId);
$newsData =  $newsResult -> fetch_assoc();
$_SESSION['news'] = $newsData;
header('Location: ../../html/admin/news/read.php');













