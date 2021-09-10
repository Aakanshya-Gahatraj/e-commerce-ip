<?php
require("connection.inc.php");
if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN']!=''){
    
  }else{
    header('location:404.php');
    die();
  }

session_start();
unset($_SESSION['product_edit']);
unset($_SESSION['update']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin</title>
    <?php require("cssAndFonts.php");?>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="mb-5">

  <header class="header-style-1">   <!--===== HEADER ===== -->
    
    <div class="top-bar animate-dropdown">   <!-- ====== TOP MENU ======= -->
      <div class="container">
        <div class="header-top-inner">
          <div class="cnt-account">
            <ul class="list-unstyled">
              <li class="myaccount"><a href="#"><span>My Account</span></a></li>
              <li class="login"><a href="login.php"><span>Logout</span></a></li>
            </ul>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>  <!-- ==== TOP MENU : END ==== -->

    <div class="main-header">
      <div class="container">
        <div class="row ">
          <div class="d-flex col-xs-12 col-sm-12 col-md-3 logo-holder">   <!-- ====== LOGO LINE ====== -->
            <div class="logo p-2 flex-grow-1 "> <a href="home.php"> <img src="assets/images/logo.png" alt="logo"> </a> </div>
            <i class="p-2 fa fa-user fa-2x" style = "color:white;"></i>
            <h3 class="p-2" style = "color:white;">Admin</h3>
          </div>  
        </div>
      </div>
    </div>
  </header>

  <?php
  $result= $con->query("SELECT * FROM product")
      or die($con->error);
  ?>

<?php
  if(isset($_SESSION['message'])):?>
    <div class="alert alert-<?php echo $_SESSION['msg_type']?> fs-3">
    <?php
    echo $_SESSION['message'];
    unset($_SESSION['message']);
    ?>
  </div>
  <?php endif;?>

  <div class="container mt-5 ">
      <h2 class="fw-bold ">Products</h2>
      <div class="btn-group" role="group" aria-label="Basic outlined example">
        <a href="form.php"  class="btn btn-outline-dark btn-lg fs-3" >Add new product</a>
      </div>
  </div>


  <div class="container mt-5">
    <div class="row justify-content-center">
        <table class="table table-bordered table-striped table-hover fs-5">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Category_ID</th>
                    <th scope="col">Subcategory_ID</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <?php while($row=$result->fetch_assoc()): ?>
                <tbody>
                  <tr>
                      <th scope="row"><?php echo $row['id']?></th>
                      <td><?php echo $row['name']?></td>
                      <td><?php echo $row['qty']?></td>
                      <td><?php echo $row['price']?></td>
                      <td><?php echo $row['category_id']?></td>
                      <td><?php echo $row['subcategory_id']?></td>
                      <td>
                          <div class="container">
                          <img src='<?php echo $row['image']?>' class="img-thumbnail" alt="thumbnail" width="300px" > 
                          </div>
                      </td>
                      <td><?php echo $row['description']?></td>
                      <td>
                          <a href="form_process.php?edit=<?php echo $row['id'];?>"
                          class="btn btn-info mb-2">Edit</a>
                          <a href="form_process.php?delete=<?php echo $row['id'];?>"
                          class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                  <?php endwhile; ?>
                </tbody>
          </table>
    </div>
  </div>

  <?php
  function pre_r($arr){
      echo '<pre>';
      print_r($arr);
      echo '</pre>';
    }
  ?>

  </div>
  </body>
</html>

 

