<?php session_start(); ?>
<?php include 'header.php' ?>

    <div class="az-header">
      <div class="container">
        <div class="az-header-left">
          <a href="#" class="az-logo"><span></span> Aral - Online Learning Course Management System</a>
          <a href="#" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
        </div><!-- az-header-left -->
        <div class="az-header-menu">
          <div class="az-header-menu-header">
            <a href="#" class="az-logo"><span></span> aral</a>
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

              <?php 
                if(isset($_SESSION['userName'])) {
                  echo '<a href="profile.php" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>';
                }else {
                  echo '<a href="signin.php" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>';
                }
              ?>
             
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
        <div class="content-wrapper w-100">
          <div class="row">
            <div class="col-md-12">
            <h3><b><u>User Guide</u></b>:</h3> 
              <ol>
                <li>This is the landing page of Part 2. It contains the courses available for the users. By clicking on the image, it will direct a user to the tutorial's playlist. Click on the profile button on the top right corner and it will have dropdown values for signing in, signing up, and accessing a registered profile.</li>
                <li>If the account is in record, it will direct the user to the user profile's page by clicking on "My Profile", if not then it will direct the user to the login page.</li>
                <li>A user can also register another account by clicking on "Create Account" from the profile button on the top right corner of the page.</li>
                <li>Once inside the user profile's page, it will direct you to your profile page which displays some of your user information and lists all the courses available for you, as well as the ones you've added. You can click on the course title and it will direct you to the tutorial's playlist.</li>
                <li>Navigate through pages through the navigation bar on the profile's page. It has the Overview, Add a Course, Take a Quiz, and also the view of the parsed XML file that is displayed in the HTML.</li>
                <li>You can add a course by clicking on "Add a Course" navigation button. It is an EML that will store the values in the database.</li>
                <li>You can also take a quiz about the courses listed on the page by clicking on the "Take a Quiz" navigation button.</li>
                <li>Signout will log the logged in user and will destroy your current session. You can signout if you want to login on another account</li>

              </ol>
              <br />
                <!-- Welcome message here -->
                <div id="welcomeMessage">
                    <h1>Welcome to Aral - Online Learning Course Management System</h1>
                </div>
              <div class="card">
                <div class="card-body">
                  <div class="product-nav-wrapper row">
                    <div class="col-lg-4 col-md-5">
                      <ul class="nav product-filter-nav">
                        <li class="active"><a href="#"><u>TOP COURSES</u></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="row product-item-wrapper">
                  <h3>Click on the image to be directed to the tutorial's playlist!</h3>

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
                            if($rowData['course_img'] == NULL) {
                              $courseImage = "assets/img/defaultImg.png";
                            }else {
                              $courseImage = $rowData['course_img'];
                            }
                            echo '
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 product-item">
                              <div class="card">
                                <div class="card-body">
                                  <div class="action-holder">
                                    <div class="sale-badge bg-success">New</div>
                                    <span class="favorite-button"><i class="typcn icon typcn-heart-outline"></i></span>
                                  </div>
                                  <div class="product-img-outer">
                                    <a href="' . $rowData['course_url'] . '" target="_blank"><img class="product_image" src="' . $courseImage . '" alt="prduct image"></a>
                                  </div>
                                  <p class="product-title">' . $rowData['course_name'] . '</p>
                                  <p class="product-price">' . $rowData['course_author']. '</p>
                                  <p class="product-description">' . $rowData['course_description']. '</p>
                                </div>
                              </div>
                            </div>';
                          }
                      }
                    }
                  ?>                  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- container -->
    </div><!-- az-content -->

<?php include 'footer.php' ?>

  </body>
</html>
