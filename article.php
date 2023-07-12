<?php
	include('connection.php');
?>
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
</head>

<body>
	<div id="main-container">
    	<div id="head-container">
        <?php include("includes/header.php"); ?>
        <?php include("includes/menu.php"); ?>       
        <div id="body-container">
        	<div id="content-left">
            	<div id="page-title">
                	<div class="p-bar"><p class="page-p">Articles</p></div>
            	</div>
                	<br />
                     <?php 
                        $result = mysqli_query($connection,"SELECT * FROM article ORDER BY a_id DESC");
                        while ($row = mysqli_fetch_array($result))
                        {
                            $id=$row['a_id'];
                            $title=$row['title'];
                            $date_posted=$row['date'];
                            $image=$row['image']; 
                            $poster=$row['published_by'];
                            $desc=$row['content'];
					?>
                    <div id="news-list">
                    	<a href="article-p.php?id=<?php echo $id; ?>">
                    	<div id="news-left" style="background:url(user/img/article/<?php echo $image; ?>); background-size:cover;">
                        </div>
                       	</a>
                    	<div id="news-right">
                        	<p class="news-rtitle"><a href="article-p.php?id=<?php echo $id; ?>" class="news-a"><?php echo $title; ?></a></p>
                            <div id="anno-bot">
                                <div class="bot-f"><img src="img/user.png" width="13"></div>
                                <div class="bot-f"><span>&nbsp;<?php echo $poster; ?>&nbsp;&nbsp;&nbsp;</span></div>
                                <div class="bot-f"><img src="img/date.png" width="13"></div>
                                <div class="bot-f"><span>&nbsp;<?php echo $date_posted; ?></span></div>
                            </div>
                            <p id="desc-grid2" class="block-with-text2"><?php echo mb_strimwidth($desc, 0, 150, '...'); ?></p>
                        </div>	
                	</div>
                    <?php }; ?>
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