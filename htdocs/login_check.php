<?php
session_start();
include "db_head.php";

$pwd = $_POST["pwd"];
$md = md5($pwd);

$strSQL = "SELECT * FROM tbuser WHERE user = '".mysql_real_escape_string($_POST['username'])."' 
and passwd = '$md'";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);
$_SESSION["id"] = $objResult["user"];
$_SESSION["name"] = $objResult["f_user"];
$_SESSION["surname"] = $objResult["l_user"];
    if(!$objResult)
        {
            header("location:login_false.php");
        }
	else {
        header("location:calendar.php");
    }
	mysql_close(); 
?>