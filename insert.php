<?php 

include('config.php');


if(isset($_POST['upload'])){
    $NAME  = $_POST['name'];
    $INFO1  = $_POST['info1'];
    $INFO2  = $_POST['info2'];
    $INFO3  = $_POST['info3'];
    $INFO4  = $_POST['info4'];
    $INFO5  = $_POST['info5'];
    $INFO6  = $_POST['info6'];
    $IMAGE = $_FILES['image'];
    $image_location  = $_FILES['image']['tmp_name'];
    $image_name      = $_FILES['image']['name'];
    $image_up        = "images/".$image_name;
    $insert = "INSERT INTO news (name , info1 , info2 , info3 , info4 , info5 , info6 , image) VALUES ('$NAME','$INFO1','$INFO2','$INFO3','$INFO4','$INFO5','$INFO6','$image_up')";
    mysqli_query($con, $insert);
    if(MOVE_uploaded_file($image_location,'images/'.$image_name)){
        echo "<script>alert ('تم رفع الخبر بنجاح')</script>";
    }else{
        echo "<script>alert ('! حدثت مشكلة')</script>";    
    } 

}
header('location: admin.php')
?>