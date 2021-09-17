<?php  

// echo var_dump($_COOKIE['total']);
session_start();

$_SESSION['total']=$_COOKIE['total'];

echo "<script>
         window.location.href='shopping-cart.php';
    </script>";
?>