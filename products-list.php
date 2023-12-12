<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Products</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />


  <link href="assets/img/favicon.png" rel="icon" />
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />


  <link href="https://fonts.gstatic.com" rel="preconnect" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />


  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
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
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword" />
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
            <span class="badge bg-primary badge-number">4</span> </a>

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
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
            <span class="badge bg-success badge-number">3</span> </a>

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider" />
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle" />
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
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle" />
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
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle" />
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
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle" />
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span> </a>

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider" />
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider" />
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider" />
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.php">
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
        <a class="nav-link" data-bs-target="#products-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Products</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="products-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="products-list.php" class="active">
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
        <a class="nav-link collapsed" data-bs-target="#orders-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Orders</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="orders-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
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
        <a class="nav-link collapsed" data-bs-target="#customer-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Customer</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="customer-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
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
      <h1>Products</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Product</li>
          <li class="breadcrumb-item active">Product List</li>
        </ol>
      </nav>
    </div>


    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Filter</h5>

              <div class="row mb-4">
                <div class="col-4">
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Status</option>
                    <option value="1">Publish</option>
                    <option value="2">Inactive</option>
                  </select>
                </div>
                <div class="col-4">
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Category</option>
                    <option value="1">Laptop Gaming</option>
                    <option value="2">Laptop Cũ</option>
                    <option value="3">Macbook</option>
                  </select>
                </div>
                <div class="col-4">
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Branch</option>
                    <option value="1">Dell</option>
                    <option value="2">Asus</option>
                    <option value="3">Ac</option>
                  </select>
                </div>
              </div>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th><b>P</b>roduct</th>
                    <th>Category</th>
                    <th>Branch</th>
                    <th>Stock</th>
                    <th>Price</th>
                    <th data-type="date" data-format="YYYY/DD/MM">
                      Created at
                    </th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="d-flex justify-content-start align-items-center product-name">
                        <div class="avatar-wrapper me-3">
                          <div class="avatar rounded-2 bg-label-secondary">
                            <img src="./assets/img/apple-touch-icon.png" alt="Product-55" class="rounded-2" />
                          </div>
                        </div>
                        <div class="d-flex flex-column">
                          <span class="text-nowrap text-heading fw-medium">Matsoft</span>
                          <small class="text-truncate d-none d-sm-block">Air Jordan is a line of basketball shoes produced
                            by Nike
                          </small>
                        </div>
                      </div>
                    </td>
                    <td>Laptop Gaming</td>
                    <td>Dell Inspiron</td>
                    <td>100</td>
                    <td>13.000.000</td>
                    <td>2009/29/11</td>
                    <td>
                      <span class="badge rounded-pill bg-label-danger text-capitalized">
                        Inactive
                      </span>
                    </td>
                    <td>
                      
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
      &copy; Copyright <strong><span>Thảo</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="#">Thảo</a>
    </div>
  </footer>


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery/jquery-3.7.1.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>


  <script src="assets/js/main.js"></script>
  <script>
    const showProduct = () => {
      $.ajax({
        url: 'http://localhost:3000/server/product.php',
        type: 'POST',
        data: {
          action: "readandfilter"
        },
        success: (response) => {
          console.log(JSON.parse(response));
          let products = JSON.parse(response)
          $('.datatable').DataTable({
            searching: true,
            paging: true,
            data: products,
            columns: [{
                data: 'null',
                render: function(data, type, row) {
                  return `
                      <div class="d-flex justify-content-start align-items-center product-name">
                        <div class="avatar-wrapper me-3">
                          <div class="avatar rounded-2 bg-label-secondary">
                            <img src="./server/${row.image}" alt="Product-55" class="rounded-2" />
                          </div>
                        </div>
                        <div class="d-flex flex-column">
                          <span class="text-nowrap text-heading fw-medium">${row.name}</span>
                          <small style="max-width: 370px;overflow-x: hidden;"  class="text-truncate d-none d-sm-block">${row.description}</small>
                        </div>
                      </div>
                  `
                }
              },
              {
                data: 'category_name',
                render: function(data, type, row) {
                  return row.category_name
                }
              },
              {
                data: 'branch_name',
                render: function(data, type, row) {
                  return row.branch_name
                }
              },
              {
                data: 'quantity',
                render: function(data, type, row) {
                  return row.quantity
                }
              },
              {
                data: 'price',
                render: function(data, type, row) {
                  return row.price
                }
              },
              {
                data: 'created_at',
                render: function(data, type, row) {
                  return row.created_at
                }
              },
              {
                data: 'status',
                render: function(data, type, row) {
                  if (row.is_active == 2) {
                    return `
                        <span class="badge rounded-pill bg-label-danger text-capitalized">
                          Inactive
                        </span>
                    `
                  } else {
                    return `
                        <span class="badge rounded-pill bg-label-success text-capitalized">
                          Active
                        </span>
                    `
                  }
                }
              },
              {
                data: null,
                render: function(data, type, row) {
                  console.log(row);
                  return `
                      <div class="d-flex align-items-sm-center justify-content-sm-center">
                        <a href="./edit-product.php?id=${row.id}" class="btn btn-sm btn-icon">
                          <i class="bi bi-pencil"></i>
                        </a>
                        <button onclick="handleDelete(${row.id}" class="btn btn-sm btn-icon">
                          <i class="bi bi-trash3-fill me-2"></i>
                        </button>
                      </div>
                  `
                }
              }
            ],
          })
        }
      })
    }

    const handleView = (id) => {
      $.ajax({
        url: 'http://localhost:3000/server/product.php',
        type: 'POST',
        data: `id=${id}&action=getbyid`,
        success: (response) => {
          let {
            status,
            message
          } = JSON.parse(response)
          console.log(status);
          console.log(message);
          if (status) {
            window.location.reload()
          } else {
            // $('.cerror').html(message);
          }
        }
      })
    }

    const handleDelete = (id) => {
      $.ajax({
        url: 'http://localhost:3000/server/product.php',
        type: 'POST',
        data: `id=${id}&action=delete`,
        success: (response) => {
          let {
            status,
            message
          } = JSON.parse(response)
          console.log(status);
          console.log(message);
          if (status) {
            window.location.reload()
          } else {
            // $('.cerror').html(message);
          }
        }
      })
    }
    showProduct()
  </script>
</body>

</html>