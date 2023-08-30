<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Creation</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/e9f64432b6.js" crossorigin="anonymous"></script>
<body>
    
<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid" id="container">
          <a class="navbar-brand text-primary" id="navbar-brand" href="/components/home/index.html">JobHunt</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse px-5" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" id="text" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" id="text" aria-current="page" href="/components/intern/intern.html">Interns</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" id="text" aria-current="page" href="#">About</a>
              </li>
            </ul>
            <form class="d-flex">
                <a href="logout.php" class="btn btn-outline-primary">Logout <i class="fa-solid fa-right-from-bracket"></i></a>
             </form>
          </div>
        </div>
      </nav>

      <div class="container">
            <h1 class="text-center my-3" >Post Creation</h1>
        <form class="mt-5" action="job.php" method="post">
            <div class="mb-3">
                <label class="form-label">Post Name</label>
                <input type="text" class="form-control" placeholder="Enter name of the job here" name="postname">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Description</label><br>
                <!-- <textarea name="" id="" cols="100" rows="10"></textarea> -->
                <input type="text" class="form-control" placeholder="Enter the job description" name="description">
            </div>
            <div class="mb-3">
                <label class="form-label">Company Phone Number</label>
                <input type="number" class="form-control" placeholder="+123 456 789" name="mobile">
            </div>
            
            <button type="submit" class="btn btn-primary">Signup</button>
            <p class="mt-3">Already have an account? <a href="login.php">Click here</a></p>
        </form>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>