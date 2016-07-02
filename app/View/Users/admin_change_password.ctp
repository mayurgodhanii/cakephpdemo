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
                        
                        <?php echo $this->Form->create('User', array('action' => 'change_password', 'id' => 'form_sample_3', 'class' => 'form-horizontal')); ?>
                            
                                <div class="form-body">
                                    <h3 class="form-section">User Details </h3>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Old Password <span class="required">
                                        * </span>
                                        </label>
                                        <div class="col-md-4">

                                            <!-- <input type="text" name="name" data-required="1" class="form-control"/> -->
                                            
                                            <?php
                                            echo $this->Form->input('old_password', array(
                                                'label' => FALSE,
                                                'type' => 'password',
                                                'class' => "form-control required"
                                            ));
                                            ?>
                                        </div>
                                    </div>

                                    
                                    <div class="form-group">
                                        <label class="control-label col-md-3">New Password<span class="required">
                                        * </span>
                                        </label>
                                        <div class="col-md-4">
                                            
                                            <?php
                                            echo $this->Form->input('new_password', array(
                                                'label' => FALSE,
                                                'type' => 'password',
                                                'class' => "form-control required",
                                                'id' => 'password'
                                            ));
                                            ?>
                                        </div>
                                    </div>

                                    

                                    <div class="form-group">
                                        <label class="control-label col-md-3">Confrim Password<span class="required">
                                        * </span>
                                        </label>
                                        <div class="col-md-4">
                                            
                                            <?php
                                            echo $this->Form->input('confirm_password', array(
                                                'label' => FALSE,
                                                'type' => 'password',
                                                'class' => "form-control required"
                                            ));
                                            ?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <div class="col-md-2">&nbsp;</div>
                                        <div class="col-md-10">
                                            <strong>Password Must contain : </strong>
                                            <ul>
                                                <li> Minimum 6 characters</li>
                                                <li> One upper case character [A-Z]</li>
                                                <li> One lower case character [a-z]</li>
                                                <li> One special character [!@#$%^&]</li>
                                                <li> One digit [0-9]</li>
                                            </ul>
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
