
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: access.php");
    exit;
}

?>

<?php

include_once 'config.php';
$result = mysqli_query($link,"SELECT * FROM doctorlogin");

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>DR at home</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/scrolling-nav.css" rel="stylesheet">
<!-- button-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<!-- table style -->
<style>
#design {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#design th, #design th {
  border: 1px solid #ddd;
  padding: 8px;
}

#design tr:nth-child(even){background-color: #f2f2f2;}

#design tr:hover {background-color: #ddd;}

#design th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}
</style>
</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.php">DR at home </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!--<div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>-->
          <li class="nav-item">
            <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="bg-primary text-white">
    <div class="container text-center">
      <h1>Welcome to Health@Tips</h1>
      <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
      <p class="lead">place with expert Doctors on your finger tips</p>
    </div>
  </header>



 <section id="about" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
            <h2> Doctors available </h2><br>
            <br>
            
            <?php
             $i=0;
                while($row = mysqli_fetch_array($result)) {
            ?>
            
            <div class="col-mg-8">
                <div class="column">
                <div class="<?php if(isset($classname)) echo $classname;?>">
                
                <img src="dr.png" style="width: 100px; height: 100px; float: center;" >
                 <h4>Dr <?php echo $row["username"]; ?></h4>
                <h5>(<?php echo $row["special"]; ?>)</h5>
            </div></div>
            <?php
            $i++;
            }
            ?>
        </div>
      </div>
    </div>

  
     
  </section>
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Contact us</h2><br>

       
  <div class="row">
  <div class="col-sm-6">
    <div class="card">
       <img class="card-img-top" src="mh.png" alt="Card image" style="width:100%">
      <div class="card-body">
        <h5 class="card-title">MOBILE HEALTH</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="complaint.php" class="btn btn-primary">consult</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <img class="card-img-top" src="mh.png" alt="Card image" style="width:100%">
      <div class="card-body">
        <h5 class="card-title">REMOTE HEALTH MONITORING</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="complaint.php" class="btn btn-primary">consult</a>
      </div>
    </div>
  </div>
</div><br><br>

<div class="row">
  <div class="col-sm-6">
    <div class="card">
       <img class="card-img-top" src="mh.png" alt="Card image" style="width:100%">
      <div class="card-body">
        <h5 class="card-title">LOAD AND STORE</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="complaint.php" class="btn btn-primary">consult</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <img class="card-img-top" src="mh.png" alt="Card image" style="width:100%">
      <div class="card-body">
        <h5 class="card-title">EMERGENCY</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="complaint.php" class="btn btn-primary">consult</a>
      </div>
    </div>
  </div>
  </div><br><br>

  <div class="row">
  <div class="col-sm-6">
    <div class="card">
       <img class="card-img-top" src="mh.png" alt="Card image" style="width:100%">
      <div class="card-body">
        <h5 class="card-title">LIVE</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="complaint.php" class="btn btn-primary">consult</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <img class="card-img-top" src="mh.png" alt="Card image" style="width:100%">
      <div class="card-body">
        <h5 class="card-title">SUGGESTIONS</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">consult</a>
      </div>
    </div>
  </div>
</div>
</div>
</section>
  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Qidas info</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>

</body>

</html>
