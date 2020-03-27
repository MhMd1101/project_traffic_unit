<?php 

class itemController{
    // definitions and validations related with attributes
    function checkInput($request)
    {
        if(isset($request['n_name']) && isset($request['n_desc']) && isset($request['n_image']) ) {
            return 1;
        }      
        return 0;  
    }
    function validateInput($input)
    {
        if(! (strlen($input) > 0))
        {
            return false;
        }
        if(is_numeric($input))
        {
            return false;
        }
        return $input;
    }
}


