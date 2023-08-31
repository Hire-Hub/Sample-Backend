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
                <a class="nav-link active" id="text" aria-current="page" href="applicants.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" id="text" aria-current="page" href="#">Contact</a>
              </li>
            </ul>
            <form class="d-flex">
                <a href="logout.php" class="btn btn-outline-primary">Logout <i class="fa-solid fa-right-from-bracket"></i></a>
             </form>
          </div>
        </div>
      </nav>


    <!-- <div class="about-section">
  <h1>About Us Page</h1>
  <p>Some text about who we are and what we do.</p>
  <p>Resize the browser window to see that this page is responsive by the way.</p>
    </div> -->

    <h2 style="text-align:center">Our Team</h2>
    <div class="row">
  <!-- <div class="column"> -->
    <div class="card">
      <!-- <div class="container"> -->
        <h2>Jane Choel</h2>
        <p class="title">front-ent programing</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>jane@example.com</p>
        <p><button class="btn btn-primary">Contact</button></p>
      <!-- </div> -->
    </div>
  <!-- </div> -->

  <!-- <div class="column"> -->
    <div class="card">
      <div class="container">
        <h2>Mike Ross</h2>
        <p class="title">back-end programing</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>mike@example.com</p>
        <p><button class="btn btn-primary">Contact</button></p>
      </div>
    </div>
  <!-- </div> -->
  
  <div class="column">
    <div class="card">
      <div class="container">
        <h2>John Doe</h2>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>john@example.com</p>
        <p><button class="btn btn-primary">Contact</button></p>
      </div>
    </div>
  </div>
    </div>

  <!-- <script src="main.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>