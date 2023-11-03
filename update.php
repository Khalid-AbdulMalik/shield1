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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> تعديل الخبر | Update News </title>
    <link rel="stylesheet" href="index.css">
</head>
<style>
input{
    text-align: center;
    color: #141E46;
}
body{
    background: url(background8.jpg);
    background-size: 60%;
}
p{
    color: whitesmoke;
}
h2{
    color:grey;
}
div{
    background-color: whitesmoke;
    box-shadow: black;
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
        .main{
            width: 90%;
        }
        input{
            width: 80%;
        }
    }

@media screen and (min-width:350px) and (max-width:800px) {
        .main{
            width: 90%;
        }
        input{
            width: 90%;
        }
    }

</style>
<body>
    <?php
    include('config.php');
    $ID = $_GET['id'];
    $UP = mysqli_query($con, "SELECT * FROM news WHERE id =$ID");
    $DATA = mysqli_fetch_array($UP);
    ?>
    <center>
        <div class="main">
             <form action="up.php" method= "post" enctype="multipart/form-data">
                <h2> : قم بتعديل الخبر </h2>
                <input type="text" name='id' style='display:none' value='<?php echo $DATA['id'] ?>'>
                <br>
                <input type="text" name='name' value='<?php echo $DATA['name'] ?>'>
                <br>
                <input type="text" name='info1' value='<?php echo $DATA['info1'] ?>'>
                <br>
                <input type="text" name='info2' value='<?php echo $DATA['info2'] ?>'>
                <br>
                <input type="text" name='info3' value='<?php echo $DATA['info3'] ?>'>
                <br>
                <input type="text" name='info4' value='<?php echo $DATA['info4'] ?>'>
                <br>
                <input type="text" name='info5' value='<?php echo $DATA['info5'] ?>'>
                <br>
                <input type="text" name='info6' value='<?php echo $DATA['info6'] ?>'>
                <br>
                <input type="file" id="file" name='image' style='display:none;'>
                <label for="file"> تحديث صورة الخبر </label>
                <button name='update' type='submit'> تعديل الخبر </button>
                <br><br>
                <a href="news.php">عرض كل الاخبار</a>
            </form>
        </div>
        <br><br><br>
        <p>Developer By: KHALID ALFAIFI </p>
    </center>
</body>
</html>