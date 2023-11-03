<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> الصفحة الرئيسية | Home </title>
    <style>
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
    a{
        text-decoration: none;
        font-size: 20px;
        color: whitesmoke;
        font-weight: bold;
        font-family:'Cairo', sans-serif;
    }
    p1{
        color: whitesmoke;
    }
    body{
        background: url('background9.jpg');
        background-size: 100%;
    }
    p{
        font-family: 'Cairo', sans-serif;
        color: whitesmoke;
        margin-left: 50px;
        margin-right: 50px;
        font-size: 25px;
    }
    h2{
        font-family: 'Cairo', sans-serif;
        color: whitesmoke;
        font-weight: bold;
        margin-left: 60%;
    }
    h3{
        font-family: 'Cairo', sans-serif;
        color: whitesmoke ;
        font-weight: bold;
    }
    h5{
        font-family: 'Cairo', sans-serif;
        font-weight: bold;
    }
    .navbar-brand1{
        margin-left: 50px;
        text-decoration: none;
        color:whitesmoke;
    }
    .navbar-brand2{
        margin-right: 58px;
        text-decoration: none;
        color:whitesmoke;
    }
    .navbar-brand3{
        margin-right: 68px;
        text-decoration: none;
        color:whitesmoke;
    }
    .a{
        color: darkblue;
    }
    input{
        text-align: center;
        color: #141E46;
        margin-left: 60%;
        margin-inline-start: auto;
    }
    main{
        margin-bottom: 10px;
        font-size: 10px;
    }
    button{
        border: none;
        padding: 10px;
        font-weight: bold;
        font-size: 15px;
        background-color: darkred;
        cursor: pointer;
        font-family:'Cairo', sans-serif;
        margin-bottom: 15px;
        margin-left: 60%;
        color: black;
    }
    .box{
        margin-left: 60%;
        width: 15rem;
    }
    .card{
        margin-left: 60%;
    }
    img {
        font-family: 'Cairo', sans-serif;
        color: whitesmoke;
        font-weight: bold;
        margin-left: 60%;
    }
    .rate1 {
        margin-left: 74%;
        display: flex;
        flex-direction: row-reverse;
        float: left
    }
    .rate1>input {
        display: none
    }
    .rate1>label {
        position: relative;
        width: 30px;
        font-size: 45px;
        color: #EDE4FF;
        cursor: pointer;
    }
    .rate1>label::before {
        content: "\2605";
        position: absolute;
        opacity: 0
    }
    .rate1>label:hover:before,
    .rate1>label:hover~label:before {
        opacity: 1 !important
    }
    .rate1>input:checked~label:before {
        opacity: 1
    }

    @media screen and (min-width:1px) and (max-width:350px) {
        img{
            margin-inline: 1%;
        }
        .main{
            width: 90%;
        }
        input{
            width: 90%;
        }
        .navbar-brand1{
            margin-inline: 3%;
            font-size: 13px;
        }
        .navbar-brand2{
            margin-right: 30px;
            font-size: 13px;
        }
        .navbar-brand3{
            margin-right: 3%;
            font-size: 13px;
        }
        h2{
            margin-inline: 1%;
        }
        h3{
            margin-inline: 1%;
        }
        p{
            margin-inline: 1%;
        }
        .box{
            margin-inline: 1%;
        }
        .rate1{
            margin-inline: 19%;
        }
        button{
            margin-inline: 1%;
        }
        .card{
            margin-inline: 1%;
        }
    }

    @media screen and (min-width:350px) and (max-width:800px) {
        img{
            margin-inline: 1%;
        }
        .main{
            width: 90%;
        }
        input{
            width: 90%;
        }
        .navbar-brand1{
            margin-inline: 3%;
            font-size: 13px;
        }
        .navbar-brand2{
            margin-right: 30px;
            font-size: 13px;
        }
        .navbar-brand3{
            margin-right: 3%;
            font-size: 13px;
        }
        h2{
            margin-inline: 1%;
        }
        h3{
            margin-inline: 1%;
        }
        p{
            margin-inline: 1%;
        }
        .box{
            margin-inline: 1%;
        }
        .rate1{
            margin-inline: 25%;
        }
        button{
            margin-inline: 1%;
        }
        .card{
            margin-inline: 1%;
        }
    }
    @media screen and (min-width:600px) and (max-width:1200px) {
        img{
            margin-inline: 1%;
        }
        .main{
            width: 90%;
        }
        input{
            margin-inline-start: 250%;
        }
        .navbar-brand1{
            margin-inline: 3%;
            font-size: 17px;
        }
        .navbar-brand2{
            margin-right: 30px;
            font-size: 17px;
        }
        .navbar-brand3{
            margin-right: 3%;
            font-size: 17px;
        }
        h2{
            margin-inline: 1%;
        }
        h3{
            margin-inline: 1%;
        }
        p{
            margin-inline: 1%;
        }
        .box{
            margin-inline: 1%;
        }
        .rate1{
            margin-inline-start: 39%;
        }
        button{
            margin-inline: 25%;
        }
        .card{
            margin-inline: 1%;
        }
    }





    </style>
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand1" href="home.php"> حسابي | My Account </a>
            <a class="navbar-brand2" href="About Us.html"> عنا</a>
            <a class="navbar-brand3" href="info.php"> الاخبار الأمنية </a>
        </nav>
        <center>
            <br>
            <h3> : الصفحة الرئيسية</h3>
            <div class="main">
                <div class="main">
                    <form action="rate.php" method= "post" enctype="multipart/form-data">
                        <img src="Shield_Logo.png" alt="logo" width="15%" >
                        <br><br>
                        <h2>: قم بإضافة تقييم </h2>
                        <br>
                        <input type="text" name='rate'required placeholder=" : اكتب تقييمك هنا" class="box">
                        <br>
                        <div class="rate1">
                            <input type="radio" name="rate1" value="★★★★★" id="5"><label for="5">☆</label>
                            <input type="radio" name="rate1" value="★★★★" id="4"><label for="4">☆</label>
                            <input type="radio" name="rate1" value="★★★" id="3"><label for="3">☆</label>
                            <input type="radio" name="rate1" value="★★" id="2"><label for="2">☆</label>
                            <input type="radio" name="rate1" value="★" id="1"><label for="1">☆</label>
                        </div> 
                        <br><br>
                        <button name='upload'>إرسال</button>
                        <br><br>
                    </form>
                </div>
            </form>
        </div>
<?php
include('config.php');
$result = mysqli_query($con, "SELECT * FROM rate");
while($row = mysqli_fetch_array($result)){
    echo "
    <center>
    <main>
    <div class='card' style='width: 12rem;'>
    <div class='card-body'>
    <h5 class='card-title'>$row[rate]</h5>  
    <h5 class='card-title'>$row[rate1]</h5>
    <br>
    </div>
    </div>
    </main>
    <center>";
}

?>

<br><br>
<p1>Developer By: KHALID ALFAIFI </p1>
<br><br>
</center>

</body>
</html>