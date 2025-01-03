<?php session_start();


include('../connection.php');
include('../functions.php');

extract($_POST);

$login_s = login_process($conn, $username, $password);


if ($login_s == 1) {
    // redirect to dashbaord
    $info = get_user_info($conn, $username);

    foreach ($info as $data) {
        # code...
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['role'] = $role;
    }


    header("Location: ../../dashboard.php");
    exit; // Ensure no further code is executed after the redirect
} else {
    //redirect to login with mesg session
    $_SESSION['msg']="Login Failed.. please check username and password";
    header("Location: ../../login.php");
    exit; // Ensure no further code is executed after the redirect
 
}
