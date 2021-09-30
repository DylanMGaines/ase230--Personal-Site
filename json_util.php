<?php
/**
 * returns JSON class array, can be modified to have input var that indicates file, but don't want to have that
 * available to the user
 * **/
function fileFetcher() {
    $jsonMan = file_get_contents("./assets/JSON/class.json");       //fetch JSON file
    return json_decode($jsonMan);                                           //convert to php array and return
}

/**
 * Takes string as input
 * Strings represent keys of the JSON objects
 * If no current key matches the selector, returns negative one, the error is processed by caller
 * Strings/keys return an object
 **/

function huntMan($selector) {
    //if fileFetcher were modified, the callString would need to be here and added to header
    $phpMan = fileFetcher();                                        //get the array
    $retMan = -1;                                                   //establish return var
    for ($i = 0; $i < count($phpMan); $i++) {                       //otherwise loop through array
        if (strcmp($phpMan[$i]->{'key'}, $selector) == 0) {         //if the current key matches the selector
            $retMan = $phpMan[$i];                                  //set retman as the entry for return
        }
    }

    return $retMan;
}

/**
 * Takes reference to updated array as arg.
 * encodes phpMan to JSON, puts the encoded array to the file, job done
 * Not done yet because brain small
 */
function saveMan(&$phpMan) {
    //encode phpRay into JSON array
    $james = json_encode($phpMan);
    //put to file
    file_put_contents("./assets/JSON/class.json", $james);
    //close file?
    //void
}