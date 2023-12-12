<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Order Detail</title>
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
              <a href="branch-list.php">
                <i class="bi bi-circle"></i><span>Category List</span>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a
            class="nav-link"
            data-bs-target="#order-nav"
            data-bs-toggle="collapse"
            href="#"
          >
            <i class="bi bi-menu-button-wide"></i><span>Orders</span
            ><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul
            id="order-nav"
            class="nav-content collapse show"
            data-bs-parent="#sidebar-nav"
          >
            <li>
              <a href="orders-list.php">
                <i class="bi bi-circle"></i><span>Order List</span>
              </a>
            </li>
            <li>
              <a href="orders-detail.php" class="active">
                <i class="bi bi-circle"></i><span>Order Detail</span>
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
            <li class="breadcrumb-item active">Order Details</li>
          </ol>
        </nav>
      </div>
      

      <section class="section">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body pt-4 d-flex justify-content-between">
                <div class="d-flex flex-column justify-content-center">
                    <div class="d-flex">
                      <h5 class="mb-0">Order #32543</h5>
                      <span class="badge bg-label-success mx-2 rounded-pill">Paid</span>
                    </div>
                    <p class="mt-1 mb-0 text-secondary">Aug 17, <span id="orderYear">2023</span>, 5:48 (ET)</p>
                  </div>
                  <div class="d-flex align-content-center flex-wrap gap-2">
                    <button class="btn btn-outline-danger fw-medium">Delete Order</button>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="card mb-4">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title m-0">Order details</h5>
                    <h6 class="m-0"><a href=" javascript:void(0)">Edit</a></h6>
                  </div>
                  <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col" colspan="2">Products</th>
                            <th scope="col">Price</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Total</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td colspan="2">
                                <div class="d-flex justify-content-start align-items-center product-name"><div class="avatar-wrapper me-3"><div class="avatar rounded-2 bg-label-secondary"><img src="./assets/img/news-1.jpg" alt="product-Wooden Chair" class="rounded-2"></div></div><div class="d-flex flex-column"><span class="text-nowrap text-heading fw-medium">Wooden Chair</span><small class="text-truncate d-none d-sm-block">Material: Wooden</small></div></div>
                            </td>
                            <td>$841</td>
                            <td>2</td>
                            <td>$1682</td>
                          </tr>
                          <tr>
                            <th scope="row">1</th>
                            <td colspan="2">
                                <div class="d-flex justify-content-start align-items-center product-name"><div class="avatar-wrapper me-3"><div class="avatar rounded-2 bg-label-secondary"><img src="./assets/img/news-1.jpg" alt="product-Wooden Chair" class="rounded-2"></div></div><div class="d-flex flex-column"><span class="text-nowrap text-heading fw-medium">Wooden Chair</span><small class="text-truncate d-none d-sm-block">Material: Wooden</small></div></div>
                            </td>
                            <td>$841</td>
                            <td>2</td>
                            <td>$1682</td>
                          </tr>
                          <tr>
                            <th scope="row">1</th>
                            <td colspan="2">
                                <div class="d-flex justify-content-start align-items-center product-name"><div class="avatar-wrapper me-3"><div class="avatar rounded-2 bg-label-secondary"><img src="./assets/img/news-1.jpg" alt="product-Wooden Chair" class="rounded-2"></div></div><div class="d-flex flex-column"><span class="text-nowrap text-heading fw-medium">Wooden Chair</span><small class="text-truncate d-none d-sm-block">Material: Wooden</small></div></div>
                            </td>
                            <td>$841</td>
                            <td>2</td>
                            <td>$1682</td>
                          </tr>
                          <tr>
                            <th scope="row">1</th>
                            <td colspan="2">
                                <div class="d-flex justify-content-start align-items-center product-name"><div class="avatar-wrapper me-3"><div class="avatar rounded-2 bg-label-secondary"><img src="./assets/img/news-1.jpg" alt="product-Wooden Chair" class="rounded-2"></div></div><div class="d-flex flex-column"><span class="text-nowrap text-heading fw-medium">Wooden Chair</span><small class="text-truncate d-none d-sm-block">Material: Wooden</small></div></div>
                            </td>
                            <td>$841</td>
                            <td>2</td>
                            <td>$1682</td>
                          </tr>
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-end align-items-center m-3 p-1">
                        <div class="col-4">
                          <div class="d-flex justify-content-between mb-2">
                            <span class="w-px-100">Subtotal:</span>
                            <h6 class="mb-0 fw-medium">$5000.25</h6>
                          </div>
                          <div class="d-flex justify-content-between mb-2">
                            <span class="w-px-100">Discount:</span>
                            <h6 class="mb-0 fw-medium">$00.00</h6>
                          </div>
                          <div class="d-flex justify-content-between mb-2">
                            <span class="w-px-100">Tax:</span>
                            <h6 class="mb-0 fw-medium">$100.00</h6>
                          </div>
                          <div class="d-flex justify-content-between">
                            <h6 class="w-px-100 mb-0 fw-medium">Total:</h6>
                            <h6 class="mb-0 fw-medium">$5100.25</h6>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-4">
                <div class="card mb-4">
                  <div class="card-body">
                    <h6 class="card-title mb-4">Customer details</h6>
                    <div class="d-flex justify-content-start align-items-center mb-4">
                      <div class="avatar me-2 pe-1">
                        <img src="./assets/img/news-2.jpg" alt="Avatar" class="rounded-circle">
                      </div>
                      <div class="d-flex flex-column">
                        <a href="app-user-view-account.php">
                          <h6 class="mb-1 fw-bolder text-black">Shamus Tuttle</h6>
                        </a>
                        <small class="text-secondary">Customer ID: #58909</small></div>
                    </div>
                    <div class="d-flex justify-content-start align-items-center mb-4">
                      <span class="avatar rounded-circle bg-label-success me-2 d-flex align-items-center justify-content-center"><i class="bi bi-cart-plus"></i></span>
                      <h6 class="text-nowrap mb-0 fw-medium">12 Orders</h6>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                      <h6 class="mb-2 fw-medium">Contact info</h6>
                      <h6 class="mb-2 fw-medium"><a href="javascript;;" type="button" data-bs-toggle="modal" data-bs-target="#editUser" >Edit</a></h6>
                    </div>
                    <p class=" mb-1 text-secondary">Email: Shamus889@yahoo.com</p>
                    <p class=" mb-0 text-secondary">Mobile: +1 (609) 972-22-22</p>
                  </div>
                </div>
            
                <div class="card mb-4">
            
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <h6 class="card-title m-0">Shipping address</h6>
                    <h6 class="m-0 fw-medium"><a href=" javascript:void(0)" data-bs-toggle="modal" data-bs-target="#addNewAddress">Edit</a></h6>
                  </div>
                  <div class="card-body text-secondary">
                    <p class="mb-0">45 Roker Terrace <br>Latheronwheel <br>KW5 8NW,London <br>UK</p>
                  </div>
            
                </div>
                <div class="card mb-4">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <h6 class="card-title m-0">Billing address</h6>
                    <h6 class="m-0 fw-medium"><a href=" javascript:void(0)" data-bs-toggle="modal" data-bs-target="#addNewAddress">Edit</a></h6>
                  </div>
                  <div class="card-body">
                    <p class="mb-4 text-secondary">45 Roker Terrace <br>Latheronwheel <br>KW5 8NW,London <br>UK</p>
                    <h6 class="mb-0 pb-2 text-black fw-medium">Mastercard</h6>
                    <p class="mb-0 text-secondary">Card Number: ******4291</p>
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

    <!-- Modal -->
    <div class="modal fade" id="editUser" tabindex="-1" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-lg modal-simple modal-edit-user" data-select2-id="81">
          <div class="modal-content p-3 p-md-5" data-select2-id="80">
            <div class="modal-body py-3 py-md-0" data-select2-id="79">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              <div class="text-center mb-4">
                <h3 class="mb-2">Edit User Information</h3>
                <p class="pt-1">Updating user details will receive a privacy audit.</p>
              </div>
              <form id="editUserForm" class="row g-4 fv-plugins-bootstrap5 fv-plugins-framework" onsubmit="return false" novalidate="novalidate" data-select2-id="editUserForm">
                <div class="col-12 col-md-6 fv-plugins-icon-container">
                  <div class="form-floating form-floating-outline">
                    <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName" class="form-control" placeholder="John">
                    <label for="modalEditUserFirstName">First Name</label>
                  </div>
                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                <div class="col-12 col-md-6">
                  <div class="form-floating form-floating-outline">
                    <input type="text" id="modalEditUserEmail" name="modalEditUserEmail" class="form-control" placeholder="example@domain.com">
                    <label for="modalEditUserEmail">Email</label>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="input-group input-group-merge">
                    <span class="input-group-text">VN (+84)</span>
                    <div class="form-floating form-floating-outline">
                      <input type="text" id="modalEditUserPhone" name="modalEditUserPhone" class="form-control phone-number-mask" placeholder="202 555 0111">
                      <label for="modalEditUserPhone">Phone Number</label>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="input-group input-group-merge">
                    <select class="form-select form-select-xl" aria-label="Default select example">
                      <option selected>Status</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div>
                <div class="col-12 text-center">
                  <button type="submit" class="btn btn-primary me-sm-3 me-1 waves-effect waves-light">Submit</button>
                  <button type="reset" class="btn btn-outline-secondary waves-effect" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                </div>
              <input type="hidden"></form>
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
