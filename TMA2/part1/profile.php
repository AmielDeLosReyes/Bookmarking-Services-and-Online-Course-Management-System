<?php 
    session_start();
  ?>

<?php include 'header.php'; ?>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0">
        <div class="container-small">
          <div class="ecommerce-topbar">
            <nav class="navbar navbar-expand-lg navbar-light px-0">
              <div class="row gx-0 gy-2 w-100 flex-between-center">
                <div class="col-auto"><a class="text-decoration-none" href="index.php">
                    <div class="d-flex align-items-center"><img src="assets/img/icons/logo.png" alt="" width="27" />
                      <p class="logo-text ms-2">Tarub Bookmarking Services</p>
                    </div>
                  </a></div>
                <div class="col-auto order-md-1">
                  <ul class="navbar-nav navbar-nav-icons flex-row me-n2">
                    
                    <li class="nav-item dropdown"><a class="nav-link px-2" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="text-700" data-feather="user" style="height:20px;width:20px;"></span></a>
                      <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300 mt-2" aria-labelledby="navbarDropdownUser">
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
                            <li class="nav-item"><a class="nav-link px-3" href="profile.php"> <span class="me-2 text-900" data-feather="user-plus"></span>Profile</a></li>
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
                <div class="col-12 col-md-6">
                  <div class="search-box ecommerce-search-box w-100">
                    <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input search form-control-sm" type="search" placeholder="Search" aria-label="Search" />
                      <span class="fas fa-search search-box-icon"></span>
                    </form>
                  </div>
                </div>
              </div>
            </nav>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-5 pb-9">
        <div class="container-small">
          <nav class="mb-2" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item active" aria-current="page">Page 1</li>
              <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
          </nav>
          <div class="row align-items-center justify-content-between g-3 mb-4">
            <div class="col-auto">
              <h2 class="mb-0">Profile</h2>
            </div>
            <div class="col-auto">
              <div class="row g-2 g-sm-3">
                
                <div class="col-auto"><a class="btn btn-phoenix-secondary" href="bookmark.php"><span class="far fa-plus-square"></span> &nbsp; Bookmark a Website</a></div>

              </div>
            </div>
          </div>
          <div class="row g-3 mb-6">
            <div class="col-12 col-lg-8">
              <div class="card h-100">
                <div class="card-body">
                  <div class="border-bottom border-dashed border-300 pb-4">
                    <div class="row align-items-center g-3 g-sm-5 text-center text-sm-start">
                      <div class="col-12 col-sm-auto"><input class="d-none" id="avatarFile" type="file" /><label class="cursor-pointer avatar avatar-5xl" for="avatarFile"><img class="rounded-circle" src="assets/img/icons/logo.png" alt="" /></label></div>
                      <div class="col-12 col-sm-auto flex-1">
                        <h3><?php echo $_SESSION["userName"]; ?></h3>
                        
                      </div>
                    </div>
                  </div>
                  <div class="d-flex flex-between-center pt-4">
                    <div>
                      <h6 class="mb-2 text-800">Total Bookmarks</h6>
                      <?php
                        $host = "localhost";
                        $username = "root";
                        $password = "password";
                        $db = "tma2";
                    
                        // Create connection
                        $conn = mysqli_connect($host, $username, $password, $db);
                        $name = $_SESSION["userName"];

                        $sql = "SELECT COUNT(URL) AS bookmarksCount FROM Users WHERE name = '$name'";

                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) === 1) {
                          $row = mysqli_fetch_assoc($result);
                          
                          $bookmarksCount = $row['bookmarksCount'];
                        }

                      ?>
                      <h4 class="fs-1 text-1000 mb-0"><?php echo $bookmarksCount ?></h4>
                    </div>
                   
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="border-bottom border-dashed border-300">
                    <h4 class="mb-3 lh-sm lh-xl-1">Your Information</h4>
                  </div>
                  <div class="pt-4 mb-7 mb-lg-4 mb-xl-7">
                    <div class="row justify-content-between">
                      <div class="col-auto">
                        <h5 class="text-1000">Email</h5>
                      </div>
                      <div class="col-auto">
                        <p class="text-800"><?php echo $_SESSION['emailAdd']; ?></p>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <div>
            
            <div class="tab-content" id="profileTabContent">
              <div class="tab-pane fade show active" id="tab-orders" role="tabpanel" aria-labelledby="orders-tab">
                <div class="border-top border-bottom border-200" id="profileOrdersTable" data-list='{"valueNames":["order","status","delivery","date","total"],"page":6,"pagination":true}'>
                  <div class="table-responsive scrollbar">
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
                    
                    $userName = $_SESSION["userName"];

                    $sql = "SELECT * FROM Users WHERE name = '$userName'";
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
                  
                </div>
              </div>
              <div class="tab-pane fade" id="tab-reviews" role="tabpanel" aria-labelledby="reviews-tab">
                <div class="border-y" id="profileRatingTable" data-list='{"valueNames":["product","rating","review","status","date"],"page":6,"pagination":true}'>
                  <div class="table-responsive scrollbar">
                  
                  </div>
                  <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
                    <div class="col-auto d-flex">
                      <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info"></p><a class="fw-semi-bold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                    </div>
                    <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                      <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tab-wishlist" role="tabpanel" aria-labelledby="wishlist-tab">
                <div class="border-y" id="productWishlistTable" data-list='{"valueNames":["products","color","size","price","quantity","total"],"page":5,"pagination":true}'>
                  <div class="table-responsive scrollbar">
                    <table class="table fs--1 mb-0">
                      <thead>
                        <tr>
                          <th class="sort white-space-nowrap align-middle fs--2" scope="col" style="width:7%;"></th>
                          <th class="sort white-space-nowrap align-middle" scope="col" style="width:30%; min-width:250px;" data-sort="products">PRODUCTS</th>
                          <th class="sort align-middle" scope="col" data-sort="color" style="width:16%;">COLOR</th>
                          <th class="sort align-middle" scope="col" data-sort="size" style="width:10%;">SIZE</th>
                          <th class="sort align-middle text-end" scope="col" data-sort="price" style="width:10%;">PRICE</th>
                          <th class="sort align-middle text-end pe-0" scope="col" style="width:35%;"> </th>
                        </tr>
                      </thead>
                      <tbody class="list" id="profile-wishlist-table-body">
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle white-space-nowrap ps-0 py-0">
                            <div class="border rounded-2 d-inline-block"><img src="../../../assets/img//products/1.png" alt="" width="53" /></div>
                          </td>
                          <td class="products align-middle pe-11"><a class="fw-semi-bold mb-0 line-clamp-1" href="#!">Fitbit Sense Advanced Smartwatch with Tools for Heart Health, Stress Management &amp; Skin Temperature Trends, Carbon/Graphite, One Size (S &amp; L Bands)</a></td>
                          <td class="color align-middle white-space-nowrap fs--1 text-900">Pure matte black</td>
                          <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">42</td>
                          <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$57</td>
                          <td class="total align-middle fw-bold text-1000 text-end text-nowrap pe-0"><button class="btn btn-sm text-500 hover-text-600 me-2"><span class="fas fa-trash"></span></button><button class="btn btn-primary fs--2"><span class="fas fa-shopping-cart me-1 fs--2"></span>Add to cart</button></td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle white-space-nowrap ps-0 py-0">
                            <div class="border rounded-2 d-inline-block"><img src="../../../assets/img//products/7.png" alt="" width="53" /></div>
                          </td>
                          <td class="products align-middle pe-11"><a class="fw-semi-bold mb-0 line-clamp-1" href="#!">2021 Apple 12.9-inch iPad Pro (Wi‑Fi, 128GB) - Space Gray</a></td>
                          <td class="color align-middle white-space-nowrap fs--1 text-900">Black</td>
                          <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">Pro</td>
                          <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$1,499</td>
                          <td class="total align-middle fw-bold text-1000 text-end text-nowrap pe-0"><button class="btn btn-sm text-500 hover-text-600 me-2"><span class="fas fa-trash"></span></button><button class="btn btn-primary fs--2"><span class="fas fa-shopping-cart me-1 fs--2"></span>Add to cart</button></td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle white-space-nowrap ps-0 py-0">
                            <div class="border rounded-2 d-inline-block"><img src="../../../assets/img//products/6.png" alt="" width="53" /></div>
                          </td>
                          <td class="products align-middle pe-11"><a class="fw-semi-bold mb-0 line-clamp-1" href="#!">PlayStation 5 DualSense Wireless Controller</a></td>
                          <td class="color align-middle white-space-nowrap fs--1 text-900">White</td>
                          <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">Regular</td>
                          <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$299</td>
                          <td class="total align-middle fw-bold text-1000 text-end text-nowrap pe-0"><button class="btn btn-sm text-500 hover-text-600 me-2"><span class="fas fa-trash"></span></button><button class="btn btn-primary fs--2"><span class="fas fa-shopping-cart me-1 fs--2"></span>Add to cart</button></td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle white-space-nowrap ps-0 py-0">
                            <div class="border rounded-2 d-inline-block"><img src="../../../assets/img//products/3.png" alt="" width="53" /></div>
                          </td>
                          <td class="products align-middle pe-11"><a class="fw-semi-bold mb-0 line-clamp-1" href="#!">Apple MacBook Pro 13 inch-M1-8/256GB-space</a></td>
                          <td class="color align-middle white-space-nowrap fs--1 text-900">Space Gray</td>
                          <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">Pro</td>
                          <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$1,699</td>
                          <td class="total align-middle fw-bold text-1000 text-end text-nowrap pe-0"><button class="btn btn-sm text-500 hover-text-600 me-2"><span class="fas fa-trash"></span></button><button class="btn btn-primary fs--2"><span class="fas fa-shopping-cart me-1 fs--2"></span>Add to cart</button></td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle white-space-nowrap ps-0 py-0">
                            <div class="border rounded-2 d-inline-block"><img src="../../../assets/img//products/4.png" alt="" width="53" /></div>
                          </td>
                          <td class="products align-middle pe-11"><a class="fw-semi-bold mb-0 line-clamp-1" href="#!">Apple iMac 24&quot; 4K Retina Display M1 8 Core CPU, 7 Core GPU, 256GB SSD, Green (MJV83ZP/A) 2021</a></td>
                          <td class="color align-middle white-space-nowrap fs--1 text-900">Ocean Blue</td>
                          <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">21&quot;</td>
                          <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$65</td>
                          <td class="total align-middle fw-bold text-1000 text-end text-nowrap pe-0"><button class="btn btn-sm text-500 hover-text-600 me-2"><span class="fas fa-trash"></span></button><button class="btn btn-primary fs--2"><span class="fas fa-shopping-cart me-1 fs--2"></span>Add to cart</button></td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle white-space-nowrap ps-0 py-0">
                            <div class="border rounded-2 d-inline-block"><img src="../../../assets/img//products/10.png" alt="" width="53" /></div>
                          </td>
                          <td class="products align-middle pe-11"><a class="fw-semi-bold mb-0 line-clamp-1" href="#!">Apple Magic Mouse (Wireless, Rechargable) - Silver</a></td>
                          <td class="color align-middle white-space-nowrap fs--1 text-900">White</td>
                          <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">Regular</td>
                          <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$30</td>
                          <td class="total align-middle fw-bold text-1000 text-end text-nowrap pe-0"><button class="btn btn-sm text-500 hover-text-600 me-2"><span class="fas fa-trash"></span></button><button class="btn btn-primary fs--2"><span class="fas fa-shopping-cart me-1 fs--2"></span>Add to cart</button></td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle white-space-nowrap ps-0 py-0">
                            <div class="border rounded-2 d-inline-block"><img src="../../../assets/img//products/8.png" alt="" width="53" /></div>
                          </td>
                          <td class="products align-middle pe-11"><a class="fw-semi-bold mb-0 line-clamp-1" href="#!">Amazon Basics Matte Black Wired Keyboard - US Layout (QWERTY)</a></td>
                          <td class="color align-middle white-space-nowrap fs--1 text-900">Black</td>
                          <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">MD</td>
                          <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$40</td>
                          <td class="total align-middle fw-bold text-1000 text-end text-nowrap pe-0"><button class="btn btn-sm text-500 hover-text-600 me-2"><span class="fas fa-trash"></span></button><button class="btn btn-primary fs--2"><span class="fas fa-shopping-cart me-1 fs--2"></span>Add to cart</button></td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle white-space-nowrap ps-0 py-0">
                            <div class="border rounded-2 d-inline-block"><img src="../../../assets/img//products/12.png" alt="" width="53" /></div>
                          </td>
                          <td class="products align-middle pe-11"><a class="fw-semi-bold mb-0 line-clamp-1" href="#!">HORI Racing Wheel Apex for PlayStation 4_3, and PC</a></td>
                          <td class="color align-middle white-space-nowrap fs--1 text-900">Black</td>
                          <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">45</td>
                          <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$130</td>
                          <td class="total align-middle fw-bold text-1000 text-end text-nowrap pe-0"><button class="btn btn-sm text-500 hover-text-600 me-2"><span class="fas fa-trash"></span></button><button class="btn btn-primary fs--2"><span class="fas fa-shopping-cart me-1 fs--2"></span>Add to cart</button></td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle white-space-nowrap ps-0 py-0">
                            <div class="border rounded-2 d-inline-block"><img src="../../../assets/img//products/17.png" alt="" width="53" /></div>
                          </td>
                          <td class="products align-middle pe-11"><a class="fw-semi-bold mb-0 line-clamp-1" href="#!">Xbox Series S</a></td>
                          <td class="color align-middle white-space-nowrap fs--1 text-900">Space Gray</td>
                          <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">sm</td>
                          <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$99</td>
                          <td class="total align-middle fw-bold text-1000 text-end text-nowrap pe-0"><button class="btn btn-sm text-500 hover-text-600 me-2"><span class="fas fa-trash"></span></button><button class="btn btn-primary fs--2"><span class="fas fa-shopping-cart me-1 fs--2"></span>Add to cart</button></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
                    <div class="col-auto d-flex">
                      <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info"></p><a class="fw-semi-bold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                    </div>
                    <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                      <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tab-stores" role="tabpanel" aria-labelledby="wishlist-tab">
                <div class="border-y mb-6" id="profileStoreTable" data-list='{"valueNames":["products","color","size","price","quantity","total"],"page":5,"pagination":true}'>
                  <div class="table-responsive scrollbar">
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
                    $sql = "SELECT * FROM Users LIMIT 10";
                    $result = $conn->query($sql);

                    $rows = $result->fetch_all(MYSQLI_ASSOC);
                    if ($result->num_rows > 0){
                      foreach($rows as $id => $rowData) {
                        
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
                    $conn->close();
                    ?>
                </tbody>
              </table>
                  </div>
                  <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
                    <div class="col-auto d-flex">
                      <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info"></p><a class="fw-semi-bold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                    </div>
                    <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                      <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                    </div>
                  </div>
                </div>
                <div class="d-flex flex-between-center mb-5">
                  <div>
                    <h3 class="text-1100 mb-2">My Favorites Stores</h3>
                    <h5 class="text-700 fw-semi-bold">Essential for a better life</h5>
                  </div><button class="btn btn-phoenix-primary">View all</button>
                </div>
                <div class="row gx-3 gy-5">
                  <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                    <div class="border d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;"><img class="mw-100" src="../../../assets/img/brand2/dell.png" alt="Dell Technologies" /></div>
                    <h5 class="mb-2">Dell Technologies</h5>
                    <div class="mb-1 fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span></div>
                    <p class="text-500 fs--1 mb-2 fw-semi-bold">(1263 people rated)</p><a class="btn btn-link p-0" href="#!">Visit Store<span class="fas fa-chevron-right ms-1 fs--2"></span></a>
                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                      <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal p-2 lh-1 bg-100 rounded-1" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                    <div class="border d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;"><img class="mw-100" src="../../../assets/img/brand2/hp.png" alt="HP Global Store" /></div>
                    <h5 class="mb-2">HP Global Store</h5>
                    <div class="mb-1 fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span><span class="fa-regular fa-star text-warning-300"></span></div>
                    <p class="text-500 fs--1 mb-2 fw-semi-bold">(365 people rated)</p><a class="btn btn-link p-0" href="#!">Visit Store<span class="fas fa-chevron-right ms-1 fs--2"></span></a>
                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                      <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal p-2 lh-1 bg-100 rounded-1" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                    <div class="border d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;"><img class="mw-100" src="../../../assets/img/brand2/honda.png" alt="Honda" /></div>
                    <h5 class="mb-2">Honda</h5>
                    <div class="mb-1 fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></div>
                    <p class="text-500 fs--1 mb-2 fw-semi-bold">(596 people rated)</p><a class="btn btn-link p-0" href="#!">Visit Store<span class="fas fa-chevron-right ms-1 fs--2"></span></a>
                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                      <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal p-2 lh-1 bg-100 rounded-1" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                    <div class="border d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;"><img class="mw-100" src="../../../assets/img/brand2/asus-rog.png" alt="Asus ROG" /></div>
                    <h5 class="mb-2">Asus ROG</h5>
                    <div class="mb-1 fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span><span class="fa-regular fa-star text-warning-300"></span></div>
                    <p class="text-500 fs--1 mb-2 fw-semi-bold">(2365 people rated)</p><a class="btn btn-link p-0" href="#!">Visit Store<span class="fas fa-chevron-right ms-1 fs--2"></span></a>
                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                      <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal p-2 lh-1 bg-100 rounded-1" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                    <div class="border d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;"><img class="mw-100" src="../../../assets/img/brand2/yamaha.png" alt="Yamaha" /></div>
                    <h5 class="mb-2">Yamaha</h5>
                    <div class="mb-1 fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></div>
                    <p class="text-500 fs--1 mb-2 fw-semi-bold">(1253 people rated)</p><a class="btn btn-link p-0" href="#!">Visit Store<span class="fas fa-chevron-right ms-1 fs--2"></span></a>
                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                      <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal p-2 lh-1 bg-100 rounded-1" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                    <div class="border d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;"><img class="mw-100" src="../../../assets/img/brand2/ibm.png" alt="IBM" /></div>
                    <h5 class="mb-2">IBM</h5>
                    <div class="mb-1 fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span><span class="fa-regular fa-star text-warning-300"></span></div>
                    <p class="text-500 fs--1 mb-2 fw-semi-bold">(996 people rated)</p><a class="btn btn-link p-0" href="#!">Visit Store<span class="fas fa-chevron-right ms-1 fs--2"></span></a>
                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                      <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal p-2 lh-1 bg-100 rounded-1" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                    <div class="border d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;"><img class="mw-100" src="../../../assets/img/brand2/apple-2.png" alt="Apple Store" /></div>
                    <h5 class="mb-2">Apple Store</h5>
                    <div class="mb-1 fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span><span class="fa-regular fa-star text-warning-300"></span></div>
                    <p class="text-500 fs--1 mb-2 fw-semi-bold">(365 people rated)</p><a class="btn btn-link p-0" href="#!">Visit Store<span class="fas fa-chevron-right ms-1 fs--2"></span></a>
                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                      <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal p-2 lh-1 bg-100 rounded-1" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                    <div class="border d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;"><img class="mw-100" src="../../../assets/img/brand2/oppo.png" alt="Oppo" /></div>
                    <h5 class="mb-2">Oppo</h5>
                    <div class="mb-1 fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span><span class="fa-regular fa-star text-warning-300"></span></div>
                    <p class="text-500 fs--1 mb-2 fw-semi-bold">(576 people rated)</p><a class="btn btn-link p-0" href="#!">Visit Store<span class="fas fa-chevron-right ms-1 fs--2"></span></a>
                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                      <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal p-2 lh-1 bg-100 rounded-1" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                    <div class="border d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;"><img class="mw-100" src="../../../assets/img/brand2/redragon.png" alt="Redragon" /></div>
                    <h5 class="mb-2">Redragon</h5>
                    <div class="mb-1 fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span><span class="fa-regular fa-star text-warning-300"></span><span class="fa-regular fa-star text-warning-300"></span></div>
                    <p class="text-500 fs--1 mb-2 fw-semi-bold">(1125 people rated)</p><a class="btn btn-link p-0" href="#!">Visit Store<span class="fas fa-chevron-right ms-1 fs--2"></span></a>
                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                      <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal p-2 lh-1 bg-100 rounded-1" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                    <div class="border d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;"><img class="mw-100" src="../../../assets/img/brand2/xbox.png" alt="Microsoft XBOX" /></div>
                    <h5 class="mb-2">Microsoft XBOX</h5>
                    <div class="mb-1 fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span></div>
                    <p class="text-500 fs--1 mb-2 fw-semi-bold">(830 people rated)</p><a class="btn btn-link p-0" href="#!">Visit Store<span class="fas fa-chevron-right ms-1 fs--2"></span></a>
                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                      <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal p-2 lh-1 bg-100 rounded-1" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                    <div class="border d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;"><img class="mw-100" src="../../../assets/img/brand2/lenovo.png" alt="Lenovo" /></div>
                    <h5 class="mb-2">Lenovo</h5>
                    <div class="mb-1 fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span><span class="fa-regular fa-star text-warning-300"></span></div>
                    <p class="text-500 fs--1 mb-2 fw-semi-bold">(1032 people rated)</p><a class="btn btn-link p-0" href="#!">Visit Store<span class="fas fa-chevron-right ms-1 fs--2"></span></a>
                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                      <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal p-2 lh-1 bg-100 rounded-1" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                    <div class="border d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;"><img class="mw-100" src="../../../assets/img/brand2/xiaomi.png" alt="Xiaomi" /></div>
                    <h5 class="mb-2">Xiaomi</h5>
                    <div class="mb-1 fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span><span class="fa-regular fa-star text-warning-300"></span></div>
                    <p class="text-500 fs--1 mb-2 fw-semi-bold">(965 people rated)</p><a class="btn btn-link p-0" href="#!">Visit Store<span class="fas fa-chevron-right ms-1 fs--2"></span></a>
                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                      <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal p-2 lh-1 bg-100 rounded-1" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tab-personal-info" role="tabpanel" aria-labelledby="personal-info-tab">
                <div class="row g-3 mb-5">
                  <div class="col-12 col-lg-6"><label class="form-label text-1000 fs-0 ps-0 text-capitalize lh-sm" for="fullName">Full name</label><input class="form-control" id="fullName" type="text" placeholder="Full name" /></div>
                  <div class="col-12 col-lg-6"><label class="form-label text-1000 fs-0 ps-0 text-capitalize lh-sm" for="gender">Gender</label><select class="form-select" id="gender">
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                      <option value="non-binary">Non-binary</option>
                      <option value="not-to-say">Prefer not to say</option>
                    </select></div>
                  <div class="col-12 col-lg-6"><label class="form-label text-1000 fs-0 ps-0 text-capitalize lh-sm" for="email">Email</label><input class="form-control" id="email" type="text" placeholder="Email" /></div>
                  <div class="col-12 col-lg-6">
                    <div class="row g-2 gy-lg-0"><label class="form-label text-1000 fs-0 ps-1 text-capitalize lh-sm">Date of birth</label>
                      <div class="col-6 col-sm-2 col-lg-3 col-xl-2"><select class="form-select" id="date">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                          <option value="13">13</option>
                          <option value="14">14</option>
                          <option value="15">15</option>
                          <option value="16">16</option>
                          <option value="17">17</option>
                          <option value="18">18</option>
                          <option value="19">19</option>
                          <option value="20">20</option>
                          <option value="21">21</option>
                          <option value="22">22</option>
                          <option value="23">23</option>
                          <option value="24">24</option>
                          <option value="25">25</option>
                          <option value="26">26</option>
                          <option value="27">27</option>
                          <option value="28">28</option>
                          <option value="29">29</option>
                          <option value="30">30</option>
                        </select></div>
                      <div class="col-6 col-sm-2 col-lg-3 col-xl-2"><select class="form-select" id="month">
                          <option value="Jan">Jan</option>
                          <option value="Feb">Feb</option>
                          <option value="Mar">Mar</option>
                          <option value="Apr">Apr</option>
                          <option value="May">May</option>
                          <option value="Jun">Jun</option>
                          <option value="Jul">Jul</option>
                          <option value="Aug">Aug</option>
                          <option value="Sep">Sep</option>
                          <option value="Oct">Oct</option>
                          <option value="Nov">Nov</option>
                          <option value="Dec">Dec</option>
                        </select></div>
                      <div class="col-12 col-sm-8 col-lg-6 col-xl-8"><select class="form-select" id="year">
                          <option value="1990">1990</option>
                          <option value="1991">1991</option>
                          <option value="1992">1992</option>
                          <option value="1993">1993</option>
                          <option value="1994">1994</option>
                          <option value="1995">1995</option>
                          <option value="1996">1996</option>
                          <option value="1997">1997</option>
                          <option value="1998">1998</option>
                          <option value="1999">1999</option>
                          <option value="2000">2000</option>
                          <option value="2001">2001</option>
                          <option value="2002">2002</option>
                          <option value="2003">2003</option>
                          <option value="2004">2004</option>
                          <option value="2005">2005</option>
                          <option value="2006">2006</option>
                          <option value="2007">2007</option>
                          <option value="2008">2008</option>
                          <option value="2009">2009</option>
                          <option value="2010">2010</option>
                          <option value="2011">2011</option>
                          <option value="2012">2012</option>
                          <option value="2013">2013</option>
                          <option value="2014">2014</option>
                          <option value="2015">2015</option>
                          <option value="2016">2016</option>
                          <option value="2017">2017</option>
                          <option value="2018">2018</option>
                          <option value="2019">2019</option>
                          <option value="2020">2020</option>
                          <option value="2021">2021</option>
                          <option value="2022">2022</option>
                        </select></div>
                    </div>
                  </div>
                  <div class="col-12 col-lg-6"><label class="form-label text-1000 fw-bold fs-0 ps-0 text-capitalize lh-sm" for="phone">Phone</label><input class="form-control" id="phone" type="text" placeholder="+1234567890" /></div>
                  <div class="col-12 col-lg-6"><label class="form-label text-1000 fw-bold fs-0 ps-0 text-capitalize lh-sm" for="alternative_phone">Alternative phone</label><input class="form-control" id="alternative_phone" type="text" placeholder="+1234567890" /></div>
                  <div class="col-12 col-lg-4"><label class="form-label text-1000 fw-bold fs-0 ps-0 text-capitalize lh-sm" for="facebook">Facebook</label><input class="form-control" id="facebook" type="text" placeholder="Facebook" /></div>
                  <div class="col-12 col-lg-4"><label class="form-label text-1000 fw-bold fs-0 ps-0 text-capitalize lh-sm" for="instagram">Instagram</label><input class="form-control" id="instagram" type="text" placeholder="Instagram" /></div>
                  <div class="col-12 col-lg-4"><label class="form-label text-1000 fw-bold fs-0 ps-0 text-capitalize lh-sm" for="twitter">Twitter</label><input class="form-control" id="twitter" type="text" placeholder="Twitter" /></div>
                </div>
                <div class="text-end"><button class="btn btn-primary px-7">Save changes</button></div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->



      <footer class="footer position-absolute">
          <div class="row g-0 justify-content-between align-items-center h-100">
            <div class="col-12 col-sm-auto text-center">
              <p class="mb-0 mt-2 mt-sm-0 text-900">Assignment 2 Part 1 - Amiel De Los Reyes<span class="d-none d-sm-inline-block"></span><span class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />2023 &copy;
            </div>
            
          </div>
        </footer>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    

    <?php include 'footer.php'; ?>
  </body>

</html>