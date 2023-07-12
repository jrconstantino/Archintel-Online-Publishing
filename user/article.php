<?php
	include('connection.php');
	require_once('auth.php');
	include('pagination.php');
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
            <p id="news-con-title">Articles</p>
        	<div id="news-type">
                <!--------------------CONTENT-------------------->
                 <div id="News">
                 	
            	<span><a href="addarticle.php" rel="facebox" id="addnew">Publish Article</a></span>
            	<table id="news-table" width="100%" border="1" cellpadding="0" cellspacing="1">
                	<tr height="25" style=" background:#34404d; color:#CCC">
                    	<th width="15%">Date Published</th>
                    	<th width="20%">Title</th>
                    	<th width="20%">Content</th>
                    	<th width="15%">Image</th>
                    	<th width="15%">Action</th>
                    </tr>
                    <?php 
                        $result = mysqli_query($connection,"SELECT * FROM article ORDER BY a_id DESC");
                        while ($row = mysqli_fetch_array($result))
                        {
                            $id=$row['a_id'];
                            $title=$row['title'];
                            $date_posted=$row['date'];
                            $image=$row['image']; 
                            $published_by=$row['published_by'];
                            $news_desc=$row['content'];
					?>
                	<tr style="text-align:center">
                    	<td><?php echo $date_posted ; ?><br />(by: <?php echo $published_by ; ?>)</td>
                    	<td ><?php echo $title ; ?></td>
                    	<td><textarea readonly="readonly" style="border:0; width:95%; height:120px; resize:none"><?php echo $news_desc ; ?></textarea>
                        </td>
                    	<td><img src="img/article/<?php echo $image ; ?>" width="150"  /></td>
                    	<td><a href="editarticle.php?id=<?php echo $id; ?>" rel="facebox" id="addnew">Edit</a> | <a href="delarticle.php?id=<?php echo $id; ?>" rel="facebox" id="addnew">Delete</a> | <a href="../article-p.php?id=<?php echo $id; ?>" id="addnew" target="#">View</a></td>
                    </tr>
                    <?php } ?>
                </table>
                <br />
                 </div>
                 <!--------------------CONTENT-END---------------->
            </div>
        </div>
    </div><br />

    <p style="text-align:center; color:#CCC; font-family:Calibri">Copyright © 2023 ARCHINTEL. All Rights Reserved.</p>
</body>
</html>