<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;400;500;600;700&family=Poppins:ital,wght@0,300;0,600;0,700;1,400;1,500&display=swap"
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

    <title>Home</title>
  </head>

  <body>
    <header id="header" class="header fixed-top d-flex align-items-center">
      <div class="container-2xxl d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
          <a href="index.php" class="logo d-flex align-items-center">
            <img src="assets/img/logo.png" alt="" />
            <span class="d-none d-lg-block">NiceAdmin</span>
          </a>
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
                <i class="bi bi-cart"></i>
                <span class="badge bg-primary badge-number total-cart">4</span> </a>

              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                <li class="dropdown-header">
                  Bạn có <span class="total-cart">4</span> sản phẩm trong giỏ hàng
                  <a href="./orders.php"><span class="badge rounded-pill bg-primary p-2 ms-2">xem tất cả</span></a>
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
      </div>
    </header>

    <main class="main bg-white">
      <div class="section container-2xxl">
        <div class="row">
            <div class="mt-4 mb-4">
                <div class="success" id="success">
                    <div class="card w-fit m-auto">
                        <div class="card-body text-center p-4">
                            <div class="card-title fw-bold text-secondary fs-4">
                                Cảm ơn! 🎉
                            </div>
                            <p class="fw-bold fs-4">Đơn hàng của bạn đã được đặt thành công</p>
                            <table class="table">
                                <tr>
                                    <td scope="row">Mã</td>
                                    <td class="fw-bold orderId">#1</td>
                                </tr>
                                <tr>
                                    <td scope="row">Ngày</td>
                                    <td class="fw-bold date">#1</td>
                                </tr>
                                <tr>
                                    <td scope="row">Tổng</td>
                                    <td class="fw-bold total">#1</td>
                                </tr>
                                <tr>
                                    <td scope="row">Vận chuyển</td>
                                    <td class="fw-bold method">#1</td>
                                </tr>
                            </table>

                            <button class="btn btn-dark rounded-pill px-4">Lịch sử giao dịch</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </main>

    <footer class="bg-black">
      <div class="container-2xxl p-10 text-white">
        <div class="row align-items-end">
          <div class="col-md-6 col-sm-12">
            <h3 class="fw-bold fs-2">Sign Up To Our Newsletter.</h3>
            <p>Be the first to hear about the latest offers.</p>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="input-group mb-3 gap-1">
              <input
                type="text"
                class="form-control py-2 bg-transparent text-white"
                placeholder="Recipient's email"
                aria-label="Recipient's email"
                aria-describedby="button-addon2"
              />
              <button
                class="btn btn-primary border-0"
                type="button"
                id="button-addon2"
              >
                Subcribe
              </button>
            </div>
          </div>
        </div>
        <div class="row mt-4">
          <ul class="col list-unstyled">
            <li class="fw-bold text-secondary fs-4 mb-4">Information</li>
            <li class="mt-1 font-poppins fs-6">About us</li>
            <li class="mt-1 font-poppins fs-6">About Zip</li>
            <li class="mt-1 font-poppins fs-6">Privacy Policy</li>
            <li class="mt-1 font-poppins fs-6">Search</li>
            <li class="mt-1 font-poppins fs-6">Terms</li>
            <li class="mt-1 font-poppins fs-6">Orders and Returns</li>
            <li class="mt-1 font-poppins fs-6">Contact Us</li>
            <li class="mt-1 font-poppins fs-6">Advanced Search</li>
            <li class="mt-1 font-poppins fs-6">Newsletter Subscription</li>
          </ul>
          <ul class="col list-unstyled">
            <li class="fw-bold text-secondary fs-4 mb-4">PC Parts</li>
            <li class="mt-1 font-poppins fs-6">CPUS</li>
            <li class="mt-1 font-poppins fs-6">Add On Cards</li>
            <li class="mt-1 font-poppins fs-6">Hard Drives (Internal)</li>
            <li class="mt-1 font-poppins fs-6">Graphic Cards</li>
            <li class="mt-1 font-poppins fs-6">Keyboards / Mice</li>
            <li class="mt-1 font-poppins fs-6">
              Cases / Power Supplies / Cooling
            </li>
            <li class="mt-1 font-poppins fs-6">RAM (Memory)</li>
            <li class="mt-1 font-poppins fs-6">Software</li>
            <li class="mt-1 font-poppins fs-6">Speakers / Headsets</li>
            <li class="mt-1 font-poppins fs-6">Motherboards</li>
          </ul>
          <ul class="col list-unstyled">
            <li class="fw-bold text-secondary fs-4 mb-4">Desktop PCs</li>
            <li class="mt-1 font-poppins fs-6">Custom PCs</li>
            <li class="mt-1 font-poppins fs-6">Servers</li>
            <li class="mt-1 font-poppins fs-6">MSI All-In-One PCs</li>
            <li class="mt-1 font-poppins fs-6">HP/Compaq PCs</li>
            <li class="mt-1 font-poppins fs-6">ASUS PCs</li>
            <li class="mt-1 font-poppins fs-6">Tecs PCs</li>
          </ul>
          <ul class="col list-unstyled">
            <li class="fw-bold text-secondary fs-4 mb-4">Laptops</li>
            <li class="mt-1 font-poppins fs-6">Evryday Use Notebooks</li>
            <li class="mt-1 font-poppins fs-6">MSI Workstation Series</li>
            <li class="mt-1 font-poppins fs-6">MSI Prestige Series</li>
            <li class="mt-1 font-poppins fs-6">Tablets and Pads</li>
            <li class="mt-1 font-poppins fs-6">Netbooks</li>
            <li class="mt-1 font-poppins fs-6">Infinity Gaming Notebooks</li>
          </ul>
          <ul class="col list-unstyled">
            <li class="fw-bold text-secondary fs-4 mb-4">Address</li>
            <li class="mt-1 font-poppins fs-6">
              Address: 1234 Street Adress City Address, 1234
            </li>
            <li class="mt-1 font-poppins fs-6">Phones: (00) 1234 5678</li>
            <li class="mt-1 font-poppins fs-6">
              We are open: Monday-Thursday: 9:00 AM - 5:30 PM
            </li>
            <li class="mt-1 font-poppins fs-6">Friday: 9:00 AM - 6:00 PM</li>
            <li class="mt-1 font-poppins fs-6">Saturday: 11:00 AM - 5:00 PM</li>
            <li class="mt-1 font-poppins fs-6">E-mail: shop@email.com</li>
          </ul>
        </div>
      </div>
    </footer>

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
        var urlParams = new URLSearchParams(window.location.search);
        var orderId = urlParams.get('order_id');
        var date = urlParams.get('date');
        var total = urlParams.get('total');
        var method = urlParams.get('method');
        $('.orderId').html(orderId)
        $('.date').html(date)
        $('.total').html(total)
        $('.method').html(method)
    </script>
  </body>
</html>
