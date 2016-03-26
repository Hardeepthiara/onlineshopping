<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Change password</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<div id="mainblock">
  <div id="innerblock">
    <div id="toppanel">
      <div class="tp_heading">EBAY FASHION STORE</div>
      <div class="tp_bg"><img src="images/tp_logo.jpg" width="329" height="71" alt="" class="tp_logo" /></a>
        <div class="tp_txt1">Collect your favorite</div>
        <div class="tp_txt2">fashion store</div>
      </div>
      <div class="fp_menutile">         
	  <a href="hom.php" class="menu1">Home Page</a> <img src="images/tp_divider.gif" width="2" height="59" alt="" class="tp_divider" /> <a href="vewproduct.php?a=men" class="menu2">Men's <br>Fashion</a> <img src="images/tp_divider.gif" width="2" height="59" alt="" class="tp_divider" /> <a href="vewproduct.php?a=women" class="menu2">Women's<br>Fashion</a> <img src="images/tp_divider.gif" width="2" height="59" alt="" class="tp_divider" /> <a href="kids.php?a=kids" class="menu2">Kids<br>products</a> <img src="images/tp_divider.gif" width="2" height="59" alt="" class="tp_divider" /> <a href="bags.php?a=bags" class="menu2">Bags</a> <img src="images/tp_divider.gif" width="2" height="59" alt="" class="tp_divider" /> <a href="contact.php" class="menu2">Contact <br>us</a> <img src="images/tp_divider.gif" width="2" height="59" alt="" class="tp_divider" /> <a href="signup.php" class="menu2">Register Now</a> <img src="images/tp_divider.gif" width="2" height="59" alt="" class="tp_divider" /> <a href="login.php" class="menu2">LogIn</a> </div>
      <div class="fp_shoppingbg"> <img src="images/tp_image.jpg" width="13" height="11" alt="" class="tp_image1" />
        <div class="tp_txt3">Shopping Cart &nbsp;&nbsp;&nbsp;0 items</div>
      </div>
    </div>
    <div class="contentblock">
      <div class="contentpanel">
        <div class="cnt_headingblock"> <img src="images/cnt_btn1.gif" width="13" height="13" alt="" class="cnt_btn1" /> <img src="images/cnt_heading1.jpg" width="151" height="30" alt="" class="cnt_heading" /> </div>
        <div style="float:left; padding-bottom:55px;"> <img src="images/suit.jpg" width="161" height="120" alt="" class="cnt_image1" /> <img src="images/sh.jpg" width="160" height="119" alt="" class="cnt_image1" /> <img src="images/wes.jpg" width="162" height="119" alt="" class="cnt_image1" /> </div><br><br><br><br><br><br><br><br><br>
        
		
		
		
		
        <div style="float:left; width:670px;">
		<div class="h"><h3>Change password</h3>
		<form method="post" action="">
		Old password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="ol"><br><br>
		New Password:<input type="password" name="np"><br><br>
	    Confirm Password:<input type="password" name="cp"><br><br>
		<input type="submit" name="submit" value="Change Password"></form>
		</div>
        </div>
		
		
		
		
		
		<?php
		if(isset($_REQUEST['submit']))
		{
			include_once("datacon.php");
			
			$old=$_POST['ol'];
			$new=$_POST['np'];
			$con=$_POST['cp'];
			session_start();
			$o=$_SESSION['el'];
			echo "kjkjn".$o;
			/*
			$ab=mysqli_query($con,"select * from product where email='$o' and password='$old'");
			if(mysqli_num_rows($ab)>0)
			{
				
				echo"<script>alert('success')</script>";
				
				if($old==$o)
				{
				$m=mysqli_query($con,"update product set email='$o' where password='$old'");
				   if($m){
				   echo"<p style='color:white'>updated</p>";
				   }
				   else{
				   echo"<p style='color:white'>Not updated</p>";
				   }
				}
				else
				{
				echo"<p style='color:white'>not show</p>";
				}
			}
			else{
				echo"<br>";
				echo"not connected";
				//echo"<script>alert('success')</script>";
			}*/
		}
		
		
		?>
		
		
		
		
        <div style="float:left; width:670px;"> 
          <div class="cnt_txt1"> </div>
        </div>
        <div style="float:left; width:670px;">
          <div class="cnt_txt1"></div>
        </div>
        
        <div class="cnt_headingblock"> <img src="images/cnt_btn1.gif" width="13" height="13" alt="" class="cnt_btn1" /> <img src="images/cnt_heading4.jpg" width="175" height="30" alt="" class="cnt_heading" /> </div>
        <div style="float:left; width:650px;"> <img src="images/cnt_paypal.gif" width="219" height="84" alt="" class="cnt_paypal" />
          <div class="cnt_txt2"> <strong>Perferrred/Accepted</strong><br />
            <br />
            Upto $250 in buyer<br />
            protection<br />
            <br />
            Not Available </div>
        </div>
        <div class="cnt_headingblock"> <img src="images/cnt_btn1.gif" width="13" height="13" alt="" class="cnt_btn1" /> <img src="images/cnt_heading3.gif" width="210" height="22" alt="" class="cnt_heading" /> </div>
        <div class="cnt_innerblock1">
          <div class="cnt_inner1">
            <p style="float:left; width:180px; margin:10px 0 0 10px;"> <img src="images/cnt_btn3.gif" width="6" height="7" alt="" class="cntr_btn" /> <span class="cnt_listtxt">Lorem ipsum</span> </p>
            <p style="float:left; width:180px; margin:10px 0 0 10px;"> <img src="images/cnt_btn3.gif" width="6" height="7" alt="" class="cntr_btn" /> <span class="cnt_listtxt">Sodales lectus</span> </p>
            <p style="float:left; width:180px; margin:10px 0 0 10px;"> <img src="images/cnt_btn3.gif" width="6" height="7" alt="" class="cntr_btn" /> <span class="cnt_listtxt">Donec a turpis </span> </p>
            <p style="float:left; width:180px; margin:10px 0 0px 10px; padding-bottom:15px;"> <img src="images/cnt_btn3.gif" width="6" height="7" alt="" class="cntr_btn" /> <span class="cnt_listtxt">Lobortis mauris</span> </p>
          </div>
          <div class="cnt_inner1">
            <p style="float:left; width:180px; margin:10px 0 0 0px;"> <img src="images/cnt_btn3.gif" width="6" height="7" alt="" class="cntr_btn" /> <span class="cnt_listtxt">Pretium ipsum.</span> </p>
            <p style="float:left; width:180px; margin:10px 0 0 0px;"> <img src="images/cnt_btn3.gif" width="6" height="7" alt="" class="cntr_btn" /> <span class="cnt_listtxt">Aenean eget</span> </p>
            <p style="float:left; width:180px; margin:10px 0 0 0px;"> <img src="images/cnt_btn3.gif" width="6" height="7" alt="" class="cntr_btn" /> <span class="cnt_listtxt">Nullam egestas</span> </p>
            <p style="float:left; width:180px; margin:10px 0 0 0px;"> <img src="images/cnt_btn3.gif" width="6" height="7" alt="" class="cntr_btn" /> <span class="cnt_listtxt">Sollicitudin luctus.</span> </p>
          </div>
          <div class="cnt_inner1">
            <p style="float:left; width:180px; margin:10px 0 0 0px;"> <img src="images/cnt_btn3.gif" width="6" height="7" alt="" class="cntr_btn" /> <span class="cnt_listtxt">Pretium ipsum.</span> </p>
            <p style="float:left; width:180px; margin:10px 0 0 0px;"> <img src="images/cnt_btn3.gif" width="6" height="7" alt="" class="cntr_btn" /> <span class="cnt_listtxt">Aenean eget</span> </p>
            <p style="float:left; width:180px; margin:10px 0 0 0px;"> <img src="images/cnt_btn3.gif" width="6" height="7" alt="" class="cntr_btn" /> <span class="cnt_listtxt">Nullam egestas</span> </p>
            <p style="float:left; width:180px; margin:10px 0 0 0px;"> <img src="images/cnt_btn3.gif" width="6" height="7" alt="" class="cntr_btn" /> <span class="cnt_listtxt">Sollicitudin luctus.</span> </p>
          </div>
        </div>
      </div>
      <div class="rightpanel">
        <div class="rp_headingblock"> <img src="images/rp_btn1.gif" width="13" height="13" alt="" class="cnt_btn1" /> <img src="images/rp_heading1.gif" width="103" height="30" alt="" class="cnt_heading" /> </div>
        
		<div class="rp_block1">
          <div class="rp_listblock"> 
            <h3 class="h">Women's  Fashion</h3>
          </div>
          <div class="rp_listblock"> <img src="images/rp_btn2.gif" width="8" height="8" alt="" class="rp_btn3" />
            <p class="rp_listtxt">Salwar suits</p>
          </div>
          <div class="rp_listblock"> <img src="images/rp_btn2.gif" width="8" height="8" alt="" class="rp_btn3" />
            <p class="rp_listtxt">Top wear</p>
          </div>
          <div class="rp_listblock"> <img src="images/rp_btn2.gif" width="8" height="8" alt="" class="rp_btn3" />
            <p class="rp_listtxt">Bottom wear</p>
          </div>
          <div class="rp_listblock"> <img src="images/rp_btn2.gif" width="8" height="8" alt="" class="rp_btn3" />
            <p class="rp_listtxt">Saree Combo</p>
          </div>
          <div class="rp_listblock"> 
            <h3 class="h">Men's Fashion</h3>
          </div>
          <div class="rp_listblock"> <img src="images/rp_btn2.gif" width="8" height="8" alt="" class="rp_btn3" />
            <p class="rp_listtxt">Shirts</p>
          </div>
          <div class="rp_listblock"> <img src="images/rp_btn2.gif" width="8" height="8" alt="" class="rp_btn3" />
            <p class="rp_listtxt">Jeans</p>
          </div>
          <div class="rp_listblock"> <img src="images/rp_btn2.gif" width="8" height="8" alt="" class="rp_btn3" />
            <p class="rp_listtxt">T-shirts</p><br><br><br><br>
          </div>
          
        </div>
		
		
		
		
        <div class="rp_headingblock"> <img src="images/rp_btn1.gif" width="13" height="13" alt="" class="cnt_btn1" /> <img src="images/rp_heading2.jpg" width="160" height="28" alt="" class="cnt_heading" /> </div>
        <div class="rp_block2">
          <div style="float:left; width:130px; border-right:1px solid #1E1E1E;">
            <div class="rp_txt1">Items must be returned with in</div>
            <div class="rp_txt1">Refund will be given as : </div>
          </div>
          <div style="float:left; width:100px;">
            <div class="rp_txt1">7 Days</div>
            <div class="rp_txt1" style="clear:left; margin-top:25px;">Credit</div>
          </div>
        </div>
        <div class="rp_headingblock" style="margin-top:15px;"> <img src="images/rp_btn1.gif" width="13" height="13" alt="" class="cnt_btn1" /> <img src="images/rp_heading3.jpg" width="88" height="30" alt="" class="cnt_heading" /> </div>
        <div class="rp_block2">
          <div class="rp_txt1"><strong>If you have any questions</strong></div>
          <div class="rp_txt2">contact us.</div>
          <div class="rp_txt1" style="padding-bottom:10px;"> 25/4568, johnson Street,<br />
            Gerogenaidu Road,<br />
            New York-456 789<br />
            Ph : 1234 4575<br />
            E-mail : <a href="#" style="color:#B7B0B0;">info@companyname.com</a><br />
          </div>
        </div>
        <img src="images/rp_image1.jpg" width="256" height="71" alt="" class="rp_image1" /> </div>
    </div>
    <div class="fp_bg">
     
</div>
<div align=center>This template  downloaded form <a href='#'>free website templates</a></div></body>
</html>
