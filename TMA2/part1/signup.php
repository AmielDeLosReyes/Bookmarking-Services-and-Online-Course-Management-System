<?php

    $host = "localhost";
    $username = "root";
    $password = "password";
    $db = "tma2";

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
<?php include 'header.php'; ?>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="container-fluid px-0" data-layout="container">
        <div class="container">
          <div class="row flex-center min-vh-100 py-5">
            <div class="col-sm-10 col-md-8 col-lg-5 col-xl-5 col-xxl-3"><a class="d-flex flex-center text-decoration-none mb-4" href="index.php">
                <div class="d-flex align-items-center fw-bolder fs-5 d-inline-block"><img src="assets/img/icons/logo.png" alt="phoenix" width="58" /></div>
              </a>
              <div class="text-center mb-7">
                <h3 class="text-1000">Sign Up</h3>
                <p class="text-700">Create your account today</p>
              
              <div class="position-relative mt-4">
                <hr class="bg-200" />
                
              </div>
              <div id="errorMessage" hidden></div>

              <!-- Sign up form -->
              <form id="signUp" method="post" action="signup.php">
                <div class="mb-3 text-start">
                  <label class="form-label" for="name">Name</label>
                  <input class="form-control" id="name" type="text" placeholder="Name" name="userName" />
                </div>

                <div class="mb-3 text-start">
                  <label class="form-label" for="email">Email address</label>
                  <input class="form-control" id="email" type="email" placeholder="name@example.com" name="emailAdd" />
                </div>

                <div class="row g-3 mb-3">
                  <div class="col-md-6">
                    <label class="form-label" for="password">Password</label>
                    <input class="form-control form-icon-input" id="password" type="password" placeholder="Password" name="password" />
                  </div>
                  <div class="col-md-6">
                    <label class="form-label" for="confirmPassword">Confirm Password</label>
                    <input class="form-control form-icon-input" id="confirmPassword" type="password" placeholder="Confirm Password" name="confirmPassword" />
                  </div>
                </div>

                <input type="submit" class="btn btn-primary w-100 mb-3" name="submitSignup" value="Sign up">

                <div class="text-center"><a class="fs--1 fw-bold" href="signin.php">Sign in to an existing account</a></div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <?php include 'footer.php'; ?>
  </body>

</html>