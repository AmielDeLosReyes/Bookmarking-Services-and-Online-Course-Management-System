<?php session_start(); ?>
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
      if (isset($_POST["urlText"])) {

        
        $urlText = $_POST["urlText"];
        $userName = $_SESSION["userName"];

        $sql = "INSERT INTO Users (name, URL) VALUES ('$userName', '$urlText')";

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
        
        <nav class="navbar navbar-top navbar-expand" id="navbarDefault" style="display:none;">
          <div class="collapse navbar-collapse justify-content-between">
            <div class="navbar-logo">
              <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
              <a class="navbar-brand me-1 me-sm-3" href="index.php">
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
              <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none" data-bs-dismiss="search"><button class="btn btn-link btn-close-falcon p-0" aria-label="Close"></button></div>
              <div class="dropdown-menu border border-300 font-base start-0 py-0 overflow-hidden w-100">
                
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
                        <h6 class="mt-2 text-black"><?php echo $_SESSION["userName"]; ?></h6>
                      </div>
                      <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text" placeholder="Update your status" /></div>
                    </div>
                   
                    <div class="card-footer p-0 border-top">
                      <ul class="nav d-flex flex-column my-3">
                        <li class="nav-item"><a class="nav-link px-3" href="profile.php"> <span class="me-2 text-900" data-feather="user"></span><span>Profile</span></a></li>
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
              <a class="navbar-brand navbar-brand" href="index.php">Tarub Bookmarking Services <span class="text-1000 d-none d-sm-inline">slim</span></a>
            </div>
            <ul class="navbar-nav navbar-nav-icons flex-row">
              
            </ul>
          </div>
        </nav>
        <nav class="navbar navbar-top navbar-expand-lg" id="navbarTop" style="display:none;">
          <div class="navbar-logo">
            <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTopCollapse" aria-controls="navbarTopCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="index.php">
              <div class="d-flex align-items-center">
                <div class="d-flex align-items-center"><img src="assets/img/icons/logo.png" alt="phoenix" width="27" />
                  <p class="logo-text ms-2 d-none d-sm-block">Tarub Bookmarking Services</p>
                </div>
              </div>
            </a>
          </div>
        </nav>
        <nav class="navbar navbar-top navbar-slim justify-content-between navbar-expand-lg" id="navbarTopSlim" style="display:none;">
          <div class="navbar-logo">
            <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTopCollapse" aria-controls="navbarTopCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand navbar-brand" href="../../index.html">phoenix <span class="text-1000 d-none d-sm-inline">slim</span></a>
          </div>
          
        </nav>
        <nav class="navbar navbar-top navbar-expand-lg" id="navbarCombo" data-navbar-top="combo" data-move-target="#navbarVerticalNav" style="display:none;">
          <div class="navbar-logo">
            <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="index.php">
              <div class="d-flex align-items-center">
                <div class="d-flex align-items-center"><img src="assets/img/icons/logo.png" alt="phoenix" width="27" />
                  <p class="logo-text ms-2 d-none d-sm-block">Tarub Bookmarking Services</p>
                </div>
              </div>
            </a>
          </div>
         
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
          <nav class="mb-2" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
              <li class="breadcrumb-item active">Bookmark a Website</li>
            </ol>
          </nav>
          <h2 class="mb-4">Bookmark a Website</h2>
          <div class="row">
            <div class="col-xl-9">

            <?php 

            ?>
            <!-- Start of form -->
              <form method="post" action="bookmark.php">
                <div class="col-sm-6 col-md-8">
                  <div class="form-floating">
                    <input class="form-control" id="floatingInputGrid" type="url" placeholder="Project title" name="urlText" />
                    <label for="floatingInputGrid">Website URL</label>
                    <br />
                </div>
                
                <!-- <div>
                    <br />
                    <label>Bookmark Date</label>
                    <input class="form-control datetimepicker flatpickr-input" id="datepicker" type="date" placeholder="dd/mm/yyyy" data-options="{&quot;disableMobile&quot;:true,&quot;dateFormat&quot;:&quot;d/m/Y&quot;}" readonly="readonly" style="width: 25%;" name="bookmarkDate">
                </div> -->
               
                <div class="col-12 gy-6">
                  <div class="row g-3 justify-content-end">
                    <div class="col-auto"><a class="btn btn-phoenix-primary px-5" href="profile.php">Cancel</a></div>
                    <div class="col-auto">
                        <button class="btn btn-primary px-5 px-sm-15">Bookmark </button>
                    </div>
                  </div>
                </div>
              </form> 

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