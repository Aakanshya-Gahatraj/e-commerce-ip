<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Marazzo eCommerce</title>
    <?php require("connection.inc.php");
    require("cssAndFonts.php");
    require("form_process.php");?>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  </head>

  <body class="cnt-home">
<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1"> 
  
     <!-- ============================================== TOP MENU ============================================== -->
  <div class="top-bar animate-dropdown">
    <div class="container">
      <div class="header-top-inner">
        <div class="cnt-account">
          <ul class="list-unstyled">
            <!-- <li class="myaccount"><a href="#"><span>My Account</span></a></li> -->
            <li class="header_cart hidden-xs"><a href="shopping-cart.php"><span>My Cart</span></a></li>
            <li class="check"><a href="checkout.php"><span>Checkout</span></a></span></li>
            <li class="login"><a href="login.php"><span>Login</span></a></li>
          </ul>
        </div>
        <!-- /.cnt-account -->
        
        <div class="cnt-block">
          <ul class="list-unstyled list-inline">
            <li class="dropdown dropdown-small"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">USD </span><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">USD</a></li>
                <li><a href="#">NRS</a></li>
              </ul>
            </li>
          </ul>
          <!-- /.list-unstyled --> 
        </div>
        <!-- /.cnt-cart -->
      </div>
      <!-- /.header-top-inner --> 
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.header-top --> 
  <!-- ============================================== TOP MENU : END ============================================== -->
  <div class="main-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 logo-holder"> 
          <!-- ============================================================= LOGO ============================================================= -->
          <div class="logo"> <a href="home.php"> <img src="assets/images/logo.png" alt="logo"> </a> </div>
          <!-- /.logo --> 
          <!-- ============================================================= LOGO : END ============================================================= --> </div>
        <!-- /.logo-holder -->
        
        <div class="col-lg-7 col-md-6 col-sm-8 col-xs-12 top-search-holder"> 
          <!-- /.contact-row --> 
          <!-- ============================================================= SEARCH AREA ============================================================= -->
          <div class="search-area" >
            <form action=form_process.php method="POST">
              <div class="control-group">
                <ul class="categories-filter animate-dropdown">
                  <li class="dropdown"> <a class="dropdown-toggle"  data-toggle="dropdown" >Categories <b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu" >
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="categoryWomen.php">- Women's Fashion</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="categoryMen.php">- Men's Fashion</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="categoryKids.php">- Kids Fashion</a></li>
                    </ul>
                  </li>
                </ul>
                <input type="textbox" class="search-field" name="string" placeholder="Search here..." />
                <input type="submit" name="search" value="search">
                <!-- <a class="search-button" name="search"></a> -->
                <!-- <button type="submit" class="fa fa-search" name="search">Search</button> -->
              </div>
            </form>
          </div>
          <script>
          function ContentPage(name){
            location.href = "searchDetail.php?name="+name;}
        </script>
          <!-- /.search-area --> 
          <!-- ============================================================= SEARCH AREA : END ============================================================= --> </div>
        <!-- /.top-search-holder -->
        
        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 animate-dropdown top-cart-row"> 
          <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
          

          <?php
          $total=$_SESSION['total'];

          if(isset($_SESSION['cart'])){
            $count= count($_SESSION['cart']);
          }
          
          ?>

          <div class="dropdown dropdown-cart"> <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
            <div class="items-cart-inner">
              <div class="basket" onclick="openCart(this.id)" id="on">
              <div class="basket-item-count"><span class="count"><?php echo $count;?></span></div>
              <div class="total-price-basket"> <span class="lbl">Shopping Cart</span> <span class="value">
                <?php echo $total; ?>
                </span> </span> </div>
              </div>
            </div>
            </a>

            
            <!-- /.dropdown-menu--> 
          </div>
          <!-- /.dropdown-cart --> 
          
          <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= --> </div>
        <!-- /.top-cart-row --> 
      </div>
      <!-- /.row --> 
      
    </div>
    <!-- /.container --> 
    
  </div>
  <!-- /.main-header --> 

  <script>
    function openCart(id){
    location.href = "shopping-cart.php?id="+id;}
  </script>
  
  <!-- ============================================== NAVBAR ============================================== -->
  <div class="header-nav animate-dropdown">
    <div class="container">
      <div class="yamm navbar navbar-default" role="navigation">
        <div class="navbar-header">
       <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> 
       <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="nav-bg-class">
          <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
            <div class="nav-outer">
              <ul class="nav navbar-nav">
                <li class="active dropdown"> <a href="home.php">Home</a> </li>
                <li class="dropdown yamm mega-menu"> <a href="#" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Women's Fashion<span class="menu-label hot-menu hidden-xs">hot</span> </a>
                  <ul class="dropdown-menu container">
                    <li>
                      <div class="yamm-content ">
                        <div class="row">
                          <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                            <h2 class="title">Clothing</h2>
                            <ul class="links">
                              <li><a href="#">Tshirt</a></li>
                              <li><a href="#">Dresses </a></li>
                              <li><a href="#">Jackets</a></li>
                              <li><a href="#">Skirts</a></li>
                            </ul>
                          </div>
                          <!-- /.col -->
                          
                          <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                            <h2 class="title">Accessories</h2>
                            <ul class="links">
                              <li><a href="#">Handbags</a></li>
                              <li><a href="#">Jwellery</a></li>
                              <li><a href="#">Hat</a></li>
                            </ul>
                          </div>
                          <!-- /.col -->
                          
                          <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                            <h2 class="title">Shoes</h2>
                            <ul class="links">
                              <li><a href="#">Heels</a></li>
                              <li><a href="#">Flats</a></li>
                              <li><a href="#">Sport Shoes</a></li>
                            </ul>
                          </div>
                          <!-- /.col -->
                          
                          
                          <div class="col-xs-12 col-sm-6 col-md-4 col-menu banner-image"> <img class="img-responsive" src="assets/images/banners/womenClothing.jpg" alt=""> </div>
                          <!-- /.yamm-content --> 
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <li class="dropdown mega-menu"> 
                <a href="#"  data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Men's Fashion</a>
                  <ul class="dropdown-menu container">
                    <li>
                      <div class="yamm-content">
                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                            <h2 class="title">Clothing</h2>
                            <ul class="links">
                              <li><a href="#">Tshirt</a></li>
                              <li><a href="#">Jackets</a></li>
                              <li><a href="#">Shirt</a></li>
                              <li><a href="#">Pant</a></li>
                            </ul>
                          </div>
                          <!-- /.col -->
                          
                          <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                            <h2 class="title">Accessories</h2>
                            <ul class="links">
                              <li><a href="#">Watches</a></li>
                              <li><a href="#">Glasses</a></li>
                              <li><a href="#">Perfumes</a></li>
                            </ul>
                          </div>
                          <!-- /.col -->
                          
                          <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                            <h2 class="title">Shoes</h2>
                            <ul class="links">
                              <li><a href="#">Casual Shoes</a></li>
                              <li><a href="#">Dress Shoes</a></li>
                              <li><a href="#">Boots</a></li>
                            </ul>
                          </div>
                          <!-- /.col -->
                         
                          <div class="col-xs-12 col-sm-12 col-md-4 col-menu custom-banner"> <a href="#"><img alt="" src="assets/images/banners/MenClothing.jpg"></a> </div>
                        </div>
                        <!-- /.row --> 
                      </div>
                      <!-- /.yamm-content --> </li>
                  </ul>
                </li>
                <li class="dropdown mega-menu">                 
                  <a href="#"  data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Kids Clothing</a>
                  <ul class="dropdown-menu container">
                    <li>
                      <div class="yamm-content">
                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                            <h2 class="title">Clothing</h2>
                            <ul class="links">
                              <li><a href="#">Tshirt</a></li>
                              <li><a href="#">Frock</a></li>
                              <li><a href="#">Onesies</a></li>
                            </ul>
                          </div>
                          <!-- /.col -->
                          
                          <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                            <h2 class="title">Accessories</h2>
                            <ul class="links">
                              <li><a href="#">Hairclips</a></li>
                              <li><a href="#">Socks</a></li>
                            </ul>
                          </div>
                          <!-- /.col -->
                          
                          <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                            <h2 class="title">Shoes</h2>
                            <ul class="links">
                              <li><a href="#">Casual Shoes</a></li>
                              <li><a href="#">Crocs</a></li>
                            </ul>
                          </div>

                          <div class="col-xs-12 col-sm-12 col-md-4 col-menu custom-banner"> <a href="#"><img alt="" src="assets/images/banners/kidsClothing.jpg"></a> </div>
                        </div>
                        <!-- /.row --> 
                      </div>
                      <!-- /.yamm-content --> </li>
                  </ul>
                </li>


                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Pages</a>
                  <ul class="dropdown-menu pages">
                    <li>
                      <div class="yamm-content">
                        <div class="row">
                          <div class="col-xs-12 col-menu">
                            <ul class="links">
                              <li><a href="home.php">Home</a></li>
                              <li><a href="categoryAll.php">Category</a></li>
                              <li><a href="shopping-cart.php">Shopping Cart Summary</a></li>
                              <li><a href="checkout.php">Checkout</a></li>
                              <li><a href="login.php">Login</a></li>
                              <li><a href="faq.php">FAQ</a></li>
                              <li><a href="404.php">404</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <li class="dropdown  navbar-right special-menu"> <a href="#">Get 30% off on selected items</a> </li>
              </ul>
              <!-- /.navbar-nav -->
              <div class="clearfix"></div>
            </div>
            <!-- /.nav-outer --> 
          </div>
          <!-- /.navbar-collapse --> 
          
        </div>
        <!-- /.nav-bg-class --> 
      </div>
      <!-- /.navbar-default --> 
    </div>
    <!-- /.container-class --> 
    
  </div>
  <!-- /.header-nav --> 
  <!-- ============================================== NAVBAR : END ============================================== --> 
  
</header>
