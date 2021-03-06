<!DOCTYPE HTML>
<?php include_once('headv2.php'); ?>

<body class="contact">
    <div class="page-wrapper" class="group">

        <?php include_once('header.php'); ?>

        <div class="container">

	        <article class="contact-form">

	        	<ul class="contact-list">
	        		<li><h2>Barbara Hitz</h2></li>
	        		<li><h2>Seema Singh</h2></li>
	        	</ul>

				<div class="body">
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
								 	<input type="submit" value=" Send " class="submit-button" style="width:100px;height:35px;background-color:#FF6F1F;border:none">
								</td>
							</tr>
						</table>
					</form>
				</div>   <!-- contact-form-wrap close -->
			
			</article>

		</div>

        <?php //include_once('footer.php'); ?>

    </div><!-- page-wrapper close -->
</body>
</html>