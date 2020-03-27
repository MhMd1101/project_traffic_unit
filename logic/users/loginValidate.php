<?php
session_start();

function checkInput($request)
{
    if( isset($request['email']) && isset($request['pass']) )
    { 
        return 1;
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
        $user_password = validatePassword($_REQUEST['pass']); 
        $user_email = validateEmail($_REQUEST['email']);
        $isValid = 1;
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
            $result = findUser($conn, $user_email, $user_password );
            if($result -> num_rows == 0)
            {
                // user not found
                $_SESSION['user_error']['not_found'] = 'Email or password are inncorrect';
                header('Location: ../../html/login/index.php');
            }
            else
            {
                // valid user 
                $userData = $result -> fetch_assoc();
                $_SESSION['full_name'] = $userData['first_name'] . ' ' . $userData['last_name'];
                header('Location: ../../html/index.php');
            }
            
        }
        else
        {
            header('Location: ../../html/login/index.php');
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




