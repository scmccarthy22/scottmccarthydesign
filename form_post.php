<form class="clearfix" action="<?php the_permalink(); ?>" id="contactForm" method="post">

		
<div class="postleft">
	<p class="postsender"><span>use this space </span>for sender information</p>		
	<ol class="forms">	
		<li>
			<label for="contactFirstname">First Name*</label>
			<input type="text" name="contactFirstname" id="contactFirstname" value="<?php if(isset($_POST['contactFirstname'])) echo $_POST['contactFirstname'];?>" class="requiredField contactFirstname" />
				<?php if($contactFirstnameError != '') { ?>
					<span class="error"><?=$contactFirstnameError;?></span> 
				<?php } ?>
		</li>
		
		<li>
			<label for="contactLastname">Last Name*</label>
			<input type="text" name="contactLastname" id="contactLastname" value="<?php if(isset($_POST['contactLastname'])) echo $_POST['contactLastname'];?>" class="requiredField name" />
				<?php if($contactLastnameError != '') { ?>
					<span class="error"><?=$contactLastnameError;?></span> 
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
		
		<li class="sendcopy">
			<input type="checkbox" name="sendCopy" id="sendCopy" value="true"<?php if(isset($_POST['sendCopy']) && $_POST['sendCopy'] == true) echo ' checked="checked"'; ?> />
			<label for="sendCopy">Send yourself a copy</label>
		</li>
		
	</ol>
</div><!--postleft-->
	

<div class="postright">
	<p class="postcorrespondence"><span>use this space </span>for correspondence</p>
	<ol class="forms">	
		<li class="textarea">
			<label for="aboutprojectText"></label>
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
		
		
	</ol><!--End FormContainer-->
</div><!--postright-->
	
		
</form>
