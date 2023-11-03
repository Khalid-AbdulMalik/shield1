<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> الاخبار الأمنية | Security News </title>
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
        color: blue;
        font-weight: bold;
        font-family:'Cairo', sans-serif;
    }
    body{
        background: url('background9.jpg');
        background-size: 100%;
    }
    h3{
        font-family: 'Cairo', sans-serif;
        color: whitesmoke ;
        font-weight: bold;
    }
    h2{
        font-family: 'Cairo', sans-serif;
        color: #445D48;
        font-weight: bold;

    }
    .navbar-brand1{
        margin-left: 50px;
        text-decoration: none;
        color:whitesmoke;
    }
    .navbar-brand2{
        margin-right: 30px;
        text-decoration: none;
        color:whitesmoke;
    }
    .navbar-brand3{
        margin-right: 68px;
        text-decoration: none;
        color:whitesmoke;
    }
    main{
        margin-bottom: 10px;
    }
    .card{
        float: right;
        margin-top: 20px;
        margin-bottom: 7%;
        margin-left: 7%;
        margin-right: 7%;
        background-color: #D0D4CA;
        color: #363062;
    }
    p{
        text-align: right;
    }
    @media screen and (min-width:1px) and (max-width:350px) {
        .main{
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
        .card{
            margin-inline: -12% ;
        }
    }

    @media screen and (min-width:350px) and (max-width:800px) {
        .main{
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
        .card{
        margin-inline: 1% ;
    }
    }
    @media screen and (min-width:600px) and (max-width:1200px) {
        .main{
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
        .card{
        margin-inline: -10% ;
    }
    }
    
    </style>
</head>
<body>
</div>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand1" href="home.php"> حسابي | My Account </a>
        <a class="navbar-brand2" href="About Us.html"> عنا </a>
        <a class="navbar-brand3" href="index.php"> الصفحة الرئيسية </a>
    </nav>
    <center>
        <br>
        <h3> : الاخبار الأمنية </h3>
    </center>
    <br>
    <?php
    include('config.php');
    $result = mysqli_query($con, "SELECT * FROM news");
    while($row = mysqli_fetch_array($result)){
        echo "
        <center>
        <main>
        <div class='card' style='width: 25rem;'>
        <img src='$row[image]' class='card-img-top' style='width: 60%; margin-left: 80px; margin-top: 10px;'>
        <div class='card-body'>
        <h5 class='card-title'>$row[name]</h5>
        <p class='card-text'>$row[info1]</p>
        <p class='card-text'>$row[info2]</p>
        <p class='card-text'>$row[info3]</p>
        <p class='card-text'>$row[info4]</p>
        <p class='card-text'>$row[info5]</p>
        <p class='card-text'>$row[info6]</p>
        <br>
        </div>
        </div>
        </main>
        <center>";
    }
    ?>
</body>
</html>