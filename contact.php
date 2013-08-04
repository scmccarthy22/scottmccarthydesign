<?php 
//If the form is submitted
if(isset($_POST['submitted'])) {

	//Check to see if the honeypot captcha field was filled in
	if(trim($_POST['checking']) !== '') {
		$captchaError = true;
	} else {
	
		//Check to make sure that the first name field is not empty
		if(trim($_POST['contactFirstname']) === '') {
			$contactFirstnameError = 'You forgot to enter your name.';
			$hasError = true;
		} else {
			$contactFirstname = trim($_POST['contactFirstname']);
		}
		
		//Check to make sure that the last name field is not empty
		if(trim($_POST['contactLastname']) === '') {
			$contactLastnameError = 'You forgot to enter your name.';
			$hasError = true;
		} else {
			$contactLastname = trim($_POST['contactLastname']);
		}
		
		//Check to make sure sure that a valid email address is submitted
		if(trim($_POST['email']) === '')  {
			$emailError = 'You forgot to enter your email address.';
			$hasError = true;
		} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
			$emailError = 'You entered an invalid email address.';
			$hasError = true;
		} else {
			$email = trim($_POST['email']);
		}
			
		//Check to make sure comments were entered	
		if(trim($_POST['comments']) === '') {
			$commentError = 'You forgot to enter your comments.';
			$hasError = true;
		} else {
			if(function_exists('stripslashes')) {
				$comments = stripslashes(trim($_POST['comments']));
			} else {
				$comments = trim($_POST['comments']);
			}
		}
			
		//If there is no error, send the email
		if(!isset($hasError)) {

			$emailTo = 'info@scottmccarthydesign.com';
			$subject = 'Scott McCarthy Design request from '.$contactFirstname;
			$sendCopy = trim($_POST['sendCopy']);
			$body = "Name: $contactFirstname \n\nEmail: $email \n\nComments: $comments";
			$headers = 'From: Scott McCarthy Design <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;
			
			mail($emailTo, $subject, $body, $headers);

			if($sendCopy == true) {
				$subject = 'You emailed scottmccarthydesign.com';
				$headers = 'From: Scott McCarthy Design <info@scottmccarthydesign.com>';
				mail($email, $subject, $body, $headers);
			}

			$emailSent = true;

		}
	}
} ?>


<?php if(isset($emailSent) && $emailSent == true) {  ?>

	<div class="thanks">
		<h3>Thanks, <?=$contactFirstname;?></h3>
		<p>Scott will be in touch soon.</p>
	</div>

<?php } else { ?>

	<?php if (have_posts()) : ?>
	
	<?php while (have_posts()) : the_post(); ?>
		
		<?php if(isset($hasError) || isset($captchaError)) { ?>
			<p class="error">There was an error submitting the form.</p>
		<?php } ?>
		
		
		
<!-- Include contactform -->
<?php include (TEMPLATEPATH . '/form_post.php'); ?>

		


	
		<?php endwhile; ?>
	<?php endif; ?>
<?php } ?>