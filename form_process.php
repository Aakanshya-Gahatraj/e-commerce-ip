<?php
require("connection.inc.php");

$id=0;
$name=$description=$image=$str="";
$price=0.0;
$qty=$category_id=$subcategory_id=0;
$update=false;

if(isset($_POST["exit"])){
    header('location:admin.php');
}

if(isset($_POST["save"])){
    $name=$_POST['name'];
    $qty=intval($_POST['qty']);
    $price=floatval($_POST['price']);
    $category_id=intval($_POST['category']);
    $subcategory_id=intval($_POST['subcategory']);
    $image=$_POST['img'];
    $description=$_POST['descrip'];

    $con->query("INSERT INTO product(name,qty,price,category_id,subcategory_id,image,description)
    VALUES('$name',$qty,$price,$category_id,$subcategory_id,'$image','$description')")
    or die($con->error);

    $_SESSION['message']="Record has been saved!";
    $_SESSION['msg_type']="success";
    header('location:admin.php');
}

if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $con->query("DELETE FROM product where id=$id") or die($con->error);

    $_SESSION['message']="Record has been deleted!";
    $_SESSION['msg_type']="danger";
    header('location:admin.php');
}

if(isset($_GET['edit'])){
    $id=$_GET['edit'];
    $update=true;
    $result= $con->query("SELECT * FROM product where id=$id") or die($con->error);
    if($result->num_rows ==1){
        $row=$result->fetch_array();
        // echo var_dump($row);
        $_SESSION['product_edit']=$row;
        $_SESSION['update']=$update;
        header('location:form.php');

    }else{
        echo "no such value";
    }
}

if(isset($_POST['update'])){
    $id=intval($_POST['id']);
    $name=$_POST['name'];
    $qty=intval($_POST['qty']);
    $price=floatval($_POST['price']);
    $category_id=intval($_POST['category']);
    $subcategory_id=intval($_POST['subcategory']);
    $image=$_POST['img'];
    $description=$_POST['descrip'];

    $con->query("UPDATE product SET name='$name',qty=$qty,price=$price,category_id=$category_id,
    subcategory_id=$subcategory_id,image='$image',description='$description' WHERE id=$id")
    or die($con->error);

    $_SESSION['message']="Record has been updated!";
    $_SESSION['msg_type']="warning";
    header('location:admin.php');
}

// if(isset($_POST['cart'])){
//     $id=$_GET['edit'];
//     $update=true;
//     $result= $con->query("SELECT * FROM product where id=$id") or die($con->error);
//     if($result->num_rows ==1){
//         $row=$result->fetch_array();
//         // echo var_dump($row);
//         $_SESSION['product_edit']=$row;
//         $_SESSION['update']=$update;
//         header('location:form.php');

//     }else{
//         echo "no such value";
//     }
// }

if(isset($_POST['search'])){
    $str=$_POST['string'];
    echo var_dump($str);
    echo "<br>";

    $result=$con->query("SELECT * FROM product WHERE name LIKE '%$str%'
    OR description LIKE '%$str%' " ) or die($con->error);

    $solutions = array();

    if($result->num_rows>0){
        while($row =$result->fetch_assoc()) {
            $solutions[] = $row;
            }
       
        $_SESSION['searched']=$solutions;
        header('location:categorySearch.php');
    }else{
        header('location:404.php');
    }
}

?>