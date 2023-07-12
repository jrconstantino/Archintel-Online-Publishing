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
<title>Send Articles</title>  
	<link href="css/facebox.css" media="screen" rel="stylesheet" type="text/css" />
  <script src="js/jquery.js" type="text/javascript"></script>
  <script src="js/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'js/loading.gif',
        closeImage   : 'js/closelabel.png'
      })
    })
  </script>
	
</head>

<body>
	<div id="main-container">
    	<div id="header-con">
        	<div id="header-logo-con">
            	<img src="img/header.gif" height="45" />
            </div>
            <div id="header-logout">
            	<a href="index.php" style="text-decoration:none"><p id="logout-a">LOGOUT</p></a>
            </div>
        </div>
    	<div id="left-con">
        	<?php include("includes/sidebar.php"); ?>
        </div>
        <div id="right-con">
            <p id="news-con-title">Send Published Articles to Email</p>
        	<div id="news-type">
                <!--------------------CONTENT-------------------->
                 <div id="News">
                 	
					 <form class"" action="sendemail.php" method="post">
						 <font style="font-family: Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, 'serif'">
						 <table border="0" cellpadding="2" cellspacing="3" width="65%">
							<tr>
								<td style="width: 50%; font-family: Cambria">Select Date of Published Articles:</td>
								<td><input type="date" name="date" required autocomplete="off">     <button type="submit" name="send">Submit</button></td>
							</tr>
						 </table>
						</font>
					 </form>
                <br />
                 </div>
                 <!--------------------CONTENT-END---------------->
            </div>
        </div>
    </div><br />

    <p style="text-align:center; color:#CCC; font-family:Calibri">Copyright © 2023 ARCHINTEL. All Rights Reserved.</p>
</body>
</html>