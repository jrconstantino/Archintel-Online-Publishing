<?php
	include('connection.php');
	require_once('auth.php');


$date = $_POST["date"];
$date_displayed=date('m-d-Y', strtotime($date));

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" href="css/main.css" rel="stylesheet" media="screen">
<link rel="shortcut icon" href="../img/favicon.png" type="image/png">
<title>Articles</title>  
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
								<td><input type="date" name="date" value="<?php echo $date ?>" required autocomplete="off">     <button type="submit" name="send">Submit</button></td>
							</tr>
						 </table>
						</font>
					 </form>
					 
					 <p><i>Please fill-up the following to send in email:</i></p>
					 
					 <form class"" action="execsendemail.php" method="post">
						 
        				<input type="hidden" name="emailcontent" value=" 				
					<div id='email-content' style=' width: 100%; min-height: 400px;'>
					<center><img src='https://archintel-publishing.online/user/img/header.gif' width='30%'></center>
					</br>											  
					<center><p style='font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'; text-align: center;color: #00547c'>Published Articles on <?php echo $date_displayed; ?></p></center>
					</br>											  
					<?php 
                        $result = mysqli_query($connection,"SELECT * FROM article WHERE date='$date_displayed'");
                        while ($row = mysqli_fetch_array($result))
                        {
                            $id=$row['a_id'];
                            $description=$row['content'];
                            $date_published=$row['date'];
                            $title=$row['title'];
                            $published_by=$row['published_by'];
                            $image=$row['image']; ?>
					<a href='https://archintel-publishing.online/article-p.php?id=<?php echo $id; ?>' target='#'>
					<div id='article-con' style=' width: 100%; overflow: auto; position: relative; min-height: 200px; align-content: center; background-color: #f3f3f3'>
						<div id='article-img' style=' width: 30%;position: relative; float: left; min-height: 199px; background:url(https://archintel-publishing.online/user/img/article/<?php echo $image; ?>);background-size:cover'>
						</div>
						<div id='article-img' style=' margin-left: 10px; width: 65%;position: relative; float: left; min-height: 180px'>
							<div id='article-title' style='position: relative;width: 100%; min-height: 40px;'>
								<p style='margin: 5px; margin-top:15px; font-family:Cambria;line-height: 100%; font-size: 20px'><b><?php echo $title; ?></b></p>
							</div>
							<div id='article-desc' style='position: relative;width: 100%; min-height: 40px;'>
								<p style='line-height: 110%;color: #504d4d; margin: 5px; font-family:Calibri; font-size: 18px; font-style:italic;'><?php echo mb_strimwidth($description, 0, 250, '...'); ?></p>
								<p style='text-align: right; font-family: Calibri; font-size: 15px;'>Article ID:<?php echo $id; ?> | Date Published: <?php echo $date_published; ?> | Published by: <?php echo $published_by; ?></p>
							</div>
						</div>
					</div></a> <br><?php
					} ?>
					<div style='border-top-style:solid; border-color: #1595d9'></div>
					<center><p style='font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'; text-align: center;color: #00547c'>Archintel Publishing 2023 | <a href='https://archintel-publishing.online/' target='#'>Visit our website</a></p></center>
					
				</div>">
						 <font style="font-family: Cambria	, 'Lucida Bright', 'DejaVu Serif', Georgia, 'serif'">
						 <table border="0" cellpadding="2" cellspacing="3" width="65%">
						 	<tr>
							 	<td width="20%">Send to:<font style="color: red">*</font></td>
							 	<td><input style="width: 300px" placeholder="email address"; type="email" name="email" value="" required></td>
							 </tr>
						 	<tr>
							 	<td>Subject:<font style="color: red">*</font></td>
							 	<td><input style="width: 300px" type="text" name="subject" value="" required></td>
							 </tr>
						 	<!--<tr>
							 	<td>Message:</td>
							 	<td><input style="width: 300px" type="text" placeholder="optional" name="message" value=""></td>
							 </tr>-->
						 	<tr>
							 	<td></td>
							 	<td><button type="submit" name="send">Send</button></td>
							 </tr>
						 </table>
						</font>
					 </form>
                <br />
                 </div>
                 <!--------------------CONTENT-END---------------->
                 <!--------------------EMAIL-CONTENT---------------->

        	<?php include("includes/email-content.php"); ?>
                 <!--------------------EMAIL-CONTENT-END---------------->
				
            </div>
        </div>
    </div><br />

    <p style="text-align:center; color:#CCC; font-family:Calibri">Copyright © 2023 ARCHINTEL. All Rights Reserved.</p>
</body>
</html>