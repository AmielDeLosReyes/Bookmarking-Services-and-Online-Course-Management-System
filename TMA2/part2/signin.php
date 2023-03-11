<?php 
    session_start();
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

      if (isset($_POST["emailAdd"]) && $_POST["password"]) {

        // Validate the inputs
        function validate($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);

          return $data;
        }

        $email = validate($_POST["emailAdd"]);
        $password = validate($_POST["password"]);

        if(empty($email)) {
          header("Location: signin.php?error=Email is required");
          exit();
        } else if(empty($password)) {
          header("Location: signin.php?error=Password is required");
          exit();
        } else {
          // Query to match the input to the record in the database
          $query = "SELECT * FROM Users WHERE email = '$email' AND password = '$password'";
          
          $result = mysqli_query($conn, $query);

          if(mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if($row['email'] === $email && $row['password'] === $password) {

              $_SESSION['emailAdd'] = $row['email'];
              $_SESSION['password'] = $row['password'];
              $_SESSION['userName'] = $row['name']; 
              $userID = $row['UID'];

              header("Location: profile.php");
              exit();
            }
          }
        }
      }
    }
  ?>
<?php include 'header.php' ?>

  <body class="az-body">

    <div class="az-signin-wrapper">
      <div class="az-card-signin">
        <h1 class="az-logo"><a href="index.php">ar<span>a</span>l</a></h1>
        <div class="az-signin-header">
          <h2>Welcome back!</h2>
          <h4>Please sign in to continue</h4>

          <form method="post" action="signin.php">
            <div class="form-group">
              <label>Email</label>
              <input type="text" class="form-control" placeholder="Enter your email" value="" name="emailAdd">
            </div><!-- form-group -->
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" placeholder="Enter your password" value="" name="password">
            </div><!-- form-group -->
            <button class="btn btn-az-primary btn-block">Sign In</button>
          </form>
        </div><!-- az-signin-header -->
        <div class="az-signin-footer">
          <p><a href="">Forgot password?</a></p>
          <p>Don't have an account? <a href="signup.php">Create an Account</a></p>
        </div><!-- az-signin-footer -->
      </div><!-- az-card-signin -->
    </div><!-- az-signin-wrapper -->

    <?php include 'footer.php' ?>
  </body>
</html>
