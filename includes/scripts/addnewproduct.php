<?php session_start();

extract($_POST);

include('../connection.php');
include('../functions.php');

// echo addnewproduct($conn, $title, $desc, $price, $thumbnail, $gallery1, $gallery2, $gallery3);

$pathmain=uploadImage($_FILES['thumbnail']);


if(empty($title) )
{

    $added_new_id=0;
}
else
{    $added_new_id=addnewproduct($conn,$title,$pathmain,$price,$desc);
   
}

if(isset($_FILES['gallery1']))
{
    $path1=uploadImage($_FILES['gallery1']);
    add_product_gallery($conn,$added_new_id,$path);
}


if(isset($_FILES['gallery2']))
{
    $path2=uploadImage($_FILES['gallery2']);
    add_product_gallery($conn,$added_new_id,$path);
}



if(isset($_FILES['gallery3']))
{
    $path3=uploadImage($_FILES['gallery3']);
    add_product_gallery($conn,$added_new_id,$path);
}


if($added_new_id>0)
{
$_SESSION['msg']="Product Added Successfully";
}
else
{
    $_SESSION['msg']="Product Added Failed";
}


header("Location: ../../dashboard.php?page=add_product");
exit;

?>