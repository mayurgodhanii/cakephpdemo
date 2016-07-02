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
			<!-- BEGIN STYLE CUSTOMIZER -->
			
			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			User <small>User listing</small> 
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">User</a>
						<!-- <i class="fa fa-angle-right"></i> -->
					</li>
					<!-- 	<li>
							<a href="#">Orders</a>
						</li>
					</ul> -->
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<!-- <div class="note note-danger">
						<p>
							 NOTE: The below datatable is not connected to a real database so the filter and sorting is just simulated for demo purposes only.
						</p>
					</div> -->
					<!-- Begin: life time stats -->
					<div class="portlet">
						<div class="portlet-title">
							<div class="caption">
								<i class="icon-docs"></i>User Listing
							</div>
							<div class="actions">
								<a href="<?php echo $this->Html->url(array('action' => 'adduser'))?>" class="btn default yellow-stripe">
								<i class="fa fa-plus"></i>
								<span class="hidden-480">
								Add User </span>
								</a>
								<!-- <div class="btn-group">
									<a class="btn default yellow-stripe dropdown-toggle" href="javascript:;" data-toggle="dropdown">
									<i class="fa fa-share"></i>
									<span class="hidden-480">
									Tools </span>
									<i class="fa fa-angle-down"></i>
									</a>
									<ul class="dropdown-menu pull-right">
										<li>
											<a href="javascript:;">
											Export to Excel </a>
										</li>
										<li>
											<a href="javascript:;">
											Export to CSV </a>
										</li>
										<li>
											<a href="javascript:;">
											Export to XML </a>
										</li>
										<li class="divider">
										</li>
										<li>
											<a href="javascript:;">
											Print Invoices </a>
										</li>
									</ul>
								</div> -->
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-container">
								<div class="table-actions-wrapper">
									<span>
									</span>
									<select class="table-group-action-input form-control input-inline input-small input-sm">
										<option value="">Select...</option>
										<option value="Cancel">Cancel</option>
										<option value="Cancel">Hold</option>
										<option value="Cancel">On Hold</option>
										<option value="Close">Close</option>
									</select>
									<button class="btn btn-sm yellow table-group-action-submit"><i class="fa fa-check"></i> Submit</button>
								</div>
								<table class="table table-striped table-bordered table-hover" id="datatable_orders">
								<thead>
								<tr role="row" class="heading">
									<!-- <th width="2%">
										<input type="checkbox" class="group-checkable">
									</th> -->
									<th width="5%">
										Sr.No 
									</th>
									<th width="15%">
										 Name
									</th>
									<th width="15%">
										 UserName
									</th>
									<th width="15%">
										 Useremail
									</th>
									<th width="15%">
										 Userrole
									</th>
									<th width="15%">
										 Userpicture
									</th>
									<th width="10%">
										 Active
									</th>
									<th width="10%">
										 Created Date
									</th>
									<th width="10%">
										 Actions
									</th>
								</tr>
								</thead>
								<tbody>
									<?php
									$url=$this->webroot."app/webroot/upload/user_image/";
								 if (!empty($user)) {
								 	$i = 1;
                                        foreach ($user as $user) {
                                        	
                                        	?>
								<tbody>
									<td>
										<?php echo $i;?>
									</td>
									<td><?php echo $user['User']['name']; ?></td>
                                    <td><?php echo $user['User']['username']; ?></td>
                                    <td><?php echo $user['User']['email']; ?></td>   
                                    <td><?php echo $user['Role']['name']; ?></td>
                                    <td ><a class="example-image-link" href="<?php echo ($user['User']['picture'] != '') ?  $url.$user['User']['picture'] : $url."deafault_image.jpg";    ?>" data-lightbox="example-<?php echo $i;?>"><img class="example-image propic" src="<?php echo ($user['User']['picture'] != '') ?  $url.$user['User']['picture'] : $url."deafault_image.jpg";    ?>" height="70px" width="100px"></a></td>
                                    <td id="status-<?php echo $user['User']['id']; ?>"><?php echo ($user['User']['active'] == 1) ? "Active" : "Deactive"; ?></td>
                                               <!--  <td id="dstatus-<?php echo $user['User']['id']; ?>"><?php echo ($user['User']['is_delete'] == 1) ? "NO" : "YES"; ?></td> -->
									
										<td><?php echo date('d-m-y',strtotime($user['User']['created']))?></td>
									
									
									
									<td class="m-action">                                                      
                                                    <a href="<?php echo $this->Html->url(array('action' => 'admin_edituser', $user['User']['id'])) ?>" title="Edit">
                                                        <i class="fa fa-pencil-square-o fa-fw"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="activedeactive" id="activedeactive-<?php echo $user['User']['id']; ?>" data-id='<?php echo $user['User']['id']; ?>'>
                                                        <?php if ($user['User']['active'] == 1) { ?>
                                                            <i class="fa fa-toggle-on"></i>
                                                        <?php } else { ?>
                                                            <i class="fa fa-toggle-off"></i>
                                                        <?php } ?>
                                                    </a> 
                                                    <?php if ($user['User']['is_delete'] == 0) { ?>
                                                    <a href="<?php echo $this->Html->url(array('action' => 'deleteUser',$user['User']['id']))?>"class="delete" id="delete-<?php echo $user['User']['id']; ?>"   data-id='<?php echo $user['User']['id']; ?>' title="Delete" >

                                                        <i class="fa fa-trash-o fa-fw"></i>
                                                    </a>
                                                    <?php
                                                         }
                                                          
                                                        ?>
                                                 

                                                                                                     
                                                </td> 
								</tbody>
								<?php $i++;}

							} else { ?>
								<tr>

                                            <td colspan="15" style="text-align: center;">No records founds</td>

                                </tr>
                                <?php 
                            }
                            ?>
								</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- End: life time stats -->
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<script>
    jQuery(document).ready(function() {    
           Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
           EcommerceProducts.init();
        });
    </script>
  <script TYPE="text/javascript">
    $(function () {
        var $container = $('#view_designation').find('tbody');
       

        $(document).on('click', '.activedeactive', function () {
            var id = $(this).attr('data-id');
            var thisid = $(this).attr('id');
            
            activedeactive(id, thisid);
        });
         $(document).on('click', '.delete', function () {
            var id = $(this).attr('data-id');
            var thisid = $(this).attr('id');
           if (confirm('Are you sure  you want to delete User?')) {
            deleteUser(id, thisid);
        }
        });
          $(document).on('click', '.restore', function () {
            var id = $(this).attr('data-id');
            var thisid = $(this).attr('id');
           if (confirm('Are you sure  you want to restore User?')) {
            deleteUser(id, thisid);
        }
        });

        $(document).on('change', '.changedata', function () {
            var id = $(this).attr('data-id');
            var selectvalue = $(this).val();
            updatefield(id, selectvalue);
        });

        $(document).on('change', '.filter-manager', function () {
            var selectvalue = $(this).val();
            $("#searchdata").submit();
        });
    });

    function updatefield(id, selectvalue) {

        var url = "<?php echo $this->Html->url(array('action' => 'updatevalue')) ?>";
        url = url + "/" + id + "/" + selectvalue;
        $.ajax({
            url: url
        }).done(function () {
            glitterCallAlert("Notification :", "Ad Manager assign successfully.");
        });
    }
      /*function deleteUser(id, thisid) {

        var url = "<?php echo $this->Html->url(array('action' => 'deleteUser')) ?>";
        url = url + "/" + id;
       
        $.ajax({
            url: url,
            context: document.body
        }).done(function (data) {
            if (data == 1) {
                $("#" + thisid + " i").removeClass("fa fa-check-circle-o");
                $("#" + thisid + " i").addClass("fa fa-trash-o fa-fw");
                $("#dstatus-" + id).text("NO");
                glitterCallAlert("Notification :", "User has been Restore successfully.");            
             $("#" + thisid).removeClass('restore').addClass('delete');


            } else {
                $("#" + thisid + " i").removeClass("fa fa-trash-o fa-fw");
                $("#" + thisid + " i").addClass("fa fa-check-circle-o");
                $("#dstatus-" + id).text("YES");
                glitterCallAlert("Notification :", "User has been Deleted successfully.");
                $("#" + thisid).removeClass('delete').addClass('restore');

            }
        });
    }*/

    function activedeactive(id, thisid) {
        
        var url = "<?php echo $this->Html->url(array('action' => 'activedeactiveUser')) ?>";
        url = url + "/" + id;
        $.ajax({
            url: url,
            context: document.body
        }).done(function (data) {

            if (data == 1) {
                $("#" + thisid + " i").removeClass("fa fa-toggle-off");
                $("#" + thisid + " i").addClass("fa fa-toggle-on");
                $("#status-" + id).text("Active");
                glitterCallAlert("Notification :", "User has been activated successfully.");
            } else {
                $("#" + thisid + " i").removeClass("fa fa-toggle-on");
                $("#" + thisid + " i").addClass("fa fa-toggle-off");
                $("#status-" + id).text("Deactive");
                glitterCallAlert("Notification :", "User has been Deactivated successfully.");
            }
        });
    }
</script> 