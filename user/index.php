<?php
	//Start session
	session_start();
	session_destroy();
	?>
<!doctype html>
<html>
<head>
<link type="text/css" href="css/main.css" rel="stylesheet" media="screen">
<link rel="shortcut icon" href="img/favicon.png" type="image/png">
<meta charset="utf-8">
<title>User Login</title>
</head>
<style type="text/css">
body
{
	background:#FFF}
#L_error
{ color:red; font-family:Calibri; font-style:italic; font-size:11px; margin-top:-25px}

.tooltip {
    position: relative;
    display: inline-block;
}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: black;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
    position: absolute;
    z-index: 1;
    top: 130%;
    left: 50%;
    margin-left: -60px;
	opacity: 0;
    transition: opacity 0.5s;
}

.tooltip .tooltiptext::after {
    content: "";
    position: absolute;
    bottom: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: transparent transparent black transparent;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
	opacity: 1;
}

.tooltiptext {
	font-family:Calibri;
	font-size:12px
}

</style>
<?php	
	//Unset the variables stored in session
	unset($_SESSION['username']);
	unset($_SESSION['SESS_FIRST_NAME']);
?>

<body>
<?php include("connection.php"); ?>
	<div id="L_frame" align="center">
    	<div id="L_frame_head">
			<br>
        	<a href="../"><img src="img\header.gif" width="320px"></a>
        </div>
        <div align="center" id="L_login_head">
        	<font id="L_head_font"><b>LOGIN TO PUBLISH ARTICLE</b></font>
        </div>
        <div id="L_head_entr">
        	<font id="L_head_ent_font">PLEASE ENTER YOUR CREDENTIALS.</font><br>
            <?php
			if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) 
			{ 
				foreach($_SESSION['ERRMSG_ARR'] as $msg)
			{
				echo '<font id="L_error">';
				echo $msg;
				echo '&nbsp;'; 
				echo '</font>';
			}
				unset($_SESSION['ERRMSG_ARR']);
			}
			?>
        </div>
        <div id="L_form_con">
        	<form action="login.php" method="post" id="L_form">
            	<div id="L_input">
                	<table border="1px" style="border-radius:4px; border-color:#7F7C7C; border-style:solid">
                    	<tr style=" border-width:0px">
                        	<td style="width:30px; border-width:0px">
                            	<img src="img/user.png" height="23px" style="padding-top:4px; padding-left:4px">
                            </td>
                            <td style=" border-width:0px">
                            <div class="tooltip">
                				<input type="text" name="user" class="user" id="L_user" autocomplete="off">
                            	<span class="tooltiptext">Enter username</span>
							</div>
                    		</td>
                        </tr>
                    </table>
                </div>
            	<div id="L_input">
                	<table border="1px" style="border-radius:4px; border-color:#7F7C7C; border-style:solid">
                    	<tr style=" border-width:0px;">
                        	<td style="width:30px; border-width:0px; ">
                            	<img src="img/lock.png" height="23px" style="padding-top:4px; padding-left:4px">
                            </td>
                            <td style=" border-width:0px">
                            <div class="tooltip">
                				<input type="password" name="password" class="pass"  id="L_user" placeholder="">
                            	<span class="tooltiptext">Enter password</span>
							</div>
                    		</td>
                        </tr>
                    </table>
                </div>
                <input type="submit" title="LOGIN" name="login" id="L_submit" value="LOGIN" >
            </form>
        </div>
        <div id="L_forgot">
        	<a href="" style="text-decoration:none;"><font id="L_forgot_fnt">Forgot your password?</font></a>
        </div>
    </div>
    <div align="center" id="L_footer">
    	<font style="text-align:center; font-family:calibri; font-size:10px; color:#7C7979">Copyright © 2023 ARCHINTEL. All Rights Reserved.</font>
    </div>

</body>
</html>