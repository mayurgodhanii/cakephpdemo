<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>Admin Login</title>
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
<style>
a {color:red;}
 
</style>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN LOGO -->
<div class="logo">
	<!-- <a href="index.html">
	<img src="<?php echo $this->webroot;?>admin/img/logo-big.jpg
	" alt=""/>
	</a> -->
</div>
<!-- END LOGO -->
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGIN -->
<div class="content">
	<!-- BEGIN LOGIN FORM -->
	<?php echo $this->Form->create('User', array('action' => 'login','type' => 'file', 'enctype' => 'multipart/form-data','class' => 'login-form')); ?>
	<!-- <form class="login-form" action="" method="post"> -->
		<h3 class="form-title">Login to your account</h3>
		<div class="alert alert-danger display-hide">
			<button class="close" data-close="alert"></button>
			<span>
			Enter any username and password. </span>
		</div>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Username</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="data[User][username]"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="data[User][password]" id="password"/>
				<!-- <a type="button" id="showHidePassword" data-value="hide" class="" style=""><i class="fa fa-eye"></i></a> -->
			</div>
		</div>
		<div class="form-actions">
			<button type="submit" class="btn blue pull-right">
			Login <i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>
		<div class="forget-password">
		<?php echo $this->Html->link('Signup?',array('action' => 'register'))?>
		</br>	
		 <?php echo $this->Html->link('Forgot your password ?',array('action' => 'forgot_password'))?>
		</div>
	<?php echo $this->Form->end();?>
	<!-- END LOGIN FORM -->
	<!-- BEGIN FORGOT PASSWORD FORM -->
		<!-- END FORGOT PASSWORD FORM -->
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright">
	  Admin Dashboard.
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
<script>
$(document).on('click', '#showHidePassword', function (event) {
    var dataValue=$("#showHidePassword").attr('data-value');
    if(dataValue=="hide"){
        $("#showHidePassword").html('<i class="fa fa-eye-slash"></i>');
        $("#showHidePassword").attr('data-value','show');
        $("#password").attr('type','text');
    }else{
        $("#showHidePassword").html('<i class="fa fa-eye"></i>');
        $("#showHidePassword").attr('data-value','hide');
        $("#password").attr('type','password');
    }
});
</script>

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>