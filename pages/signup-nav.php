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
          <a class="navbar-brand text-primary" id="navbar-brand" href="landing.php">JobHunt</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse px-5" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" id="text" aria-current="page" href="index.php">Home</a>
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
    
            <h2 class="text-center my-3" >Sign Up page</h2>
    <div class="container">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Company</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Student</button>
                </div>
            </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

            <form class="mt-5" action="signup-nav.php" method="post">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control"  placeholder= "Enter your name"  name="username">
                </div>
                <div class="mb-3">
                    <label class="form-label">Company Name</label>
                    <input type="text" class="form-control" placeholder="Enter company's name" name="username">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" placeholder="Enter your password" name="password">
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone Number</label>
                    <input type="number" class="form-control" placeholder="+123 456 789" name="mobile">
                </div>
                
                <button type="submit" class="btn btn-primary">Signup</button>
                <p class="mt-3">Already have an account? <a href="login.php">Click here</a></p>
            </form>
            </div>

            <!-- student signup page -->
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                 <form class="mt-5" action="signup-nav.php" method="post">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control"  placeholder= "Enter your name"  name="username">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="Enter your email here" name="email">
                    </div>
                
                    <div class="mb-3">
                        <label class="form-label">Phone Number</label>
                        <input type="number" class="form-control" placeholder="+123 456 789" name="mobile">
                    </div>
                    
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" placeholder="Enter your password" name="password">
                    </div>

                    <button type="submit" class="btn btn-primary">Signup</button>
                    <p class="mt-3">Already have an account? <a href="login.php">Click here</a></p>
                </form>
            </div>
        </div>
    </div>
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>



