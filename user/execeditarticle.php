<?php
include('connection.php');

			$id = $_POST['id'];
			$location=$_FILES["image"]["name"];
			$published_by=$_POST['published_by'];
			$date=$_POST['date'];
			$title=$_POST['title'];
			$content=$_POST['content'];
			$date_today=date('m/d/Y');
			
			$result = mysqli_query($connection,"SELECT * FROM users where username='$published_by'");
				while($row = mysqli_fetch_array($result))
						{$last = $row['lastname'];
						$first = $row['firstname'];	}
						$created_by = "$first $last";
									
			$logs="(".$created_by.") Changed the details of the article: <b>".$title."</b>"; 
			
			if(!$update=mysqli_query($connection,"INSERT INTO logs (description, date_posted) VALUES ('$logs','$date_today')")) {
			
				echo mysql_error();
				
				
			}
			if(!$update=mysqli_query($connection,"UPDATE article SET title='$title', content='$content', date='$date' WHERE a_id='$id'")) {
			
				echo mysql_error();
				
				
			}
			else{
			
			header("location: article.php?remarks=success");
			exit();
	}


?>