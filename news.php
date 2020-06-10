<?php
	include("functions.php");
	$con=mysqli_connect('localhost','root','','Leicester');
	
	if(isset($_POST['upload'])){
		$maxsize = 5242880;
		$title=$_POST['title'];
		$name = $_FILES['file']['name'];
		$text=$_POST['text'];
		$target_dir = "news/";
		$target_file = $target_dir . basename($_FILES["file"]["name"]);
		
		
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		
		
		$extensions_arr = array("jpg","mp4","png","avi");
		
		
		if( in_array($imageFileType,$extensions_arr) ){
			
			// Check file size
			if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
				send_message('File too large. File must be less than 5MB.','error');
				}else{
				// Upload
				if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
					// Insert record
					$query = "INSERT INTO news(title,filename,text) VALUES('".$title."','".$target_file."','".$text."')";
					
					mysqli_query($con,$query);
					send_message('Post uploaded successfully','success');
					header("Location: blog-left-sidebar.php");
					exit();
				}
			}
			
		}
		else
		{
			send_message('Invalid extension','error');
					header("Location: blog-left-sidebar.php");
					exit();
			
		}
	}
		
	
?>