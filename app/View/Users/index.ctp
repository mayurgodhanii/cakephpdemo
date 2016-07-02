<div data-vide-bg="<?php echo $this->webroot;?>video/video">
    <div class="container">
		<div class="banner-info">
			<h3>It is a long established fact that a reader will be distracted by 
			the readable </h3>	
			<div class="search-form">
				<form action="#" method="post">
					<input type="text" placeholder="Search..." name="Search...">
					<input type="submit" value=" " >
				</form>
			</div>		
		</div>	
    </div>
</div>

    <script>window.jQuery || document.write('<script src="<?php echo $this->webroot;?>js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
    <script src="<?php echo $this->webroot;?>js/jquery.vide.min.js"></script>

<!--content-->
<!--content-->

		<div class="product">
		<div class="container">
			<div class="spec ">
				<h3>Products</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
			</div>
			<div class="col-md-12">
			<?php
				if(!empty($product)){
					foreach($product as $product){
						?>
				
							<div class="col-md-3 pro-1">
								<div class="col-m">
								<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
										<img src="<?php echo $this->webroot."upload/product/".$product['ProductImage'][0]['picture']?>" class="img-responsive" alt="">
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html"><?php echo $product['Product']['name']?></a></h6>							
										</div>
										<div class="mid-2">
											<p ><em class="item_price"><?php echo $product['ProductSeller']['actual_rate']?></em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="24" data-name="Wheat" data-summary="summary 24" data-price="6.00" data-quantity="1" data-image="<?php echo $this->webroot;?>img/of24.png">Add to Cart</button>
										</div>
									</div>
								</div>
							
							<div class="clearfix"></div>
						 </div>
						<?php
						}
					}	else
					{
						echo "No Products Found";
					}
					?>
						<div class="clearfix"></div>
						 </div>
						</div>
		</div>
	</div>

<!--content-->

	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
		<script src="<?php echo $this->webroot;?>js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="<?php echo $this->webroot;?>js/jquery.mycart.js"></script>
  <script type="text/javascript">
  $(function () {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500 , "linear", function() {
        $image.remove();
      });
    }

    $('.my-cart-btn').myCart({
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      affixCartIcon: true,
      checkoutCart: function(products) {
        $.each(products, function(){
          console.log(this);
        });
      },
      clickOnAddToCart: function($addTocart){
        goToCartIcon($addTocart);
      },
      getDiscountPrice: function(products) {
        var total = 0;
        $.each(products, function(){
          total += this.quantity * this.price;
        });
        return total * 1;
      }
    });

  });
  </script>