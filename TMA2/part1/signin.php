<?php 
    session_start();
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
              $_SESSION['link'] = $row['URL'];
              $userID = $row['UID'];

              header("Location: profile.php");
              exit();
            }
          }
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
                <div class="d-flex align-items-center fw-bolder fs-5 d-inline-block"><img src="assets/img/icons/logo.png" alt="" width="58" /></div>
              </a>
              <div class="text-center mb-7">
                <h3 class="text-1000">Sign In</h3>
                <p class="text-700">Get access to your account</p>
                <hr class="bg-200 mt-5 mb-4" />
                <div class="divider-content-center">or use email</div>
              </div>
              
              <?php if (isset($_GET['error'])) { ?>

                <p class="error"><?php echo $_GET['error']; ?></p>

              <?php } ?>

              <form id="logIn" method="post" action="signin.php">
                <div class="mb-3 text-start"><label class="form-label" for="email">Email address</label>
                  <div class="form-icon-container"><input class="form-control form-icon-input" id="email" type="email" placeholder="name@example.com" name="emailAdd" /><span class="fas fa-user text-900 fs--1 form-icon"></span></div>
                </div>
                <div class="mb-3 text-start"><label class="form-label" for="password">Password</label>
                  <div class="form-icon-container"><input class="form-control form-icon-input" id="password" type="password" placeholder="Password" name="password" /><span class="fas fa-key text-900 fs--1 form-icon"></span></div>
                </div>
                <div class="row flex-between-center mb-7">
                  <div class="col-auto">
                    <div class="form-check mb-0"><input class="form-check-input" id="basic-checkbox" type="checkbox" checked="checked" /><label class="form-check-label mb-0" for="basic-checkbox">Remember me</label></div>
                  </div>
                  <div class="col-auto"><a class="fs--1 fw-semi-bold" href="../../../pages/authentication/simple/forgot-password.html">Forgot Password?</a></div>
                </div>
                <button class="btn btn-primary w-100 mb-3" name="submitSignIn">Sign In</button>
              
              
              <div class="text-center"><a class="fs--1 fw-bold" href="signup.php">Create an account</a></div>
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