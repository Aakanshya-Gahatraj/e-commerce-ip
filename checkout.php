<?php
require("connection.inc.php");
require("cssAndFonts.php");
require("header.php");
?>

<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.php">Home</a></li>
				<li class='active'>Checkout</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="checkout-box ">
			<div class="row">
				<div class="col-xs-12 col-sm-9 col-md-9 rht-col">
					<div class="panel-group checkout-steps" id="accordion">
						<!-- checkout-step-01  -->
<div class="panel panel-default checkout-step-01">

	<!-- panel-heading -->
		<div class="panel-heading">
    	<h4 class="unicase-checkout-title">
	        <a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne">
	          <span>1</span>Checkout
	        </a>
	     </h4>
    </div>
    <!-- panel-heading -->

	<div id="collapseOne" class="panel-collapse collapse in">

		<!-- panel-body  -->
	    <div class="panel-body">
			<div class="row">		

				<!-- guest-login -->			
				<div class="col-md-6 col-sm-6 guest-login justify-content-center">
					<p class="text title-tag-line">Please fill up the form with your details</p>

					<div class=" justify-content-center  ">
						<form class="mt-4 gap-3 d-flex flex-column w-50 border border-dark rounded p-4 bg-light" action="pdf.php" method="POST">
						
							<div class="form-group">
							<label>Name</label><span style="color:red">*</span>
							<input type="text" name="name" class="form-control"  placeholder="Your name" required>
							</div>
							<div class="form-group">
							<label>Address</label><span style="color:red">*</span>
							<input type="text" name="address" class="form-control"  placeholder="Your address" required>
							</div>
							<div class="form-group">
							<label>Number</label><span style="color:red">*</span>
							<input type="text" name="number" class="form-control" placeholder="Your number" required>
							</div>
							<div class="form-group">
						
							</div>
							<div class="form-group">
							<label>Delivery Date</label><span style="color:red">*</span>
							<input type="text" name="date" class="form-control" placeholder="dd/mm/yyy" required>
							</div>
							
							<div class="form-group">
							<button type="submit" class="btn btn-info" name="bill">Generate Bill</button>
							</div>
						</form>
						</div>	
					</div>
					<!-- guest-login -->

					<!-- image -->
				<div class="col-md-6 col-sm-6 already-registered-login text-right">
					<img src="assets/images/banners/ad.jpg" alt="Image" width=290px>
				</div>	

			<?php
			$_SESSION['cart1']=json_decode($_COOKIE["cart"]);
			?>
			</div>			
		</div>
		<!-- panel-body  -->

	</div><!-- row -->
</div>
<!-- checkout-step-01  -->
					   

					
					  	
					</div><!-- /.checkout-steps -->
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 sidebar">
					<!-- checkout-progress-sidebar -->
<div class="checkout-progress-sidebar ">
	<div class="panel-group">
		<div class="panel panel-default">
			<div class="panel-heading">
		    	<h4 class="unicase-checkout-title">Your Checkout Progress</h4>
		    </div>
		    <div class="">
				<ul class="nav nav-checkout-progress list-unstyled fs">
					<li>Fill in your details</li>
					<li>Download the generated Bill</li>
				</ul>		
			</div>
		</div>
	</div>
</div> 
<!-- checkout-progress-sidebar -->				
</div>
			</div><!-- /.row -->
		</div><!-- /.checkout-box -->
		

<?php require("footer.php");?>
</body>
</html>