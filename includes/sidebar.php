<?php
	include('connection.php');
?>
    <div id="anno-container">
    	<div id="events-head">
        	<p class="sb-title"><img src="img/anno-icon.png" height="18" class="sd-icon">&nbsp;&nbsp;ANNOUNCEMENT</p>
        </div>
        <div id="anno-content">      
			<?php 
                        $result = mysqli_query($connection,"SELECT * FROM article ORDER BY a_id DESC LIMIT 3");
                        while ($row = mysqli_fetch_array($result))
                        {
                            $id=$row['a_id'];
                            $title=$row['title'];
                            $date_posted=$row['date'];
                            $image=$row['image']; 
                            $poster=$row['published_by'];
                            $desc=$row['content'];
					?>
			<div id="anno-list">
            	<div id="anno-list-left">
                	<img src="img/anno2-icon.png" width="20" style="padding:9px 0px 0px 10px ">
                </div>
            	<div id="anno-list-right">
                	<p class="anno-p"><a href="article-p.php?id=<?php echo $id; ?>" class="anno-a"><?php echo $title; ?></a></p>
                    <div id="anno-bot">
                    	<div class="bot-f"><img src="img/user.png" width="13"></div>
                    	<div class="bot-f"><span>&nbsp;<?php echo $poster; ?>&nbsp;&nbsp;&nbsp;</span></div>
                    	<div class="bot-f"><img src="img/date.png" width="13"></div>
                    	<div class="bot-f"><span>&nbsp;<?php echo $date_posted; ?></span></div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <p class="events-p3"><a href="#" class="events-a3">&raquo; VIEW ANNOUNCEMENTS</a></p>
        </div>
    </div>
    <br>
	<div id="events-container">
    	<div id="events-head">
        	<p class="sb-title"><img src="img/events-icon.png" height="18" class="sd-icon">&nbsp;&nbsp;COMPANY EVENTS</p>
        </div>
        <div id="events-content">
                	<?php 
                        $result = mysqli_query($connection,"SELECT * FROM article ORDER BY a_id DESC LIMIT 1");						if(mysqli_num_rows($result) > 0)
                        while ($row = mysqli_fetch_array($result))
                        {
                            $id=$row['a_id'];
                            $title=$row['title'];
                            $date_posted=$row['date'];
                            $image=$row['image']; 
                            $poster=$row['published_by'];
                            $news_desc=$row['content'];
					?>
        	<a href="#id=<?php echo $id; ?>" class="events-link">
        	<div style="height:5px;"></div>
        	<div id="events-list">
            	<div id="events-date" align="center">
                    <div id="events-date-content">
                    	<span class="events-date-spn">13</span>
                    	<span class="events-date-spn2">July</span>
                    </div>
                </div>
                <div id="events-desc">
                	<p class="events-p">Coming Soon</p>
                	<p class="events-p2"></p>
                </div>
            </div>
            </a>
            <?php }
			else
			{ ?>
            <p style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; font-size:14px; color:#333; margin:0; padding:15px 0px 15px 0px; text-align:center;">No upcoming event.</p>
            <?php } ?>
            <p class="events-p3"><a href="#" class="events-a3">&raquo; VIEW EVENTS</a></p>
        </div>
	</div>
    <br>
    <div id="anno-container">
    	<div id="events-head">
        	<p class="sb-title"><img src="img/faculty-icon.png" height="18" class="sd-icon">&nbsp;&nbsp;ARCHINTEL USERS</p>
        </div>
        <div id="anno-content">
			<div id="anno-list">
            	<ul class="fac-list">
                	<li><a href="user/" target="#">&raquo; User Login</a></li>
                	<li><a href="user/" target="#">&raquo; Publish Article</a></li>
                </ul>
            </div>
            <p class="events-p3"><a href="#" class="events-a3"></a></p>
        </div>
    </div>
    <br />
    <div id="anno-container">
    	<div id="events-head">
        	<p class="sb-title"><img src="img/student-icon.png" height="18" class="sd-icon">&nbsp;&nbsp;PUBLISHER TOOLS</p>
        </div>
        <div id="anno-content">
			<div id="anno-list">
            	<ul class="fac-list">
                	<li><a href="#">&raquo; Coming Soon</a></li>
                </ul>
            </div>
            <p class="events-p3"><a href="#" class="events-a3"></a></p>
        </div>
    </div>
    <br />
    <!---
    <div id="anno-container">
    	<div id="events-head">
        	<p class="sb-title"><img src="img/faculty-icon.png" height="18" class="sd-icon">&nbsp;&nbsp;STUDENTS</p>
        </div>
        <div id="anno-content">
			<div id="anno-list">
            	<ul class="fac-list">
                	<li><a href="https://outlook.com/national-u.edu.ph">&raquo; Office 365 Email</a></li>
                	<li><a href="https://outlook.com/national-u.edu.ph">&raquo; Online Enrollment</a></li>
                	<li><a href="https://outlook.com/national-u.edu.ph">&raquo; Online Teacher's Evaluation</a></li>
                </ul>
            </div>
            <p class="events-p3"><a href="#" class="events-a3"></a></p>
        </div>
    </div>
    -->
