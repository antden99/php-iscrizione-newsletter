<?php function correct_email($mail){

if (str_contains($mail,".") && str_contains($mail,"@")){
    return true;
}
return false;
}

?>