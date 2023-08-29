<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header('location:login.php');
    }
    include 'connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <h1 class="text-center my-3">Welcome 
        <?php
            echo $_SESSION['username'];
        ?>
    </h1>
    <div class="container">
        <a href="logout.php" class="btn btn-primary">Logout</a>
    </div>
</body>
</html>