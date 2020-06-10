<?php
	
	function print_message() {
		if ((isset($_SESSION['type_of_message'])) && (isset($_SESSION['message'])) && ($_SESSION['type_of_message'] != '') && ($_SESSION['message'] != '')) {
			echo "<center><div class=" . $_SESSION['type_of_message'] . ">";
			echo $_SESSION['message'];
			echo "</div></center>";
			unset($_SESSION['message']);
			unset($_SESSION['type_of_message']);
			return;
		}
	}
	
	function send_message($string, $type) {
		$_SESSION['message'] = $string;
		$_SESSION['type_of_message'] = $type;
	}
	function keep($username,$role)
	{
		$_SESSION['role']=$role;
		$_SESSION['username']=$username;
	}
	function loadimg(){
		$con=mysqli_connect('localhost','root','','Leicester');
		$query = mysqli_query($con,"SELECT * FROM news ORDER BY id DESC");
		while($row = mysqli_fetch_assoc($query))
		{
			$img = $row['filename'];
			$txt=$row['text'];
			$title=$row['title'];
			$time=$row['time'];
			echo "<article>";
			echo "<div class='row'>";
			echo   "<div class='span8'>";
			echo   "<div class='post-image'>";
			echo   "<div class='post-heading'>";
			echo   "<h3><a href='#'>".$title."</a></h3>";
			echo    "</div>";
			echo      "<img src='".$img."' alt='' />";
			echo             "</div>";
			echo             "<p>";
			echo              $txt;
			echo           "</p>";
			echo            "<div class='bottom-article'>";
			echo             "<ul class='meta-post'>";
			echo               "<li><i class='icon-calendar'></i><a href='#'>".$time."</a></li>";
			echo                "<li><i class='icon-user'></i><a href='#'> Admin</a></li>" ;  
			echo             "</ul>";       
			echo           "</div>";
			echo         "</div>";
			echo      "</div>";
			echo    "</article>";
			
		}
	}
	
	
	
	
?>