<?php
    include 'templates/header.php'
?>
<?php
    /*$users = "select * from users where ;
    $result = $conn->query( $users);
    echo "<pre>";
    print_r($result);

    /*echo "<pre>";
    print_r($result->fetch_assoc());
    die;*/

    /*$users = "INSERT INTO `users`(`id`, `full_name`, `username`, `email`, `password`, `role_id`, `department_id`, `phone`, `address`, `dob`, `gender`, `status`, `created_at`, `updated_at`) 
    VALUES ('','simran vishwakarma','simm1234','simran12@gmail.com','12345678','2','2','7498265238','kolhapur','18-12-2006','Female','1','[value-13]','[value-14]')";

    if( $conn->query( $users)==TRUE)
    {
        echo "record inserted successfully";
    }

    else{
        echo"syntax error";
    }*/
    /*$users = "UPDATE `users` SET `full_name`='sima bishu',`username`='simuu',`email`='sima@gmail.com',`password`='0987',`role_id`='3',`department_id`='3',`phone`='1234567890',`address`='kolhapur',`dob`='12-02-2006',`gender`='female',`status`='1',`created_at`='[value-13]',`updated_at`='[value-14]' WHERE `id`=2";
    if( $conn->query( $users)==TRUE)
    {
        echo "record updated successfully";
    }

    else{
        echo"syntax error";
    }*/
   /* echo $username = $_POST['username'];
    echo $password = $_POST['password'];
    
    $users = "select * from `users` where  `username`=$username AND  `password`= $password";*/
    


    
?>
<section class="hero-banner d-flex align-item-center justify-content-center">
<div class="container text-center">
    <h1>Leave Management System</h1>
    <p>My Collage Project</p>
    <button class="btn btn-primary">
    <a href="login.php">Login</a>
    </button>
</div>
</section>

<?php
    include 'templates/footer.php'
?>