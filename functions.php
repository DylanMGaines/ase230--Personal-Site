<?php
/** INFO cardLoader
 * Takes a reference to an associative array as parameter.
 * Main cardloader function, called from within index.php.
 * Moved to its own function to make index.php cleaner. Used to be loop in index.php.
 * Loops through array and sends each student entry through the helper function for display.
 **/
function cardLoader(&$studentArray) {
    $len = count($studentArray);                                    //determine length
    for ($i = 0; $i < $len; $i++) {
        cardLoaderHelper($studentArray[$i]);        //send current entry to helper
    }
}

/**INFO cardLoaderHelper
 *  Takes a reference to an associative array and the key of said array.
 *  Echoes a card for the student. Card links to detail.php with $key as the query variable "id". Also links to socials.
 **/
function cardLoaderHelper(&$student) {
    echo '<div class="col-12 col-sm-6 col-lg-3">
                        <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                <div class="advisor_thumb">
                                    <!--anchor with link to detail, image b/t anchor tags-->
                                    <a href="detail.php?id=', $student->{"key"}, '"><img src="', $student->{"img"}, '" 
    alt="" style =
                                        "width: 315px; height: 315px;"></a>
                                    <div class="social-info">
                                        <a href="', $student->{"facebook"}, '">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a href="', $student->{"twitter"}, '">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="', $student->{"linkedIn"}, '">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- Team Details-->
                                <div class="single_advisor_details_info">
                                    <h6>', $student->{"name"}, '</h6>
                                    <p class="designation">', $student->{"job"}, '</p>
                                    <div>';
    for ($i = 0; $i < $student->{"year"}; $i++) {
        echo '<span class="h5 bi-slash-lg"></span>';                //loop displays a slash for each year
    }
    echo "<ul>";
    chronos($student->{"DOB"});
    echo "</ul>";
    echo '                          </div>
                                </div>
                        </div>
          </div>';
}

function skillBar(&$skills) {
    $len = count($skills);
    for ($i = 0; $i < $len; $i++) {
        $skill = $skills[$i];
        echo '<div class="py-1">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width:', $skill->{"value"}, '%;" aria-valuenow="',
        $skill->{"value"}, '" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar-title">', $skill->{"name"}, '</div>
                        <span class="progress-bar-number">', $skill->{"value"}, '%</span>
                    </div>
                </div>
              </div>';
    }
}

function chronos($DoB) {
    $bDay = date_create($DoB);
    $jetzt = date_create();

    $time = date_diff($jetzt, $bDay);

    for ($i = 0; $i <= 3; $i++) {
        ananke($i, $time);
    }
}

function ananke($thing, $time) {
    $theLad = "";
    $theMad = "";
    switch ($thing) {
        case 3:
        {
            $theLad = "%m";
            $theMad = "months";
            break;
        }
        case 2:
        {
            $theLad = "%d";
            $theMad = "days";
            break;
        }
        case 1:
        {
            $theLad = "%y";
            $theMad = "years";
            break;
        }
        default :
        {
            $theLad = "%y";
            $theMad = "age";
        }
    }
    echo "<li class='media p-0 mb-0'>
                        <span class='w-25 text-black font-weight-normal'>" . $theMad . "</span>
                        <label class='media-body p-0 mb-0'>";
    echo $time->format($theLad);
    echo "               </label>
          </li>";
}