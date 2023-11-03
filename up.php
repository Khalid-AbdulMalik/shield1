<?php 

include('config.php');

if(isset($_POST['update'])){
    $ID    = $_POST['id'];
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
    $update          = "UPDATE news SET name ='$NAME' , info1 ='$INFO1', info2 ='$INFO2', info3 ='$INFO3', info4 ='$INFO4', info5 ='$INFO5', info6 ='$INFO6', image ='$image_up' WHERE id=$ID ";
    mysqli_query($con, $update);
    if(MOVE_uploaded_file($image_location,'images/'.$image_name)){
        echo "<script>alert ('تم تحديث الخبر بنجاح')</script>";
    }else{
        echo "<script>alert ('حدثت مشكلة')</script>";    
    }
    header('location: news.php');
 
}


?>