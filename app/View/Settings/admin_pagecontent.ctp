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
			Pages
			</h3>
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
					<!-- <!-- <div class="portlet">
						<div class="portlet-title">
							<div class="caption">
								<i class="icon-docs"></i>Product Listing
							</div>
							<div class="actions">
								<a href="<?php echo $this->Html->url(array('action' => 'addproduct'))?>" class="btn default yellow-stripe">
								<i class="fa fa-plus"></i>
								<span class="hidden-480">
								Add Product </span>
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
									<th width="2%">
										Sr.No 
									</th>
									<th width="15%">
										 Page Name
									</th>
									<th width="2%">
										 Actions
									</th>
								</tr>
								</thead>
								<tbody>
									<?php
								 if (!empty($pages)) {
								 	$i = 1;
                                        foreach ($pages as $pages) {
                                        	?>
								<tbody>
									<td>
										<?php echo $i;?>
									</td>
									<td>
										<?php echo $pages['Page']['title'];?>
									</td>
									<td class="m-action">                                                      
										<a href="<?php echo $this->Html->url(array('action' => 'editpagecontent', $pages['Page']['id'])) ?>" title="Edit">
											<i class="fa fa-pencil-square-o fa-fw"></i>
                                        </a>

                                         <?php if ($pages['Page']['is_delete'] == 1) { ?>
                                                             <a href="javascript:void(0);" class="restore" id="activedelete-<?php echo $pages['Page']['id']; ?>" data-id='<?php echo $pages['Page']['id']; ?>'>

                                                            <i id="on"class="fa fa-check-circle-o" ></i>
                                                                  </a> 

                                                        <?php } else { ?>
                                                             <a href="javascript:void(0);" class="delete" id="activedelete-<?php echo $pages['Page']['id']; ?>" data-id='<?php echo $pages['Page']['id']; ?>'>

                                                            <i class="fa fa-trash-o fa-fw" id="off" ></i>
                                                                  </a> 
                                                        <?php } ?>     
                                                                
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
					</div> --> -->
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

        /*$container.infinitescroll({

            navSelector: '.next', // selector for the paged navigation 

            nextSelector: '.next a', // selector for the NEXT link (to page 2)

            itemSelector: '.designation_row', // selector for all items you'll retrieve

            debug: true,

            dataType: 'html',

            loading: {

                img: "<?php echo $this->Html->url('/'); ?>" + "img/icons/ajax_loader.gif",

                finishedMsg: "",

                msgText: "",

                speed: 'fast',

                start: undefined

            }

        });*/

       $(document).on('click', '.restore', function () {

            var id = $(this).attr('data-id');
            var thisid = $(this).attr('id');
            if (confirm('Are you sure  you want to restore Page?')) {
            deletepage(id, thisid);
        }
        });

       $(document).on('click', '.delete', function () {

            var id = $(this).attr('data-id');
            var thisid = $(this).attr('id');
            if (confirm('Are you sure  you want to Delete Page?')) {
            deletepage(id, thisid);
        }

        });

        $(document).on('change', '.changedata', function () {

            var id = $(this).attr('data-id');

            var selectvalue = $(this).val();

            updatefield(id, selectvalue);

        });
    });

    function deletepage(id, thisid) {

        var url = "<?php echo $this->Html->url(array('action' => 'activedeletepage')) ?>";

        url = url + "/" + id;
        alert(url);
        $.ajax({

            url: url,

            context: document.body

        }).done(function (data) {

            if (data == 1) {

                $("#" + thisid + " i").removeClass("fa fa-trash-o fa-fw");
                $("#" + thisid + " i").addClass("fa fa-check-circle-o");
                $("#" + thisid).removeClass('delete').addClass('restore');
                $("#destatus-" + id).text("Yes");
                glitterCallAlert("Notification :", "Category has been Deleted successfully.");
            } else {

                $("#" + thisid + " i").removeClass("fa fa-check-circle-o");
                $("#" + thisid + " i").addClass("fa fa-trash-o fa-fw");
                $("#" + thisid).removeClass('restore').addClass('delete');
                $("#destatus-" + id).text("No");
                glitterCallAlert("Notification :", "Category has been Restore successfully.");
               
            }

        });
    }
</script>