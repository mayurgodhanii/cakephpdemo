<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="<?php echo $this->webroot;?>admin/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $this->webroot;?>admin/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $this->webroot;?>admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $this->webroot;?>admin/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $this->webroot;?>admin/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="<?php echo $this->webroot;?>admin/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="<?php echo $this->webroot;?>admin/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $this->webroot;?>admin/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="<?php echo $this->webroot;?>admin/css/darkblue.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $this->webroot;?>admin/css/custom.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $this->webroot;?>admin/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<!--Add Category -->
<link rel="stylesheet" type="text/css" href="<?php echo $this->webroot;?>admin/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $this->webroot;?>admin/bootstrap-wysihtml5/bootstrap-wysihtml5.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $this->webroot;?>admin/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->webroot;?>admin/plugins/bootstrap-datepicker/css/datepicker.css"/>
<!--Add Category-->
<link rel="stylesheet" type="text/css" href="<?php echo $this->webroot;?>admin/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $this->webroot;?>css/lightbox.min.css
"/>

<link rel="stylesheet" type="text/css" href="<?php echo $this->webroot;?>admin/plugins/gritter/css/jquery.gritter.css"/>
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<body class="page-header-fixed page-quick-sidebar-over-content ">
	<div id="container">
		<div id="content">
			<?php echo $this->element('admin_topnavigation');?>
			<div class="page-container">
				<?php echo $this->element('admin_sidebar');?>
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->Flash->render(); ?>
				<?php echo $this->fetch('content'); ?>
			</div>
				<?php echo $this->element('footer')	?>
		</div>
		<div id="footer">
			
		</div>
	</div>
</body>
</html>
