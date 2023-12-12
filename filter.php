<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="assets/img/favicon.png" rel="icon" />
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;400;500;600;700&family=Poppins:ital,wght@0,300;0,600;0,700;1,400;1,500&display=swap"
    rel="stylesheet">


  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
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
        <a href="index.html" class="logo d-flex align-items-center">
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
                <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                  <i class="bi bi-person"></i>
                  <span>My Profile</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                  <i class="bi bi-gear"></i>
                  <span>Account Settings</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
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
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
              aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
              aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
              aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./assets/img/slide-1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./assets/img/slide-2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./assets/img/slide-3.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

      <div class="section my-4">
        <div class="row">
          <div class="col-lg-2"></div>
          <div class="col-lg-10 d-flex justify-content-between align-items-center">
            <span class="text-secondary font-poppins fs-6">
              Sản phẩm 1-35 của 61
            </span>
            <div class="d-flex gap-2">
              <select class="form-select" aria-label="Default select example" id="filter-position">
                <option value="" selected>Sắp xếp theo: Mặc định</option>
                <option value="date">Sắp xếp theo: Date</option>
                <option value="name">Sắp xếp theo: Name</option>
              </select>
              <select class="form-select" aria-label="Default select example" id="filter-perpage">
                <option value="20" selected>Hiển thị: 20 sản phẩm </option>
                <option value="25">Hiển thị: 25 sản phẩm</option>
                <option value="30">Hiển thị: 30 sản phẩm</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-2 bg-four pt-4 h-fit">
            <h4 class="text-center font-poppins fs-4 fw-bold">Lọc</h4>
            <ul class="list-unstyled" id="filter-category">
              <li class="text-heading p-2 fw-bold fs-5">
                Loại
              </li>
            </ul>
            <ul class="list-unstyled" id="filter-branch">
              <li class="text-heading p-2 fw-bold fs-5">
                Thương hiệu
              </li>
            </ul>
            <ul class="list-unstyled">
              <li class="text-heading p-2 fw-bold fs-5">
                Gía
              </li>
              <li>
                <div class="input-group">
                  <input id="fromPrice" type="number" aria-label="Fprice" placeholder="From" class="form-control">
                  <span class="input-group-text">
                    <i class="bi bi-dash-lg"></i>
                  </span>
                  <input id="toPrice" type="number" aria-label="Lprice" placeholder="To" class="form-control">
                </div>
              </li>
              <li>
                <button id="priceButton" type="button" class="w-100 mt-2 btn btn-danger">Lọc</button>
              </li>
            </ul>
            <ul class="list-unstyled">
              <li class="text-heading p-2 fw-bold fs-5">
                Đánh giá
              </li>
              <li id="rate-5">
                <div class="col px-2">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </div>
              </li>
              <li id="rate-4">
                <div class="col px-2">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                  <span>Up to</span>
                </div>
              </li>
              <li id="rate-3">
                <div class="col px-2">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                  <span>Up to</span>
                </div>
              </li>
              <li id="rate-2">
                <div class="col px-2">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                  <span>Up to</span>
                </div>
              </li>
              <li id="rate-1">
                <div class="col px-2">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                  <span>Up to</span>
                </div>
              </li>
            </ul>
            <ul class="list-unstyled">
                <li>
                  <button id="clearFilterBtn" type="button" class="btn btn-danger w-100">Bỏ lọc tất cả</button>
                </li>
            </ul>
            
          </div>
          <div class="col-lg-10">
            <!-- <div class="col-lg min-w-200 col-md-3 col-sm-12 p-1">
              <div class="card h-100 mb-0">
                  <div class="card-body pt-1 pb-0">
                      <div class="col-12 badge rounded-pill bg-label-success text-capitalized">
                          <i class="bi bi-check-circle me-1"></i>
                          <span>In stock</span>
                      </div>
                      <div class="col-12 my-1">
                          <img src="./assets/img/lap-7.png" alt="" class="w-100 h-150px">
                          <div class="rate col">
                              <i class="bi bi-star-fill fs-8"></i>
                              <i class="bi bi-star-fill fs-8"></i>
                              <i class="bi bi-star-fill fs-8"></i>
                              <i class="bi bi-star-fill fs-8"></i>
                              <i class="bi bi-star-fill fs-8"></i>
                              <span class="fs-8 text-third">Review (4)</span>
                          </div>
                          <div class="name col font-poppins text-warp text-truncate-3 fs-7">
                              EX DISPLAY : MSI Pro 16 Flex-036AU 15.6 MULTITOUCH All-In-On...
                          </div>
                          <div class="price col mt-2">
                              <small class="fs-6 text-decoration-line-through">$499.00</small>
                              <p class="fw-bold fs-5 mb-0">$499.00</p>
                          </div>
                      </div>
                      
                  </div>
              </div>
            </div> -->
            <div class="row align-items-start flex-wrap filter-product-list">

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
            <input type="text" class=" form-control py-2 bg-transparent text-white" placeholder="Recipient's email"
              aria-label="Recipient's email" aria-describedby="button-addon2">
            <button class="btn btn-primary border-0" type="button" id="button-addon2">Subcribe</button>
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
          <li class="mt-1 font-poppins fs-6">Cases / Power Supplies / Cooling</li>
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
          <li class="mt-1 font-poppins fs-6">Address: 1234 Street Adress City Address, 1234</li>
          <li class="mt-1 font-poppins fs-6">Phones: (00) 1234 5678</li>
          <li class="mt-1 font-poppins fs-6">We are open: Monday-Thursday: 9:00 AM - 5:30 PM</li>
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
    
    // Lấy giá trị từ tham số 'price' trong URL và điền vào các trường input
    const urlParams = new URLSearchParams(window.location.search);
    const priceParam = urlParams.get('price');
    const rateParam = urlParams.get('rate');

    if (rateParam) {
      $(`#${rateParam}`).addClass('bg-five');
    }

    // Xử lý sự kiện khi nhấp vào các dòng đánh giá
    $('li[id^="rate"]').click(function() {
      const rate = $(this).attr('id');

      // Xóa lớp active của tất cả các dòng đánh giá
      $('li[id^="rate"]').removeClass('bg-five');

      // Thêm lớp active cho dòng được nhấp vào
      $(this).addClass('bg-five');

      // Cập nhật URL với tham số 'rate'
      const urlParams = new URLSearchParams(window.location.search);
      urlParams.set('rate', rate);

      const newUrl = `${window.location.pathname}?${urlParams.toString()}`;
      history.pushState(null, '', newUrl);
    });

    if (priceParam) {
      const [fromPrice, toPrice] = priceParam.split(';');
      $('#fromPrice').val(fromPrice);
      $('#toPrice').val(toPrice);
    }

      // Xử lý sự kiện khi nhấp vào nút "Lọc"
  $('#priceButton').click(function() {
    const fromPrice = $('#fromPrice').val();
    const toPrice = $('#toPrice').val();

    // Tạo tham số 'price' từ giá trị nhập vào
    const priceParam = `${fromPrice || ''};${toPrice || ''}`;

    // Cập nhật URL với tham số 'price'
    const urlParams = new URLSearchParams(window.location.search);
    urlParams.set('price', priceParam);

    const newUrl = `${window.location.pathname}?${urlParams.toString()}`;
    history.pushState(null, '', newUrl);
  });

    const updateUrlParamsCategory = () => {
      const selectedCategories = [];
      $('input[type="checkbox"][name="category"]:checked').each(function() {
        const categoryId = $(this).attr('id').split('-')[1];
        selectedCategories.push(categoryId);
      });

      const urlParams = new URLSearchParams(window.location.search);
      if (selectedCategories.length > 0) {
        urlParams.set('categories', selectedCategories.join(';'));
      } else {
        urlParams.delete('categories');
      }
      
      const newUrl = `${window.location.pathname}?${urlParams.toString()}`;
      history.pushState(null, '', newUrl);
    };

    const updateUrlParamsBranch = () => {
      const selectedBranch = [];
      $('input[type="checkbox"][name="branch"]:checked').each(function() {
        const branchId = $(this).attr('id').split('-')[1];
        selectedBranch.push(branchId);
      });

      const urlParams = new URLSearchParams(window.location.search);
      if (selectedBranch.length > 0) {
        urlParams.set('branches', selectedBranch.join(';'));
      } else {
        urlParams.delete('braches');
      }
      
      const newUrl = `${window.location.pathname}?${urlParams.toString()}`;
      history.pushState(null, '', newUrl);
    };


    const showCategoryFilter = () => {
      $.ajax({
        url: 'http://localhost:3000/server/category.php',
        type: 'POST',
        data: {
          action: "read"
        },
        success: (response) => {
          console.log(JSON.parse(response));
          let categories = JSON.parse(response);
          categories.forEach((category) => {
            let html = `
              <li>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="category" value="" id="category-${category.id}" onclick="updateUrlParamsCategory()">
                    <label class="form-check-label text-black" for="category-${category.id}">
                      ${category.name}
                    </label>
                  </div>
              </li>
            `;
            $('#filter-category').append(html);

            const urlParams = new URLSearchParams(window.location.search);
            const selectedCategories = urlParams.get('categories');
            if (selectedCategories) {
              const selectedIds = selectedCategories.split(';');
              if (selectedIds.includes(category.id.toString())) {
                $(`#category-${category.id}`).prop('checked', true);
              }
            }
          });
        }
      });
    };
    const showBrachFilter = () => {
      $.ajax({
        url: 'http://localhost:3000/server/branch.php',
        type: 'POST',
        data: {
          action: "read"
        },
        success: (response) => {
          console.log(JSON.parse(response));
          let branches = JSON.parse(response)
          branches.forEach((branch) => {
            let html = `
              <li>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="branch" value="" id="branch-${branch.id}"
                    onclick="updateUrlParamsBranch()">
                    <label class="form-check-label text-black" for="branch-${branch.id}">
                      ${branch.name}
                    </label>
                  </div>
              </li>
            `;
            $('#filter-branch').append(html);

            const urlParams = new URLSearchParams(window.location.search);
            const selectedBranches = urlParams.get('branches');
            if (selectedBranches) {
              const selectedIds = selectedBranches.split(';');
              if (selectedIds.includes(branch.id.toString())) {
                $(`#branch-${branch.id}`).prop('checked', true);
              }
            }
          });
        }
      })
    }

    $('#clearFilterBtn').click(function() {
    // Xóa tất cả các tham số trong URL
    const newUrl = window.location.pathname;
    history.pushState(null, '', newUrl);
    
    // Tải lại trang
    location.reload();
  });

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
          products.forEach(product => {
            let html = `
                <div class="col-lg-3 min-w-200 col-md-6 col-sm-12 p-1">
                  <div class="card h-100 mb-0">
                      <div class="card-body pt-1 pb-2">
                          <div class="col-12 badge rounded-pill bg-label-success text-capitalized">
                              <i class="bi bi-check-circle me-1"></i>
                              <span>In stock</span>
                          </div>
                          <div class="col-12 my-1">
                              <img src="./server/${product.image}" alt="" style="width:100%; height:185px; object-fit:cover" class="w-100 h-150px">
                              <div class="rate col">
                                  <i class="bi bi-star-fill text-danger fs-8"></i>
                                  <i class="bi bi-star-fill text-danger fs-8"></i>
                                  <i class="bi bi-star-fill text-danger fs-8"></i>
                                  <i class="bi bi-star-fill text-danger fs-8"></i>
                                  <i class="bi bi-star-fill text-danger fs-8"></i>
                                  <span class="fs-8 text-third">Review (${product.total_reviews})</span>
                              </div>
                              <div class="name col font-poppins text-warp text-truncate-3 fs-7">
                                  ${product.name}
                              </div>
                              <div class="price col mt-2">
                                  <p class="fw-bold fs-5 mb-0">${product.price}<sup>đ</sup></p>
                              </div>
                          </div>
                          
                      </div>
                  </div>
                </div>
            `
            $('.filter-product-list').append(html);
          })
        }
      })
    }
    showProduct()
    showBrachFilter()
    showCategoryFilter()
  </script>
</body>

</html>