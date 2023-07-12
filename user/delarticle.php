<?php
	include('connection.php');
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" href="css/main.css" rel="stylesheet" media="screen">
<link rel="shortcut icon" href="../img/favicon.png" type="image/png">
<title>Delete Article</title>
</head>

<body>
	<div class="delnews-form">
		<?php
        $id=$_GET['id'];
        $result = mysqli_query($connection,"SELECT * FROM article where a_id='$id'");
            while($row = mysqli_fetch_array($result))
                {
                    $date = $row['date'];
                    $title = $row['title'];
                    $id = $row['a_id'];
                    $image = $row['image'];
                    $content = $row['content'];
                    }
        ?>
    	<p id="addnews-p">ARE YOU SURE YOU WANT TO DELETE?</p>
        <form action="execdelarticle.php" method="post" enctype="multipart/form-data">
        <?php $date = date('m/d/Y'); ?>
        	<input type="hidden" name="published_by" value="<?php echo $_SESSION['username']; ?>">
            <input type="hidden" name="id" value="<?php echo $id=$_GET['id']; ?>">
            <br />
        	<table border="0" cellpadding="2" cellspacing="3" width="95%">
            	<tr>
                	<td>Date Published:</td>
                    <td><?php echo $date; ?></td>
                </tr>
            	<tr>
                	<td>Title:</td>
                    <td><?php echo $title; ?></td>
                </tr>
            </table><br />
<br />

            <center><input type="submit" value="Delete" align="middle" />&nbsp;
            <input type="button" onclick="window.location.replace('article.php')" value="Cancel" /></center>
        </form>
    </div>
</body>
</html>