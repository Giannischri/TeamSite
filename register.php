<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="styles/basic/style.css" type="text/css" media="screen" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
<?php
	session_start();
	include "functions.php";
	
	$con = mysqli_connect('localhost','root','','Leicester');	
	if((isset($_POST['submit'])) && ($_POST['submit'] == 'Submit')){
    $username = $_POST['username'];
    $password = $_POST['password'];
	$password2 = $_POST['password2'];
    if ((empty($username)) || empty($password) || empty($password2) ) {
        send_message('Πρέπει να συμπληρώσετε τα υποχρεωτικά πεδία (με τον αστερίσκο *)', 'error');
        header("Location:index.php");
        exit();
    }
	if($password!=$password2)
	{
            send_message('wrong passwords','error');
			header("Location:index.php");
			exit();
	}
	if(strlen($password)<8)
	{
send_message('You need a stronger password','error');
header("Location:index.php");
			exit();
	}

    mysqli_autocommit($con, false);

    $query = "insert into user 
                            (
                                
                                username,
                                password,
                                role
                                
                            ) 
                            Values
                            (
                                
                                '$username',
                                '$password',
                                'user'
                                 
                            )";
							

    $result = mysqli_query($con, $query);

  if ($result) {
        mysqli_commit($con);
        send_message('You registered sucessfully.Please sign in..', 'success');
        header("Location: index.php");
        exit();
    } else {
        mysqli_rollback($con);
        send_message('Name exists or database is down', 'error');
		header("Location: index.php");
		exit();
    }
	}
	
	?>