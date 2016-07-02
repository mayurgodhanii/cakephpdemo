<div class="header">

		<div class="container">
			
			<div class="logo">
				<h1 ><a href="index.html"><b>T<br>H<br>E</b>Big Store<span>The Best Supermarket</span></a></h1>
			</div>
			<div class="head-t">
				<!-- <ul class="card">
					<li><a href="wishlist.html" ><i class="fa fa-heart" aria-hidden="true"></i>Wishlist</a></li>
					<li><a href="login.html" ><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
					<li><a href="register.html" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a></li>
					<li><a href="about.html" ><i class="fa fa-file-text-o" aria-hidden="true"></i>Order History</a></li>
					<li><a href="shipping.html" ><i class="fa fa-ship" aria-hidden="true"></i>Shipping</a></li>
				</ul>	 -->
			</div>
			
			<div class="header-ri">
				<!-- <ul class="social-top">
					<li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
				</ul>	 -->
			</div>
		

				<div class="nav-top">
					<nav class="navbar navbar-default">
					
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						

					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav ">
							<li id="index" class=""><a href="<?php echo $this->Html->url(array('controller' => 'users','action' => 'index'))?>" class="hyper "><span>Home</span></a></li>	
							
							<!-- <li><a href="codes.html" class="hyper"> <span>Codes</span></a></li> -->
							<li id="myproducts" class=""><a href="<?php echo $this->Html->url(array('controller' => 'users','action' => 'myproducts'))?>" class="hyper"><span>My Products</span></a></li>
							<li id="" class=""><a href="<?php echo $this->Html->url(array('controller' => 'users','action' => 'login'))?>" class="hyper"><span>Login</span></a></li>
							<li id="contactus" class=""><a href="<?php echo $this->Html->url(array('controller' => 'users','action' => 'contactus'))?>" class="hyper"><span>Contact Us</span></a></li>
							<?php
							if(isset($data)){?>
							<li id="contactus" class=""><a href="<?php echo $this->Html->url(array('controller' => 'users','action' => 'logout'))?>" class="hyper"><span>Logout</span></a></li>
							<?php }?>
						</ul>
					</div>
					</nav>
					 <div class="cart" >
					
						<span class="fa fa-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
					</div>
					<div class="clearfix"></div>
				</div>
					
				</div>			
</div>
<script type="text/javascript">
    var action = '<?php echo $this->action; ?>';
    $('#' + action).addClass('active');
</script>