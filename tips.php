<!--

Tutoralzine Demo 
Original tutorial: Creating a Facebook-like Registration Form with jQuery
Tutorial URL: http://tutorialzine.com/2009/08/creating-a-facebook-like-registration-form-with-jquery/

You are free to use the following demo code for any purpose you see fit.

-->


<?php
	define('INCLUDE_CHECK',1);
	
?>


<head>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Form</title>

<link rel="stylesheet" type="text/css" href="demo.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>
<body>
<div class="style3">
	  <div align="center" class="style2">
		<pre class="style3 style1 style1">
	
		SELAMAT DATANG
		-- Komunitas Pemancingan --</pre>
			  <BR><BR>
	  </div>
	</div>
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span2">
    <p><img src="logo.png" width="250" height="150"
		  <BR>
		  <address>
		    <strong>Komunitas Pemancingan</strong><br>
					  Sukolilo <br>
					  Surabaya, 60111<br>
					  <abbr title="Phone">P:</abbr> (031) 5994251
		  </address>
					 
					<address>
					<strong>apa</strong><br>
					  <a href="mailto:#">apaaja@gmail.com</a>
					</address>

			<div>
					
		<form method="post" action="logout.php"><legend>LOG OUT</legend>

			<button class="btn btn-danger" type="submit">Log Out</button>
		</form>
			</div>
    </div>
<!--

span2

-->
  <div class="span10">
 <div>
    <ul class="nav nav-pills">
    <li><a href="index.php">Home</a></li> 
    <li><a href="#">Profile</a></li>
    <li class="active">
	<a href="tips.php">Event</a></li>
	<li><a href="#">Wisata Pancing</a></li>
    </ul>
</div>
</head>

<div class="form-title">Welcome to Event</div>
<div class="form-sub-title">Dapatkan tips n trick yang menarik seputar pemancingan - Enjoy it </div>
<br>
<div>
					
		<form method="post" action="tambah.php"><legend>Tips and Trick</legend>

			<button class="btn btn-primary" type="submit">Tambah tips n trick</button>
		</form>
			</div>
</br>
</div>
</div>
</div>
<div id="GdnFooterCopyRight" class="footer">
		<div class="wrap">
			<div class="box-left">
				<table width="700" border="0" cellpadding="2" cellspacing="0" title="Click to Verify - This site chose VeriSign SSL for secure e-commerce and confidential communications." >
					<tr>
						<td width="700" align="center" valign="top">
							
							<a class="verisign" href="javascript:vrsn_splash()" tabindex="-1"></a>
	                       	<br />
	                   		<a href="http://www.verisign.com/ssl-certificate/" rel="nofollow" target="_blank"  class="ssl-text">ABOUT SSL CERTIFICATES</a>
						</td>
					</tr>
				</table>
			</div>
			<div class='box-right'>
				<img src="http://www.blibli.com/wcsstore/Indraprastha/images/gdn/images/footer-logo.jpg" alt="Blibli.com" /><br />
				Copyright &copy; Blibli.com - Toko Online dengan sensasi belanja online store ala mall | All Rights Reserved<br />
				Untuk pengalaman browsing terbaik gunakan browser Firefox versi 3.0 atau versi yang lebih baru </div>
			</div>
			<div class='clearfix'></div>
	</div>
</body>
<script src="js/bootstrap.js">


