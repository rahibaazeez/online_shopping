<?php
include "connction.php";
$id=$_GET['id'];
$sql=mysqli_query($conn,"DELETE FROM products WHERE p_id='$id'");

    if($sql)
    {
        echo '<script> alert("deleted sucessfully");window.location.href="view_product.php";</script>';
    }
    else{
        echo '<script> alert("something went wrong");</script>';

    }

?>