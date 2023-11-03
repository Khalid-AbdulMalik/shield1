<?php 

include('config.php');


if(isset($_POST['upload'])){
    $RATE  = $_POST['rate'];
    $RATE1  = $_POST['rate1'];
    $insert = "INSERT INTO rate (rate , rate1) VALUES ('$RATE','$RATE1')";
    mysqli_query($con, $insert);

}
header('location: index.php')
?>