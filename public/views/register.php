
<div class="container">
	<div class="row">
		
		<?= Form::open_upload('', ['class'=>'form-horizontal']) ?>
			<div class="form-group">
				<h3>Register</h3>
			</div>
			
			<div class="form-group">
				<?= Form::label('name', 'Name') ?>
				<?= Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'eg. John Smith', 'required'=>'true', 'minlength'=>'2', 'maxlength'=>'20']) ?>
			</div>

			<div class="form-group">
				<?= Form::label('email', 'Email') ?>
				<?= Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'eg. john.smith@gmail.com', 'required'=>'true']) ?>
			</div>

			<div class="form-group">
				<?= Form::label('password', 'Password') ?>
				<?= Form::password('password', '', ['class' => 'form-control', 'placeholder' => 'eg. admin1234', 'required'=>'true', 'minlength'=>'2', 'maxlength'=>'10']) ?>
			</div>

			<div class="form-group">
				<?= Form::submit('Submit', ['class' => 'btn btn-primary']) ?>
			</div>

			<div class="form-group">
				<p>Already have an account? <a href="signin">Sign In</a></p>
			</div>

		<?= Form::close() ?>
	</div>
</div>

<script src="../app/vendor/jquery.js"></script>
<script src="../app/vendor/validate.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script>

	$('form').validate();

</script>

</body>
</html>
