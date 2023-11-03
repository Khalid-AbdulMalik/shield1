<?php

include('config.php');
$ID = $_GET['id'];
mysqli_query($con, "DELETE FROM news WHERE id=$ID");
header('location: news.php')

?>