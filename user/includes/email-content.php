		
				
				<div id="email-content" style=" width: 100%; min-height: 400px;">
					<center><img src="img/header.gif" width="30%"></center>
					<p style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'; text-align: center;color: #00547c">Published Articles on <?php echo $date_displayed; ?></p>
					
                    <?php 
                        $result = mysqli_query($connection,"SELECT * FROM article WHERE date='$date_displayed'");
							if(mysqli_num_rows($result) <= 0)
							{
								
								echo "<br><p><font style='color:red'><center>There are no articles on this date.</center></font></p>";
							}
								else{
                        while ($row = mysqli_fetch_array($result))
						{
                            $id=$row['a_id'];
                            $description=$row['content'];
                            $date_published=$row['date'];
                            $title=$row['title'];
                            $published_by=$row['published_by'];
                            $image=$row['image'];
					?>
					<a href="../article-p.php?id=<?php echo $id; ?>" target="#">
					<div id="article-con" style=" width: 100%; position: relative; min-height: 200px; align-content: center; background-color: #f3f3f3">
						<div id="article-img" style=" width: 30%; float: left; position: relative; min-height: 199px; background:url(img/article/<?php echo $image; ?>);background-size:cover">
						</div>
						<div id="article-img" style=" margin-left: 10px; width: 65%; float: left; position: relative; min-height: 180px">
							<div id="article-title" style="width: 100%; min-height: 40px;">
								<p style="margin: 5px; margin-top:15px; font-family:Cambria; line-height: 100%; font-size: 20px"><b><?php echo $title; ?></b></p>
							</div>
							<div id="article-desc" style="width: 100%; min-height: 40px;">
								<p style="line-height: 110%;color: #504d4d; margin: 5px; font-family:Calibri; font-size: 18px; font-style:italic;"><?php echo mb_strimwidth($description, 0, 300, "..."); ?></p>
								<p style="text-align: right; font-family: Calibri; font-size: 15px;">Article ID:<?php echo $id; ?> | Date Published: <?php echo $date_published; ?> | Published by: <?php echo $published_by; ?></p>
							</div>
						</div>
					</div> </a><br>
					<?php }} ?>
				</div>