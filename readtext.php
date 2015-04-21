<?php

function highlight($text, $words) {
    preg_match_all('~\w+~', $words, $m);
    if(!$m)
        return $text;
    $re = '~\\b(' . implode('|', $m[0]) . ')\\b~';
    return preg_replace($re, '<b>$0</b>', $text);
}
$homepage = file_get_contents('http://freedomnowcampaign.org/');
$homepage2 = file_get_contents('http://freedomnowcampaign.org/processAfrica.php');
//$homepage = file_get_contents('http://freedomnowcampaign.org/');
//$homepage = file_get_contents('http://freedomnowcampaign.org/');
//$homepage = file_get_contents('http://freedomnowcampaign.org/');
//$homepage = file_get_contents('http://freedomnowcampaign.org/');
//$homepage = file_get_contents('http://freedomnowcampaign.org/');
//$homepage = file_get_contents('http://freedomnowcampaign.org/');

$text = $homepage;
//$text2 = $homepage2;

$words = $_POST["school"];
//echo $homepage2;
  print highlight($text, $words);

?>
