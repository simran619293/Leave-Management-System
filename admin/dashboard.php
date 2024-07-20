<?php

include '../include/db-connection.php';
include '../include/session.php';
// Check if user is logged in
checkLogin();

// Check if user is admin
if (!isAdmin()) {
    header('Location: ../login.php');
    exit();
}
?>
<?php
include '../templates/admin-header.php';

?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Welcome to Admin dashboard</h1>
    </div><!-- End Page Title -->
</main>