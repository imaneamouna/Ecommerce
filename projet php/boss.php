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
.navi a:hover, .contact{
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
        /* overflow-y: scroll; */
        text-align: center;
        width: 240px;
        float: right;
        border: 1px solid black;
        margin-top: 80px;
        padding: 20px;
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
/* h1{
    margin-top: 2px;
    font-size: 70px;
    text-align: center;
    color: black;
    font-family: 'Grape Nuts', cursive;
font-family: 'Lalezar', cursive;
font-family: 'Poppins', sans-serif;
font-family: 'Rubik Moonrocks', cursive;
font-family: 'Tajawal', sans-serif;

} */
  .stl{
    width: 1000%;
 
  background-position: center;
  background-size: cover;
  /* height: 109vh;
  width: 1200px;
  height: 75px;
  margin: auto;*/
  } 
  table{
      
    width: 700px;
    box-shadow: -1px 10px 10px 6px rgba(0.0.0.0.8);
}
table ,td ,th{
    font-size: 40px;
padding: 10px;
 border: 2px solid rgb(1, 12, 0); 
border-collapse: collapse;
text-align: center;
cursor: pointer;
/* margin:60px 350px; */
}
td{
    font-size: 25px;
}
th{
    background-color: #FF0000;
    color: #000;
    padding: 10px;
}
tr{ 
    border:  1px solid black;
    color: #000;
    background-color: #fff;
}
th:hover{ 
    background-color: #FF0000;
    color: #fff;
    transform: scale(1.1);
    transition: transform 300ms ease-in;
}
 td:hover{ 
    background-color: #FF0000;
    color: #fff;
    transform: scale(1.1);
    transition: transform 300ms ease-in;
} 
#tbl {
    margin-top: 70px;
        text-align: center;
        width: 1030px;
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
<form method="POST" action="">
<header>
        <nav class="navi"> 
            <a href="http://localhost/server/projet%20php/mession.php">MESSION</a>
            <a href="http://localhost/server/projet%20php/progress.php">PROGRESS</a>
            <a href="http://localhost/server/projet%20php/boss.php" class="contact">Employees</a>
        </nav>
    </header>
            



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


    <aside>
                <!-- < !-- لو
                حة التحكم -->
                <div id="div">
                    <img src="https://tse3.mm.bing.net/th?id=OIP.Q-ySrts6I6tsFIFR5HgM6AAAAA&pid=Api" width="200px" alt="website logo">
                   <h3> BOSS PAGE</h3> 
                   <br>
                    <input placeholder="EDIT THE PROGRESS ID" type="number" name="id" id="name"><br>
                    <br>
                    <br>
                    <input placeholder="EDIT THE PROGRESS NAME" type="text" name="name" id="name"><br>
                    <br>
                    <br>
                    <input placeholder="EDIT THE PROGRESS DATE" type="date" name="date" id="name"><br>
                    <br>
                    <br>
                    <input placeholder="EDIT THE PROGRESS RATE" type="number" name="rate" id="name"><br>
                    <br>
                    <br>
                    <input placeholder="EDIT THE PROGRESS PASSWOARD" type="text" name="passwoard" id="name"><br>
                    <br>
                    <button  name="add"> ADD</button>
                    <button name="del">  DELETE </button>
                    <button  name="edit"> EDIT</button>

                    <button  name="log_out"><a href="http://localhost/server/projet%20php/webprojet.php">LOG OUT</a></button>
     
                </div>
            </aside>
    <main>
        <form method="GET"> 
            <input type="text" placeholder="search....." name="search" >
            <button name="btn_search">search</button>
        </form>
    <table id="tbl">
        <div class="stl">
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>DATE</th>
    <th>rate</th>
    <th>PASWOARD</th>
    <!-- <th>PROGRASS RATE</th> -->
</tr>

</div>
   
    </main>
<?php
           
    //  if(isset($_POST['id'])){
    //         $id =$_POST['id'];}
    
            if(isset($_POST['name'])){
                $name =$_POST['name'];
               
            if(isset($_POST['date'])){
                $date =$_POST['date'];
            
            if(isset($_POST['rate'])){
                $rate =0;
           
           
            if(isset($_POST['passwoard'])){
                $passwoard =$_POST['passwoard'];
        
           
        
         if(isset($_POST['add'])){
 
            $add=$database->prepare("INSERT INTO employee(name,date , rate , passwoard) VALUES (:name , :date , :rate , :passwoard)");
            // $id='';
            // $name = '';
            // $date='';
            // $rate='';
            // $passwoard='';
            $add->bindParam(':name',$name);
            $add->bindParam(':date',$date);
            $add->bindParam(':rate',$rate);
            $add->bindParam(':passwoard',$passwoard);
            $add->execute();
            // header("location:boss.php");

           
            
        } }}}}
        // if(isset($_POST['add'])){
        //     $edit=$database->prepare("INSERT INTO employee(name,date , rate , passwoard) VALUES (:name , :date , :rate , :passwoard)");
        
        //     $edit->bindParam("name",$_POST['name']);
        //             $edit->bindParam("date",$_POST['date']);
        //             $edit->bindParam("rate",$_POST['rate']);
        //             $edit->bindParam("passwoard",$_POST['passwoard']);
        //             $edit->execute();
        // }
 if(isset($_POST['del'])){
    $delete=$database->prepare("DELETE FROM mession WHERE id = :id");
    $delete=$database->prepare("DELETE FROM employee WHERE id = :id");
$delete->bindParam("id",$id);
    $delete->execute();
    header("location:boss.php");
 }
 if(isset($_GET['btn_search'])){
   
    $search=$database->prepare("SELECT * FROM employee WHERE id LIKE :value OR name LIKE :value  OR date LIKE
      :value OR rate LIKE :value OR psswoard LIKE :value");
     $search_value="%".$_GET['search']."%";
    $search->bindParam("value",$search_value);
    $search->execute();
    // if ($search->num_rows > 0) {
    //     while($row = mysqli_fetch_array($search)){
	// 	echo"<tr>";
    //         echo "<td><input type='text' name='name' value ='".$row['name']."'/>".$row['name']."</td>";
    //         echo"</tr>";

    // }}}
    foreach($search AS $datat){
  
         echo "<tr>";
         echo "<td>".$datat['id']."</td>";
         echo "<td>".$datat['name']."</td>";
         echo "<td>".$datat['date']."</td>";
         echo "<td>".$datat['rate']."</td>";
         echo "<td>".$datat['passwoard']."</td>";
         echo "</tr>";
     }
     }
        
   foreach($select_data AS $data){
       echo "<tr>";
   echo"<td> <form name='id' method ='POST'><button type='submit' name='delete' value ='".$data['id']."'/>".$data['id']."
   <button  type='audio' name='update' value ='".$data['id']."'/>
   </td>";
   echo"</form>";
   echo"<form>";
    echo "<td><input type='text' name='name' value='".$data['name']."'/></td>";
     echo "<td><input type='date' name='date'value='".$data['date']."' /></td>";
     echo "<td><input type='date' name='date'value='".$data['rate']."' /></td>";
     echo "<td><input type='text' name='date'value='".$data['passwoard']."' /></td>";
    
        // echo "<td><input type='text' name='passwoard' value ='".$data['passwoard']."'/></td>";
    echo"</form>";
    echo"</tr>";
   
 

    }
    if(isset($_POST['delete'])){
        $getid=$_POST['delete'];
        $deleteee=$database->prepare("DELETE FROM mession WHERE id= :id ");
        $deletee=$database->prepare("DELETE FROM employee WHERE id= :id ");
        $deletee->bindParam("id",$getid);
   
    $deletee->execute();
        //  header("Location:boss.php");
    
    }
    if(isset($_GET['edit'])){
        $id = $_POST["id"];
        $name = $_POST["name"];
        $date = $_POST["date"];
        $rate = $_POST["rate"];
        $passwoard = $_POST["passwoard"];
   
        $edit=$database->prepare("UPDATE  employee SET  name =  ' $name', date =  $date, passwoard = $passwoard where id = $id ");
        $edit->execute();
    }
    if(isset($_POST['log_out'])){
        session_unset();
        session_destroy();
        header('location:test.php');
        }
        //  if(isset($_GET['btn_search'])){
        //     $search_value="%".$_GET['search']."%";
        //   $search=$database->prepare("SELECT * FROM employee WHERE id LIKE :value OR name LIKE :value  OR date LIKE :value OR rate LIKE :value OR psswoard LIKE :value");
        //     // $search_value="%".$_GET['search']."%";
        //   $search->bindParam("value",$search_value);
        //  $search->execute();
        //  foreach($search AS $data){
        //      echo"<tr>";
        //     echo"<td>".$data['id']."</td>";
        //     echo"<td>".$data['name']."</td>";
        //     echo"<td>".$data['date']."</td>";
        //     echo"</tr>";
        //      }}
//     if(isset($_POST['edit'])){
//         $getid=$_POST['edit'];
//         $edit=$database->prepare("UPDATE employee SET id=:id , name=:name, date=:date, rate=:rate, passwoard=:passwoard WHERE id=:id)");
//         $edit->bindParam("id",$_POST['id']);
//         $edit->bindParam("name",$_POST['name']);
//         $edit->bindParam("date",$_POST['date']);
//         $edit->bindParam("rate",$_POST['rate']);
//         $edit->bindParam("passwoard",$_POST['passwoard']);
//   $edit->execute();
//   var_dump($edit->errorInfo());
//         header("Location:http://localhost/server/projet%20php/boss.php");
    
//     }
 ?>



  
