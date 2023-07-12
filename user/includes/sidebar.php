
        	<div id="left-pic" align="center">
            	<a href="dashboard.php"><img src="img/user-db.png" width="150" style="margin-top:20px" /></a>
            </div>
            <?php 
                        $result = mysqli_query($connection,"SELECT * FROM users WHERE username='".$_SESSION['username']."'");
                        while ($row = mysqli_fetch_array($result))
                        {
                            $fname=$row['firstname'];
                            $lname=$row['lastname']; }?>
            <p id="left-name"><?php echo "$fname $lname"; ?></p>
            <p id="main-p">Main</p>
            <ul class="left-ul">
            	<a href="dashboard.php"><li>DASHBOARD</li></a>
            	<a href="article.php"><li>PUBLISH ARTICLE</li></a>
            	<a href="sendarticle.php?id=0"><li>SEND ARTICLES</li></a>
            </ul>