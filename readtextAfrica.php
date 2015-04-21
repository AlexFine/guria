<?php

function highlight($text, $words) {
    preg_match_all('~\w+~', $words, $m);
    if(!$m)
        return $text;
    $re = '~\\b(' . implode('|', $m[0]) . ')\\b~';
    return preg_replace($re, '<b>$0</b>', $text);
}
$homepage = file_get_contents('http://freedomnowcampaign.org/processAfrica.php');

$text = $homepage;



$words = $_POST["school"];
  print highlight($text, $words);


?>