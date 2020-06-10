<?php
	session_start();
	include "functions.php";
	 $con=mysqli_connect('localhost','root','','Leicester');
if(isset($_POST['upload']) && $_POST['upload']='upload'){
								$target_dir = "img/".$_SESSION['username']."/";
								$target_file = $target_dir . basename($_FILES["file"]["name"]);							
								$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
								$extensions_arr = array("jpg","png");
								if( in_array($imageFileType,$extensions_arr) && isset($_FILES["file"]["name"]))
								if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file))
								mysqli_query($con,"INSERT INTO photos(username,filename,description) Values('".$_SESSION['username']."','".$target_file."','".$_POST['txtArea']."')");
								mysqli_commit($con);
								header("Location:index.php");
								exit();
							}
							?>