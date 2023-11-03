<?php

session_start();
$admins = array("khalid1001", "abdulmalik1002");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $user = $_POST['username'];
    
    if ( in_array($user, $admins)){
        // If Is Admin
    $_SESSION['user'] = $user;
    
    echo' <a href="admin.php"> لعرض لوحة التحكم اضغط هنا </a> ';
    
}else{
        // If Not Admin
        echo'Error : !! غير مسموح لك بالدخول لهذه الصفحة';
    }

}else{
    echo'Error : !! غير مسموح لك بالدخول لهذه الصفحة';
}


?>