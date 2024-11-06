<body class="img js-fullheight" style="background-image: url(<?= base_url('public/img/bg-login.jpg') ?>);">
<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6 col-lg-4">
				<div class="login-wrap p-0">
	      			<h3 class="mb-4 text-center">- Login Page -</h3>
	      			<form action="<?= base_url('auth/login') ?>" method="POST" class="signin-form">
	      				<div class="form-group">
	      					<input type="text" class="form-control" placeholder="E-Mail" name="email" required>
	      				</div>
            			<div class="form-group">
              				<input id="password-field" type="password" class="form-control" placeholder="Password" name="password" required>
              				<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
            			</div>
            			<div class="form-group">
            				<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
            			</div>
          			</form>
	      		</div>
			</div>
		</div>
	</div>
</section>

  

