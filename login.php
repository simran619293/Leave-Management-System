<?php
    include 'templates/header.php'
?>
<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $username= $_POST['username'];
        $password= $_POST['password'];

        $user = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'";

        $result = $conn->query($user);
        if($result){
            header("Location: http://localhost/Leave-Management-System/admin/index.php"); 
            exit();
        }
    }
?>

    <div class="container d-flex align-item-center justify-content-center">
        <div class="card" style="width:400px">
            <div class="card-header text-center">
                <h5>Login<h5>
            </div>
            <div class="card-body">
            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
                    <label>Username</label><br>
                    <input type="text" name="username" class="form-control" required><br>
                    <label>Password</label><br>
                    <input type="password" class="form-control" name="password" required><br>
                    
                    <button class="btn btn-primary" type="submit" style="width:100%">Sign In</button>
                </form>
            </div>
        </div>
    </div>    
<?php
    include 'templates/footer.php'
?>