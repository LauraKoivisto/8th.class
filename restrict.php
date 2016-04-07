<?php
//we need functions for dealing with session_destroy
require_once("functions.php");

//RESTRICTION-LOGGED IN
if(!isset($_SESSION["user_id"])){
//redirect the not logged in user to log in page
header("Location: login.php");

}

//?logout is in the url
if (isset($_GET["logout"])){
//delete the session
session_destroy();


header("Location: login.php");


}


?>
<a href="?logout=1">Log out</a>

restricted
