<?php
if($_POST["country"] == "Africa" ){
function Redirect($url, $permanent = false)
{
    if (headers_sent() === false)
    {
    	header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }

    exit();
session_start();
$_SESSION['post_data'] = $_POST;

}

Redirect('http://freedomnowcampaign.org/processAfricaSchool.php/', false);
}
if($_POST["country"] == "North_America" ){
function Redirect($url, $permanent = false)
{
    if (headers_sent() === false)
    {
    	header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }

    exit();
}

Redirect('http://freedomnowcampaign.org/processNorthAmericaSchool.php/', false);
}if($_POST["country"] == "South_America" ){
function Redirect($url, $permanent = false)
{
    if (headers_sent() === false)
    {
    	header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }

    exit();
}

Redirect('http://freedomnowcampaign.org/processSouthAmericaSchool.php/', false);
}if($_POST["country"] == "Europe" ){
function Redirect($url, $permanent = false)
{
    if (headers_sent() === false)
    {
    	header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }

    exit();
}

Redirect('http://freedomnowcampaign.org/processEuropeSchool.php/', false);
}if($_POST["country"] == "Australia" ){
function Redirect($url, $permanent = false)
{
    if (headers_sent() === false)
    {
    	header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }

    exit();
}

Redirect('http://freedomnowcampaign.org/processAustraliaSchool.php/', false);
}if($_POST["country"] == "Asia" ){
function Redirect($url, $permanent = false)
{
    if (headers_sent() === false)
    {
    	header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }

    exit();
}

Redirect('http://freedomnowcampaign.org/processAsiaSchool.php/', false);
}

?>