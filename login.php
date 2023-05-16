<?php
// session_start();

$nonav = '';

if ($_SESSION['email']) {
    header('location:indexx.php');



    include '/xampp/htdocs/socialmediaApp/init.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {



        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $stmt = $database->prepare('select  users_id,email, pass from users where email = :email and pass = :pass');

        $stmt->bindParam("email", $email);
        $stmt->bindParam("pass", $pass);
        $stmt->execute();
        $get = $stmt->fetch();
        $count = $stmt->rowCount();
        if ($count == 1) {
            $_SESSION['email'] = $email;
            $_SESSION['users_id'] = $get['users_id'];

            header('location:indexx.php');
        }
    }
} else {
    header('location:login.php');
}
?>

<div class="container">
    <div class="col-sm-offset-3 col-sm-6">

        <div class="login-form">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="form-horizontal">
                <div class="form-group">
                    <label for="">email</label>
                    <input class="form-control" type="text" name="email" placeholder="type your email">

                </div>
                <div class="form-group">
                    <label for="">password</label>
                    <input class="form-control" type="password" name="pass" placeholder="type your password">

                </div>
                <div class="form-group">
                    <button class="form-control btn btn-primary" type="submit">login</button>
                </div>
            </form>


        </div>

    </div>

</div>