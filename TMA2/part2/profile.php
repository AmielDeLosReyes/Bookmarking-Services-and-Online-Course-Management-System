<?php 
  session_start();
?>
<?php
  $host = "localhost";
  $username = "root";
  $password = "password";
  $db = "aral";

  // Create connection
  $conn = mysqli_connect($host, $username, $password, $db);

  $sql = "SELECT COUNT(course_name) AS courseCount FROM Courses";

  $result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    
    $courseCount = $row['courseCount'];
  }

?>

<?php include 'header.php' ?>
  <body>

  <div class="az-header">
      <div class="container">
        <div class="az-header-left">
          <a href="index.php" class="az-logo"><span></span> Aral - Online Learning Course Management System</a>
          <a href="#" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
        </div><!-- az-header-left -->
        <div class="az-header-menu">
          <div class="az-header-menu-header">
            <a href="index.php" class="az-logo"><span></span> Aral</a>
            <a href="" class="close">&times;</a>
          </div><!-- az-header-menu-header -->
        
        </div><!-- az-header-menu -->
        <div class="az-header-right">
          <a href="" class="az-header-search-link"><i class="fas fa-search"></i></a>
          <div class="az-header-message">
            <a href="#"><i class="typcn typcn-messages"></i></a>
          </div><!-- az-header-message -->
         
          <div class="dropdown az-profile-menu">
            <a href="" class="az-img-user"><img src="https://via.placeholder.com/500" alt=""></a>
            <div class="dropdown-menu">
              <div class="az-dropdown-header d-sm-none">
                <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
              </div>
              <div class="az-header-profile">
                <div class="az-img-user">
                  <img src="https://via.placeholder.com/500" alt="">
                </div><!-- az-img-user -->
                <?php 
                if(isset($_SESSION['userName'])) {
                  echo '<h6 style="text-align:center;">'.$_SESSION['userName'] . '</h6>';
                }else {
                  echo '<h6>User</h6>';
                }
                ?>
                
              </div><!-- az-header-profile -->

              <a href="profile.php" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
              <a href="signin.php" class="dropdown-item"><i class="typcn typcn-upload-outline"></i> Sign In</a>
              <a href="signup.php" class="dropdown-item"><i class="typcn typcn-user-add-outline"></i> Create Account </a>
            
              <a href="signout.php" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign Out</a>
            </div><!-- dropdown-menu -->
          </div>
        </div><!-- az-header-right -->
      </div><!-- container -->
    </div><!-- az-header -->

    <div class="az-content az-content-profile">
      <div class="container mn-ht-100p">
        <div class="az-content-left az-content-left-profile">

          <div class="az-profile-overview">
            <div class="az-img-user">
              <img src="assets/img/face10.jpg" alt="">
            </div><!-- az-img-user -->
            <div class="d-flex justify-content-between mg-b-20">
              <div>
                <h5 class="az-profile-name" style="text-align:left;"><?php echo $_SESSION['userName']; ?></h5>
                
              </div>
              <div class="btn-icon-list">
                <button class="btn btn-indigo btn-icon"><i class="typcn typcn-plus-outline"></i></button>
                <!-- <button class="btn btn-primary btn-icon"><i class="typcn typcn-message"></i></button> -->
              </div>
            </div>

            
            <hr class="mg-y-30">

            <label class="az-content-label tx-13 mg-b-20">Websites &amp; Social Channel</label>
            <div class="az-profile-social-list">
              <div class="media">
                <div class="media-icon"><i class="icon ion-logo-github"></i></div>
                <div class="media-body">
                  <span>Github</span>
                  <a href="">github.com/<?php echo $_SESSION['userName'] ?></a>
                </div>
              </div><!-- media -->
              <div class="media">
                <div class="media-icon"><i class="icon ion-logo-twitter"></i></div>
                <div class="media-body">
                  <span>Twitter</span>
                  <a href="">twitter.com/<?php echo $_SESSION['userName'] ?></a>
                </div>
              </div><!-- media -->
              <div class="media">
                <div class="media-icon"><i class="icon ion-logo-linkedin"></i></div>
                <div class="media-body">
                  <span>Linkedin</span>
                  <a href="">linkedin.com/in/<?php echo $_SESSION['userName'] ?></a>
                </div>
              </div><!-- media -->
              <div class="media">
                <div class="media-icon"><i class="icon ion-md-link"></i></div>
                <div class="media-body">
                  <span>My Portfolio</span>
                  <a href="">bootstrapdash.com/<?php echo $_SESSION['userName'] ?></a>
                </div>
              </div><!-- media -->
            </div><!-- az-profile-social-list -->

          </div><!-- az-profile-overview -->

        </div><!-- az-content-left -->
        <div class="az-content-body az-content-body-profile">
          <nav class="nav az-nav-line">
            <a href="" class="nav-link active">Overview</a>
            <a href="addCourse.php" class="nav-link">Add a Course</a>
            <a href="quiz.php" class="nav-link">Take a Quiz</a>
            <a href="xmlHtml.php" class="nav-link">XML Data Parsed</a>
          </nav>

          <div class="card-body">
                  <div class="d-flex">
                    <div class="wrapper">
                      <h4 class="card-title">Available Courses (<?php echo $courseCount; ?>)</h4>
                    </div>
                    <div class="wrapper">
                    </div>
                  </div>

                  <div class="row project-list-showcase">

                  <?php
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

                        $sql = "SELECT * FROM Courses";
                        $result = $conn->query($sql);

                        $rows = $result->fetch_all(MYSQLI_ASSOC);
                        
                        if ($result->num_rows > 0){
                          foreach($rows as $id => $rowData) {
                            $randomValue = rand(0, 100);
                            echo '
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12 project-grid">
                              <div class="project-grid-inner">
                                <div class="d-flex align-items-start">
                                  <div class="wrapper">
                                    <a href="' . $rowData['course_url'] . '" target="_blank"><h5 class="project-title">' . $rowData['course_name'] . '</h5></a>
                                    <p class="project-location">' . $rowData['course_author'] . '</p>
                                  </div>
                                  <div class="badge badge-success ms-auto">Finished</div>
                                </div>
                                <p class="project-description">' . $rowData['course_description'] . '</p>
                                <div class="d-flex justify-content-between">
                                  <p class="mb-2 font-weight-medium">Progress</p>
                                  <p class="mb-2 font-weight-medium">'. $randomValue . '%</p>
                                </div>
                                <div class="progress progress-md mb-3">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: ' . $randomValue . '%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="70"></div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center flex-wrap">                    
                                </div>
                              </div>
                            </div>
                            ';
                          }
                        }
                      }
                      ?>

                  </div>
                </div>
              </div>
            </div>
        </div><!-- az-content-body -->
      </div><!-- container -->
    </div><!-- az-content -->

    <?php include 'footer.php' ?>
  </body>
</html>
