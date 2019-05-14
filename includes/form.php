<?php 
if (($_POST && $suspect) || ($_POST && isset($errors['mailfail']))) {  ?>
	<p class="warning">Sorry, your form could not be submitted.
	Please try again later.</p>
<?php } elseif ($missing || $errors) { ?>
	<p class="warning">Please fix the item(s) indicated.</p>
<?php } ?>
<form method="post" action="">
	<p>
		<label for="email">
			<?php if ($missing && in_array('email', $missing)) { ?>
				<span class="warning">Please enter your email address</span>
			<?php } elseif (isset($errors['email'])) { ?>
				<span class="warning">Invalid email address</span>
			<?php } ?>
		</label>
		<input name="email" id="email" type="text" class="feedback-input" placeholder="Email &#42;" required=""
		<?php if ($missing || $errors) {
			echo 'value="' . htmlentities($email) . '"';
		} ?>>
	</p>
	<p>
		<input name="send" type="submit" value="CONTACT">
	</p>
</form>
