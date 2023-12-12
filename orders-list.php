<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Order List</title>
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
          <a class="nav-link" data-bs-target="#orders-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-menu-button-wide"></i><span>Orders</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="orders-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
            <li>
              <a href="orders-list.php" class="active">
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
          <a class="nav-link collapsed" href="manage-review.php">
            <i class="bi bi-grid"></i>
            <span>Manage Reviews</span>
          </a>
        </li>

      </ul>
    </aside>
    

    <main id="main" class="main">
      <div class="pagetitle">
        <h1>Orders</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item">Order</li>
            <li class="breadcrumb-item active">Order List</li>
          </ol>
        </nav>
      </div>
      

      <section class="section">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body pt-4 d-flex gap-2">
                <div class="col-sm-6 col-lg-3">
                  <div
                    class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-3 pb-sm-0"
                  >
                    <div>
                      <h3 class="mb-2 fw-bolder">56</h3>
                      <p class="mb-0 text-secondary fs-6">Pending Payment</p>
                    </div>
                    <div class="avatar me-sm-4">
                      <span class="avatar-initial rounded bg-label-secondary">
                        <i class="bi bi-calendar-month"></i>
                      </span>
                    </div>
                  </div>
                  <hr class="d-none d-sm-block d-lg-none me-4" />
                </div>
                <div class="col-sm-6 col-lg-3">
                  <div
                    class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-3 pb-sm-0"
                  >
                    <div>
                      <h3 class="mb-2 fw-bolder">56</h3>
                      <p class="mb-0 text-secondary fs-6">Pending Payment</p>
                    </div>
                    <div class="avatar me-sm-4">
                      <span class="avatar-initial rounded bg-label-secondary">
                        <i class="bi bi-calendar-month"></i>
                      </span>
                    </div>
                  </div>
                  <hr class="d-none d-sm-block d-lg-none me-4" />
                </div>
                <div class="col-sm-6 col-lg-3">
                  <div
                    class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-3 pb-sm-0"
                  >
                    <div>
                      <h3 class="mb-2 fw-bolder">56</h3>
                      <p class="mb-0 text-secondary fs-6">Pending Payment</p>
                    </div>
                    <div class="avatar me-sm-4">
                      <span class="avatar-initial rounded bg-label-secondary">
                        <i class="bi bi-calendar-month"></i>
                      </span>
                    </div>
                  </div>
                  <hr class="d-none d-sm-block d-lg-none me-4" />
                </div>
                <div class="col-sm-6 col-lg-3">
                  <div
                    class="d-flex justify-content-between align-items-start pb-3 pb-sm-0"
                  >
                    <div>
                      <h3 class="mb-2 fw-bolder">56</h3>
                      <p class="mb-0 text-secondary fs-6">Pending Payment</p>
                    </div>
                    <div class="avatar me-sm-4">
                      <span class="avatar-initial rounded bg-label-secondary">
                        <i class="bi bi-calendar-month"></i>
                      </span>
                    </div>
                  </div>
                  <hr class="d-none d-sm-block d-lg-none me-4" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h5
                  class="card-title d-flex align-items-center justify-content-between"
                >
                  Filter
                </h5>

                <!-- Table with stripped rows -->
                <table class="table datatable">
                  <thead>
                    <tr>
                      <th>Order</th>
                      <th>Date</th>
                      <th>Customers</th>
                      <th>Payment</th>
                      <th>Status</th>
                      <!-- <th>Method</th> -->
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <a href="orders-detail.php">
                          <span>#6979</span>
                        </a>
                      </td>
                      <td>
                        <span class="text-nowrap text-secondary"
                          >Apr 15, 2023, 10:21</span
                        >
                      </td>
                      <td>
                        <div
                          class="d-flex justify-content-start align-items-center"
                        >
                          <div class="avatar-wrapper me-3">
                            <div class="avatar avatar-sm">
                              <img
                                src="./assets/img/messages-1.jpg"
                                alt="Avatar"
                                class="rounded-circle"
                              />
                            </div>
                          </div>
                          <div class="d-flex flex-column">
                            <a
                              href="pages-profile-user.php"
                              class="text-truncate"
                            >
                              <span class="text-heading fw-medium"
                                >Cristine Easom</span
                              >
                            </a>
                            <small class="text-truncate"
                              >ceasomw@theguardian.com</small
                            >
                          </div>
                        </div>
                      </td>
                      <td>
                        <h6 class="mb-0 fw-bolder text-warning">
                          <i class="bi bi-circle-fill me-2"></i>Pending
                        </h6>
                      </td>
                      <td>
                        <span
                          class="badge rounded-pill bg-label-danger text-capitalized"
                        >
                          Inactive
                        </span>
                      </td>
                      <!-- <td>
                        <div class="d-flex align-items-center text-nowrap text-secondary">
                          <img
                            src="./assets/img/momo.png"
                            alt="mastercard"
                            class="me-2"
                            width="32"
                          /><span
                            ><i class="bi bi-three-dots"></i>2356</span
                          >
                        </div>
                      </td> -->
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
                            <a href="javascript:0;" class="dropdown-item"
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
      <div class="credits">
        Designed by <a href="#">Thảo</a>
      </div>
    </footer>
    

    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <div
      class="offcanvas offcanvas-end"
      tabindex="-1"
      id="offcanvasEcommerceCategoryList"
      aria-labelledby="offcanvasEcommerceCategoryListLabel"
      aria-modal="true"
      role="dialog"
    >
      <!-- Offcanvas Header -->
      <div class="offcanvas-header py-4">
        <h5 id="offcanvasEcommerceCategoryListLabel" class="offcanvas-title">
          Add Category
        </h5>
        <button
          type="button"
          class="btn-close text-reset"
          data-bs-dismiss="offcanvas"
          aria-label="Close"
        ></button>
      </div>
      <!-- Offcanvas Body -->
      <div class="offcanvas-body border-top">
        <form
          class="pt-0 fv-plugins-bootstrap5 fv-plugins-framework"
          id="eCommerceCategoryListForm"
          onsubmit="return false"
          novalidate="novalidate"
          data-select2-id="eCommerceCategoryListForm"
        >
          <!-- Title -->

          <div class="form-floating mb-4 fv-plugins-icon-container">
            <input
              type="text"
              class="form-control"
              id="ecommerce-category-title"
              placeholder="Enter category title"
              name="categoryTitle"
              aria-label="category title"
            />
            <label for="ecommerce-category-title">Title</label>
            <div
              class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"
            ></div>
          </div>

          <!-- Slug -->
          <div class="form-floating mb-4 fv-plugins-icon-container">
            <input
              type="text"
              id="ecommerce-category-slug"
              class="form-control"
              placeholder="Enter slug"
              aria-label="slug"
              name="slug"
            />
            <label for="ecommerce-category-slug">Description</label>
            <div
              class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"
            ></div>
          </div>

          <div class="mb-4">
            <label for="formFile" class="form-label">Attachment</label>
            <input class="form-control" type="file" id="formFile" />
          </div>

          <div class="mb-4">
            <textarea id="default">Enter your description</textarea>
          </div>

          <div class="mb-4">
            <select class="form-select" aria-label="Default select example">
              <option selected>Select Category status</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <!-- Submit and reset -->
          <div class="mb-3">
            <button
              type="submit"
              class="btn btn-primary me-sm-3 me-1 data-submit waves-effect waves-light"
            >
              Add
            </button>
            <button
              type="reset"
              class="btn btn-outline-danger waves-effect"
              data-bs-dismiss="offcanvas"
            >
              Discard
            </button>
          </div>
          <input type="hidden" />
        </form>
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
