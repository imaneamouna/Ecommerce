<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <style>
@import url('https://fonts.googleapis.com/css2?family=Grape+Nuts&family=Lalezar&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik+Moonrocks&family=Tajawal:wght@300&display=swap');
        * {
      margin: 0;
      padding: 0;
      font-family:initial;
      box-sizing: border-box;
  }
  body{
    background: url(https://tse4.mm.bing.net/th?id=OIP.frlXALDzxSaeoGsVjybm9QHaEl&pid=Api) no-repeat;
    background-size: cover;
 background-position: center;
 background-attachment: fixed;
 }
 main {
     margin-top: 3pxpx;
        float: left;
        padding: 2px;
    }
    form{
        width: 100%;
        font-size: 20px;
    }
    
    aside {
        margin-top: 90px;
        text-align: center;
        width: 300px;
        float: right;
        border: 1px solid black;
        padding: 10px;
        font-size: 20px;
        background-color: #FF0000;
        color: #000;
    }
    input {
        padding: 4px;
        border: 2px solid black;
        text-align: center;
        font-size: 17px;
    }
h1{
    margin-top: 10px;
    font-size: 50px;
    text-align: center;
    color: black;
    font-family: 'Grape Nuts', cursive;
font-family: 'Lalezar', cursive;
font-family: 'Poppins', sans-serif;
/* font-family: 'Rubik Moonrocks', cursive; */
/* font-family: 'Tajawal', sans-serif; */

}
  .stl{
 
 
  background-position: center;
  background-size: cover;
  height: 109vh;
  width: 500px;
  height: 75px;
  } 
  table{
    width: 800px;
    box-shadow: -1px 10px 10px 6px rgba(0.0.0.0.8);
}
table ,td ,th{
margin: 1px 50px;
    font-size: 30px;
padding: 10px 90px;
 /* border: 2px solid rgb(1, 12, 0);  */
border-collapse: collapse;
text-align: center;
cursor: pointer;
/* margin:60px 350px; */
}
td{
    font-size: 30px;
}
th{
    background-color: #FF0000;
    color: #000;
    padding: 10px;
}
tr{ 
    color: #000;
    background-color: #fff;
}
tr:hover{ 
    background-color: #FF0000;
    color: #fff;
    transform: scale(1.1);
    transition: transform 300ms ease-in;
}
#tbl {
 
    display: inline-block;
    margin-top: 50px;
    margin-left: 1px;
    margin-right: 2px;
        text-align: center;
        width: 700px;
    }
     button{
        color: black;
text-decoration: none;
font-size: 1.1em;
font-weight: 500;
padding-left: 50px;
padding-right:50px ;
display: inline-block;
letter-spacing: 1px;
border-radius: 15px;
margin-bottom: 20px;
transition: 0.7s ease;
     }
     button:hover{
        background-color: #FF0000;
    color: #fff;
    transform: scale(1.1);
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
<?php

#الاتصال مع قاعدة البيانات
$username="root";
$password="";
$database = new PDO("mysql:host=localhost;dbname=std;charset=utf8;",$username,$password);
#button varriable--------
$id='';
$name = '';
$date='';
$rate='';
$passwoard='';
$select_data_employee=$database->prepare("SELECT * FROM employee ");
// $lod_in->bindParam("id", $id);

$select_data_employee->execute();


?>
    
<form method="POST" action="">
            <aside>
                <!-- < !-- لو
                حة التحكم -->
                <div id="div"><img src="https://tse2.mm.bing.net/th?id=OIP._hhm7wg7BDCQRlmn1vbvTAHaFm&pid=Api" width="200px" alt="website logo">
                  <h3> EMPLOYEES PAGE</h3> 
                  <br>
                    <input placeholder="INTER THE ID" type="number" name="id" id="name"><br>
                    <br>
                    <br>
                    <input placeholder="EDIT THE PROGRESS RATE" type="text" name="rate" id="name"><br>
                    <br>
                <br>
                    <button  name="edit"> EDIT</button>
                    <button  name="log"> LOG OUT</button>
     
                </div>
            </aside>
    <main>

    <table id="tbl">
        <div class="stl">
    <tr>
    <th>ID</th>
    <th>DATE EMPLOYEE</th>
    <th>NUMBER THE PROGRESS</th>
    <th>PROGRESS RATE</th>
</tr>
<?php
            #الاتصال مع قاعدة البيانات
            $username="root";
            $password="";
            $database = new PDO("mysql:host=localhost;dbname=std;charset=utf8;",$username,$password);
            #button varriable--------
            $id='';
            $name = '';
            $date='';
            $rate='';
            $passwoard='';
            $select_data=$database->prepare("SELECT * FROM employee");
            $select_data->execute();
            
        
?>
<?php
 if(isset($_GET['rate'])){
    
    $rate= $_GET["rate"];
 }
if(isset($_GET['id'])){
    
    $id= $_POST["id"];

}


// echo "<tr>";
//         echo "<td>".$_SESSION['employee']->id ."</td>";
//         echo "<td>".$_SESSION['employee']->name. "</td>";
//         echo "<td>".$_SESSION['employee']->date. "</td>";
        
        // echo "<td></td>";
        // echo "<td>".$dataa['rate']."</td>";
       // echo "</tr>";
 
    if(isset($_GET['edit'])){
    
        $rate = $_POST["rate"];
 
        $edit=$database->prepare("UPDATE  employee SET rate = $rate WHERE id= $id");
        $edit->execute();
    }
// $_SESSION['employee'];
// if(isset($_POST['log'])){
// session_unset();
// session_destroy();
// header('location:test.php');
// }
?>


</div>
    </table>
    </main>
</body>
