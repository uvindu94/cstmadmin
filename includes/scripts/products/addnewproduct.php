<?php session_start();

extract($_POST);

include('../../connection.php');
include('../../functions.php');

// echo addnewproduct($conn, $title, $desc, $price, $thumbnail, $gallery1, $gallery2, $gallery3);

$pathmain=uploadImage($_FILES['thumbnail']);



if(empty($title) )
{

    $added_new_id=0;
}
else
{       echo $pathmain;
       $added_new_id=addnewproduct($conn,$title,$pathmain,$price,$desc);
   
}

if(isset($_FILES['gallery1']))
{
    $path1=uploadImage($_FILES['gallery1']);
    $removeslashes = explode("../", $path1);
    $path1 = $removeslashes[3];
    add_product_gallery($conn,$added_new_id,$path1);
}


if(isset($_FILES['gallery2']))
{
    $path2=uploadImage($_FILES['gallery2']);
    $removeslashes = explode("../", $path2);
    $path2 = $removeslashes[3];
    add_product_gallery($conn,$added_new_id,$path2);
}



if(isset($_FILES['gallery3']))
{
    $path3=uploadImage($_FILES['gallery3']);
    $removeslashes = explode("../", $path3);
    $path3 = $removeslashes[3];
    add_product_gallery($conn,$added_new_id,$path3);
}


if($added_new_id>0)
{
$_SESSION['msg']="Product Added Successfully";
}
else
{
    $_SESSION['msg']="Product Added Failed";
}


header("Location: ../../../dashboard.php?page=add_product");
exit;

?>