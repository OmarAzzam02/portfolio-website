<!DOCTYPE html>
<html lang="en">
    <?php
        require_once("dbconn.php");
        $sql = " select * from user";
        $result = $conn->query($sql);
        session_start();
    ?>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Projects</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://kit.fontawesome.com/7b0357f5f0.js"
      crossorigin="anonymous"
    ></script>
    <!-- Linking CSS File index.css -->

    <link rel="stylesheet" href="CSS/review.css" >
  </head>

  <body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <img src="assets/logo.png" id="logo" />
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="home.html">HOME</a>
            </li>
            <li class="nav-item">
              <!-- may edit see which one looks better  -->
              <a class="nav-link" href="about.html#down">ABOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.html">SERVICES </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="resume.html">RESUME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">PROJECTS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">CONTACT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">REVIEWS</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navigation Bar End -->


    <div class="container-fluid">
      <h1 class="title">
        <span>Reviews</span>
      </h1>
      <hr class="line-under-review-title" />
      <div class="row">
        <!--   ******* Reviews Section satarts here*******   -->
        <?php
       while ($row = $result->fetch_assoc()) {
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $message = $row['message'];
        $id = $row['id'];
    ?>

        <div class="col main">
          <div class="contents">
            <div class="card">
            <i class='fas fa-user-alt'></i>
              <h3> 
             <?php  
              echo $first_name . " " . $last_name . yourMessage($id);
              ?>
              </h3>
              <p>
              <?php echo $message ?>
              </p>
            </div>
          </div>
        </div>
        </div>
        <!-- col ends here -->
        <?php
         }
       ?>
      </div>
    </body>
</html>
<?php
    function yourMessage($id) {
        if (isset($_SESSION["user_id"]) && $_SESSION["user_id"] == $id) 
        return '<p id="sesh">- your message</p>';
        else return '';
    }
   ?>