<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      color: #FF0000;
    }

    body {

      background: url(https://tse4.mm.bing.net/th?id=OIP.frlXALDzxSaeoGsVjybm9QHaEl&pid=Api) no-repeat;
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
    }

    #login-box {
      width: 30%;
      height: auto;
      margin: 0 auto;
      margin-top: 15%;
      text-align: center;
      border: 2px solid #FF0000;

      background-size: 100% 100%;
      margin: auto;
      padding: 50px 50px;
    }

    #login-box h1 {
      color: black;
    }

    #login-box .form .item {

      margin-top: 50px;
      padding: 50px;
    }

    #login-box .form .item i {
      font-size: 18px;
      /* color: #fff; */
    }

    #login-box .form .item input {
      width: 180px;
      font-size: 18px;
      border: 0;
      border-bottom: 2px solid #fff;
      padding: 5px 10px;
      background: #fff;
      border: 2px solid #FF0000;
      color: rgb(19, 9, 9);
    }

    #login-box button {
      color: #fff;
      background-color: #FF0000;
      text-decoration: none;
      font-size: 1.1em;
      font-weight: 300;
      display: inline-block;
      padding: 0.9375em 2.1875em;
      letter-spacing: 1px;
      border-radius: 15px;
      margin-bottom: 20px;
      transition: 0.7s ease;
    }

    #login-box button:hover {
      background-color: #FF0000;
      transform: scale(1.1);
    }

    img {
      width: 100px;

    }

    ::-webkit-scrollbar {
      width: 1.1rem;
    }

    ::-webkit-scrollbar-track {
      border: 7px solid #232943;
      box-shadow: inset 0 0 2.5px 2px #fff;
      border-radius: 1rem;
    }

    ::-webkit-scrollbar-thumb {
      background: linear-gradient(90deg, #FF0000, #fff);
      border-radius: 1rem;
    }

    ::-webkit-scrollbar-thumb:hover {
      background: linear-gradient(270deg, #FF0000, #fff, #FF0000);
    }
  </style>

</head>

<body>
  <div id="login-box">
    <form action="" method="POST">
      <img src="http://www.i2clipart.com/cliparts/4/e/6/5/clipart-padlock-monochrome-512x512-4e65.png" alt="">


      <div class="form">

        <div class="item">
          <i class="fa fa-key" aria-hidden="true"></i>

     
          <input id="my-input" type="text" name="name" placeholder="Enter the Name" required /><br><br>
          <input id="my-input" name="passwoard" placeholder="ENTER THE PASSWORD" required />
          <!-- <input id="my-input" type="text" name="passwoard" placeholder="Cant Be passwoard" /> -->
        </div>

        <button name="btn" id="btn" type="submit" value="Submit Data">Login</button>
      </div>
    </form>
    <?php

    // require "EMPLOYEE.php";
    #الاتصال مع قاعدة البيانات
    $username = "root";
    $password = "";
    $database = new PDO("mysql:host=localhost;dbname=std;charset=utf8;", $username, $password);
    // $conn = new mysqli( 'localhost',$username, $password, 'std');
    #button varriable--------
    $id = '';
    $name = '';
    $date = '';
    $rate = '';
    $passwoard = '';
    // $result=mysqli_query($con,'select * from student');
    // if(isset($_POST['passwoard'])&&isset($_POST['id'])&&(isset($_POST['date']))){}
    if (isset($_POST['btn'])) {
      $name = $_POST['name'];
      $passwoard = $_POST['passwoard'];
      $lod_in = $database->prepare("SELECT  id,ROLE,name,date ,passwoard FROM employee WHERE name=:name AND passwoard=:password");
      
      $lod_in->bindParam("name", $name);
      $lod_in->bindParam("password", $passwoard);
      $lod_in->execute();
      if ($lod_in->rowCount() === 1) {
        echo "hello password correct";
    
       $employee=$lod_in->fetchObject();
      
   $_SESSION['employee']=$employee;
 if($employee->ROLE === '1'){
  session_start();
    $_SESSION['employee']= $employee;
  header('location:boss.php');
  }else{
    header('location:EMPLOYEE.php');
  }
 
 } else {
   echo "password incorrect";
 }}



    //     $result=mysqli_query($con,'select * from employee where id = "$id"');
    //     // $res= mysqli_fetch_object($result);
    //     // $pass= $res->passwoard;
    //     $num=mysqli_num_rows($result);
    // while($print=mysqli_fetch_assoc($result)){
    //   $dbid=$print['id'];
    //   $dbdate=$print['date'];
    //   $dbpsswoard=$print['passwoard'];
    // }
    // if($_post['id']==$id && $name==$_post['name'] && $psswoard==$_post['psswoard']){
    // echo "right";
    // session_start();
    // }else{
    //   echo"there is wrong";
    // }   }
    //  if(isset($_POST['btn'])){
    //   if(password_verify($passwoard,$pass)){
    //     header("location:EMPLOYEE.php");
    //         }else{
    //           echo "there is wrong";
    //         }  



    ?>