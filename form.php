<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php require "form_process.php";
    require("connection.inc.php");
    $row=$_SESSION['product_edit'];
    $update= $_SESSION['update'];
    ?>

<header class="header-style-1 p-4" style="background-color:#157ed2;">   <!--===== HEADER ===== -->

    <div class="main-header">
      <div class="container">
        <div class="row ">
          <div class="d-flex col-xs-12 col-sm-12 col-md-3 logo-holder">   <!-- ====== LOGO LINE ====== -->
            <div class="logo p-2 flex-grow-1 "> <a href="home.php"> <img src="assets/images/logo.png" alt="logo"> </a> </div>
          </div>  
        </div>
      </div>
    </div>
  </header>

    <div class="row  justify-content-center  ">
    <form class="mt-4 gap-3 d-flex flex-column w-50 border border-dark rounded p-4 bg-light" action="form_process.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $row[$id];?>">
      
        <div class="form-group">
        <label>Product's Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo $row['name'];?>" placeholder="Enter the product's name">
        </div>
        <div class="form-group">
        <label>Quantity</label>
        <input type="text" name="qty" class="form-control"  value="<?php echo intval($row['qty']);?>" placeholder="Enter the quantity">
        </div>
        <div class="form-group">
        <label>Price</label>
        <input type="text" name="price" class="form-control"  value="<?php echo floatval($row['price']);?>" placeholder="Enter the price">
        </div>
        <div class="form-group">
        <div class="category">
        <label>Select:</label><br>
        <label>Category:</label>
        <input type="radio" name="category" id="W"  <?php if($row['category_id']=='1'){echo "checked";}?> value=1>
        <label for="W">Women's Fashion  </label>
        <input type="radio" name="category" id="M" <?php if($row['category_id']=='2'){echo "checked";}?> value=2 >
        <label for="M">Men's Fashion    </label>
        <input type="radio" name="category" id="K"  <?php if($row['category_id']=='3'){echo "checked";}?>value=3 >
        <label for="K">Kid's Fashion</label>
        </div>

        <div class="subcategory">
        <label>Sub-category:</label>
        <input type="radio" name="subcategory" id="C" <?php if($row['subcategory_id']==1){echo "checked";}?> value=1>
        <label for="C">Clothes</label>
        <input type="radio" name="subcategory" id="A" <?php if($row['subcategory_id']==2){echo "checked";}?> value=2 >
        <label for="A">Accessories</label>
        <input type="radio" name="subcategory" id="S" <?php if($row['subcategory_id']==3){echo "checked";}?> value=3 >
        <label for="S">Shoes</label>
        </div>
        </div>
        <div class="form-group">
        <label>Image</label>
        <input type="text" name="img" class="form-control"  value="<?php echo $row['image'];?>" placeholder="Enter the image url">
        </div>
        <div class="form-group">
        <label>Product Description</label>
        <input type="text" name="descrip" class="form-control"  value="<?php echo $row['description'];?>" placeholder="Enter description">
        </div>
        <div class="form-group">
          <?php
          if ($update==true):
          ?>
        <button type="submit" class="btn btn-info" name="update">Update</button>
        <?php else: ?>
        <button type="submit" class="btn btn-primary" name="save">Save</button>
        <?php endif; ?>
        <button type="submit" class="btn btn-primary" name="exit">Exit</button>
        </div>
    </form>
    </div>

</body>
</html>