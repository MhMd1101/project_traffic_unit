<?php
// class CategoryModel{ public
    function listNews($conn)
    {
        // SELECT * FROM `category`
        $category_table_name = 'news';
        $newsListQuery = "SELECT * FROM $category_table_name";
        $result = $conn -> query($newsListQuery);
        return $result;
    }

    function findNews($conn, $id)
    { // SELECT * FROM `category` WHERE id= 
        $category_table_name = 'news';
        $newsReadQuery = "SELECT * FROM $category_table_name WHERE id=$id";
        $result = $conn -> query($newsReadQuery);
        return $result;
    }

    function insertNews($conn, $cName, $cDesc, $cImage)
    {
        $category_table_name = 'news';
        $newsInsertQuery = "INSERT INTO $category_table_name VALUES(NULL, '$cName', '$cDesc', '$cImage')";
        $result = $conn -> query($newsInsertQuery);
        return $result;
    }

    function updateNews($conn, $uName, $uDesc, $uImage)
    {
        // UPDATE `category` SET `description` = 'This is category 2' WHERE `id` = 2;
        // INSERT INTO `news` (`id`, `name`, `desc`, `image`) VALUES (NULL, 'news', 'This Is News1', 'imges')
        $category_table_name = 'news';
        $newsUpdateQuery = "INSERT INTO $category_table_name (`id`, `name`, `desc`, `image`) VALUES (NULL, '$uName', '$uDesc', '$uImage') ";
        $result = $conn -> query($newsUpdateQuery);
        return $result;
    }

    function deleteNews($conn, $id)
    {
        // DELETE FROM `category` WHERE `category`.`cat_id` = 3"
        $category_table_name = 'news';
        $newsReadQuery = "DELETE FROM $category_table_name WHERE id=$id";
        $result = $conn -> query($newsReadQuery);
        return $result;
    }

    function getRelatedItems($conn, $id)
    {
        // SELECT * FROM `item` WHERE category_id=2
        $category_table_name = 'category';
        $item_table_name = 'item';
        $categoryReadQuery = "SELECT * FROM $item_table_name WHERE category_id=$id";
        $result = $conn -> query($categoryReadQuery);
        return $result;
    }
// }