<!-- BEGIN LOGIN -->
<div class="content">
	<?= $this->session->flashdata('msg') ?>
	<!-- BEGIN LOGIN FORM -->
	<?= form_open('login') ?>
		<h3 class="form-title">Login to your account</h3>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Username</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
			</div>
		</div>
		<div class="form-actions">
			<button type="submit" name="login" value="Login" class="btn green-haze pull-right">
			Login <i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>
	<?= form_close() ?>
	<!-- END LOGIN FORM -->
	
</div>
<!-- END LOGIN -->
