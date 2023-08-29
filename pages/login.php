<?php
    $login = 0;
    $invalid = 0;

    //checks whether the data being passed is using post method
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include 'connect.php';

         $username = $_POST['username'];
         $password = $_POST['password'];

        $sql = "Select * from `registration` 
        where username='$username' and password='$password'";

        $result = mysqli_query($con,$sql);
         if ($result) {
            // checking if user already exists
            $num = mysqli_num_rows($result);
            if ($num>0) {
                // echo "Login successful";
                $login = 1;
                session_start();
                $_SESSION['username']=$username;
                header('location:index.php');
            }else {
                // echo "Invalid data";
                $invalid = 1;
            }
        }
        
    }

?> 

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Login page</title>
  </head>
  <body>

  <?php
    if ($login) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Comrade </strong>Welcome you are logged in.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
  
  ?>

<?php
    if ($invalid) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Comrade </strong>Something went wrong.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
  
  ?>
    <h1 class="text-center my-3" >Login Page</h1>
    <div class="container">
    <form class="mt-5" action="login.php" method="post">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" placeholder="Enter your username" name="username">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" placeholder="Enter your password" name="password">
        </div>
        
        <button type="submit" class="btn btn-primary">Login</button>
        <p class="mt-3">Don't have an account? <a href="signup.php">Click here</a></p>
    </form>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>

</html>