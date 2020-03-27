<?php 
session_start();
// read category id from request 
$newsId = $_REQUEST['newId'];
// echo $catId;
include_once '../../database/conn.php';
include_once '../../database/news.php';

// $itemResult = getRelatedcategory($conn, $catId);
$news = [];

for($i=0;$i< $categoryResult->num_rows ; $i++)
{
    $itemData =  $itemResult -> fetch_assoc();
    $news[] = $itemData;
    // array_push($categories, $categoryData);
}
// echo '<pre>';
// print_r($categories);
// echo '</pre>';
// die;
$_SESSION['news'] = $news;
header('Location: ../../html/admin/category/relatedCategory.php');





