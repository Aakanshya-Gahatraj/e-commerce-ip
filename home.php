<?php
require("connection.inc.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Marazzo eCommerce</title>
    <?php require("cssAndFonts.php");?>
  </head>
  <body class="cnt-home">
    <?php  require("header.php");?>

    <div class="body-content outer-top-vs" id="top-banner-and-menu">
      <div class="container">
        <div class="row">
          <!-- ============================================== SIDEBAR ============================================== -->
          <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
           <?php
           require("sideNavigation.php");
           ?>
            <!-- ============================================== HOT DEALS ============================================== -->
            <div class="sidebar-widget hot-deals outer-bottom-xs">
              <h3 class="section-title">Hot deals</h3>
              <div
                class="
                  owl-carousel
                  sidebar-carousel
                  custom-carousel
                  owl-theme
                  outer-top-ss
                "
              >
                <div class="item">
                  <div class="products">
                    <div class="hot-deal-wrapper">
                      <div class="image">
                        <a href="#">
                          <img src="assets/images/hot-deals/p13.jpg" alt="" />
                          <img
                            src="assets/images/hot-deals/p13_hover.jpg"
                            alt=""
                            class="hover-image"
                          />
                        </a>
                      </div>
                      <div class="sale-offer-tag">
                        <span
                          >49%<br />
                          off</span
                        >
                      </div>
                      <div class="timing-wrapper">
                        <div class="box-wrapper">
                          <div class="date box">
                            <span class="key">120</span>
                            <span class="value">DAYS</span>
                          </div>
                        </div>
                        <div class="box-wrapper">
                          <div class="hour box">
                            <span class="key">20</span>
                            <span class="value">HRS</span>
                          </div>
                        </div>
                        <div class="box-wrapper">
                          <div class="minutes box">
                            <span class="key">36</span>
                            <span class="value">MINS</span>
                          </div>
                        </div>
                        <div class="box-wrapper">
                          <div class="seconds box">
                            <span class="key">60</span>
                            <span class="value">SEC</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.hot-deal-wrapper -->

                    <div class="product-info text-left m-t-20">
                      <h3 class="name">
                        <a href="detail.html">Floral Print Buttoned</a>
                      </h3>
                      <div class="rating rateit-small"></div>
                      <div class="product-price">
                        <span class="price"> $600.00 </span>
                        <span class="price-before-discount">$800.00</span>
                      </div>
                      <!-- /.product-price -->
                    </div>
                    <!-- /.product-info -->

                    <div class="cart clearfix animate-effect">
                      <div class="action">
                        <div class="add-cart-button btn-group">
                          <button
                            class="btn btn-primary icon"
                            data-toggle="dropdown"
                            type="button"
                          >
                            <i class="fa fa-shopping-cart"></i>
                          </button>
                          <button
                            class="btn btn-primary cart-btn"
                            type="button"
                          >
                            Add to cart
                          </button>
                        </div>
                      </div>
                      <!-- /.action -->
                    </div>
                    <!-- /.cart -->
                  </div>
                </div>
                <div class="item">
                  <div class="products">
                    <div class="hot-deal-wrapper">
                      <div class="image">
                        <a href="#">
                          <img src="assets/images/hot-deals/p14.jpg" alt="" />
                          <img
                            src="assets/images/hot-deals/p14_hover.jpg"
                            alt=""
                            class="hover-image"
                          />
                        </a>
                      </div>
                      <div class="sale-offer-tag">
                        <span
                          >35%<br />
                          off</span
                        >
                      </div>
                      <div class="timing-wrapper">
                        <div class="box-wrapper">
                          <div class="date box">
                            <span class="key">120</span>
                            <span class="value">Days</span>
                          </div>
                        </div>
                        <div class="box-wrapper">
                          <div class="hour box">
                            <span class="key">20</span>
                            <span class="value">HRS</span>
                          </div>
                        </div>
                        <div class="box-wrapper">
                          <div class="minutes box">
                            <span class="key">36</span>
                            <span class="value">MINS</span>
                          </div>
                        </div>
                        <div class="box-wrapper">
                          <div class="seconds box">
                            <span class="key">60</span>
                            <span class="value">SEC</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.hot-deal-wrapper -->

                    <div class="product-info text-left m-t-20">
                      <h3 class="name">
                        <a href="detail.html">Floral Print Buttoned</a>
                      </h3>
                      <div class="rating rateit-small"></div>
                      <div class="product-price">
                        <span class="price"> $600.00 </span>
                        <span class="price-before-discount">$800.00</span>
                      </div>
                      <!-- /.product-price -->
                    </div>
                    <!-- /.product-info -->

                    <div class="cart clearfix animate-effect">
                      <div class="action">
                        <div class="add-cart-button btn-group">
                          <button
                            class="btn btn-primary icon"
                            data-toggle="dropdown"
                            type="button"
                          >
                            <i class="fa fa-shopping-cart"></i>
                          </button>
                          <button
                            class="btn btn-primary cart-btn"
                            type="button"
                          >
                            Add to cart
                          </button>
                        </div>
                      </div>
                      <!-- /.action -->
                    </div>
                    <!-- /.cart -->
                  </div>
                </div>
                <div class="item">
                  <div class="products">
                    <div class="hot-deal-wrapper">
                      <div class="image">
                        <a href="#">
                          <img src="assets/images/hot-deals/p15.jpg" alt="" />
                          <img
                            src="assets/images/hot-deals/p15_hover.jpg"
                            alt=""
                            class="hover-image"
                          />
                        </a>
                      </div>
                      <div class="sale-offer-tag">
                        <span
                          >35%<br />
                          off</span
                        >
                      </div>
                      <div class="timing-wrapper">
                        <div class="box-wrapper">
                          <div class="date box">
                            <span class="key">120</span>
                            <span class="value">Days</span>
                          </div>
                        </div>
                        <div class="box-wrapper">
                          <div class="hour box">
                            <span class="key">20</span>
                            <span class="value">HRS</span>
                          </div>
                        </div>
                        <div class="box-wrapper">
                          <div class="minutes box">
                            <span class="key">36</span>
                            <span class="value">MINS</span>
                          </div>
                        </div>
                        <div class="box-wrapper">
                          <div class="seconds box">
                            <span class="key">60</span>
                            <span class="value">SEC</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.hot-deal-wrapper -->

                    <div class="product-info text-left m-t-20">
                      <h3 class="name">
                        <a href="detail.html">Floral Print Buttoned</a>
                      </h3>
                      <div class="rating rateit-small"></div>
                      <div class="product-price">
                        <span class="price"> $600.00 </span>
                        <span class="price-before-discount">$800.00</span>
                      </div>
                      <!-- /.product-price -->
                    </div>
                    <!-- /.product-info -->

                    <div class="cart clearfix animate-effect">
                      <div class="action">
                        <div class="add-cart-button btn-group">
                          <button
                            class="btn btn-primary icon"
                            data-toggle="dropdown"
                            type="button"
                          >
                            <i class="fa fa-shopping-cart"></i>
                          </button>
                          <button
                            class="btn btn-primary cart-btn"
                            type="button"
                          >
                            Add to cart
                          </button>
                        </div>
                      </div>
                      <!-- /.action -->
                    </div>
                    <!-- /.cart -->
                  </div>
                </div>
              </div>
              <!-- /.sidebar-widget -->
            </div>
            <!-- ============================================== HOT DEALS: END ============================================== -->

           </div>
          <!-- /.sidemenu-holder -->
          <!-- ============================================== SIDEBAR : END ============================================== -->

          <!-- ============================================== CONTENT ============================================== -->
         
          <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
            
            <div id="hero"> <!-- ====== SECTION – HERO ====== -->
              <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                <div
                  class="item"
                  style="background-image: url(https://images.pexels.com/photos/7871181/pexels-photo-7871181.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940)"
                >
                  <div class="container-fluid">
                    <div class="caption bg-color vertical-center text-right">
                      <div class="slider-header fadeInDown-1">Top Brands</div>
                      <div class="big-text fadeInDown-1">New Collections</div>
                      <div class="button-holder fadeInDown-3">
                        <a
                          href="categoryAll.php"
                          class="
                            btn-lg btn btn-uppercase btn-black
                            shop-now-button
                          "
                          >Shop Now</a
                        >
                      </div>
                    </div>
                    <!-- /.caption -->
                  </div>
                  <!-- /.container-fluid -->
                </div>
                <!-- /.item -->

                <div
                  class="item"
                  style="background-image: url(https://images.pexels.com/photos/7871178/pexels-photo-7871178.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940)"
                >
                  <div class="container-fluid">
                    <div class="caption bg-color vertical-center text-left">
                      <div class="slider-header fadeInDown-1">Spring 2018</div>
                      <div class="big-text fadeInDown-1">Women Fashion</div>
                      <div class="excerpt fadeInDown-2 hidden-xs">
                      </div>
                      <div class="button-holder fadeInDown-3">
                        <a href="categoryAll.php"
                          class="btn-lg btn btn-uppercase btn-black shop-now-button"
                          >Shop Now</a>
                      </div>
                    </div>
                    <!-- /.caption -->
                  </div>
                  <!-- /.container-fluid -->
                </div>
                <!-- /.item -->
              </div>
              <!-- /.owl-carousel -->
            </div>

            <!-- ========================================= SECTION – HERO : END ========================================= -->

            <!-- ====== SCROLL TABS ======== -->

            <div id="product-tabs-slider" class="scroll-tabs outer-top-vs">
              <div class="more-info-tab clearfix">
                <h3 class="new-product-title pull-left">New Products</h3>
                <ul
                  class="nav nav-tabs nav-tab-line pull-right"
                  id="new-products-1">
                  <li>
                    <a
                      href="categoryAll.php"
                      >View More</a>
                  </li>
                  
                </ul>
                <!-- /.nav-tabs -->
              </div>

              
              <div class="tab-content outer-top-xs">        <!--===== New products ====-->
                  <div class="product-slider">
                    <div
                      class="
                        owl-carousel
                        home-owl-carousel
                        custom-carousel
                        owl-theme
                      "
                    >
                   
                    <?php include "productsCard.php";

                    $result=$con->query("SELECT * FROM product LIMIT 7") or die($con->error);
                    $solutions = array();

                      
                    while($row =$result->fetch_assoc()) {
                    $solutions[] = $row;
                    }

                    ?>
                  
                    <?php
                    for ($i=0; $i<7 ; $i++) { ?>
                      <div class="item item-carousel">
                    <?php
                      echo card($solutions[$i]);?>
                      </div>
                    <?php
                    }
                    ?>
                      
                    </div>
                    <!-- /.home-owl-carousel -->
                  </div>
                  <!-- /.product-slider -->

            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.scroll-tabs -->

            <!-- ============================================== SCROLL TABS : END ============================================== -->
           
           
            <!-- ============================================== WIDE PRODUCTS ============================================== -->
            <div class="wide-banners outer-bottom-xs">
              <div class="row">
                <div class="col-md-4 col-sm-4">
                  <div class="wide-banner cnt-strip">
                    <div class="image">
                      <img
                        class="img-responsive"
                        src="assets/images/banners/home-banner1.jpg"
                        alt=""
                      />
                    </div>
                  </div>
                  <!-- /.wide-banner -->
                </div>

                <div class="col-md-4 col-sm-4">
                  <div class="wide-banner cnt-strip">
                    <div class="image">
                      <img
                        class="img-responsive"
                        src="assets/images/banners/home-banner3.jpg"
                        alt=""
                      />
                    </div>
                  </div>
                  <!-- /.wide-banner -->
                </div>

                <!-- /.col -->
                <div class="col-md-4 col-sm-4">
                  <div class="wide-banner cnt-strip">
                    <div class="image">
                      <img
                        class="img-responsive"
                        src="assets/images/banners/home-banner2.jpg"
                        alt=""
                      />
                    </div>
                  </div>
                  <!-- /.wide-banner -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.wide-banners -->

            <!-- ============================================== WIDE PRODUCTS : END ============================================== -->
         </div>
          <!-- /.homebanner-holder -->
          <!-- ============================================== CONTENT : END ============================================== -->
        </div>
        <!-- /.row -->


    <?php require("footer.php");?>
</body>
</html>