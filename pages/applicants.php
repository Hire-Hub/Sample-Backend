<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applicants</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e9f64432b6.js" crossorigin="anonymous"></script>
</head>
<body>

    <!-- created navbar  -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid" id="container">
          <a class="navbar-brand text-primary" id="navbar-brand" href="landing.php">JobHunt</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse px-5" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" id="text" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" id="text" aria-current="page" href="applicants.php">Applicants</a>
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
            <h2 class="text-center my-3">Applicants</h2>
            <div class="row">
              <!-- Student Cards -->
              <div class="col-md-4">
                <div class="card mb-4">
                  <img src="" class="card-img-top" alt="Profile Picture">
                  <div class="card-body">
                    <h5 class="card-title">John Doe</h5>
                    <p class="card-text">Skills: HTML, CSS, JavaScript</p>
                    <p class="card-text">Experience: 2 years</p>
                    <a href="">
                      <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalJohnDoe">View Profile</button>
                    </a>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="card mb-4">
                  <img src="/images/interns/profile2.png" class="card-img-top" alt="Profile Picture">
                  <div class="card-body">
                    <h5 class="card-title">John Doe</h5>
                    <p class="card-text">Skills: HTML, CSS, JavaScript</p>
                    <p class="card-text">Experience: 2 years</p>
                   <a href="">
                     <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalJohnDoe">View Profile</button>
                   </a>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="card mb-4">
                  <img src="/images/interns/profile1.png" class="card-img-top" alt="Profile Picture">
                  <div class="card-body">
                    <h5 class="card-title">Jane Smith</h5>
                    <p class="card-text">Skills: Python, Java, SQL</p>
                    <p class="card-text">Experience: 3 years</p>
                    <a href="">
                      <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalJohnDoe">View Profile</button>
                    </a>
                  </div>
                </div>
              </div>
              <!-- Add more student cards as needed -->
            </div>
          </div>

      <div class="footer mt-2 text-center">
            <footer>
                <p> <span id="year"> </span> © JobHunt. All rights reserved</p>
            </footer>
        </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>