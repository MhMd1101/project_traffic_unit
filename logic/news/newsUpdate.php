<?php 

// read id from URI
session_start();
// read news id from request 
$news = $_REQUEST['news'];
// echo $catId;
include_once '../../database/conn.php';
include_once '../../database/news.php';

$newsResult = findNews($conn, $news);
$newsData =  $newsResult -> fetch_assoc();
$_SESSION['news'] = $newsData;
header('Location: ../../html/admin/news/update.php');




