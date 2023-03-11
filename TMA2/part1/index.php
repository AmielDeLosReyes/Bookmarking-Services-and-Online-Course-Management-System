<?php
  session_start();
?>

<?php include 'header.php'; ?>

<body>
  <!-- ===============================================-->
  <!--    Main Content-->
  <!-- ===============================================-->
  <main class="main" id="top">

      <nav class="navbar navbar-top navbar-expand" id="navbarDefault" style="display:none;">
        <div class="collapse navbar-collapse justify-content-between">
          <div class="navbar-logo">
            <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="#">
              <div class="d-flex align-items-center">
                <div class="d-flex align-items-center"><img src="assets/img/icons/logo.png" alt="phoenix" width="27" />
                  <p class="logo-text ms-2 d-none d-sm-block">Tarub Bookmarking Services</p>
                </div>
              </div>
            </a>
          </div>
          <div class="search-box navbar-top-search-box d-none d-lg-block" data-list='{"valueNames":["title"]}' style="width:25rem;">
            <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input fuzzy-search rounded-pill form-control-sm" type="search" placeholder="Search..." aria-label="Search" />
              <span class="fas fa-search search-box-icon"></span>
            </form>
            
                <div class="text-center">
                  <p class="fallback fw-bold fs-1 d-none">No Result Found.</p>
                </div>
              </div>
            </div>
          </div>
          <ul class="navbar-nav navbar-nav-icons flex-row">
            
            
            <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-l ">
                  <img class="rounded-circle " src="assets/img/icons/logo.png" alt="" />
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300" aria-labelledby="navbarDropdownUser">
                <div class="card position-relative border-0">
                  <div class="card-body p-0">
                    <div class="text-center pt-4 pb-3">
                      <div class="avatar avatar-xl ">
                        <img class="rounded-circle " src="assets/img/icons/logo.png" alt="" />
                      </div>
                      <?php
                        if(isset($_SESSION['userName'])){
                          echo '<h6 class="mt-2 text-black">' . $_SESSION['userName'] . '</h6>';
                        }else {
                          echo '<h6 class="mt-2 text-black">TBS</h6>';
                        }
                      ?>
                    </div>
                  </div>
                  <div class="card-footer p-0 border-top">
                    <ul class="nav d-flex flex-column my-3">
                      <li class="nav-item">
                        <?php 
                          if(isset($_SESSION['userName'])) {
                            echo '<a class="nav-link px-3" href="profile.php"> <span class="me-2 text-900" data-feather="user"></span><span>Profile</span></a></li>';
                          }else {
                            echo '<a class="nav-link px-3" href="signin.php"> <span class="me-2 text-900" data-feather="user"></span><span>Profile</span></a></li>';
                          }
                        ?>

                      <li class="nav-item"><a class="nav-link px-3" href="signin.php"> <span class="me-2 text-900" data-feather="log-in"></span>Sign In</a></li>

                      <li class="nav-item"><a class="nav-link px-3" href="signup.php"> <span class="me-2 text-900" data-feather="user-plus"></span>Add another account</a></li>
                    </ul>
                    
                    <hr />
                    <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="signout.php"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                    <div class="my-2 text-center fw-bold fs--2 text-600"></div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <nav class="navbar navbar-top navbar-slim navbar-expand" id="topNavSlim" style="display:none;">
        <div class="collapse navbar-collapse justify-content-between">
          <div class="navbar-logo">
            <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand navbar-brand" href="../index.html"> <span class="text-1000 d-none d-sm-inline">slim</span></a>
          </div>
          <ul class="navbar-nav navbar-nav-icons flex-row">

          </ul>
        </div>
      </nav>
      <nav class="navbar navbar-top navbar-expand-lg" id="navbarTop" style="display:none;">
        
      </nav>
      <nav class="navbar navbar-top navbar-slim justify-content-between navbar-expand-lg" id="navbarTopSlim" style="display:none;">
       
      </nav>
      <nav class="navbar navbar-top navbar-expand-lg" id="navbarCombo" data-navbar-top="combo" data-move-target="#navbarVerticalNav" style="display:none;">
       
      </nav>
      <nav class="navbar navbar-top navbar-slim justify-content-between navbar-expand-lg" id="navbarComboSlim" data-navbar-top="combo" data-move-target="#navbarVerticalNav" style="display:none;">
        
      </nav>
      
      <script>
        var navbarTopShape = window.config.config.phoenixNavbarTopShape;
        var navbarPosition = window.config.config.phoenixNavbarPosition;
        var body = document.querySelector('body');
        var navbarDefault = document.querySelector('#navbarDefault');
        var navbarTop = document.querySelector('#navbarTop');
        var topNavSlim = document.querySelector('#topNavSlim');
        var navbarTopSlim = document.querySelector('#navbarTopSlim');
        var navbarCombo = document.querySelector('#navbarCombo');
        var navbarComboSlim = document.querySelector('#navbarComboSlim');

        var documentElement = document.documentElement;
        var navbarVertical = document.querySelector('.navbar-vertical');

        if (navbarTopShape === 'slim' && navbarPosition === 'vertical') {
          navbarDefault.remove();
          navbarTop.remove();
          navbarTopSlim.remove();
          navbarCombo.remove();
          navbarComboSlim.remove();
          topNavSlim.style.display = 'block';
          navbarVertical.style.display = 'inline-block';
          body.classList.add('nav-slim');
        } else if (navbarTopShape === 'slim' && navbarPosition === 'horizontal') {
          navbarDefault.remove();
          navbarVertical.remove();
          navbarTop.remove();
          topNavSlim.remove();
          navbarCombo.remove();
          navbarComboSlim.remove();
          navbarTopSlim.removeAttribute('style');
          body.classList.add('nav-slim');
        } else if (navbarTopShape === 'slim' && navbarPosition === 'combo') {
          navbarDefault.remove();
          //- navbarVertical.remove();
          navbarTop.remove();
          topNavSlim.remove();
          navbarCombo.remove();
          navbarTopSlim.remove();
          navbarComboSlim.removeAttribute('style');
          navbarVertical.removeAttribute('style');
          body.classList.add('nav-slim');
        } else if (navbarTopShape === 'default' && navbarPosition === 'horizontal') {
          navbarDefault.remove();
          topNavSlim.remove();
          navbarVertical.remove();
          navbarTopSlim.remove();
          navbarCombo.remove();
          navbarComboSlim.remove();
          navbarTop.removeAttribute('style');
          documentElement.classList.add('navbar-horizontal');
        } else if (navbarTopShape === 'default' && navbarPosition === 'combo') {
          topNavSlim.remove();
          navbarTop.remove();
          navbarTopSlim.remove();
          navbarDefault.remove();
          navbarComboSlim.remove();
          navbarCombo.removeAttribute('style');
          navbarVertical.removeAttribute('style');
          documentElement.classList.add('navbar-combo')

        } else {
          topNavSlim.remove();
          navbarTop.remove();
          navbarTopSlim.remove();
          navbarCombo.remove();
          navbarComboSlim.remove();
          navbarDefault.removeAttribute('style');
          navbarVertical.removeAttribute('style');
        }

        var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
        var navbarTop = document.querySelector('.navbar-top');
        if (navbarTopStyle === 'darker') {
          navbarTop.classList.add('navbar-darker');
        }

        var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
        var navbarVertical = document.querySelector('.navbar-vertical');
        if (navbarVerticalStyle === 'darker') {
          navbarVertical.classList.add('navbar-darker');
        }
      </script>
      <div class="content">
        <h3><b><u>User Guide</u></b>:</h3> 
        <ol>
          <li>This is the landing page of Part 1. Click on the profile button on the top right corner and it will have dropdown values for signing in, signing up, and accessing a registered profile.</li>
          <li>If the account is in record, it will direct the user to the user profile's page by clicking on "Profile", if not then it will direct the user to the login page.</li>
          <li>A user can also register another account by clicking on "Add another account" from the profile button on the top right corner of the page.</li>
          <li>Once inside the user profile's page, it will direct you to your profile page which lists all the websites you've bookmarked, and also some of your user information.</li>
          <li>Finally, you can bookmark a website by clicking the "Bookmark a Website" button. You need to copy the URL of the website that you want to bookmark and paste it into the input field, then click the "Bookmark" button</li>
          <li>After bookmarkin a website, it will be displayed on your user profile's bookmarked list, as well as on the landing page.</li>
          <li>Signout will log the logged in user and will destroy your current session. You can signout if you want to login on another account</li>
        </ol> 
        <br />


        <nav class="mb-2" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item active">Homepage</li>
          </ol>
        </nav>
        <h2 class="text-bold text-1100 mb-5">Most Popular Websites Bookmarked</h2>

        <h4>Welcome to Tarubski Bookmarking Services! This is a online bookmarking services for the users of the Internet. Listed below are the top 10 websites bookmarked by the users. Enjoy!</h4>
        <div id="members" data-list='{"valueNames":["customer","email","mobile_number","city","last_active","joined"],"page":10,"pagination":true}'>
          <div class="row align-items-center justify-content-between g-3 mb-4">
            <div class="col col-auto">
              
            </div>
            
            

          </div>
          <div class="mx-n4 mx-lg-n6 px-4 px-lg-6 mb-9 bg-white border-y border-300 mt-2 position-relative top-1">
            <div class="table-responsive scrollbar ms-n1 ps-1">

            <!-- Table Contents -->
              <table class="table table-sm fs--1 mb-0">
                <thead>
                  <tr>
                    <th class="white-space-nowrap fs--1 align-middle ps-0">
                      <div class="form-check mb-0 fs-0"><input class="form-check-input" id="checkbox-bulk-members-select" type="checkbox" data-bulk-select='{"body":"members-table-body"}' /></div>
                    </th>
                    <th class="sort align-middle" scope="col" data-sort="customer" style="width:15%; min-width:200px;">DOMAIN</th>
                    <th class="sort align-middle" scope="col" data-sort="email" style="width:15%; min-width:200px;">URL</th>
                    <th class="sort align-middle pe-3" scope="col" data-sort="mobile_number" style="width:20%; min-width:200px;">BOOKEDMARKED BY</th>
                  </tr>
                </thead>
                <tbody class="list" id="members-table-body">

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
                    $sql = "SELECT * FROM Users ORDER BY UID DESC LIMIT 10";
                    $result = $conn->query($sql);

                    $rows = $result->fetch_all(MYSQLI_ASSOC);
                    if ($result->num_rows > 0){
                      foreach($rows as $id => $rowData) {
                        if((!empty($rowData['name']) && (!empty($rowData['URL'])))) {
                          echo '<tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="fs--1 align-middle ps-0 py-3">
                            <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                          </td>';
                        echo '<td class="mobile_number align-middle white-space-nowrap"><a class="fw-bold text-1100" href="#">' . parse_url($rowData['URL'])["host"] . '</a></td>';
                  
                        echo '<td class="email align-middle white-space-nowrap"><a class="fw-semi-bold" href="' . $rowData['URL'] . '" target="_blank">' . $rowData['URL'] . '</a></td>';

                        echo '<td class="mobile_number align-middle white-space-nowrap"><a class="fw-bold text-1100" href="#">' . $rowData['name'] . '</a></td>
                        <td class="city align-middle white-space-nowrap text-900"></td>
                        <td class="last_active align-middle text-end white-space-nowrap text-700"></td>
                        <td class="joined align-middle white-space-nowrap text-700 text-end">' . $rowData['date_time'] . '</td>
                        </tr>';
                        }        
                    }
                  }
                }
                    $conn->close();
                    ?>
                </tbody>
              </table>
            </div>
            <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
            </div>
          </div>
        </div>
        <footer class="footer position-absolute">
          <div class="row g-0 justify-content-between align-items-center h-100">
            <div class="col-12 col-sm-auto text-center">
              <p class="mb-0 mt-2 mt-sm-0 text-900">Assignment 2 Part 1 - Amiel De Los Reyes<span class="d-none d-sm-inline-block"></span><span class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />2023 &copy;
            </div>
            
          </div>
        </footer>
      </div>
    </div>
  </main><!-- ===============================================-->
  <!--    End of Main Content-->
  <!-- ===============================================-->

  <?php include 'footer.php'; ?>
</body>

</html>