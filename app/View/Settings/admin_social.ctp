<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Add Social
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo $this->Html->url(array('controller' => 'dashboards','action' => 'index','admin' => true))?>">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Social</a>
						
					</li>
				</ul>
				
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN VALIDATION STATES-->
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="icon-docs"></i>Add Social Account
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<?php echo $this->Form->create('Setting', array('type' => 'file', 'enctype' => 'multipart/form-data', 'id' => 'form_sample_3', 'class' => 'form-horizontal')); ?>
							<!-- <form action="#" id="form_sample_3" class="form-horizontal" method="post" enctype="multipart/form-data"> -->
								<?php echo $this->Form->input("id"); ?>
								<div class="form-body">
									<h3 class="form-section">Social Accounts</h3>
									<div class="form-group">
										<label class="control-label col-md-3">Facebook 
										</label>
										<div class="col-md-4">

											<!-- <input type="text" name="name" data-required="1" class="form-control"/> -->
											
											<?php echo $this->Form->input("Setting.facebook", array('label' => false, 'div' => false, 'class' => "form-control")) ?>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3">Twitter 
										</label>
										<div class="col-md-4">

											<!-- <input type="text" name="name" data-required="1" class="form-control"/> -->
											
											<?php echo $this->Form->input("Setting.twitter", array('label' => false, 'div' => false, 'class' => "form-control")) ?>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3">Google+
										</label>
										<div class="col-md-4">

											<!-- <input type="text" name="name" data-required="1" class="form-control"/> -->
											
											<?php echo $this->Form->input("Setting.google+", array('label' => false, 'div' => false, 'class' => "form-control")) ?>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3">Youtube 
										</label>
										<div class="col-md-4">

											<!-- <input type="text" name="name" data-required="1" class="form-control"/> -->
											
											<?php echo $this->Form->input("Setting.youtube", array('label' => false, 'div' => false, 'class' => "form-control")) ?>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3">Skype
										</label>
										<div class="col-md-4">

											<!-- <input type="text" name="name" data-required="1" class="form-control"/> -->
											
											<?php echo $this->Form->input("Setting.skype", array('label' => false, 'div' => false, 'class' => "form-control")) ?>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3">Instagram
										</label>
										<div class="col-md-4">

											<!-- <input type="text" name="name" data-required="1" class="form-control"/> -->
											
											<?php echo $this->Form->input("Setting.instagram", array('label' => false, 'div' => false, 'class' => "form-control")) ?>
										</div>
									</div>
									
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green">Submit</button>
											<button type="button" class="btn default">Cancel</button>
										</div>
									</div>
								</div>
							<?php echo $this->Form->end();?>
							<!-- END FORM-->
						</div>
						<!-- END VALIDATION STATES-->
					</div>
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<script>
jQuery(document).ready(function() {   
   // initiate layout and plugins
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
   FormValidation.init();
});
</script>