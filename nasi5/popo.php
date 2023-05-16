<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$username="root";
$password="";
$database = new PDO("mysql:host=localhost;dbname=std;charset=utf8;",$username,$password);
$getitem=$database->prepare("SELECT * FROM test1");
$getitem->execute();

?>
<form method="GET" action="">
<input type="audio" name="search" placeholder="search.....">
<button type="submit" name="btn_search">search</button>
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////// -->
<input id="my-input" type="text" name="id" placeholder="Enter the id" /><br><br>
           <input id="my-input" type="text" name="name" placeholder="Enter the Name" /><br><br>
         <input id="my-input" type="text" name="surname" placeholder="ENTER TEH SURNAME" />
         <button name="log_in" type="submit">log in</button>
<?php
if(isset($_GET['log_in'])){
    $name=$_GET['name'];
$test=$database->prepare("SELECT * FROM test1 WHERE name =' $name'");
$test->execute();
 if($test->rowCount()>0){
     echo"there is earlier ";
 }else{   
       echo "tamm hello";
 }


}
if(isset($_GET['btn_search'])){
    $search=$database->prepare("SELECT * FROM test1 WHERE id LIKE :value OR name LIKE :value  OR surname LIKE :value");
    $search_value="%".$_GET['search']."%";
    $search->bindParam("value",$search_value);
    $search->execute();

foreach($search AS $data){
echo"<h1>".$data['id']."</h1>";
echo"<p>".$data['name']."</p>";
echo"<p>".$data['surname']."</p>";
}}
if(isset($_POST['log_in'])){
    $lod_in=$database->prepare("SELECT * FROM test1 WHERE id = :id AND name = :name AND surname	= :surname");
    $lod_in->bindParam("id",$_POST['id']);
    $lod_in->bindParam("name",$_POST['name']);
    $lod_in->bindParam("surname",$_POST['surname']);
    $lod_in->execute();
    if($lod_in->rowCount()==="1"){
      echo "hello password correct";
    }else{
      echo "password incorrect";
    }
  }




