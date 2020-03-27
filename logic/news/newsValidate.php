<?php
session_start();
include 'newsClasscontrol.php';

// definitions and validations related with attributes
function checkInput($request)
{
    if (isset($request['n_name']) && isset($request['n_desc']) && isset($request['n_image'])) {
        return 1;
    }
    return 0;
}
function validateInput($input)
{
    if (!(strlen($input) > 0)) {
        return false;
    }
    if (is_numeric($input)) {
        return false;
    }
    return $input;
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // create instance from controller class
    // check input
    if (checkInput($_REQUEST)) {
        // validate input
        $name = validateInput($_REQUEST['n_name']);
        $description = validateInput($_REQUEST['n_desc']);
        $image = validateInput($_REQUEST['n_image']);
        echo $_REQUEST['n_name'];
        $isValid = 1;

        if (!$name) {
            $_SESSION['news_error']['name'] = 'invalid name format';
            $isValid = 0;
            header('Location: ../../html/admin/news/create.php');
        }
        if (!$description) {
            $_SESSION['news_error']['description'] = 'invalid description format';
            $isValid = 0;
            header('Location: ../../html/admin/news/create.php');
        }
        if (!$image) {
            $_SESSION['news_error']['image'] = 'invalid image format';
            $isValid = 0;
            header('Location: ../../html/admin/news/create.php');
        }
        if ($isValid) {
            // Call DAtabases
            include '../../database/conn.php';
            include '../../database/news.php';
            $result = insertNews($conn, $cName, $cDesc, $cImage);
            // load  htnl page 
            if ($result === TRUE) {
                // load html page
                // successful insert
                header('Location: ../../html/admin/news/create.php');
            } else {
                $_SESSION['news_error']['db_error'] = 'DB error, try again.';
                header('Location: ../../html/admin/news/index.php');
                // error on insert
            }
        } else {
            // return To Create Form With Error 
            header('Location: ../../html/admin/news/index.php');
        }
    } else {
    }
}



//     // start task1
//     // end task1
//     if ($isValid) {
//         // call database
//         include '../../database/conn.php';
//         include '../../database/news.php';
//         $result = insertnews($conn, $description, $image);
//         // new object from newsModel
//         $catModel = new CategoryModel;
//         // $result = $catModel->insertnews($conn, $name, $description, $image);
//         if ($result === TRUE) {
//             // load html page
//             // successful insert
//             header('Location: ../../html/admin/news/index.php');
//         } else {
//             $_SESSION['news_error']['db_error'] = 'DB error, try again.';
//             header('Location: ../../html/admin/news/create.php');
//             // error on insert
//         }
//     } else {
//         // return to create form with errors 
//         header('Location: ../../html/admin/news/create.php');
//     }
// {
//     // missing inputs
// } {
//     // invalid method error
// }
