<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" href="css/main.css" rel="stylesheet" media="screen">
<link rel="shortcut icon" href="../img/favicon.png" type="image/png">
<title>Dashboard</title>
</head>

<body>
<?php include('connection.php'); ?>
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
            <p id="news-con-title">Dashboard</p>
            <div id="dash-con">
            	<div id="dash-recent">
                	<p id="dash-rec-title" style="text-align:center">Recent Activities</p>
                    <table class="dash-tbl" border="1" cellpadding="0" cellspacing="0" width="95%" align="center" >
                    	<tr>
                        	<th width="20%">DATE</th>
                            <th>LOGS</th>
                        </tr>
                    <?php 
                        $result = mysqli_query($connection,"SELECT * FROM logs ORDER BY logid DESC LIMIT 10");
                        while ($row = mysqli_fetch_array($result))
                        {
                            $id=$row['logid'];
                            $description=$row['description'];
                            $date_posted=$row['date_posted'];
					?>
                    	<tr align="center">
                        	<td><?php echo $date_posted; ?></td>
                        	<td><?php echo $description; ?></td>
                        </tr>
                    <?php } ?>
                    </table>
                </div>
            	<div id="dash-socmed" align="center">
                	<p id="dash-rec-title">Social Media Update</p>
					<div style="margin:20px" class="fb-page" data-href="https://www.facebook.com/archintel1" data-tabs="timeline" data-width="300" data-height="200" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/archintel1" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/archintel1">Archintel</a></blockquote></div>
                    
                    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
                </div>
                
            </div>
        </div>
    </div>
    <p style="text-align:center; color:#CCC; font-family:Calibri">Copyright © 2023 ARCHINTEL. All Rights Reserved.</p>

</body>
</html>