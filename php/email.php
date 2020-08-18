<?php
    $sendto="ankitsahas18@gamil.com";
    $subject="test";
    $body="success";
    $header="From : ankit saha";
    if(mail($sendto,$subject,$body,$header)){
        echo "send successfuly";
    }
    else{
        echo "not sucessfull";
    }
?>