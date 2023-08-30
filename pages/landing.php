<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e9f64432b6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./styles/landing.css">
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
                <a class="nav-link active" id="text" aria-current="page" href="about.php">About</a>
              </li>
            </ul>
            <form class="d-flex">
                <a href="logout.php" class="btn btn-outline-primary">Logout <i class="fa-solid fa-right-from-bracket"></i></a>
             </form>
          </div>
        </div>
      </nav>

      <div class="container-fluid" id="employer-section">
      <div class="row p-2">
        <div class="col-md-5" id="image-card">
          <img src="./images/istockphoto-1347257920-1024x1024.jpg" alt="" class="img-fluid m-2" id="image">
        </div>
        <div class="col-md-7">
          <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quisquam incidunt earum, asperiores enim, reiciendis, nostrum iste esse 
            similique praesentium minima voluptatem? Ipsa, sunt  ut maiores et accusantium commodi?</h2>
            <a href="" class="btn btn-primary">Create Job</a>
        </div>
      </div>
    </div>


      <div class="container my-4" id="carousel">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="max-width: 1000px;" >
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="https://picsum.photos/id/237/200" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="https://picsum.photos/seed/picsum/200" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="https://picsum.photos/200/?grayscale" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
      </div>
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>