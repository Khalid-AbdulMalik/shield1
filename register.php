<?php

include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($con, $_POST['name']);
   $email = mysqli_real_escape_string($con, $_POST['email']);
   $pass = mysqli_real_escape_string($con, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($con, md5($_POST['cpassword']));


   $select = mysqli_query($con, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = '! المستخدم موجود بالفعل'; 
   }else{
      if($pass != $cpass){
         $message[] = '! كلمة المرور لاتتطابق';
      }else{
         $insert = mysqli_query($con, "INSERT INTO `user_form`(name, email, password) VALUES('$name', '$email', '$pass')") or die('query failed');

         if($insert){
            $message[] = 'تم التسجيل بنجاح';
         }else{
            $message[] = '! حدث خطأ اثناء التسجيل';
         }
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
   <title> تسجيل حساب جديد | New Account </title>


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
   margin-bottom: 10px;
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

.form-container{
   font-family: 'Cairo', sans-serif;
   min-height: 100vh;
   background: url(background6.jpg);
   background-size: cover ;
   display: flex;
   align-items: center;
   justify-content: center;
   padding:20px;
}

.form-container form{
   font-family: 'Cairo', sans-serif;
   padding:17px;
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   text-align: center;
   width: 500px;
   border-radius: 5px;
}

.form-container form h3{
   font-family: 'Cairo', sans-serif;
   margin-bottom: 10px;
   font-size: 30px;
   color:var(--black);
   text-transform: uppercase;
}

.form-container form .box{
   font-family: 'Cairo', sans-serif;
   width: 100%;
   text-align: right;
   border-radius: 5px;
   padding:12px 14px;
   font-size: 18px;
   color:var(--black);
   margin:10px 0;
   background-color: var(--light-bg);
}

.form-container form p{
   font-family: 'Cairo', sans-serif;
   margin-top: 15px;
   font-size: 20px;
   color:var(--black);
}

.form-container form p a{
   font-family: 'Cairo', sans-serif;
   color:var(--red);
}

.form-container form p a:hover{
   font-family: 'Cairo', sans-serif;
   text-decoration: underline;
}

.container{
   font-family: 'Cairo', sans-serif;
   min-height: 100vh;
   background-color: var(--light-bg);
   display: flex;
   align-items: center;
   justify-content: center;
   padding:20px;
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
   
<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>سجل الآن</h3>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <input type="text" name="name" placeholder="اسم المستخدم" class="box" required>
      <input type="email" name="email" placeholder="البريد الإلكتروني" class="box" required>
      <input type="password" name="password" placeholder="كلمة المرور" class="box" required>
      <input type="password" name="cpassword" placeholder="تأكيد كلمة المرور" class="box" required>
      <input type="submit" name="submit" value="سجل الآن" class="btn">
      <p>هل تملك حساب بالفعل ؟ <a href="login.php">تسجيل الدخول</a></p>
   </form>

</div>

</body>
</html>