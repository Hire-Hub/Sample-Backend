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
            </ul>
            <form class="d-flex">
                <a href="logout.php" class="btn btn-outline-primary">Logout <i class="fa-solid fa-right-from-bracket"></i></a>
             </form>
          </div>
        </div>
      </nav>

  
    <!-- employer section -->
    <?php
        $sql = "Select * from `registration`";
        $result = mysqli_query($con,$sql);

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $username = $row['username'];
            }
            echo 
            '
            
            ';
        }
    ?>
         <div class="container-fluid my-5" id="employer-section">
            <div class="row p-2">
              <div class="col-md-2" id="image-card">
                <img src="/images/profile4.png" alt="" class="img-fluid m-2" id="image">
              </div>
              <div class="col-md-8">
                <ul class="list-group">
                  <li class="list-group-item">
                    <?php
                      echo $_SESSION['username'];
                    ?>
                   </li>
                   <?php
                      $sql = "Select * from `registration`";
                      $result = mysqli_query($con,$sql);

                      if ($result) {
                          while ($row = mysqli_fetch_assoc($result)) {
                              $mobile = $row['mobile'];
                          }
                          echo 
                          '
                          <li class="list-group-item">'.$mobile.'</li>
                          ';
                      }
                    ?>
                  
                  <li class="list-group-item">Company: JobHunt</li>
                  <li class="list-group-item">Location: City, Country</li>
                </ul>
               
              </div>
            </div>
          </div>

          <div class="container mt-5">
              <h2 class="text text-primary">Previous Jobs</h2>
              <div class="row">
                <!-- Job Cards -->
                <div class="col-md-4">
                  <div class="card mb-4">
                    <div class="card-body">
                      <h5 class="card-title">UI/UX Designer</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, veritatis?</p>
                      <button class="btn btn-success btn-sm">Available</button>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card mb-4">
                    <div class="card-body">
                      <h5 class="card-title">Data Scientist</h5>
                      <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe odit dolorum culpa quam possimus? Architecto!</p>
                      <button class="btn btn-danger btn-sm">Taken</button>
                    </div>
                  </div>
                </div>
                <!-- Add more job cards as needed -->
              </div>
            
              <!-- Create New Job Button -->
              <div class="text-center">
                <a href="job/job.php" class="btn btn-primary">Create New Job</a>
              </div>
          </div>
  
          <div class="footer my-3 text-center">
            <footer>
                <p> <span id="year"> </span> © JobHunt. All rights reserved</p>
            </footer>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>