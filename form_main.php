<form action="<?php the_permalink(); ?>" id="contactForm" method="post">

		
	
	<ol class="forms formcontainer">	
		<li>
			<label for="contactName">Name*</label>
			<input type="text" name="contactName" id="contactName" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" class="requiredField name" />
				<?php if($nameError != '') { ?>
					<span class="error"><?=$nameError;?></span> 
				<?php } ?>
		</li>
				
		<li>
			<label for="email">E-mail*</label>
			<input type="text" name="email" id="email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" class="requiredField email" />
				<?php if($emailError != '') { ?>
					<span class="error"><?=$emailError;?></span>
				<?php } ?>
		</li>
		
		<li>
			<label for="company">Company</label>
			<input type="text" name="company" id="company" value="<?php if(isset($_POST['company']))  echo $_POST['company'];?>" class="company" />
		</li>
		

		<li class="textarea">
			<label for="aboutprojectText">Tell me about your project*</label>
			<textarea name="aboutproject" id="aboutprojectText" class="requiredField"><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['aboutproject']); } else { echo $_POST['aboutproject']; } } ?></textarea>
				<?php if($commentError != '') { ?>
				<span class="error"><?=$commentError;?></span> 
			<?php } ?>
		</li>
		
		<li class="textarea">
			<label for="timelineprojectText">What is the timeline for your project?*</label>
			<textarea name="comments" id="commentsText" class="requiredField"><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?></textarea>
				<?php if($commentError != '') { ?>
				<span class="error"><?=$commentError;?></span> 
			<?php } ?>
		</li>
		
		<li class="screenReader">
			<label for="checking" class="screenReader">If you want to submit this form, do not enter anything in this field</label>
			<input type="text" name="checking" id="checking" class="screenReader" value="<?php if(isset($_POST['checking']))  echo $_POST['checking'];?>" />
		</li>
		
		
		<li class="submit">
			<input type="hidden" name="submitted" id="submitted" value="true" /><button type="submit">Send Message</button>
		</li>
		
		<li class="sendcopy">
			<input type="checkbox" name="sendCopy" id="sendCopy" value="true"<?php if(isset($_POST['sendCopy']) && $_POST['sendCopy'] == true) echo ' checked="checked"'; ?> />
			<label for="sendCopy">Send a copy of this email to yourself</label>
		</li>
		
	</ol><!--End FormContainer-->
	
	
		
</form>
