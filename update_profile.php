<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(isset($_POST['update_profile'])){

   $update_name = mysqli_real_escape_string($con, $_POST['update_name']);
   $update_email = mysqli_real_escape_string($con, $_POST['update_email']);

   mysqli_query($con, "UPDATE `user_form` SET name = '$update_name', email = '$update_email' WHERE id = '$user_id'") or die('query failed');

   $old_pass = $_POST['old_pass'];
   $update_pass = mysqli_real_escape_string($con, md5($_POST['update_pass']));
   $new_pass = mysqli_real_escape_string($con, md5($_POST['new_pass']));
   $confirm_pass = mysqli_real_escape_string($con, md5($_POST['confirm_pass']));

   if(!empty($update_pass) || !empty($new_pass) || !empty($confirm_pass)){
      if($update_pass != $old_pass){
         $message[] = '! كلمة المرور القديمة غير صحيحة';
      }elseif($new_pass != $confirm_pass){
         $message[] = '! كلمة السر المدخلة لاتتطابق ';
      }else{
         mysqli_query($con, "UPDATE `user_form` SET password = '$confirm_pass' WHERE id = '$user_id'") or die('query failed');
         $message[] = 'تم تحديث كلمة المرور بنجاح';
      }
   }


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> تحديث المعلومات | update profile</title>
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
   padding:10px 30px;
   color:var(--white);
   display: block;
   text-align: center;
   cursor: pointer;
   font-size: 20px;
   margin-top: 10px;
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
.update-profile{
   font-family: 'Cairo', sans-serif;
   min-height: 100vh;
   background: url(background6.jpg);
   background-size: cover ;
   display: flex;
   align-items: center;
   justify-content: center;
   padding:23px;
}

.update-profile form{
   font-family: 'Cairo', sans-serif;
   padding:20px;
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   text-align: center;
   width: 700px;
   text-align: center;
   border-radius: 5px;
}

.update-profile form img{
   height: 200px;
   width: 200p;
   border-radius: 50%;
   object-fit: cover;
   margin-bottom: 5px;
}

.update-profile form .flex{
   font-family: 'Cairo', sans-serif;
   display: flex;
   justify-content: space-between;
   margin-bottom: 20px;
   gap:15px;
}

.update-profile form .flex .inputBox{
   font-family: 'Cairo', sans-serif;
   width: 49%;
}

.update-profile form .flex .inputBox span{
   font-family: 'Cairo', sans-serif;
   text-align: right;
   display: block;
   margin-top: 15px;
   font-size: 17px;
   color:var(--black);
}

.update-profile form .flex .inputBox .box{
   font-family: 'Cairo', sans-serif;
   width: 100%;
   text-align: right;
   border-radius: 5px;
   background-color: var(--light-bg);
   padding:12px 14px;
   font-size: 17px;
   color:var(--black);
   margin-top: 10px;
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

<div class="update-profile">

   <?php
      $select = mysqli_query($con, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
   ?>

   <form action="" method="post" enctype="multipart/form-data">
   <?php
         if(isset($message)){
            foreach($message as $message){
               echo '<div class="message">'.$message.'</div>';
            }
         }
      ?>
      <div class="flex">
         <div class="inputBox">
            <span>: اسم المستخدم</span>
            <input type="text" name="update_name" value="<?php echo $fetch['name']; ?>" class="box">
            <span>: البريد الالكتروني</span>
            <input type="email" name="update_email" value="<?php echo $fetch['email']; ?>" class="box">
         </div>
         <div class="inputBox">
            <input type="hidden" name="old_pass" value="<?php echo $fetch['password']; ?>">
            <span> : لتغيير كلمة المرور</span>
            <input type="password" name="update_pass" placeholder=" ادخل كلمة المرور القديمة هنا" class="box">
            <span>: كلمة مرور جديدة</span>
            <input type="password" name="new_pass" placeholder=" اكتب كلمة مرور جديدة هنا" class="box">
            <span>: تأكيد كلمة المرور</span>
            <input type="password" name="confirm_pass" placeholder=" أعد إدخال كلمة المرور" class="box">
         </div>
      </div>
      <input type="submit" value="تحديث المعلومات" name="update_profile" class="btn">
      <a href="home.php" class="delete-btn">الرجوع </a>
   </form>

</div>

</body>
</html>