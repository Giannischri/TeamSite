<?php
session_start();
	include "functions.php";

	
	$con = mysqli_connect('localhost','root','','Leicester');	
	if((isset($_POST['submit'])) && ($_POST['submit'] == 'submit2') ){
		 $msg = $_POST['message'];
		 $username=$_SESSION['username'];
		  mysqli_autocommit($con, false);
    $query = "insert into contact
                            (                               
                                username,
                                message                             
                            ) 
                            Values
                            (                                
                                '$username',
                                 '$msg'                               
                            )";
							

    $result = mysqli_query($con, $query);

  if ($result) {
        mysqli_commit($con);
        send_message('Message was sent', 'success');
        header("Location: index.php");
        exit();
    }
			 
	}
	else if(empty($_post['message']))
	{
	send_message('No message was found', 'error');
        header("Location: contact.php");
        exit();
	}
	?>