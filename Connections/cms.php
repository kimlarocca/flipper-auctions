<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_cms = "localhost";
$database_cms = "kim_4site";
$username_cms = "kim_larocca";
$password_cms = "Lotus18641864!";
$cms = mysqli_connect($hostname_cms, $username_cms, $password_cms, $database_cms);
if (!$cms) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
$websiteID = 14;
$idxLink = 'http://fl.living.net/idxfirm/1013251';
$homePage = 79;
$aboutmePage = 80;
$listingsPage = 92;
$contactPage = 81;
$localinfoPage = 72;
$searchPage = 70;
$resourcesPage = 139;
?>
