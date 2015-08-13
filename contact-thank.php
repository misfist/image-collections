<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Dominick Guida Artworks</title>

<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link rel="icon" type="image/png" href="favicon.ico">

<link href="style.css" rel="stylesheet" type="text/css">

<meta name="description" content="Dominick Guida is a studio and plein air painter based in New York City and upstate Schoharie County, New York. This website presents his oil paintings and works on paper."/>
<meta name="keywords" content="plein air painter,landscape painter, Schoharie County, PS 122 Painting Space, New York City, visual artist, contemporary art">



<script src="freecontactformvalidation.js"></script>
<script>
required.add('Full_Name','NOT_EMPTY','Full Name');
required.add('Email_Address','EMAIL','Email Address');
required.add('Your_Message','NOT_EMPTY','Your Message');
required.add('AntiSpam','NOT_EMPTY','Anti-Spam Question');
</script>
</head>

<body class="contact">
	<div class="page-wrapper" class="group">

<?php include_once('header.php'); ?>

        <div class="contact-main-wrap">

			<div class="contact-page-top-text">
				<p>Please call or email for sales and exhibition inquiries.</p>
			</div> <!-- contact-page-top-text close-->

			<div class="contact-page-left-text">
				<p>212.673.3836</p>
				<p>&#100;&#103;&#064;&#100;&#111;&#109;&#105;&#110;&#105;&#099;&#107;&#103;&#117;&#105;&#100;&#097;&#046;&#099;&#111;&#109;</p>
				<p class="contact-thank">Thank you for your message.</p>
			</div> <!-- contact-page-left-text close-->

			<div class="contact-form-wrap">
				<form name="freecontactform" method="post" action="freecontactformprocess.php" onsubmit="return validate.check(this)">
					<table width="400px" class="freecontactform" style="margin=0 auto;">
						<tr>
							 <td align="left" valign="top" class="spacer" style="height:35px;">
							 	&nbsp; 
							 </td>
						</tr>
						<tr>
							 <td align="left" valign="top">
							  	<label for="Full_Name" class="required">Your Name (required)</label>
							 </td>
						</tr>
						<tr>
							 <td valign="top">
							  	<input type="text" name="Full_Name" id="Full_Name" maxlength="80">
							 </td>
						</tr>
						<tr>
							 <td align="left" valign="top" class="spacer">
							 	&nbsp; 
							 </td>
						</tr>
							<tr>
							 <td align="left" valign="top">
							  	<label for="Email_Address" class="required">Your Email (required)</label>
							 </td>
						</tr>
						<tr>
							 <td valign="top">
							  	<input type="text" name="Email_Address" id="Email_Address" maxlength="100">
							 </td>
						</tr>
						<tr>
							 <td align="left" valign="top" class="spacer">&nbsp; 
							 	 
							 </td>
						</tr>
						<tr>
							 <td align="left" valign="top">
							  	<label for="Telephone_Number" class="not-required">Subject</label>
							 </td>
						</tr>
						<tr>
							 <td valign="top" >
							  	<input type="text" name="Telephone_Number" id="Telephone_Number" maxlength="100">
							 </td>
						</tr>
						<tr>
							 <td align="left" valign="top" class="spacer">&nbsp; 
							 	 
							 </td>
						</tr>
						<tr>
							 <td align="left" valign="top">
							  	<label for="Your_Message" class="not-required">Your Message</label>
							 </td>
						</tr>
						<tr>
							 <td valign="top">
							  	<textarea name="Your_Message" id="Your_Message" maxlength="2000"></textarea>
							 </td>
						</tr>
						<tr>
							 <td align="left" valign="top" class="spacer">&nbsp; 
							 	 
							 </td>
						</tr>
						<!--<tr>
							<td align="left" valign="center">
							 	<span class="antispamquestion"> 
							 		(required) Antispam 10 + 15 =
							 	</span>
							</td>
						</tr>
						<tr>
						<td valign="center">
							 	<input type="text" name="AntiSpam" id="AntiSpam" maxlength="120" style="width:90px;">
							</td>
						</tr>
						<tr>
							<td align="left" valign="top">&nbsp;
								
							</td>
						</tr>-->
						<tr>
							<td valign="top">
							 	<input type="submit" value=" Send " class="submit-button" style="width:100px;height:35px;background-color:orange;border:none">
							</td>
						</tr>
					</table>
				</form>
			</div>   <!-- contact-form-wrap close -->
		</div> <!-- contact-main-wrap close-->

<?php include_once('footer.php'); ?>

    </div><!-- page-wrapper close -->
</body>
</html>