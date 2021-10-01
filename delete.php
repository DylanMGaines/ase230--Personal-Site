<?php
require_once("json_util.php");

if(count($_GET)){                                                           //check if GET var has values
    $rayman = fileFetcher();                                                //fetch array of users
    for($i = 0; $i < count($rayman); $i++) {                                //loop through the array until...
        if($rayman[$i]->{'key'} == $_GET['id']){                            //...the key that matches the id is found
            $preman = array_slice($rayman,0, $i);                     //slice part of array before removed user
            $newman = array_splice($rayman, $i + 1);            //splice element out of array, leaving latter half
            $rayman = array_merge($preman, $newman);                        //merge together into full array
            saveMan($rayman);                                      //send new array to saveMan to be saved
            break;
        }
    }
}
//regardless of if, redirect to index.php via javascript
?>

<script>
    window.location = "./index.php"
</script>


