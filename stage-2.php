<?php
// You dont live in Stockholm? Change timezone below
date_default_timezone_set('Europe/Stockholm');
$currentDate = date('Y-m-d H:i');
$currentDate=date('Y-m-d H:i', strtotime($currentDate));;

// Get artist data - can also be from a database
include 'artist-data-stage-2.php';


//======================================================================

//Loop trought all arrays and get all data
    //foreach ($arr as $val) {

// Loop trought all ['start'] and ['end'] arrays in order to get date-data
    //$artistBegin = $val['start'];
    //$artistEnd = $val['end'];

//var_dump($var); //In order to see if your loop is looping trought any data

//loop trought new data and if its true, print relative array
    //while (($currentDate > $artistBegin) && ($currentDate < $artistEnd) && ($val['scene'] === "big") ) {
// if currentDate === artistDate then print all below
    //echo '<div class="artist-container">';
    //echo '<h3>' . $val['name'] . $val['date'] . '</h3>' . $val['img'] . '<h4 class="blink title-bg-red">' . '<span class="blink">' . $val['next'] . '</h4>' . '</span>';
    //echo "</div>";
    //break;
    //} //end of while

    //} //end of foreach
//======================================================================
?>







    <?php
//======================================================================
// BLOCK BELOW IS AN EXAMPLE. RECOMMEND TO USE CODEBLOCK ABOW IN PRODUCTION
include 'example-artist-data.php';
date_default_timezone_set('Europe/Stockholm');
$currentDate3 = date('Y-m-d H:i:s');
$currentDate3=date('s', strtotime($currentDate3));;
//echo $currentDate2;

//$currentDate3 = 3;

if ($currentDate3 % 2 == 0) {
  echo '<div class="artist-container">';
  //echo '<h3>' .  . $artistDummy[0]['name'] . '</div>' . $artistDummy[0]['date'] . '</h3>' . '<div id="video"></div>' . '<h4 class="blink title-bg-green">' . '<span class="blink">' . $artistDummy[0]['next'] . '</h4>' . '</span>';
  echo '<h3>' . '<div id="api-artist">' . $artistDummy[1]['name'] . '</div>' . $artistDummy[1]['date'] . '</h3>' . '<div id="video"></div>' . '<h4 class="blink title-bg-red">' . '<span class="blink">' . $artistDummy[1]['next'] . '</h4>' . '</span>';
  echo '</div>';
} else {
  echo "<h2>No one is playing<h2>";
}
//======================================================================
 ?>