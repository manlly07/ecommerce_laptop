<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Security</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet" />
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet" />

    
    <link href="assets/css/style.css" rel="stylesheet" />

    
  </head>

  <body>
    
    <header id="header" class="header fixed-top d-flex align-items-center">
      <div class="d-flex align-items-center justify-content-between">
        <a href="index.php" class="logo d-flex align-items-center">
          <img src="assets/img/logo.png" alt="" />
          <span class="d-none d-lg-block">NiceAdmin</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
      </div>
      

      <div class="search-bar">
        <form
          class="search-form d-flex align-items-center"
          method="POST"
          action="#"
        >
          <input
            type="text"
            name="query"
            placeholder="Search"
            title="Enter search keyword"
          />
          <button type="submit" title="Search">
            <i class="bi bi-search"></i>
          </button>
        </form>
      </div>
      

      <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
          <li class="nav-item d-block d-lg-none">
            <a class="nav-link nav-icon search-bar-toggle" href="#">
              <i class="bi bi-search"></i>
            </a>
          </li>
          

          <li class="nav-item dropdown">
            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
              <i class="bi bi-bell"></i>
              <span class="badge bg-primary badge-number">4</span> </a
            >

            <ul
              class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications"
            >
              <li class="dropdown-header">
                You have 4 new notifications
                <a href="#"
                  ><span class="badge rounded-pill bg-primary p-2 ms-2"
                    >View all</span
                  ></a
                >
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li class="notification-item">
                <i class="bi bi-exclamation-circle text-warning"></i>
                <div>
                  <h4>Lorem Ipsum</h4>
                  <p>Quae dolorem earum veritatis oditseno</p>
                  <p>30 min. ago</p>
                </div>
              </li>

              <li>
                <hr class="dropdown-divider" />
              </li>

              <li class="notification-item">
                <i class="bi bi-x-circle text-danger"></i>
                <div>
                  <h4>Atque rerum nesciunt</h4>
                  <p>Quae dolorem earum veritatis oditseno</p>
                  <p>1 hr. ago</p>
                </div>
              </li>

              <li>
                <hr class="dropdown-divider" />
              </li>

              <li class="notification-item">
                <i class="bi bi-check-circle text-success"></i>
                <div>
                  <h4>Sit rerum fuga</h4>
                  <p>Quae dolorem earum veritatis oditseno</p>
                  <p>2 hrs. ago</p>
                </div>
              </li>

              <li>
                <hr class="dropdown-divider" />
              </li>

              <li class="notification-item">
                <i class="bi bi-info-circle text-primary"></i>
                <div>
                  <h4>Dicta reprehenderit</h4>
                  <p>Quae dolorem earum veritatis oditseno</p>
                  <p>4 hrs. ago</p>
                </div>
              </li>

              <li>
                <hr class="dropdown-divider" />
              </li>
              <li class="dropdown-footer">
                <a href="#">Show all notifications</a>
              </li>
            </ul>
            
          </li>
          

          <li class="nav-item dropdown">
            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
              <i class="bi bi-chat-left-text"></i>
              <span class="badge bg-success badge-number">3</span> </a
            >

            <ul
              class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages"
            >
              <li class="dropdown-header">
                You have 3 new messages
                <a href="#"
                  ><span class="badge rounded-pill bg-primary p-2 ms-2"
                    >View all</span
                  ></a
                >
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li class="message-item">
                <a href="#">
                  <img
                    src="assets/img/messages-1.jpg"
                    alt=""
                    class="rounded-circle"
                  />
                  <div>
                    <h4>Maria Hudson</h4>
                    <p>
                      Velit asperiores et ducimus soluta repudiandae labore
                      officia est ut...
                    </p>
                    <p>4 hrs. ago</p>
                  </div>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li class="message-item">
                <a href="#">
                  <img
                    src="assets/img/messages-2.jpg"
                    alt=""
                    class="rounded-circle"
                  />
                  <div>
                    <h4>Anna Nelson</h4>
                    <p>
                      Velit asperiores et ducimus soluta repudiandae labore
                      officia est ut...
                    </p>
                    <p>6 hrs. ago</p>
                  </div>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li class="message-item">
                <a href="#">
                  <img
                    src="assets/img/messages-3.jpg"
                    alt=""
                    class="rounded-circle"
                  />
                  <div>
                    <h4>David Muldon</h4>
                    <p>
                      Velit asperiores et ducimus soluta repudiandae labore
                      officia est ut...
                    </p>
                    <p>8 hrs. ago</p>
                  </div>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li class="dropdown-footer">
                <a href="#">Show all messages</a>
              </li>
            </ul>
            
          </li>
          

          <li class="nav-item dropdown pe-3">
            <a
              class="nav-link nav-profile d-flex align-items-center pe-0"
              href="#"
              data-bs-toggle="dropdown"
            >
              <img
                src="assets/img/profile-img.jpg"
                alt="Profile"
                class="rounded-circle"
              />
              <span class="d-none d-md-block dropdown-toggle ps-2"
                >K. Anderson</span
              > </a
            >

            <ul
              class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile"
            >
              <li class="dropdown-header">
                <h6>Kevin Anderson</h6>
                <span>Web Designer</span>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li>
                <a
                  class="dropdown-item d-flex align-items-center"
                  href="users-profile.php"
                >
                  <i class="bi bi-person"></i>
                  <span>My Profile</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li>
                <a
                  class="dropdown-item d-flex align-items-center"
                  href="users-profile.php"
                >
                  <i class="bi bi-gear"></i>
                  <span>Account Settings</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li>
                <a
                  class="dropdown-item d-flex align-items-center"
                  href="pages-faq.php"
                >
                  <i class="bi bi-question-circle"></i>
                  <span>Need Help?</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <i class="bi bi-box-arrow-right"></i>
                  <span>Sign Out</span>
                </a>
              </li>
            </ul>
            
          </li>
          
        </ul>
      </nav>
      
    </header>
    

    
    <aside id="sidebar" class="sidebar">
      <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
          <a class="nav-link collapsed" href="index.php">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
          </a>
        </li>
        

        <li class="nav-item">
          <a
            class="nav-link collapsed"
            data-bs-target="#products-nav"
            data-bs-toggle="collapse"
            href="#"
          >
            <i class="bi bi-menu-button-wide"></i><span>Products</span
            ><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul
            id="products-nav"
            class="nav-content collapse"
            data-bs-parent="#sidebar-nav"
          >
            <li>
              <a href="products-list.php">
                <i class="bi bi-circle"></i><span>Product List</span>
              </a>
            </li>
            <li>
              <a href="add-product.php">
                <i class="bi bi-circle"></i><span>Add Product</span>
              </a>
            </li>
            <li>
              <a href="branch-list.php" class="active">
                <i class="bi bi-circle"></i><span>Category List</span>
              </a>
            </li>
          </ul>
        </li>
        

        <li class="nav-item">
          <a
            class="nav-link collapsed"
            data-bs-target="#orders-nav"
            data-bs-toggle="collapse"
            href="#"
          >
            <i class="bi bi-menu-button-wide"></i><span>Orders</span
            ><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul
            id="orders-nav"
            class="nav-content collapse"
            data-bs-parent="#sidebar-nav"
          >
            <li>
              <a href="orders-list.php">
                <i class="bi bi-circle"></i><span>Order List</span>
              </a>
            </li>
            <li>
              <a href="orders-detail.php">
                <i class="bi bi-circle"></i><span>Order Details</span>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a
            class="nav-link"
            data-bs-target="#customer-nav"
            data-bs-toggle="collapse"
            href="#"
          >
            <i class="bi bi-menu-button-wide"></i><span>Customer</span
            ><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul
            id="customer-nav"
            class="nav-content collapse show"
            data-bs-parent="#sidebar-nav"
          >
            <li>
              <a href="all-customer.php" class="active">
                <i class="bi bi-circle"></i><span>Customer List</span>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="manage-review.php">
            <i class="bi bi-grid"></i>
            <span>Manage Reviews</span>
          </a>
        </li>

      </ul>
    </aside>
    

    <main id="main" class="main">
      <div class="pagetitle">
        <h1>CUSTOMERS</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item">Customers</li>
            <li class="breadcrumb-item">Customer Detail</li>
            <li class="breadcrumb-item active">Security</li>
          </ol>
        </nav>
      </div>
      

      <section class="section">
        <div class="row">
          <div
            class="d-flex flex-column flex-sm-row align-items-center justify-content-sm-between mb-4 text-center text-sm-start gap-2"
          >
            <div class="mb-2 mb-sm-0">
              <h4 class="mb-1 fw-medium fs-5">Customer ID #634759</h4>
              <p class="mb-0 fs-7 text-secondary">Aug 17, 2020, 5:48 (ET)</p>
            </div>
            <button
              type="button"
              class="btn btn-outline-danger delete-customer waves-effect"
            >
              Delete Customer
            </button>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
            
            <div class="card mb-4">
              <div class="card-body">
                <div class="customer-avatar-section">
                  <div class="d-flex align-items-center flex-column">
                    <img
                      class="img-fluid rounded mb-3 mt-4"
                      src="./assets/img/apple-touch-icon.png"
                      height="120"
                      width="120"
                      alt="User avatar"
                    />
                    <div class="customer-info text-center mb-4">
                      <h5 class="mb-1 fw-medium">Lorine Hischke</h5>
                      <span class="text-secondary fs-7"
                        >Customer ID #634759</span
                      >
                    </div>
                  </div>
                </div>
                <div class="d-flex justify-content-around flex-wrap mb-4">
                  <div class="d-flex align-items-center gap-2">
                    <div class="avatar me-1">
                      <div class="avatar-initial rounded-3 bg-label-primary">
                        <i class="bi bi-cart"></i>
                      </div>
                    </div>
                    <div>
                      <h5 class="mb-0 fw-medium">184</h5>
                      <span class="fs-7 text-secondary">Orders</span>
                    </div>
                  </div>
                  <div class="d-flex align-items-center gap-2">
                    <div class="avatar me-1">
                      <div class="avatar-initial rounded-3 bg-label-primary">
                        <i class="bi bi-currency-dollar"></i>
                      </div>
                    </div>
                    <div>
                      <h5 class="mb-0 fw-medium">$12,378</h5>
                      <span class="fs-7 text-secondary">Spent</span>
                    </div>
                  </div>
                </div>

                <div class="info-container">
                  <h5 class="border-bottom text-uppercase pb-3 fw-medium fs-5">
                    DETAILS
                  </h5>
                  <ul class="list-unstyled mb-4">
                    <li class="mb-2">
                      <span class="me-1 fw-medium">Username:</span>
                      <span class="fw-7 text-secondary">lorine.hischke</span>
                    </li>
                    <li class="mb-2">
                      <span class="me-1 fw-medium">Email:</span>
                      <span class="fw-7 text-secondary"
                        >vafgot@vultukir.org</span
                      >
                    </li>
                    <li class="mb-2">
                      <span class="me-1 fw-medium">Status:</span>
                      <span class="badge bg-label-success rounded-pill"
                        >Active</span
                      >
                    </li>
                    <li class="mb-2">
                      <span class="me-1 fw-medium">Contact:</span>
                      <span class="fw-7 text-secondary">(123) 456-7890</span>
                    </li>

                    <li>
                      <span class="me-1 fw-medium">Country:</span>
                      <span class="fw-7 text-secondary">USA</span>
                    </li>
                  </ul>
                  <div class="d-flex justify-content-center">
                    <a
                      href="javascript:;"
                      class="btn btn-primary me-3"
                      data-bs-target="#editUser"
                      data-bs-toggle="modal"
                      >Edit Details</a
                    >
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
            
            <ul class="nav nav-pills flex-column flex-md-row mb-4">
              <li class="nav-item">
                <a
                  class="nav-link fw-medium "
                  href="javascript:void(0);"
                  ><i class="bi bi-person-circle me-1"></i>Overview</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link fw-medium active"
                  href="app-ecommerce-customer-details-security.php"
                  ><i class="bi-lock-fill mdi-20px me-1"></i>Security</a
                >
              </li>
            </ul>
            

            <div class="card mb-4">
              <h5 class="card-header px-4 fs-5 fw-bold">Change Password</h5>
              <div class="card-body">
                <form
                  id="formChangePassword"
                  method="POST"
                  onsubmit="return false"
                  novalidate="novalidate"
                >
                  <div class="alert alert-warning" role="alert">
                    <h6 class="alert-heading mb-1 fs-6 text-warning fw-bold">
                      Ensure that these requirements are met
                    </h6>
                    <span class="fs-7 text-warning fw-medium"
                      >Minimum 8 characters long, uppercase &amp; symbol</span
                    >
                  </div>
                  <div class="row">
                    <div
                      class="mb-3 col-12 col-sm-6"
                    >
                      <div class="input-group input-group-merge">
                        <div class="form-floating form-floating-outline">
                          <input
                            class="form-control"
                            type="password"
                            id="newPassword"
                            name="newPassword"
                            placeholder="············"
                          />
                          <label for="newPassword">New Password</label>
                        </div>
                        <span class="input-group-text cursor-pointer"
                          ><i class="bi bi-eye-slash-fill"></i
                        ></span>
                      </div>
                      <div
                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"
                      ></div>
                    </div>
                    <div
                      class="mb-3 col-12 col-sm-6 form-password-toggle fv-plugins-icon-container"
                    >
                      <div class="input-group input-group-merge">
                        <div class="form-floating form-floating-outline">
                          <input
                            class="form-control"
                            type="password"
                            name="confirmPassword"
                            id="confirmPassword"
                            placeholder="············"
                          />
                          <label for="confirmPassword"
                            >Confirm New Password</label
                          >
                        </div>
                        <span class="input-group-text cursor-pointer"
                          ><i class="bi bi-eye-slash-fill"></i
                        ></span>
                      </div>
                      <div
                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"
                      ></div>
                    </div>
                    <div>
                      <button
                        type="submit"
                        class="btn btn-primary me-2"
                      >
                        Change Password
                      </button>
                    </div>
                  </div>
                  <input type="hidden" />
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    

    
    <footer id="footer" class="footer">
      <div class="copyright">
        &copy; Copyright <strong><span>Thao</span></strong
        >. All Rights Reserved
      </div>
      <div class="credits">Designed by <a href="#">Thảo</a></div>
    </footer>
    

    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    
    <script src="assets/js/main.js"></script>
  </body>
</html>
