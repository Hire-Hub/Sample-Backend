<?php
    
?> 

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Signup page</title>
  </head>
  <body>
    <h1 class="text-center" >Sign Up Page</h1>
    <div class="container">
    <form class="mt-5" action="signup.php" method="post">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" placeholder="Enter your username" name="username">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" placeholder="Enter your password" name="passwoed">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>