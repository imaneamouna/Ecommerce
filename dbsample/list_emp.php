<!-- <!DOCTYPE html> -->
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
 header{
 background-color: #FF0000;
    width: 100%;
    position: fixed;
    z-index: 999;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 200px;
}
a{
    text-decoration: none;
    color: #000;
}
.navi a{
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
.navi a:hover, .contactt{
    background-color: #fff;
    color: #FF0000;
    transform: scale(1.1);
}
 main {
     margin-top: 90px;
        float: left;
        padding: 2px;
    }
    form{
        width: 100%;
        font-size: 20px;
    }
    
    aside {
        margin-top: 80px;
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
    font-size: 35px;
padding: 10px;
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
    margin-left: 0px;
    margin-right: 2px;
        text-align: center;
        width: 200px;
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
<header>
        <nav class="navi"> 
            <a href="http://localhost/server/projet%20php/mession.php">MESSION</a>
            <a class="contactt" href="http://localhost/server/projet%20php/progress.php">PROGRESS</a>
            <a href="http://localhost/server/projet%20php/boss.php" class="contact">Employees</a>
        </nav>
    </header>
<form method="POST" action="">
            <aside>
                <!-- < !-- لو
                حة التحكم -->
                <div id="div">
                    <img src="https://tse3.mm.bing.net/th?id=OIP.Q-ySrts6I6tsFIFR5HgM6AAAAA&pid=Api" width="200px" alt="website logo">
                   <br>
                    <input placeholder="ENTER NUMBER THE PROGRESS" type="text" name="id"><br>
                    <br>
                    <input placeholder="ENTER NAME THE PROGRESS" type="text" name="name"><br>
                    <br>
                    <input placeholder="ENTER THE TYPE PROGRESS" type="text" name="type"><br>
                    <br>
                    <input placeholder="ENTER THE LEVEL PROGRESS" type="text" name="level"><br>
                <br>
                    <button  name="add" > ADD</button>
                    <button name="del">  DELETE </button>
                    <button  name="add"> EDIT</button>
                    <button  name="add"><a href="http://localhost/server/projet%20php/webprojet.php">LOG OUT</a></button>
     
                </div>
            </aside>
<main>
   <h1>BOSS PAGE</h1> 
	<table id="tbl">
		<div class="stl">
			<tr>
			<th>NUMBER THE PROGRESS</th>
			<th>NAME THE PROGRESS</th>
			<th>THE TYPE PROGRESS</th>
			<th>THE LEVEL PROGRESS </th>
			</tr>
			<?php
				// require "EMPLOYEE.php";
				#الاتصال مع قاعدة البيانات
				/*$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "test";*/
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "std";
				try {
					$database = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
					// set the PDO error mode to exception
					$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				} catch(PDOException $e) {    
					echo "Connection failed: " . $e->getMessage();
				}
				$lod_in = $database->prepare("SELECT * FROM employee");
				$lod_in->execute();
				while($row = $lod_in->fetch()){
					$id = $row['id'];
					$name = $row['name'];
					$pwd = $row['passwoard']; 
					echo "<tr><td>$id</td><td>$name</td><td>$pwd</td><td></td></tr>";
				}
				/*if (isset($_POST['btn'])){  
				  $name = $_POST['name2'];
				  $passwoard = $_POST['pwd'];
				  $lod_in = $database->prepare("SELECT Count(*) as count FROM employee WHERE name=:name AND password=:password");
				  $lod_in->bindParam("name", $name);
				  $lod_in->bindParam("password", $passwoard);
				  $lod_in->execute();
				  $row = $lod_in->fetch();
				  $count = $row['count'];
				  if ($count == 1) {
					echo "hello password correct";
				  } else {
					echo "password incorrect";
				  }
				}else{
				  echo "your not clik0";
				}*/
				?>
		</div>
	</table>
</main>
</body>
</html>