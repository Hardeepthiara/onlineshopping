<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Fashion Store</title>
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
	  <a href="hom.php" class="menu1">Home Page</a> <img src="images/tp_divider.gif" width="2" height="59" alt="" class="tp_divider" /> <a href="vewproduct.php?a=men" class="menu2">Men's<br> Fashion</a><img src="images/tp_divider.gif" width="2" height="59" alt="" class="tp_divider" /><a href="womenf.php?a=women" class="menu2">Women's <br>fashion</a> <img src="images/tp_divider.gif" width="2" height="59" alt="" class="tp_divider" /> <a href="kids.php?a=kids" class="menu2">Kids<br>product</a> <img src="images/tp_divider.gif" width="2" height="59" alt="" class="tp_divider" /> <a href="bags.php?a=bags" class="menu2">bags</a> <img src="images/tp_divider.gif" width="2" height="59" alt="" class="tp_divider" /> <a href="contact.php" class="menu2">contact<br>us</a> <img src="images/tp_divider.gif" width="2" height="59" alt="" class="tp_divider" /> <a href="signup.php" class="menu2">Register Now</a> <img src="images/tp_divider.gif" width="2" height="59" alt="" class="tp_divider" /> <a href="login.php" class="menu2">LogIn</a> </div>
      <div class="fp_shoppingbg"> <img src="images/tp_image.jpg" width="13" height="11" alt="" class="tp_image1" />
        <div class="tp_txt3">Shopping Cart &nbsp;&nbsp;&nbsp;0 items</div>
      </div>
    </div>
    <div class="contentblock">
      <div class="contentpanel">
        <div class="cnt_headingblock"> 
		<img src="images/cnt_btn1.gif" width="13" height="13" alt="" class="cnt_btn1" /> 
		Products
		 </div>
        
		<div style="float:left; padding-bottom:55px;"> 
		<?php
		include_once("datacon.php");
			
			$pt=$_GET['a'];
			$ab=mysqli_query($con,"select * from product where type='$pt'");
			while($g=mysqli_fetch_array($ab))
			{
			
			echo "<img src=$g[image] width='161' height='120' alt='' class='cnt_image1' />";
			
			}
		
		?>
		
		
		
		</div>
		
        <div class="cnt_headingblock"> <img src="images/cnt_btn1.gif" width="13" height="13" alt="" class="cnt_btn1" /> <img src="images/cnt_heading2.jpg" width="260" height="30" alt="" class="cnt_heading" /> </div>
        <div style="float:left; width:670px;"> <img src="images/cnt_btn2.gif" width="5" height="5" alt="" class="cnt_btn2" />
          <div class="cnt_txt1">Sed et purus vitae dolor dictum condimentum. Vivamus a sapien vitae purus iaculis sodales. Maecenas sodales, urna id venenatis viverra.</div>
        </div>
        <div style="float:left; width:670px;"> <img src="images/cnt_btn2.gif" width="5" height="5" alt="" class="cnt_btn2" />
          <div class="cnt_txt1">Cras interdum Aenean eget dolorPraesent tincidunt tempus leoDuis nibh ante egestas in luctus facilisis, congue et, risus. </div>
        </div>
        <div style="float:left; width:670px;"> <img src="images/cnt_btn2.gif" width="5" height="5" alt="" class="cnt_btn2" />
          <div class="cnt_txt1">Aenean ut eros ac sapien mattis vestibulum. Nulla facilisi. Vestibulum semNullam dolor libero elementum sit ameteuismod vitae.</div>
        </div>
        <a href="http://all-free-download.com/free-website-templates/"><img src="images/cnt_readmore.gif" width="88" height="26" alt="" class="cnt_readmore" /></a>
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
            E-mail : <a href="http://all-free-download.com/free-website-templates/" style="color:#B7B0B0;">info@companyname.com</a><br />
          </div>
        </div>
        <img src="images/rp_image1.jpg" width="256" height="71" alt="" class="rp_image1" /> </div>
    </div>
    <div class="fp_bg">
      <div id="footerblock"> <a href="" class="fp_txt">Home Page</a>
        <p class="fp_divi">|</p>
        <a href="#" class="fp_txt">Payments</a>
        <p class="fp_divi">|</p>
        <a href="#"  class="fp_txt">Shipping</a>
        <p class="fp_divi">|</p>
        <a href="#"  class="fp_txt">Terms</a>
        <p class="fp_divi">|</p>
        <a href="#"  class="fp_txt">Contact Us</a>
        <p class="fp_divi">|</p>
        <a href="#"  class="fp_txt">Our Store</a>
        <p class="fp_divi">|</p>
        <a href="#"  class="fp_txt">services</a>
        <p class="fp_divi">|</p>
        <a href="#"  class="fp_txt">collection</a>
        <p class="fp_divi">|</p>
        <a href="#"  class="fp_txt">contact Us</a>
        <p class="fp_txt1"><a href="#" style="color:#FFFFFF;">E-bay template</a> from buytemplates.net 2008. All Rights Reserved.</p>
      </div>
    </div>
  </div>
</div>
<div align=center></div></body>
</html>
 