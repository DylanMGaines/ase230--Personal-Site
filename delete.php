<?php

require("json_util.php");

// check if POST data exists
if(count($_POST)){
    $rayman = fileFetcher();

    for($i = 0; i < $rayman; $i++){
        if($rayman[$i]->{'key'} = $_POST['id']){
            echo array_splice($rayman, $i);
            die();
        }

    }

}
//
//click three times to delete card
//delete card
    //send data back to JSON
    //append data to JSON



?>


