<?php
require_once('auth.php');
include('connection.php');
			$id = $_POST['id'];
			$date_today=date('m/d/Y');
			$published_by=$_SESSION['username'];
			
			$result = mysqli_query($connection,"SELECT * FROM article where a_id='$id'");
				while($row = mysqli_fetch_array($result))
						$title = $row['title'];
			
			$result = mysqli_query($connection,"SELECT * FROM users where username='$published_by'");
				while($row = mysqli_fetch_array($result))
						{$last = $row['lastname'];
						$first = $row['firstname'];	}
						$created_by = "$first $last";

			$logs="(".$created_by.") Removed the article: <b>".$title."</b>"; 
			
			if(!$update=mysqli_query($connection,"INSERT INTO logs (description, date_posted) VALUES ('$logs','$date_today')")) {
			
				echo mysqli_error();
				
				
			}
 $sql = mysqli_query($connection,"delete from article where a_id='$id'");
 
 header("location: article.php?remarks=removed");

?>