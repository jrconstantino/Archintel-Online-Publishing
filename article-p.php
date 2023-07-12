<?php
	include('connection.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
<title>Article</title>
<meta name="viewport" content="width=1200; user-scalable=1;" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="css/mbcsmbmcp.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/main.css" />
<link rel="stylesheet" type="text/css" href="slider/engine1/style.css" />
<script type="text/javascript" src="slider/engine1/jquery.js"></script>
<style>
textarea {
border: 0;
width:  100%;
height:  50px;
color:#333;
background:#FFF;
font-family:Calibri;
font-size: 16px;
resize: none;
overflow: hidden;
}
</style>
</head>

<body>
	<div id="main-container">
    	<div id="head-container">
        <?php include("includes/header.php"); ?>
        <?php include("includes/menu.php"); ?>        
        <div id="body-container">
        	<div id="content-left">
            	<div id="page-title">
                	<div class="p-bar"><p class="page-p">Article</p></div>
					
            	</div>
                <br />
                <?php 
        				$id=$_GET['id'];
                        $result = mysqli_query($connection,"SELECT * FROM article WHERE a_id='$id'");
                        while ($row = mysqli_fetch_array($result))
                        {
                            $id=$row['a_id'];
                            $title=$row['title'];
                            $date_posted=$row['date'];
                            $image=$row['image']; 
                            $poster=$row['published_by'];
                            $desc=$row['content']; }
					?>
                <div id="newsp-container">
                	<img src="user/img/article/<?php echo $image; ?>" width="100%" />
                    <p id="newsp-title"><?php echo $title; ?></p>
                    <div id="anno-bot">
                    	<div class="bot-f"><img src="img/user.png" width="13"></div>
                    	<div class="bot-f"><span>&nbsp;<?php echo $poster; ?>&nbsp;&nbsp;&nbsp;</span></div>
                    	<div class="bot-f"><img src="img/date.png" width="13"></div>
                    	<div class="bot-f"><span>&nbsp;<?php echo $date_posted; ?></span></div>
                    </div>
                    <textarea id="test" name="test" onkeyup="resizeTextarea('test')" data-resizable="true" placeholder="placeholder" readonly="readonly"><?php echo $desc; ?></textarea>
                    <br /><br />
                    
                    <script type="text/javascript">
						function resizeTextarea (id) {
						  var a = document.getElementById(id);
						  a.style.height = 'auto';
						  a.style.height = a.scrollHeight+'px';
						}
						
						function init() {
						  var a = document.getElementsByTagName('textarea');
						  for(var i=0,inb=a.length;i<inb;i++) {
							 if(a[i].getAttribute('data-resizable')=='true')
							  resizeTextarea(a[i].id);
						  }
						}
						
						addEventListener('DOMContentLoaded', init);
                    </script> 
                </div>
            </div>
            <div id="content-right">
            	<?php include('includes/sidebar.php'); ?>
            </div>
        </div>
        <br />
        

        <?php include('includes/footer.php'); ?>
    </div>
    
</body>
</html>