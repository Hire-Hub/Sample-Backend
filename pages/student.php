<?php
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
                <a class="nav-link active" id="text" aria-current="page" href="applicants.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" id="text" aria-current="page" href="about.php">Contacts</a>
              </li>
            </ul>
            <form class="d-flex">
                <a href="logout.php" class="btn btn-outline-primary">Logout <i class="fa-solid fa-right-from-bracket"></i></a>
             </form>
          </div>
        </div>
      </nav>
  <br>
    <!-- <div class="container"> 
        <div class="hero">
            <h2><strong>Bienvenue sur JOB OPPORTUNITY</strong>
            <br>nous vous prensentons nos differentes societe de recrutement</h2>
        </div>
    </div> -->


    
    <div class="container">
        <div class="row">

          <?php
             $sql = "Select * from `post-table`";
             $result = mysqli_query($con,$sql);

             if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
                  // $username = $row['username'];
                  $postname = $row['postname'];
                  $description = $row['description'];

                  echo 
                  '
                  <div class="col-lg-4 my-4" border-radiuis="1px solid">
                    <img  src="img/img1.jpg" width="100%" height="50%"  class="rounded">
                    <h2>'.$postname.'</h2>
                    <p>'.$description.'</p>
                    <p><a class="btn btn-secondary" href="https://api.whatsapp.com/send?phone=676784788" role="button"><strong> Postuler</strong> &raquo;</a></p>
                  </div>
                  ';
              };
              
            }
          ?>
      
          <!-- <div class="col-lg-4 my-4" border-radiuis="1px solid">
            <img  src="img/img1.jpg" width="100%" height="50%"  class="rounded">
            <h2>Plomberie</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Numquam doloribus quas corrupti saepe rem fugiat est fuga ratione,
              repellat perferendis, nostrum odit et magnam optio.</p>
            <p><a class="btn btn-secondary" href="https://api.whatsapp.com/send?phone=676784788" role="button"><strong> Postuler</strong> &raquo;</a></p>
          </div>/.col-lg-4 -->
      
          <!-- <div class="col-lg-4 my-4">
            <img  src="img/img2.jpg" width="100%" height="50%" class="rounded">
            <h2>Genie-infortmatique</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Numquam doloribus quas corrupti saepe rem fugiat est fuga ratione,
              repellat perferendis, nostrum odit et magnam optio.</p>
            <p><a class="btn btn-secondary" href="https://api.whatsapp.com/send?phone=676784788" role="button"><strong> Postuler</strong>&raquo;</a></p>
          </div>/.col-lg-4 -->
      
          <!-- <div class="col-lg-4 my-4">
            <img  src="img/img5.jpg" width="100%" height="50%" class="rounded">
            <h2>Genie-civil</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Numquam doloribus quas corrupti saepe rem fugiat est fuga ratione,
              repellat perferendis, nostrum odit et magnam optio.</p>
            <p><a class="btn btn-secondary" href="https://api.whatsapp.com/send?phone=676784788" role="button"><strong> Postuler</strong> &raquo;</a></p>
          </div>/.col-lg-4 -->
      
          <!-- <div class="col-lg-4 my-4">
            <img  src="img/blog-3.jpg" width="100%" height="50%" class="rounded">
            <h2>Marqueting digital</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Numquam doloribus quas corrupti saepe rem fugiat est fuga ratione,
              repellat perferendis, nostrum odit et magnam optio.</p>
            <p><a class="btn btn-secondary" href="https://api.whatsapp.com/send?phone=676784788" role="button"><strong> Postuler</strong> &raquo;</a></p>
          </div>/.col-lg-4 -->
      
          <!-- <div class="col-lg-4 my-4">
            <img  src="img/blog-2.jpg" width="100%" height="50%" class="rounded">
            <h2>Assistance de direction</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Numquam doloribus quas corrupti saepe rem fugiat est fuga ratione,
              repellat perferendis, nostrum odit et magnam optio.</p>
            <p><a class="btn btn-secondary" href="https://api.whatsapp.com/send?phone=676784788" role="button"><strong> Postuler</strong> &raquo;</a></p>
          </div>/.col-lg-4 -->
      
          <!-- <div class="col-lg-4 my-4">
            <img  src="img/blog-4.jpg" width="100%" height="50%" class="rounded">
            <h2>Secretariat bureautique</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Numquam doloribus quas corrupti saepe rem fugiat est fuga ratione,
              repellat perferendis, nostrum odit et magnam optio.</p>
            <p><a class="btn btn-secondary" href="https://api.whatsapp.com/send?phone=676784788" role="button"><strong> Postuler</strong> &raquo;</a></p>
          </div> -->
        </div>
      </div>

      <footer class="page-footer font-small cyan darken-3">
      
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
          <a href="#"> MDBootstrap.com</a>
        </div>
        
      </footer>

     <!-- <script src="main.js"></script> -->
     <script src="js/cdn.jsdelivr.net_npm_jquery@3.6.4_dist_jquery.slim.min.js"></script>
    <script src="js/cdn.jsdelivr.net_npm_popper.js@1.16.1_dist_umd_popper.min.js"></script>
    <script src="js/cdn.jsdelivr.net_npm_bootstrap@4.6.2_dist_js_bootstrap.bundle.min.js"></script>
</body>
</html>
