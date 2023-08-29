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
    <script src="https://kit.fontawesome.com/e9f64432b6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href=/styles/index.css">
</head>
<body>

    <!-- created navbar  -->
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
              
              <!-- <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li> -->
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li> -->
            </ul>
            <form class="d-flex">
                <a href="logout.php" class="btn btn-outline-primary">Logout <i class="fa-solid fa-right-from-bracket"></i></a>
             </form>
          </div>
        </div>
      </nav>

    <div class="container">
    </div>
    <!-- <h1 class="text-center my-3">Welcome 
        <?php
            // echo $_SESSION['username'];
        ?>
    </h1> -->

    <!-- employer section -->
    <div class="container-fluid" id="employer-section">
      <div class="row p-2">
        <div class="col-md-4" id="image-card">
          <img src="/images/profile4.png" alt="" class="img-fluid m-2" id="image">
        </div>
        <div class="col-md-8">
          <h2>Bruce Wayne</h2>
          <h4>Web Developer</h4>
          <ul class="list-group">
            <li class="list-group-item">Email: bruce@example.com</li>
            <li class="list-group-item">Phone: +237 692742945</li>
            <li class="list-group-item">Company: JobHunt</li>
            <li class="list-group-item">Location: City, Country</li>
          </ul>
          <div class="mt-2">
            <a href="#" class="btn btn-outline-primary"> <i class="fa-brands fa-whatsapp"></i> </a>
            <a href="#" class="btn btn-outline-secondary"><i class="fa-brands fa-linkedin-in"></i> </a>
            <a href="#" class="btn btn-outline-danger"><i class="fa-brands fa-facebook"></i> </a>
            <a href="#" class="btn btn-outline-warning"><i class="fa-brands fa-twitter"></i> </a>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>