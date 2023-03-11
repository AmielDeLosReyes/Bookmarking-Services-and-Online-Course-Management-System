<?php
    session_destroy();
    $host = "localhost";
    $username = "root";
    $password = "password";
    $db = "aral";

    // Create connection
    $conn = mysqli_connect($host, $username, $password, $db);

    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    } else {
      if (isset($_POST["emailAdd"]) && $_POST["password"] && $_POST["userName"]) {

        // Validate the inputs
        function validate($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);

          return $data;
        }

        $name = validate($_POST["userName"]);
        $email = validate($_POST["emailAdd"]);
        $pass = validate($_POST["password"]);

        $sql = "INSERT INTO Users (name, email, password) VALUES ('$name', '$email', '$pass')";

        $result = mysqli_query($conn, $sql);

        if($result) {
          header("Location: profile.php");
          exit();
        }
      }
  }  
  
?>
<?php include 'header.php' ?>
  <body class="az-body">

    <div class="az-signup-wrapper">
      <div class="az-column-signup-left">
        <div>
          <i class="typcn typcn-chart-bar-outline"></i>
          <h1 class="az-logo"><a href="index.php">ar<span>a</span>l</a></h1>
          <h5>Online Learning Management System</h5>
          <p>Aral is an Online Learning Management System. It contains a list of courses a user can take and learn from!</p>
          
        </div>
      </div><!-- az-column-signup-left -->
      <div class="az-column-signup">
        <h1 class="az-logo"><a href="index.php">ar<span>a</span>l</a></h1>
        <div class="az-signup-header">
          <h2>Get Started</h2>
          <h4>It's free to signup!</h4>

          <form method="post" action="signup.php">
            <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control" placeholder="Enter your firstname and lastname" name="userName">
            </div><!-- form-group -->
            <div class="form-group">
              <label>Email</label>
              <input type="text" class="form-control" placeholder="Enter your email" name="emailAdd">
            </div><!-- form-group -->
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" placeholder="Enter your password" name="password">
            </div><!-- form-group -->
            <br />
            <button class="btn btn-az-primary btn-block">Create Account</button>
            
            
          </form>
        </div><!-- az-signup-header -->
        <div class="az-signup-footer">
          <p>Already have an account? <a href="signin.php">Sign In</a></p>
        </div><!-- az-signin-footer -->
      </div><!-- az-column-signup -->
    </div><!-- az-signup-wrapper -->

    <?php include 'footer.php' ?>
  </body>
</html>
