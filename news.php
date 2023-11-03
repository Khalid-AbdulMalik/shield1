<?php

session_start();
if (isset($_SESSION['user'])) {
    echo'';
}else{
    header('location: no.php');
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> الاخبار المعروضة | Displayed News </title>
    <style>
    h3{
        font-family:'Cairo', sans-serif;
        font-weight: bold;
        color: black;
    }
    .card{
        float: right;
        margin-top: 20px;
        margin-left: 10px;
        margin-right: 10px;        
        margin-bottom: 10px;
        color: #363062;
        background-color: #D0D4CA;
    }
    .card img{
        margin-top: 20px;
        margin-left: 10px;
        margin-right: 10px;
        width: auto;
    }
    main{
        width: 70%;
    }
    body{
        background: url('background11.jpg');
        background-size: 60%;
    }
    .navbar-brand1{
        margin-inline: 1150px;
        text-decoration: none;
        color:whitesmoke;
        font-weight: bold;
    }
    a{
        color: whitesmoke;
    }
    *::-webkit-scrollbar{
        width: 15px;
        height: 5px;
    }
    *::-webkit-scrollbar-track{
        background-color: silver;
    }
    *::-webkit-scrollbar-thumb{
        background-color: teal;
    }

@media screen and (min-width:1px) and (max-width:350px) {
    body{
        background-size: cover;
    }
    .navbar-brand1{
        margin-inline: 80%;
        font-size: 13px;
    }
    .card{
        margin-inline: -12%;
    }

}

@media screen and (min-width:350px) and (max-width:800px) {
    body{
        background-size: auto;
    }
    .navbar-brand1{
        margin-inline: 80%;
        font-size: 13px;
    }
    .card{
        margin-inline: 8%;
    }

}

    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand1" href="admin.php">رجوع</a>
    </nav>
    <center>
        <br>
        <h3>: جميع الاخبار المعروضة بالموقع</h3>
        <br>
    </center>
    <?php
    include('config.php');
    $result = mysqli_query($con, "SELECT * FROM news");
    while($row = mysqli_fetch_array($result)){
        echo "
        <center>
        <main>
            <div class='card' style='width: 15rem;'>
            <img src='$row[image]' class='card-img-top'>
            <div class='card-body'>
            <h5 class='card-title'>$row[name]</h5>
            <p class='card-text'>$row[info1]</p>
            <p class='card-text'>$row[info2]</p>
            <p class='card-text'>$row[info3]</p>
            <p class='card-text'>$row[info4]</p>
            <p class='card-text'>$row[info5]</p>
            <p class='card-text'>$row[info6]</p>
            <br>
            <a href='delete.php? id=$row[id]' class='btn btn-danger'>حذف الخبر</a>
            <a href='update.php? id=$row[id]' class='btn btn-primary'>تعديل الخبر</a>
            </div>
            </div>
            </main>
            <center>
        ";
    }

    ?>

</body>
</html>