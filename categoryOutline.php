<?php
require("connection.inc.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Categories</title>
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
          </ul>
        </div>
        <!-- /.breadcrumb-inner -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.breadcrumb -->
    <div class="body-content outer-top-xs">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
            <?php
            require("sideNavigation.php");
            ?>
          </div>
          <!-- /.sidebar -->

            <!-- ========================================== SECTION – HERO ========================================= -->

          <div class="col-xs-12 col-sm-12 col-md-9 rht-col">

            <div class="clearfix filters-container m-t-10">
              <div class="row">

                    <div class="col col-sm-6 col-md-3 col-lg-3 col-xs-6">
                      <div class="filter-tabs">
                        <ul
                          id="filter-tabs"
                          class="nav nav-tabs nav-tab-box nav-tab-fa-icon"
                        >
                          <li class="active">
                            <a data-toggle="tab" href="#grid-container"
                              ><i class="icon fa fa-th-large"></i>Grid</a
                            >
                          </li>
                        </ul>
                      </div>
                      <!-- /.filter-tabs -->
                    </div>
                    <!-- /.col -->


                       <!-- ====== SCROLL TABS ======== -->

                      <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
                      <li ><a href="categoryAll.php">All</a></li>
                      <li ><a href="Clothing.php">Clothing</a></li>
                      <li ><a href="Accessories.php" >Accessories</a></li>
                      <li ><a href="Shoes.php" >Shoes</a></li>
                      </ul>

                <!-- /.row -->
              </div>
            </div>
                      <div class="search-result-container">
                        <div id="myTabContent" class="tab-content category-list">
                        <div class="active" id="clothing">
                            <div class="category-product">   
                                <div class="row">
              

