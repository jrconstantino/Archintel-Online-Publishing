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
<title>Add Article</title>
</head>

<body>
	<div class="addnews-form">
    	<p id="addnews-p">PLEASE FILL-UP THE FOLLOWING:</p>
        <form action="execaddarticle.php" method="post" enctype="multipart/form-data">
        	<input type="hidden" name="published_by" value="<?php echo $_SESSION['username']; ?>">
            <br />
        	<table border="0" cellpadding="2" cellspacing="3" width="95%">
            	<tr>
                	<td>Date:</td>
                    <td><input type="date" name="date" id="new-txt" required autocomplete="off"></td>
                </tr>
            	<tr>
                	<td>Title:</td>
                    <td><input type="text" name="title" id="new-txt" required autocomplete="off"></td>
                </tr>
            	<tr>
                	<td>Image:</td>
                    <td><input required="required" type="file" name="image" id="selectedFile" accept="image/jpeg, image/png" autocomplete="off"></td>
                </tr>
            	<tr>
                	<td valign="top">Content:</td>
                    <td><textarea name="content" id="new-txt2" required style="resize:none; width:400px; height:300px;" required autocomplete="off"></textarea></td>
                </tr>
            </table>
            <center><input type="submit" value="Save" align="middle" /></center>
        </form>
    </div>
</body>
</html>