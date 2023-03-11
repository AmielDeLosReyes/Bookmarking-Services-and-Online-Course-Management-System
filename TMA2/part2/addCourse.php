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

    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    } else {
      if (isset($_POST["courseName"]) && $_POST["courseDescription"] && $_POST["courseAuthor"]) {

        // Validate the inputs
        function validate($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);

          return $data;
        }

        $courseName = validate($_POST["courseName"]);
        $courseDescription = validate($_POST["courseDescription"]);
        $courseAuthor = validate($_POST["courseAuthor"]);
        $courseURL = validate($_POST["courseURL"]);

        $sql = "INSERT INTO Courses (course_name, course_description, course_author, course_url, course_img) VALUES ('$courseName', '$courseDescription', '$courseAuthor', '$courseURL')";

        $result = mysqli_query($conn, $sql);

        if($result) {
          header("Location: profile.php");
          exit();
        }
      }
  }  
  
?>
<?php include 'header.php' ?>
<style> 
        input[type=text] {
        width: 15%;
        padding: 5px 10px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 3px solid #ccc;
        -webkit-transition: 0.5s;
        transition: 0.5s;
        outline: none;
        }

        input[type=text]:focus {
        border: 3px solid #555;
        }
</style>
  <body>

  <div class="az-header">
      <div class="container">
        <div class="az-header-left">
          <a href="index.php" class="az-logo"><span></span> Aral - Online Learning Course Management</a>
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
                <h6>User</h6>
                
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
                <h5 class="az-profile-name"><?php echo $_SESSION['userName']; ?></h5>
                
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
            <a href="profile.php" class="nav-link">Overview</a>
            <a href="addCourse.php" class="nav-link active">Add a Course</a>
            <a href="quiz.php" class="nav-link">Take a Quiz</a>
            <a href="xmlHtml.php" class="nav-link">XML Data Parsed</a>
          
          </nav>

          <div class="card-body">
           <h3>Welcome to EML! You can add a course by filling out the input fields and it will be added to the database.</h3>
           </br>
           <p>
                &lt;course&gt;
                <br />
                <form method="post" action="xmlInput.php">
                    &nbsp; &nbsp;&lt;courseName&gt;<input type="text" name="courseName">&lt;/courseName&gt;
                    <br />
                    &nbsp; &nbsp;&lt;courseAuthor&gt;<input type="text" name="courseAuthor">&lt;/courseAuthor&gt;
                    <br />
                    &nbsp; &nbsp;&lt;courseDescription&gt;<input type="text" name="courseDescription">&lt;/courseDescription&gt;
                    <br />
                    &nbsp; &nbsp;&lt;courseURL&gt;<input type="text" name="courseURL">&lt;/courseURL&gt;
                    <br />
                    <!-- &nbsp; &nbsp;&lt;courseImage&gt;<input type="file" name="fileToUpload" id="fileToUpload">&lt;/courseImage&gt; -->
                    <br />
                &lt;/course&gt;
            </p>
                <button class="btn btn-az-secondary">Submit EML</button>
                </form>
                <br />
                  </div>
                </div>
              </div>
            </div>
        </div><!-- az-content-body -->
      </div><!-- container -->
    </div><!-- az-content -->

    <?php include 'footer.php' ?>

    <script>
      $(function(){
        'use strict'

        /** AREA CHART **/
        var ctx = document.getElementById('chartArea').getContext('2d');

        var gradient = ctx.createLinearGradient(0, 240, 0, 0);
        gradient.addColorStop(0, 'rgba(0,123,255,0)');
        gradient.addColorStop(1, 'rgba(0,123,255,.3)');

        new Chart(ctx, {
          type: 'line',
          data: {
            labels: ['Oct 1', 'Oct 2', 'Oct 3', 'Oct 4', 'Oct 5', 'Oct 6', 'Oct 7', 'Oct 8', 'Oct 9', 'Oct 10'],
            datasets: [{
              data: [12, 15, 18, 40, 35, 38, 32, 20, 25],
              borderColor: '#007bff',
              borderWidth: 1,
              backgroundColor: gradient
            }]
          },
          options: {
            maintainAspectRatio: false,
            legend: {
              display: false,
                labels: {
                  display: false
                }
            },
            scales: {
              yAxes: [{
                display: false,
                ticks: {
                  beginAtZero:true,
                  fontSize: 10,
                  max: 80
                }
              }],
              xAxes: [{
                ticks: {
                  beginAtZero:true,
                  fontSize: 11,
                  fontFamily: 'Arial'
                }
              }]
            }
          }
        });

      });
    </script>
  </body>
</html>
