<?php


function login_process($con, $username, $password)
{
    $sql = "select password from users where username='$username'";
    $result = mysqli_query($con, $sql);

    // var_dump($result);

    foreach ($result as $data) {
        $password_org = $data['password'];
    }


    if ($password == $password_org) {
        return 1;
    } else {
        return 0;
    }
}


function get_user_info($conn, $username)
{
    $sql = "select * from users where username='$username'";
    $result = mysqli_query($conn, $sql);

    return $result;
}


function uploadImage($file)
{
    // Define the upload directory
    $uploadDir = '../../uploads/';

    // Allowed file types
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];

    // Get the file details
    $fileType = $file['type'];
    $fileName = basename($file['name']);
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];

    // Check if file type is allowed
    if (!in_array($fileType, $allowedTypes)) {
        return "Only JPG, PNG, and GIF files are allowed.";
    }

    // Check file size (limit to 5MB in this example)
    if ($fileSize > 5 * 1024 * 1024) { // 5MB
        return "File size exceeds the maximum limit of 5MB.";
    }

    // Generate a unique name for the file
    $uniqueFileName = uniqid() . '_' . $fileName;
    $targetPath = $uploadDir . $uniqueFileName;

    // Move the file to the uploads directory
    if (move_uploaded_file($fileTmpName, $targetPath)) {
        return $targetPath;
    } else {
        return "Error uploading the file.";
    }
}


function addnewproduct($con, $title, $path, $price, $description)
{
    $sql = "INSERT INTO `products` (`id`, `name`, `main_image`, `price`, `description`, `created_at`, `update_at`) VALUES (NULL, '$title', '$path', '$price', '$description', current_timestamp(), current_timestamp());";
    $result = mysqli_query($con, $sql);

    $insertedId = mysqli_insert_id($con);
    return $insertedId;
}


function add_product_gallery($conn, $pid, $path)
{
    $sql = "INSERT INTO `product_gallery` (`id`, `product_id`, `path`, `created_at`, `updated_at`) VALUES (NULL, '$pid', '$path',  current_timestamp(), current_timestamp());";
    $result = mysqli_query($conn, $sql);

    return 1;
}


function show_all_product_info($con)
{

    $sql = "select * from products";
    $result = mysqli_query($con, $sql);

    return $result;
}
