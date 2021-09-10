<?php
require("header.php");
?>

<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.php">Home</a></li>
				<li class='active'>Shopping Cart</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-xs">
	<div class="container">
		<div class="row ">
			<div class="shopping-cart">
				<div class="shopping-cart-table ">

					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									
									<th class="cart-description item">Image</th>
									<th class="cart-product-name item">Product Name</th>
									<th class="cart-product-name item">Price (per)</th>
									<th class="cart-qty item">Quantity</th>
									<th class="cart-romove item ">Remove</th>
								</tr>
							</thead><!-- /thead -->
							
						<tbody>
							<?php 
								$total=0;
								if(isset($_SESSION['cart'])){
									foreach($_SESSION['cart'] as $key => $value){
										$total+=$value['Item_price'];
										echo"
										<tr>											
											<td class='cart-image text-center'>
												<a class='entry-thumbnail'>
												<img src='$value[Item_pic]' alt='image' width=150px>
												</a>
											</td>
											<td class='text-center'>$value[Item_Name]</td>
											<td class='text-center'>$value[Item_price]</td>
											<td  class='text-center'><input class='text-center' type='number' value='$value[Item_qty]' min='1' max='10'></td>
											<td>
												<form class='text-center' action='manageCart.php' method='POST' >
													<button class='btn btn-danger' name='remove'>Remove</button>
													<input type='hidden' name='Item_Name' value='$value[Item_Name]'>
												</form>
											</td>
										</tr>";
									}
								}
								$_SESSION['total']=$total;
							?>
							</tbody>

							
							<tfoot>
								<tr>
									<td colspan="7">
										<div class="shopping-cart-btn">
											<span class="">
												<a href="categoryAll.php" class="btn btn-upper btn-primary outer-left-xs">Continue Shopping</a>
											</span>
										</div><!-- /.shopping-cart-btn -->
									</td>
								</tr>
							</tfoot>
						</table><!-- /table -->
					</div>
				</div><!-- /.shopping-cart-table -->				
					

				<div class="col-md-4 col-sm-12 cart-shopping-total">
					<table class="table">
						<thead>
							<tr>
								<th>
									<div class="cart-grand-total">
										Grand Total--><span class="inner-left-md text-left"><?php echo $total?></span>
									</div>
								</th>
							</tr>
						</thead><!-- /thead -->
						<tbody>
								<tr>
									<td>
										<div class="cart-checkout-btn pull-right">
											<button type="submit" class="btn btn-primary checkout-btn ">Proceed to checkout</button>
										</div>
									</td>
								</tr>
						</tbody><!-- /tbody -->
					</table><!-- /table -->
				</div><!-- /.cart-shopping-total -->			</div><!-- /.shopping-cart -->
						</div> <!-- /.row -->
						
<?php  
require("footer.php");?>
</body>
</html>