<?php 

/**
 * check email
 * return true whith if
 * return false else
 */
function correct_email($mail)   
{

    if (str_contains($mail, ".") && str_contains($mail, "@")) {
        return true;
    }
    return false;
}

?>