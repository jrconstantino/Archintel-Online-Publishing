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
        <div id="footer-container">
        	<div id="footer-1st-layer" align="center">
            	<div class="footer-grid" id="foot-left">
                	<p id="footer-title">Social Links</p>
                    <p id="social-icons">
                        <a href="https://www.facebook.com/archintel1/" target="#"><img src="img/social/fb.png" id="social-icons-img" title="Facebook page"></a>
                        <a href="#"><img src="img/social/tw.png" id="social-icons-img" title="Twitter"></a>
                        <a href="#"><img src="img/social/ig.png" id="social-icons-img" title="Instagram"></a>
                        <a href="#"><img src="img/social/gm.png" id="social-icons-img" title="Google Plus"></a>
                    </p>
                    <div id="fb-container">
						<div id="fb-root"></div>
						<script>(function(d, s, id) {
                          var js, fjs = d.getElementsByTagName(s)[0];
                          if (d.getElementById(id)) return;
                          js = d.createElement(s); js.id = id;
                          js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
                          fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>
                        
                        <div class="fb-page" data-href="https://www.facebook.com/archintel1/" data-width="242" data-height="115" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/archintel1/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/archintel1/" target="#">Archintel</a></blockquote></div>
                    </div>
                </div>
            	<div class="footer-grid" id="foot-right">
                	<p id="footer-title">About Us</p>
                    <p id="footer-desc">The first online publishing website of Archintel.</p>
                </div>
            	<div class="footer-grid" id="foot-right">
                	<p id="footer-title">Quick Links</p>
                    <ul class="footer-list">
                    	<li><span>&raquo;</span> <a href="index.php">Home</a></li>
                    	<li><span>&raquo;</span> <a href="#">Learn more About Us</a></li>
                    	<li><span>&raquo;</span> <a href="article.php">Articles</a></li>
                    	<li><span>&raquo;</span> <a href="#.php">Careers</a></li>
                    	<li><span>&raquo;</span> <a href="contact-us.php">Location</a></li>                   			<li><span>&raquo;</span> <a href="#" target="#">Privacy Policy</a></li>
                    </ul>
                </div>
            	<div class="footer-grid" id="foot-right">
                	<p id="footer-title">Contact Us</p>
                    <ul class="footer-list-2">
                    	<li><div id="ft-left"><img src="img/tel.png" width="22"></div><div id="ft-right"> 09159821358</div></li>
                    	<li><div id="ft-left2"><img src="img/mail.png" width="22"></div><div id="ft-right" class="ft-mail"> archinteltest@gmail.com</div></li>
                    	<li><div id="ft-left2"><img src="img/loc.png" width="22"></div><div id="ft-right"> Laguna, Philippines</div></li>
                    </ul>
                </div>
            </div>
            <div id="footer-2nd-layer">
            	<p id="footer-cpright">Copyright &copy; 2023 ARCHINTEL PUBLISHING. All Rights Reserved.</p>
            </div>
        </div>

