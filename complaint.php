
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
          <li class="nav-item">
            <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="bg-primary text-white">
    <div class="container text-center">
      <h1>Welcome to DOCTOR at home</h1>
      <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
      <p class="lead">place with expert Doctors on your finger tips</p>
    </div>
  </header>

<body>
  <section id="about" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
  <form method="post" action="process.php" style="font-size: 24px">
    user name:<br>
    <input type="text" name="username" value="<?php echo htmlspecialchars($_SESSION["username"]); ?>">
    <br>
    email:<br>
    <input type="email" name="email" >
    <br>
    <label>Doctor name:</label><br>
    <select id="doctorname" name="doctorname" style="font-size: 24px">
      <option></option>
      <?php
             $i=0;
                while($row = mysqli_fetch_array($result)) {
            ?>

      <option value="<?php echo $row["username"]; ?>" size="1"><?php echo $row["username"]; ?>(<?php echo $row["special"]; ?>)     </option>
      <?php
            $i++;
            }
            ?>
    </select>
    <br>
    <label>Consultation type:</label><br>
     <select id="type" name="type" style="font-size: 24px">
      <option value="mobile health" size="1">Mobile health</option>
      <option value="remote patient monitoring" size="1">Remote patient monitoring</option>
      <option value="Load store" size="1">Load store or OTC</option>
      <option value="live" size="1">LIVE</option>
      <option value="emergency" size="1">Emergency</option>
    </select>
      <br>
    problems:<br>
    <input type="text" name="problem">
    <br>
    symptoms:<br>
    <input type="text" name="symptoms">
    <br>
    age:<br>
    <input type="text" name="age">
    <br>
     since:<br>
    <input type="text" name="since">
    <br><br>
    <input type="submit" name="save" value="submit">
  </form>
</div>
</div>
</div>
</section>
  </body>

 <!--<section id="about" class="bg-light">
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
  </section> -->
  



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
