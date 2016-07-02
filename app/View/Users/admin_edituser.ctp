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
			Add User
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo $this->Html->url(array('controller' => 'dashboards','action' => 'index','admin' => true))?>">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="<?php echo $this->Html->url(array('controller' => 'Categories','action' => 'user','admin' => true))?>">User</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Add User</a>
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
								<i class="icon-docs"></i>Add User
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
						<?php echo $this->Form->create('User', array('type' => 'file', 'enctype' => 'multipart/form-data', 'id' => 'form_sample_3', 'class' => 'form-horizontal')); ?>
							<?php echo $this->Form->input("User.id"); ?>
                                <?php echo $this->Form->input("UserDetail.id"); ?>
                                <?php echo $this->Form->input("UserAddress.id"); ?>

								<div class="form-body">
									<h3 class="form-section">User Details </h3>
									<div class="form-group">
										<label class="control-label col-md-3">Email <span class="required">
										* </span>
										</label>
										<div class="col-md-4">

											<!-- <input type="text" name="name" data-required="1" class="form-control"/> -->
											<?php echo $this->Form->input("User.email", array('label' => false, 'div' => false, 'class' => "form-control")) ?>
										</div>
									</div>

									
									<div class="form-group">
										<label class="control-label col-md-3">Username<span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											
											<?php echo $this->Form->input("User.username", array('label' => false, 'div' => false, 'class' => "form-control ")) ?>
										</div>
									</div>

									<!-- <div class="form-group">
										<label class="control-label col-md-3">User Role<span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											
											<?php echo $this->Form->input("User.role_id", array('options'=>array(''=>'Select Role',$role), 'label' => false, 'div' => false, 'class' => "form-control select2me")) ?>
										</div>
									</div>
 -->
									<!-- <div class="form-group">
										<label class="control-label col-md-3">Password<span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											
											<?php echo $this->Form->input("User.password", array("id"=>'password','label' => false, 'div' => false, 'class' => "form-control required")) ?>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3">Confirm Password<span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											
											<?php echo $this->Form->input("User.cpassword", array('id'=>'cpassword','label' => false, 'type' => 'password', 'div' => false, 'class' => "form-control")) ?>
										</div>
									</div> -->

									<div class="form-group">
										<label class="control-label col-md-3">Name<span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											
											<?php echo $this->Form->input("User.name", array('label' => false, 'div' => false, 'class' => "form-control ")) ?>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3">Address 1<span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											
											<?php echo $this->Form->textarea("UserAddress.address1", array('label' => false, 'div' => false, 'class' => "form-control ")) ?>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3">Address 2<span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											
											<?php echo $this->Form->textarea("UserAddress.address2", array('type' => 'textarea', 'label' => false, 'div' => false, 'class' => "form-control ")) ?>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3">Phone Number<span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											
											<?php echo $this->Form->input("UserDetail.phoneno", array('label' => false, 'div' => false, 'class' => "form-control number")) ?>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Mobile Number<span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											
											<?php echo $this->Form->input("UserDetail.mobileno", array('label' => false, 'div' => false, 'class' => "form-control number")) ?>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3">Birth Date<span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											
											 <?php echo $this->Form->input("UserDetail.birthday", array('label' => false, 'type' => 'text','id' => 'exdatepicker','div' => false, 'class' => "form-control required")) ?>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3">Country<span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											
											<?php echo $this->Form->input("UserAddress.country", array('label' => false, 'div' => false, 'class' => "form-control ","value"=>'India',"readonly"=>"readonly")) ?>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3">State<span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											
											<?php echo $this->Form->input("UserAddress.state", array('options'=>array(''=>'Select State',$state), 'label' => false, 'div' => false, 'id' =>'state','class' => "form-control required")) ?>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3">City<span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											
											 <?php echo $this->Form->input("UserAddress.city", array('label' => false, 'div' => false, 'class' => "form-control ")) ?>
										</div>
									</div>

									<?php
                                        $img=$this->request->data['User']['picture'];
                                        $this->request->data['userOld']['img']=$img;
                                        echo $this->Form->input("userOld.img", array('label' => false, 'div' => false, 'type'=>"hidden",'class' => "form-control "))
                                     ?>

                                    <div class="form-group">
                                       <label class="col-sm-3 control-label">Old Profile Image</label>
                                        <div class="col-sm-5">
                                            <img id="imgprvw1" src="<?php echo  $this->webroot.'/upload/user_image/'.$img; ?>"class="img-responsive" style="width: 250px;"/>
                                        </div>
                                    </div>

									 <div class="form-group">
										<label class="control-label col-md-3">Image<span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											
											<?php echo $this->Form->input("User.picture", array('type' => 'file', 'label' => false, 'div' => false,'id' => 'propic', 'class' => "", 'onchange' => 'showimagepreview(this)')) ?>
										</div>
									</div> 

									<div class="form-group">
                                        <label class="col-sm-3 control-label"> </label>
                                        <div class="col-sm-5">
                                            <img id="imgprvw" class="img-responsive" style="width: 250px;"/>
                                        </div>
                                    </div>

                                    <div class="form-group">
										<label class="control-label col-md-3">Bio<span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											
											 <?php echo $this->Form->textarea("UserDetail.bio", array('label' => false, 'div' => false, 'class' => "form-control ")) ?>
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
							</form>
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
<script type="text/javascript">
    function showimagepreview(input) {
        if (input.files && input.files[0]) {
            var filerdr = new FileReader();
            filerdr.onload = function (e) {
                $('#imgprvw').attr('src', e.target.result);
            };
            filerdr.readAsDataURL(input.files[0]);
        }
    }

  $(function() {
    $( "#exdatepicker" ).datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat : 'mm/dd/yy',        
        yearRange: '-65y:c+nn',
        maxDate: '-1d'
    });
  });
  $(document).ready(function(){
   /* $('#state').on("change",function(){
        

        var id = $('#state').val();
        var url = "<?php echo $this->Html->url(array('action' => 'selectCity')) ?>";
        url = url + "/" + id;
      
        $.ajax({
            url: url,
            context: document.body
        }).done(function (html) {
            

            $('#citychange').html(html);

        });
    });*/
  });
 
</script>