<?php
/**
 * Gets a desired json file, decodes the file and returns it to a usable object in php
 * @PARAM $jsonFile string the address of a json file. can be relative or not.
 * @RETURN array
 **/
function fileFetcher(string $jsonFile) : array {
    $jsonMan = file_get_contents($jsonFile);       //fetch JSON file
    return json_decode($jsonMan);                  //convert to php array and return
}

/**
 * Hunts for a user with a key equal to an input selector or returns -1
 * @PARAM $selector string the key of the user you're looking to find
 * @return mixed returns reference to an array if found, if not, returns -1
 **/
function huntMan(string $selector) {
    $phpMan = fileFetcher("./assets/JSON/class.json");       //get the array
    $retMan = -1;                                                   //establish return var
    for ($i = 0; $i < count($phpMan); $i++) {                       //otherwise loop through array
        if (strcmp($phpMan[$i]->{'key'}, $selector) == 0) {         //if the current key matches the selector
            $retMan = $phpMan[$i];                                  //set retman as the entry for return
        }
    }

    return $retMan;
}
/**
 * Hunts for a user with a key equal to an input selector or returns -1
 * @PARAM $selector string the key of the user you're looking to find
 * @return mixed returns reference to an array if found, if not, returns -1
 **/
function huntDex(string $selector) {
    $phpMan = fileFetcher("./assets/JSON/class.json");       //get the array
    $retMan = -1;                                                   //establish return var
    for ($i = 0; $i < count($phpMan); $i++) {                       //otherwise loop through array
        if (strcmp($phpMan[$i]->{'key'}, $selector) == 0) {         //if the current key matches the selector
            $retMan = $i;                                           //set retman the index for return
        }
    }

    return $retMan;
}

/**
 * Saves an array into a file, no return
 * @param $phpMan array
 * @return void
 */
function saveMan(array &$phpMan) : void {
    $jsonEncodedArray = json_encode($phpMan, JSON_PRETTY_PRINT);           //encode phpRay into JSON array
    file_put_contents("./assets/JSON/class.json", $jsonEncodedArray);   //put to file
}