<?php

function insertUser($conn, $f_name, $l_name, $mail, $pass)
{
    $user_table_name = 'users';
    $userInsertQuery = "INSERT INTO $user_table_name VALUES( NULL, 
                        '$f_name' , '$l_name', '$mail', '$pass' )";
    return $conn -> query($userInsertQuery) ;
}

function findUser($conn, $mail, $pass)
{
    $user_table_name = 'users';
    $userFindQuery = "SELECT * FROM $user_table_name WHERE 
    email='$mail' AND user_pass='$pass'";
    $result = $conn -> query($userFindQuery);
    return $result;
}

?>