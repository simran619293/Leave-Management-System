<?php 
include '../include/db-connection.php';
include '../include/session.php';

include '../templates/admin-header.php';
 
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Welcome <?php echo(isset($_SESSION['user_name']) ? $_SESSION['user_name']:''); ?></h1>
    </div> 

     
</main> 

<?php include '../templates/footer.php'; ?>