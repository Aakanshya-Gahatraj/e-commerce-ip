<?php
require("connection.inc.php");
// session_destroy();


if($_SERVER["REQUEST_METHOD"]=="GET")
{
    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        $result= $con->query("SELECT * FROM product where id=$id") or die($con->error);
        $row=$result->fetch_array();

        if(isset($_SESSION['cart'])){
            $cardItems=array_column($_SESSION['cart'],'Item_Name');
            if(in_array($row['name'],$cardItems)){
                echo "<script>
                    alert('Item already Added!!!');
                    window.location.href='home.php';
                    </script>";
            }else{
            $count=count($_SESSION['cart']);
            $_SESSION['cart'][$count]=array("Item_Name"=>$row['name'],
            "Item_price"=>$row['price'],"Item_qty"=>1,"Item_pic"=>$row['image']);
            echo "<script>
            alert('Item Added!!!');
            window.location.href='home.php';
            </script>";
            }

        }
        else{
            $_SESSION['cart'][0]=array("Item_Name"=>$row['name'],
            "Item_price"=>$row['price'],"Item_qty"=>1,"Item_pic"=>$row['image']);
            echo "<script>
            alert('Item Added!!!');
            window.location.href='home.php';
            </script>";
        }

    }
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['remove'])){
        foreach($_SESSION['cart'] as $key => $value){
            if($value['Item_Name']== $_POST['Item_Name'])
            {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart']=array_values($_SESSION['cart']);
                echo "<script>
                alert('Item Removed!!!');
                window.location.href='shopping-cart.php';
                </script>";
            }     
        }
    }

}

?>


