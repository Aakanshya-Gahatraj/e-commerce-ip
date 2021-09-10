<?php
require("connection.inc.php");
require "productsCard.php";
require "form_process.php";


$passedId = intval($_GET['id']);
$result= $con->query("SELECT * FROM product WHERE id=$passedId") or die($con->error);
$row=$result->fetch_array();


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Details</title>
    <?php require("cssAndFonts.php");?>
  </head>
  <body class="cnt-home">
    <?php  require("header.php");?>

<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
			<li><a href="home.php">Home</a></li>
            <li class="active"><a href="categoryAll.php">Categories</li>
				<li><?php if($row['category_id']==1){?>
						<a href="categoryWomen.php"><?php echo "Women's";?></a><?php 
					}else if($row['category_id']==2){?>
						<a href="categoryMen.php"><?php echo "Men's";?></a><?php 
					}else{?>
						<a href="categoryKids.php"><?php echo "Kid's";?></a><?php 
					}?></li>
				<li><?php if($row['subcategory_id']==1){?>
						<a href="Clothing.php"><?php echo "Clothing";?></a><?php
					}else if($row['subcategory_id']==2){?>
						<a href="Accessories.php"><?php echo "Accessories";?></a><?php
					}else{?>
						<a href="Shoes.php"><?php echo "Shoes";?></a><?php
						}?></li>
				<li class='active'><?php echo $row['name'];?></li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-xs">
	<div class='container'>
		<div class='row single-product'>
			<div class='col-xs-12 col-sm-12 col-md-3 sidebar'>
				<div class="sidebar-module-container">
					<div class="home-banner outer-top-n outer-bottom-xs">
						<img src="<?php echo $row['image'];?>" alt="Image" width=290px>
					</div>		
				</div>
			</div><!-- /.sidebar -->

			<div class='col-xs-12 col-sm-12 col-md-9 rht-col'>
				<div class="detail-block">					
					<div class="product-info">
						<h1 class="name"><?php echo $row['name'];?></h1>

						<div class="stock-container info-container m-t-10">
							<div class="row">
								<div class="col-lg-12">
									<div class="pull-left">
										<div class="stock-box">
											<span class="label">Availability :</span>
										</div>	
									</div>
									<div class="pull-left">
										<div class="stock-box">
											<span class="value"><?php if($row['qty']>0){echo "In Stock";}else{echo "Out of Stock";}?></span>
										</div>	
									</div>
								</div>
							</div><!-- /.row -->	
						</div><!-- /.stock-container -->

						<div class="description-container m-t-20">
							<p><?php echo $row['description'];?></p>
						</div><!-- /.description-container -->

						<div class="price-container info-container m-t-30">
							<div class="price-box">
								<span class="price"><?php echo $row['price'];?></span>
							</div>
						</div><!-- /.price-container -->

						<div class="quantity-container info-container">
							<div class="row">
								<div class="qty">
									<span class="label">Qty :</span>
								</div>
								
								<div class="qty-count">
									<div class="cart-quantity">
										<div class="quant-input">
											<div class="arrows">
												<div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
												<div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
											</div>
											<input type="text" value="1">
										</div>
									</div>
								</div>

								<div class="add-btn" name="cart">
									<a href="shopping-cart.php" class="btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART</a>
								</div>
							</div><!-- /.row -->
						</div><!-- /.quantity-container -->

										
					</div><!-- /.product-info -->
				</div><!-- /.detil block -->
			</div><!-- /.col-sm-7 -->
		</div><!-- /.row  sigle product -->
	</div><!-- /.container -->
</div><!-- /.top -->


<?php require("footer.php");?>
</body>
</html>