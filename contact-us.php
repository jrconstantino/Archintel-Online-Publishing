<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
<title>Contact Us - Archintel</title>
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
                	<div class="p-bar"><p class="page-p">CONTACT US</p></div>
            	</div>
                	<br />
                    <p id="loc-p">LOCATION MAP</p>
                    <div id="map">
						<script>
                          function initMap() {
                            var uluru = {lat: 14.2799381, lng: 121.0470242};
                            var map = new google.maps.Map(document.getElementById('map'), {
                              zoom: 14,
                              center: uluru
                            });
                            var marker = new google.maps.Marker({
                              position: uluru,
                              map: map
                            });
                          }
                        </script>
                        <script async defer
                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKwSB6MM3eoIbvhO_yuccodifOyh3IX5s&callback=initMap">
                        </script>
                    </div>
                	<br />
                    <p id="loc-p2">ARCHINTEL PUBLISHING</p>
                    <p id="loc-p">CONTACT INFORMATION</p>
                    <div id="contact-con" align="center">
                    	<div id="contact-list">
                        	<div id="contact-content">
                                    <div class="bot-f"><img src="img/icon_address.png" width="15"></div>
                                    <div class="bot-f"><span id="con-span">&nbsp;Company Address</span></div>
                            </div>
                            <p id="contact-p">Laguna, Philippines</p>
                        </div>
                    	<div id="contact-list">
                        	<div id="contact-content">
                                    <div class="bot-f"><img src="img/icon_tel.png" width="15"></div>
                                    <div class="bot-f"><span id="con-span">&nbsp;Telephone Number</span></div>
                            </div>
                            <p id="contact-p">09159821358</p></div>
                    	<div id="contact-list">
                        	<div id="contact-content">
                                    <div class="bot-f"><img src="img/icon_fax.png" width="15"></div>
                                    <div class="bot-f"><span id="con-span">&nbsp;Fax Number</span></div>
                            </div>
                            <p id="contact-p">09159821358</p></div>
                    </div>
                   <!-- <p id="loc-p">UNIVERSITY LOCATION</p> -->
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