<?php

class Validator
{
    public function isRequired($dataArray)
    {
        foreach($dataArray as $data)
        {
            if($_POST[''.$data.''] == '')
                return false;
        }
        return true;
    }


    public function isValidEmail($email)
    {
        if(filter_var($email, FILTER_VALIDATE_EMAIL))
            return true;
        else
            return false;
    }





}
?>