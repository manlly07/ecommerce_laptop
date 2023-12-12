<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Manage Review</title>
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
            class="nav-link collapsed"
            data-bs-target="#customer-nav"
            data-bs-toggle="collapse"
            href="#"
          >
            <i class="bi bi-menu-button-wide"></i><span>Customer</span
            ><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul
            id="customer-nav"
            class="nav-content collapse"
            data-bs-parent="#sidebar-nav"
          >
            <li>
              <a href="all-customer.php">
                <i class="bi bi-circle"></i><span>Customer List</span>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="manage-review.php">
            <i class="bi bi-grid"></i>
            <span>Manage Reviews</span>
          </a>
        </li>

      </ul>
    </aside>
    

    <main id="main" class="main">
      <div class="pagetitle">
        <h1>Reviews</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Manage Reviews</li>
          </ol>
        </nav>
      </div>
      

      <section class="section">
        <div class="row mb-4 g-4">
          <div class="col-md-6">
            <div class="card">
              <div class="row card-body pt-4">
                <div class="col-sm-5 border-end">
                  <div class="d-flex align-items-center mb-3">
                    <span class="text-primary display-7 fw-normal">4.89</span>
                    <span class="bi bi-star-fill ms-1 text-primary"></span>
                  </div>
                  <h6 class="fs-7 fw-medium">Total 187 reviews</h6>
                  <p class="fs-7 text-secondary">
                    All reviews are from genuine customers
                  </p>
                  <span
                    class="badge bg-label-primary rounded-pill p-2 mb-3 mb-sm-0"
                    >+5 This week</span
                  >
                  <hr class="d-sm-none" />
                </div>
                <div
                  class="col-sm-7 g-2 text-nowrap d-flex flex-column justify-content-between px-4 gap-3"
                >
                  <div class="d-flex align-items-center gap-3">
                    <small class="text-secondary">5 Star</small>
                    <div
                      class="progress w-100 rounded-pill"
                      style="height: 10px"
                    >
                      <div
                        class="progress-bar bg-primary"
                        role="progressbar"
                        style="width: 61.5%"
                        aria-valuenow="61.50"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <small class="w-px-20 text-end text-secondary">124</small>
                  </div>
                  <div class="d-flex align-items-center gap-3">
                    <small class="text-secondary">4 Star</small>
                    <div
                      class="progress w-100 rounded-pill"
                      style="height: 10px"
                    >
                      <div
                        class="progress-bar bg-primary"
                        role="progressbar"
                        style="width: 24%"
                        aria-valuenow="24"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <small class="w-px-20 text-end text-secondary">40</small>
                  </div>
                  <div class="d-flex align-items-center gap-3">
                    <small class="text-secondary">3 Star</small>
                    <div
                      class="progress w-100 rounded-pill"
                      style="height: 10px"
                    >
                      <div
                        class="progress-bar bg-primary"
                        role="progressbar"
                        style="width: 12%"
                        aria-valuenow="12"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <small class="w-px-20 text-end text-secondary">12</small>
                  </div>
                  <div class="d-flex align-items-center gap-3">
                    <small class="text-secondary">2 Star</small>
                    <div
                      class="progress w-100 rounded-pill"
                      style="height: 10px"
                    >
                      <div
                        class="progress-bar bg-primary"
                        role="progressbar"
                        style="width: 7%"
                        aria-valuenow="7"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <small class="w-px-20 text-end text-secondary">7</small>
                  </div>
                  <div class="d-flex align-items-center gap-3">
                    <small class="text-secondary">1 Star</small>
                    <div
                      class="progress w-100 rounded-pill"
                      style="height: 10px"
                    >
                      <div
                        class="progress-bar bg-primary"
                        role="progressbar"
                        style="width: 2%"
                        aria-valuenow="2"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <small class="w-px-20 text-end text-secondary">2</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body pt-4">
                <!-- Table with stripped rows -->
                <table class="table datatable">
                  <thead>
                    <tr>
                      <th>PRODUCT</th>
                      <th>REVIEWER</th>
                      <th>REVIEW</th>
                      <th>DATE</th>
                      <th>STATUS</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div
                          class="d-flex justify-content-start align-items-center customer-name"
                        >
                          <div class="avatar-wrapper">
                            <div
                              class="avatar me-3 rounded-2 bg-label-secondary"
                            >
                              <img
                                src="./assets/img/logo.png"
                                alt="Product-15"
                                class="rounded-2"
                              />
                            </div>
                          </div>
                          <div class="d-flex flex-column">
                            <span class="text-nowrap text-heading fw-medium"
                              >Apple iPad</span
                            >
                            <small class="fs-8 text-secondary">10.2-inch Retina Display, 64GB</small>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div
                          class="d-flex justify-content-start align-items-center customer-name" style="padding-right: 24px; margin: auto;"
                        >
                          <div class="avatar-wrapper me-3">
                            <div class="avatar avatar-sm">
                              <img
                                src="./assets/img/news-1.jpg"
                                alt="Avatar"
                                class="rounded-circle"
                              />
                            </div>
                          </div>
                          <div class="d-flex flex-column">
                            <a
                              href="app-ecommerce-customer-details-overview.php"
                            >
                              <span class="fw-medium">Jabez Heggs</span>
                            </a>
                            <small class="text-nowrap fs-8 text-secondary">jheggse@nba.com</small>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="col gap-3 mb-2">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                        <h6 class="mb-1 text-truncate text-capitalize fw-medium">ac consequat</h6>
                        <small class="text-break pe-3 fs-8 text-secondary">Curabitur at ipsum ac tellus semper interdum. Mauris ullamcorper purus sit amet nulla. Quisque arcu libero, rutrum ac, lobortis vel, dapibus at, diam.</small>
                      </td>
                      <td>
                        <span class="text-nowrap text-secondary">Apr 21, 2020</span>
                      </td>
                      <td>
                        <span class="badge rounded-pill bg-label-success">Published</span>
                      </td>
                      <td>
                        <div
                          class="d-flex align-items-sm-center justify-content-sm-center"
                        >
                          <button
                            class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                          >
                            <i class="bi bi-three-dots-vertical me-2"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end m-0">
                            <a href="javascript:0;" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#viewReview"
                              >View</a
                            >
                            <a href="javascript:0;" class="dropdown-item"
                              >Suspend</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <!-- End Table with stripped rows -->
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    

    
    <footer id="footer" class="footer">
      <div class="copyright">
        &copy; Copyright <strong><span>Thảo</span></strong
        >. All Rights Reserved
      </div>
      <div class="credits">Designed by <a href="#">Thảo</a></div>
    </footer>
    

    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <div class="modal fade" id="viewReview" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="viewReview">Details of Apple iPad</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <table class="table">
                <tbody>
                    <tr>
                        <td class="text-secondary">Product:</td> 
                        <td>
                            <div class="d-flex justify-content-start align-items-center customer-name">
                                <div class="avatar-wrapper">
                                    <div class="avatar me-3 rounded-2 bg-label-secondary">
                                        <img src="./assets/img/card.jpg" alt="Product-15" class="rounded-2">
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <span class="text-nowrap text-heading fw-medium">Apple iPad</span>
                                    <small class="text-secondary fs-7">10.2-inch Retina Display, 64GB</small>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Reviewer:</td>
                        <td>
                            <div class="d-flex justify-content-start align-items-center customer-name">
                                <div class="avatar-wrapper me-3">
                                    <div class="avatar avatar-sm">
                                        <img src="./assets/img/messages-1.jpg" alt="Avatar" class="rounded-circle">
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="app-ecommerce-customer-details-overview.php">
                                        <span class="fw-medium">Jabez Heggs</span>
                                    </a>
                                    <small class="text-nowrap text-secondary fs-7">jheggse@nba.com</small>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Review:</td>
                        <td>
                            <div class="col gap-3 mb-2">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                            <h6 class="mb-1 text-truncate text-capitalize fw-medium">ac consequat</h6>
                            <small class="text-break pe-3 fs-8 text-secondary">Curabitur at ipsum ac tellus semper interdum. Mauris ullamcorper purus sit amet nulla. Quisque arcu libero, rutrum ac, lobortis vel, dapibus at, diam.</small>
                        </td>
                    </tr>
                    <tr>
                        <td>Date:</td>
                        <td>
                            <span class="text-nowrap text-secondary">Apr 21, 2020</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Status:</td>
                        <td>
                            <span class="badge rounded-pill bg-label-success">Published</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Action: </td>
                        <td>
                            <div
                          class="d-flex align-items-sm-center"
                        >
                          <button
                            class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                          >
                            <i class="bi bi-three-dots-vertical me-2"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end m-0">
                            <a href="javascript:0;" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#viewReview"
                              >View</a
                            >
                            <a href="javascript:0;" class="dropdown-item"
                              >Suspend</a
                            >
                          </div>
                        </div>
                        </td>
                    </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    
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