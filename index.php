<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
<title>Welcome to Archintel Publishing</title>
<meta name="viewport" content="width=1200; user-scalable=1;" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="css/mbcsmbmcp.css" type="text/css" />
<link rel="stylesheet" href="css/main.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="slider/engine1/style.css" />
<script type="text/javascript" src="slider/engine1/jquery.js"></script>
<style type="text/css">
body
{
    -webkit-animation: fadeEffect 1s;
    animation: fadeEffect 1s;
}

/* Fade in tabs */
@-webkit-keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}

@keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}
}
</style>
</head>

<body>
<?php include('connection.php'); ?>
	<div id="main-container">
    	<div id="head-container">
        <?php include("includes/header.php"); ?>
        <?php include("includes/menu.php"); ?>     
        <div id="body-container">
        	<div id="content-left">
		<div id="banner-area">
                	<!-- Start WOWSlider BODY section -->
                    <div id="wowslider-container1">
                    <div class="ws_images"><ul>
                            <li><img src="slider/data1/images/banner1.jpg" alt="1a" title="1a" id="wows1_0" width="800" height="355"/></li>
                            <li><img src="slider/data1/images/banner2.jpg" alt="1a" title="1a" id="wows1_0" width="800" height="355"/></li>
                            <li><img src="slider/data1/images/banner3.jpg" alt="1a" title="1a" id="wows1_0" width="800" height="355"/></li>
                        </ul></div>
                        <div class="ws_bullets"><div>
                            <a href="#" title="1a"><span><?php echo $id; ?></span></a>
                        </div></div>
                    </div>	
                    <script type="text/javascript" src="slider/engine1/wowslider.js"></script>
                    <script type="text/javascript" src="slider/engine1/script.js"></script>
                    <!-- End WOWSlider BODY section -->
                </div>
                <div class="title-cover">
                	<div class="title-bar"><p id="title_spn">Latest Articles</p></div>
                </div>
                <div id="news-container" align="center">
                	<?php 
					$result = mysqli_query($connection,"SELECT * FROM article ORDER by a_id DESC LIMIT 9");
					while ($row = mysqli_fetch_array($result))
					{
						$id=$row['a_id'];
						$title=$row['title'];
						$desc=$row['content'];
						$date_posted=$row['date'];
						$image=$row['image'];
					?>
                	<a href="article-p.php?id=<?php echo $id; ?>" class="read-more">
                        <div id="news-content">
                            <div id="news-banner" style="background:url(user/img/article/<?php echo $image; ?>);background-size:cover"></div>
                            <p class="title-grid"><?php echo $title; ?></p>
                            <div id="date-con"><p id="date-grid"><img src="img/date.png" width="15" style="margin-bottom:-2px" />&nbsp;&nbsp;<?php echo $date_posted; ?></p></div>
                            <p id="desc-grid" class="block-with-text"><?php echo mb_strimwidth($desc, 0, 100, '...'); ?></p>
                            <p id="readm-grid">&raquo; Click to View More &laquo;</p>
                        </div>
                    </a>
                    <?php } ?>
                </div>
            </div>
            <div id="content-right">
            	<?php include('includes/sidebar.php'); ?>
            </div>
        </div>
        <br />
        
        <a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
		<script type="text/javascript">
        // ===== Scroll to Top ==== 
        $(window).scroll(function() {
            if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
                $('#return-to-top').fadeIn(200);    // Fade in the arrow
            } else {
                $('#return-to-top').fadeOut(200);   // Else fade out the arrow
            }
        });
        $('#return-to-top').click(function() {      // When arrow is clicked
            $('body,html').animate({
                scrollTop : 0                       // Scroll to top of body
            }, 500);
        });
        </script>
        <?php include('includes/footer.php'); ?>
    </div>
    
</body>
</html>