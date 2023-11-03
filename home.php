<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> حسابي | My Account </title>
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@300;500&display=swap');

:root{
   --blue:#3498db;
   --dark-blue:#2980b9;
   --red:#e74c3c;
   --dark-red:#c0392b;
   --black:#333;
   --white:#fff;
   --light-bg:#eee;
   --box-shadow:0 5px 10px rgba(0,0,0,.1);
}

*{
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border: none;
   text-decoration: none;
}

*::-webkit-scrollbar{
   width: 10px;
}

*::-webkit-scrollbar-track{
   background-color: silver;
}
*::-webkit-scrollbar-thumb{
   background-color: teal;
}

.btn,
.delete-btn{
   font-family: 'Cairo', sans-serif;
   width: 100%;
   border-radius: 5px;
   padding:8px 25px;
   color:var(--white);
   display: block;
   text-align: center;
   cursor: pointer;
   font-size: 20px;
   margin-top: 15px;
}

.btn{
   background-color: var(--blue);
}

.btn:hover{
   background-color: var(--dark-blue);
}

.delete-btn{
   background-color: var(--red);
}

.delete-btn:hover{
   background-color: var(--dark-red);
}

.message{
   font-family: 'Cairo', sans-serif;
   margin:10px 0;
   width: 100%;
   border-radius: 5px;
   padding:10px;
   text-align: center;
   background-color: var(--red);
   color:var(--white);
   font-size: 20px;
}

.container{
   min-height: 100vh;
   background: url(background6.jpg);
   background-size: cover ;
   display: flex;
   align-items: center;
   justify-content: center;
   padding:20px;
}

.container .profile{
   padding:20px;
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   text-align: center;
   width: 400px;
   border-radius: 5px;
}

.container .profile img{
   width: 150px;
}

.container .profile h3{
   font-family: 'Cairo', sans-serif;
   margin:10px 0;
   font-size: 20px;
   color:var(--black);
}

.container .profile p{
   font-family: 'Cairo', sans-serif;
   margin-top: 20px;
   color:var(--black);
   font-size: 20px;
}

.container .profile p a{
   font-family: 'Cairo', sans-serif;
   color:var(--red);
}

.container .profile p a:hover{
   font-family: 'Cairo', sans-serif;
   text-decoration: underline;
}



@media (max-width:650px){
   .update-profile form .flex{
      flex-wrap: wrap;
      gap:0;
   }
   .update-profile form .flex .inputBox{
      width: 100%;
   }
}
</style>
<body>
<div class="container">

   <div class="profile">
      <?php
         $select = mysqli_query($con, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
         if($fetch['image'] == ''){
            echo '<img src="Shield_Logo.png">';
         }else{
            echo '<img src="uploaded_img/'.$fetch['image'].'">';
         }
      ?>
      <h3><?php echo $fetch['name']; ?></h3>
      <a href="update_profile.php" class="btn">تحديث الحساب</a>
      <a href="home.php?logout=<?php echo $user_id; ?>" class="delete-btn">تسجيل الخروج</a>
      <a href="index.php" class="delete-btn"> الرجوع للصفحة الرئيسية </a>
      <p><a href="logadmin.php">for admin only</a></p>
   </div>

</div>

</body>
</html>