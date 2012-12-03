<?php $page = 'contact' ?>
<?php include("header.php"); ?>
<div class="masthead"></div>
<div class="subContent">
<div class="rightColumn">
  <h2>Take your performance to the next level</h2>
  <form id="contactForm" action="/" method="post">	
			<fieldset><legend>Contact Form</legend>
				<p>
					<label for="contact_name">Your Name</label>
					<input type="text" name="contact_name" id="contact_name" value="" size="30"  />
				</p>
				<p>
					<label for="contact_email">email address</label>
					<input type="text" name="contact_email" id="contact_email" value="" size="30"  />
				</p>
                <p>
					<label for="contact_subject">Subject</label>
					<input type="text" name="subject" id="contact_subject" value="" size="30"  />
				</p>	
				<p>
					<label for="contact_message">Your Message</label>
					<textarea id="contact_message" name="contact_message"></textarea>
				</p>																	
				<p>
					<button type="submit" title="Send your message" value="submit">SUBMIT</button>
				</p>
			</fieldset>
            
		</form>
</div>
<div class="leftColumn">
    <h2>Stay in touch!</h2>
    <p>We welcome the opportunity to answer any questions that you have, please contact us here:<br />
    </p>
    <p>The Dorsey Group<br />
      Office: 954.384.8774<br />
      Cell: 954.629.7893<br />
    Email: <a href="mailto:info@TheDorseyGroup.org">info@TheDorseyGroup.org</a></p>
</div>
</div>
<?php include("footer.php"); ?>
</html>