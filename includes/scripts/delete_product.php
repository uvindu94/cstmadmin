<?php session_start();

include('../connection.php');
include('../functions.php');

if(!isset($_SESSION['username'])  )
{
header('location: ./login.php');
}
else
{

    $id=$_GET['id'];
    delete_product($conn,$id); 
    header('location: ../../dashboard.php?page=all_products');

}

?>