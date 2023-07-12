<?php
include('connection.php');
	if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);

	
		if ($image_size==FALSE) {
		
			echo "That's not an image!";
			
		}else{
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"img/article/" . $_FILES["image"]["name"]);
			
			$location=$_FILES["image"]["name"];
			$published_by=$_POST['published_by'];
			$date=date('m-d-Y', strtotime($_POST['date']));
			$title=$_POST['title'];
			$content=$_POST['content'];
			$date_today=date('m/d/Y');
			
			
			$result = mysqli_query($connection,"SELECT * FROM users where username='$published_by'");
				while($row = mysqli_fetch_array($result))
				{$last = $row['lastname'];
						$first = $row['firstname'];	}
						$created_by = "$first $last";	
			
						
			$logs="(".$created_by.") Added the article: <b>".$_POST['title']."</b>"; 
			
			if(!$update=mysqli_query($connection,"INSERT INTO logs (description, date_posted) VALUES ('$logs','$date_today')")) {
			
				echo mysqli_error();
				
				
			}
			
			if(!$update=mysqli_query($connection,"INSERT INTO article (image,published_by,date,content,title) VALUES ('$location','$created_by','$date','$content','$title')")) {
			
				echo mysqli_error();
				
				
			}
			else{
			
			header("location: article.php?remarks=success");
			exit();
			}
			}
	}


?>