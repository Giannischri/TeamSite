<?php
	
    session_start();
    $con=mysqli_connect('localhost','root','','Leicester');
    include "functions.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
	
    if (empty($username) || empty($password)) {
        send_message('Πρέπει να συμπληρώσετε και τα 2 πεδία (όνομα και κωδικό χρήστη)', 'error');
        header("Location: index.php");
        exit();
	}
	
    $query = "SELECT username, password,role FROM user WHERE username='$username' and password='$password'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    $count = mysqli_num_rows($result);
	
    if ($count == 1) {
        $row = mysqli_fetch_assoc($result);
        $role = $row['role'];
		
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['role'] = $role;
		if($role=='fan')
		{
			echo "yoo";
			$cardnum=rand(100,999);
			$query2="insert into fan(username,cardnum,userid) Values( '$username','$cardnum',(SELECT id FROM user WHERE username='$username'))";
			$result = mysqli_query($con, $query2);
			
			if(!$result)
			{
				mysqli_rollback($con);
			}
		}
		else if($role=='player')
		{
	         echo "xaxaxaax";
	        $query3="insert into player(username,userid) Values ('$username',(SELECT id FROM user WHERE username='$username'))";
			$result = mysqli_query($con, $query3);
			echo "xaxaxaax";
			if(!$result)
			{
				mysqli_rollback($con);
			}
		}
		} 
	 else {
        send_message('Λάθος στοιχεία', 'error');
        header("Location: index.php");
        exit();
	}
	keep($_SESSION['username'],$_SESSION['role']);
    switch ($_SESSION['role']) {
        case 'admin': //admin
		header("Location: index.php");
		exit();
		break;
        case 'user': //user
		header("Location: index.php");
		exit();
		break;
		case 'fan':
		header("Location: index.php");
		exit();
		break;
		case 'player':
		header("Location: index.php");
		exit();
		break;
	}
?>