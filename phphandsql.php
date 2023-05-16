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
  if(isset($_POST['con'])){
      $host='localhost';
      $user='root';
      $pass='';
      $db='std';
        $conn=mysqli_connect($host,$user,$pass,$db);
        $q =mysqli_query($conn,"select * from student");
  }

    ?>







    <form method="POST">
        <input type="submit" value="connect" name="con">
        <center>
            <table border="2">

                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>ADRESS</th>
                </tr>
                <?php
                while($row = mysqli_fetch_array($q)){
                echo '<tr>'; 
                echo '<td>'.$row['id'].'<td/>';
                echo '<td>'.$row['name'].'<td/>'; 
                echo '<td>'.$row['adress'].'<td/>';
                echo '<tr/>'; 
                
                }                
                ?>
            </table>

        </center>
    </form>
</body>

</html>