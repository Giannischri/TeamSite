<?php
	include("functions.php");
session_start();
session_destroy();
send_message('You have been logged out','sucess');
   header("Location: index.php");
        exit();
?>