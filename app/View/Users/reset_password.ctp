<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>Admin Demo | Forgot Password</title>
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
	<!-- <a href="index.html">
	<img src="<?php echo $this->webroot;?>admin/img/logo-big.png" alt=""/>
	</a> -->
</div>
<!-- END LOGO -->
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->

<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGIN -->

<div class="content">
	<!-- BEGIN LOGIN FORM -->
	<?php echo $this->Form->create('User', array('role' => 'form', 'url' => array('action' => 'new_password',$IsFindToken['UserToken']['user_id'],$IsFindToken['UserToken']['id']))); ?>

              
              <div class="form-group">

                  <label for="exampleInputEmail1">New Password</label>


                  <?php echo $this->Form->input('User.password', array('type'=>'password','label' => false, 'class' => "form-control",'escape'=>false)); ?>

              </div>

              <div class="form-group">

                  <label for="exampleInputEmail1">Re-Enter New Password</label>


                  <?php echo $this->Form->input('User.c_new_password', array('type'=>'password','label' => false, 'class' => "form-control",'escape'=>false)); ?>

              </div>

              <div class="">

                  <button type="submit" class="btn btn-info">Change Password</button>

              </div>

              <?php echo $this->Form->end(); ?>
	<!-- END LOGIN FORM -->
	<!-- BEGIN FORGOT PASSWORD FORM -->
		<!-- END FORGOT PASSWORD FORM -->
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright">
	 <!-- 2016 &copy;  - Admin Dashboard. -->
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