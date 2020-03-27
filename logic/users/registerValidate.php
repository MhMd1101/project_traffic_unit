<?php
session_start();
include_once '../../debug.php';
function checkInput($request)
{
    if(
    isset($request['first_name']) && isset($request['last_name'])
        && isset($request['email']) && isset($request['password'])
    ) 
    { 
        return 1;
    }      
    return 0;  
}
function validateFirstName($fname)
{
    if(strlen($fname)>= 3)
    {
        return $fname;
    }
    return 0;
}
function validateLastName($lname)
{
    if(strlen($lname)>= 3)
    {
        return $lname;
    }
    return 0;
}
function validatePassword($pass)
{
    if(strlen($pass)>= 7)
    {
        return $pass;
    }
    return 0;
}
function validateEmail($email)
{
    if(filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        return $email;
    }
    return 0;
}


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if( checkInput($_REQUEST) )
    {
        $first_name = validateFirstName($_REQUEST['first_name']);
        $last_name = validateLastName($_REQUEST['last_name']);
        $user_password = validatePassword($_REQUEST['password']); 
        $user_email = validateEmail($_REQUEST['email']);
        $isValid = 1;
        if(! $first_name)
        {
            $_SESSION['user_error']['firstName'] = 'invalid first name input';
            $isValid = 0;
        }
        if(! $last_name)
        {
            $_SESSION['user_error']['last_name'] = 'invalid input';
            $isValid = 0;
        }
        if(! $user_password)
        {
            $_SESSION['user_error']['user_password'] = 'invalid input';
            $isValid = 0;
        }
        if(! $user_email)
        {
            $_SESSION['user_error']['user_email'] = 'invalid input';
            $isValid = 0;
        }

        if($isValid)
        {
            // call database
            include_once '../../database/conn.php';
            include_once '../../database/users.php';
            $result = insertUser($conn, $first_name, $last_name, $user_email, $user_password );
            if($result === TRUE )
            {
                // successful insert
                $_SESSION['full_name'] = $first_name . ' ' . $last_name;
                header('Location: ../../html/index.php');
            }
            else
            {
                $_SESSION['user_error']['user_duplicate'] = 'this email is used before';
                header('Location: ../../html/login/registration_form.php');
                // error on insert
            }
        }
        else
        {
            header('Location: ../../html/login/registration_form.php');
        }

    }
    else
    {
        // missed input
    }
}
else
{
    // error invalid method 
}











