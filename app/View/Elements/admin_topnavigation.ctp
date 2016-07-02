<div class="page-header -i navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="index.html">
			<img src="<?php echo $this->webroot;?>admin/img/logo.png" alt="logo" class="logo-default"/>
			</a>
			<div class="menu-toggler sidebar-toggler hide">
				<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<div class="top-menu">
			<ul class="nav navbar-nav pull-right">
				<!-- BEGIN NOTIFICATION DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				
				<!-- END NOTIFICATION DROPDOWN -->
				<!-- BEGIN INBOX DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				
				<!-- END INBOX DROPDOWN -->
				<!-- BEGIN TODO DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
			
				<!-- END TODO DROPDOWN -->
				<!-- BEGIN USER LOGIN DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				<li class="dropdown dropdown-user">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" class="img-circle" src="<?php echo $this->webroot;?>upload/user_image/<?php echo $data['picture']?>"/>
					<span class="username username-hide-on-mobile">
					<?php echo $data['name']?></span>
					<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-menu-default">
						<li>
							<a href="<?php echo $this->Html->url(array('controller' => 'Users', 'action' => 'myprofile', 'plugin' => false)) ?>">
							<i class="icon-user"></i> My Profile </a>
						</li>
						<li>
							<a href="<?php echo $this->Html->url(array('controller' => 'users','action' =>'admin_logout','admin' => 'true'))?>">
							<i class="icon-key"></i> Log Out </a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>

<script src="<?php echo $this->webroot;?>admin/plugins/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
jQuery.noConflict();
</script>
<script src="<?php echo $this->webroot;?>js/lightbox-plus-jquery.min.js"></script>
<script src="<?php echo $this->webroot;?>admin/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php echo $this->webroot;?>admin/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo $this->webroot;?>admin/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $this->webroot;?>admin/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo $this->webroot;?>admin/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo $this->webroot;?>admin/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo $this->webroot;?>admin/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo $this->webroot;?>admin/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?php echo $this->webroot;?>admin/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo $this->webroot;?>admin/plugins/flot/jquery.flot.js" type="text/javascript"></script>
<script src="<?php echo $this->webroot;?>admin/plugins/flot/jquery.flot.resize.js" type="text/javascript"></script>
<script src="<?php echo $this->webroot;?>admin/plugins/flot/jquery.flot.categories.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo $this->webroot;?>admin/js/metronic.js" type="text/javascript"></script>
<script src="<?php echo $this->webroot;?>admin/js/layout.js" type="text/javascript"></script>
<script src="<?php echo $this->webroot;?>admin/js/quick-sidebar.js" type="text/javascript"></script>
<script src="<?php echo $this->webroot;?>admin/js/demo.js" type="text/javascript"></script>
<script src="<?php echo $this->webroot;?>admin/js/ecommerce-index.js"></script>



<!--ADD CATEGORY-->
<script type="text/javascript" src="<?php echo $this->webroot;?>admin/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot;?>admin/plugins/jquery-validation/js/additional-methods.min.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot;?>admin/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot;?>admin/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot;?>admin/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot;?>admin/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot;?>admin/plugins/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot;?>admin/plugins/bootstrap-markdown/js/bootstrap-markdown.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot;?>admin/plugins/bootstrap-markdown/lib/markdown.js"></script>
<script src="<?php echo $this->webroot;?>admin/js/form-validation.js"></script>
<!--ADD CATEGORY-->

<!--ADD User-->
<script type="text/javascript" src="<?php echo $this->webroot;?>admin/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot;?>admin/plugins/jquery-validation/js/additional-methods.min.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot;?>admin/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<script src="<?php echo $this->webroot;?>admin/js/form-wizard.js"></script>
<!--ADD User-->

<!--category-->
<script type="text/javascript" src="<?php echo $this->webroot;?>admin/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot;?>admin/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="<?php echo $this->webroot;?>admin/js/datatable.js"></script>
<script src="<?php echo $this->webroot;?>admin/js/ecommerce-products.js"></script>
<!--category-->

<script type="text/javascript" src="<?php echo $this->webroot;?>admin/plugins/gritter/js/jquery.gritter.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot;?>admin/plugins/gritter/js/jquery.gritter.min.js"></script>
<!--<script type="text/javascript" src="<?php echo $this->webroot;?>admin/js/script.js"></script>-->

<?php $flash_message = $this->Session->flash(); ?>       
<?php if (!empty($flash_message)) { ?>
    <script>
        $(document).ready(function () {
            glitterCallAlert("Notification :", '<?php echo $flash_message; ?>');
        });
    </script>    
<?php } ?>




