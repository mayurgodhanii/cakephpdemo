<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>Blezzclick | Admin Login</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="<?php echo $this->webroot;?>admin/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $this->webroot;?>admin/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $this->webroot;?>admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $this->webroot;?>admin/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="<?php echo $this->webroot;?>admin/plugins/select2/select2.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $this->webroot;?>admin/css/login-soft.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="<?php echo $this->webroot;?>admin/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="<?php echo $this->webroot;?>admin/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $this->webroot;?>admin/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="<?php echo $this->webroot;?>admin/css/darkblue.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $this->webroot;?>admin/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN LOGO -->
<div class="logo">
	<a href="index.html">
	<img src="<?php echo $this->webroot;?>admin/img/logo-big.png" alt=""/>
	</a>
</div>
<!-- END LOGO -->
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGIN -->
<div class="content">
	<!-- BEGIN LOGIN FORM -->
	<?php echo $this->Form->create('User', array('action' => 'adduser','type' => 'file', 'enctype' => 'multipart/form-data','class' => 'login-form')); ?>
		<h3>Sign Up</h3>
		<p>
			 Enter your personal details below:
		</p>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Name</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Name" name="data[User][name]"/>
			</div>
		</div>

		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Email</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="data[User][username]"/>
			</div>
		</div>

		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Mobile</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Mobile" name="data[UserDetail][mobileno]"/>
			</div>
		</div>

		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="data[User][password]"/>
			</div>
		</div>

		
		
		
		
		<
		<div class="form-actions">
			<button id="register-back-btn" type="button" class="btn">
			<i class="m-icon-swapleft"></i> Back </button>
			<button type="submit" id="register-submit-btn" class="btn blue pull-right">
			Sign Up <i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>
	</form>
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright">
	 2016 &copy; BlezzClick - Admin Dashboard.
</div>
<script src="<?php echo $this->webroot;?>admin/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo $this->webroot;?>admin/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="<?php echo $this->webroot;?>admin/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $this->webroot;?>admin/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo $this->webroot;?>admin/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?php echo $this->webroot;?>admin/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo $this->webroot;?>admin/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?php echo $this->webroot;?>admin/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo $this->webroot;?>admin/plugins/select2/select2.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo $this->webroot;?>admin/js/metronic.js" type="text/javascript"></script>
<script src="<?php echo $this->webroot;?>admin/js/layout.js" type="text/javascript"></script>
<script src="<?php echo $this->webroot;?>admin/js/demo.js" type="text/javascript"></script>
<script src="<?php echo $this->webroot;?>admin/js/login-soft.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {     
  Metronic.init(); // init metronic core components
Layout.init(); // init current layout
  Login.init();
  Demo.init();
       // init background slide images
       $.backstretch([
        "<?php echo $this->webroot;?>admin/img/bg/1.jpg",
        "<?php echo $this->webroot;?>admin/img/bg/2.jpg",
        "<?php echo $this->webroot;?>admin/img/bg/3.jpg",
        "<?php echo $this->webroot;?>admin/img/bg/4.jpg"
        ], {
          fade: 1000,
          duration: 8000
    }
    );
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>