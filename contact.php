<?
	$page = "contact";
	include('includes/header.php');
?>
		
		<div id="content" class="right-sidebar custom">
			<div id="title" class="type-1">
				<div class="extras">
					<p class="highlight"><h3 class="red" style="margin:0px; padding:0px;"><a href="mailto:info@kbengsys.com">EMAIL US</a></h3></p>
				</div>
				<h2>STAY IN TOUCH.</h2>	
			</div>
			
			<div class="main">
				<div class="columns">
					<div class="two-third">
						<h1 class="red">CALL US</h1>
						<p>We value integrity, quality and timeliness. In working with us you gain more than a vendor but a friend in business.</p>
						<p>To obtain additional information about our services or to schedule a project consultation please fill out the form. If you prefer to speak with someone immediately please call us at (305) 232-1848</p>
						<p>ph. (305) 234-8139</p>
					</div>
					<div class="third">
						<h1 class="red">OUR LOCATIONS</h1>
						<p>North America<br />
						12250 SW 132ND Ct Ste 109<br />
						Miami, FL 33186<br />
						USA</p>
						
						<p>e-mail: <a href="mailto:custommadesolution@att.net">custommadesolution@att.net</a></p>
					</div>
				</div>
			</div>
			
			<div class="sidebar">
				<div class="widget">
					<form class="contact" action="process.php" method="post">
						<fieldset>
							<ul>
								<li>
									<input type="text" name="author" value="Name..." id="author" />
								</li>
								<li>
									<input type="text" name="email" value="Email..." id="email" />
								</li>
								<li>
									<textarea rows="5" cols="20" name="message">Message...</textarea>
								</li>
								<li class="button-holder">
								<span class="button alignleft default-2"><span><input  type="submit" name="contact" value="Send" /></span></span><span class="alt-contact">Or <a href="#"> call us</a> now</span>
								</li>
							</ul>
						</fieldset>
					</form>
				</div>
			</div>
			
			<div class="main wide">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3596.5266241131385!2d-80.40859100000002!3d25.653831999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9c1753175bad5%3A0x95f63bb3c69e232b!2sCustom+Made+Solutions+Inc!5e0!3m2!1sen!2sus!4v1415847907929" width="980" height="290" frameborder="0" style="border:0"></iframe>				
			</div>
			
		</div>
		<!-- #content - end -->

<?
	include('includes/footer.php');
?>