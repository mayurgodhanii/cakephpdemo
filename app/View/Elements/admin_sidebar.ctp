<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
			<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
			<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
			<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
			<ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
				
				<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
				
				<li id="dashboards" class="">
					<a href="<?php echo $this->Html->url(array('controller' => 'dashboards', 'action' => '', 'plugin' => false)) ?>">
					<i class="icon-home"></i>
					<span class="title">Dashboard</span>
					</a>
				</li>

				<li id="Products" class="">
					<a href="#">
					<i class="icon-handbag"></i>
					<span class="title">Product</span>
					<span class="selected"></span>
					<span class="arrow open"></span>
					</a>
					<ul class="sub-menu">
						<li class="active">
							<a href="<?php echo $this->Html->url(array('controller' => 'Products', 'action' => 'product', 'plugin' => false)) ?>">
							<i class="icon-bar-chart"></i>
							List Product</a>
						</li>
						<li>
							<a href="<?php echo $this->Html->url(array('controller' => 'Products', 'action' => 'addproduct', 'plugin' => false)) ?>">
							<i class="icon-plus"></i>
							Add Product</a>
						</li>
					</ul>
				</li>


				<li id="settings" class="">
					<a href="javascript:;">
					<i class="icon-settings"></i>
					<span class="title">Settings</span>
					<span class="selected"></span>
					<span class="arrow open"></span> 
					<ul class="sub-menu">
						<li>
							<a href="<?php echo $this->Html->url(array('controller' => 'users','action' => 'admin_change_password'));?>">
							<i class="icon-bar-chart"></i>
							Change Password</a>
						</li>
					</a>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<script type="text/javascript">

    var controller = '<?php echo $this->params['controller']; ?>';
    $('#' + controller /*+ '_' + action*/).addClass('active');
</script>