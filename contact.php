<!DOCTYPE html>
<html lang="en">

<?php
  require_once("dbconn.php");
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $first_name = $_POST['fname'];
        $last_name = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $sql = "INSERT INTO user (first_name, last_name, email, phone, message) 
        VALUES ('$first_name', '$last_name', '$email', '$phone', '$message')";
        $res = $conn->query($sql);
        
        if ($res) {
          $insertedId = mysqli_insert_id($conn);
          session_start();
          $_SESSION['user_id'] = $insertedId;
     
        } else ' ';
    }
?>
  
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="JS/contact.js"></script>
  <link rel="stylesheet" href="CSS/contact.css">
    <title>Contact US</title>
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
              <a class="nav-link" href="projects.html">PROJECTS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">CONTACT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="review.php">REVIEWS</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navigation Bar End -->

    <div class="card shadow">
      <h1 class="title">Get in touch</h1>

      <form id="contact"  method="POST"  onsubmit="return validateAndProcessForm() ">
      <div class="container">
        <div class="contact-form row">
          
          <div class="form-field col-lg-6">
            <input type="text" id="fname" class="input-text" name="fname" />
            <label for="fname" class="label">First Name</label>
          </div>
          <div class="form-field col-lg-6">
            <input type="text" id="lname" class="input-text" name="lname" />
            <label for="lname" class="label">Last Name</label>
          </div>
          <div class="form-field col-lg-6">
            <input type="email" id="email" class="input-text" name="email" />
            <label for="email" class="label">Email</label>
          </div>
          <div class="form-field col-lg-6">
            <input type="text" id="phone" class="input-text" name="phone" />
            <label for="phone" class="label">Contact-Number</label>
          </div>
          <div class="form-field col-lg-12">
            <input type="text" id="message" class="input-text" name="message" />
            <label for="message" class="label">Message</label>
          </div>
          <div class="form-field col-lg-12">
            <button type="submit" class="btn btn-primary" name="">Send</button>
          </div>
        </div>
      </div>
      </form>
    </div>

    <footer class="footer">
      <ul class="socialIcons">
        <li class="facebook">
          <a href="" id="facebook"><i class="fa fa-fw fa-facebook"></i></a>
        </li>
        <li class="twitter">
          <a href="" id="X"><i class="fa fa-fw fa-twitter"></i></a>
        </li>
        <li class="instagram">
          <a href="" id="insta" ><i class="fa fa-fw fa-instagram"></i></a>
        </li>
        <li class="linkedin">
          <a href="" id="link" ><i class="fa fa-fw fa-linkedin"></i></a>
        </li>
        <li class="email">
          <a href="" id="gmail" ><i class="fa fa-fw fa-google"></i></a>
        </li>
      </ul>
    </footer>
     

  </body>
</html>
