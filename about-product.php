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
        <a href="index.php" class="logo d-flex align-items-center">
          <img src="assets/img/logo.png" alt="" />
          <span class="d-none d-lg-block">ThaoHien</span>
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
              <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle profile-image" />
              <span class="d-none d-md-block dropdown-toggle ps-2 profile-name text-truncate" style="width: 120px;">K. Anderson</span> </a>

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
              <li class="dropdown-header">
                <h6 style="width: 250px;" class="text-truncate profile-name">Kevin Anderson</h6>
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
                <hr class="dropdown-divider" />
              </li>

              
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center sign-out" href="#">
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
        <div class="card">
          <div class="card-body row">
            <div class="col-lg-4 p-4">
              <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <!-- <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div> -->
                <div class="carousel-inner" id="slideshow" style="height: 100% !important;">
                  <div class="carousel-item active">
                    <img src="https://thegioiso365.vn/wp-content/uploads/2023/10/enovo-Ideapad-Gaming-3-01-510x510.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="./assets/img/product-2.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="./assets/img/product-2.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
            <div class="col-lg-8 p-4">
              <h5 class="product-name">Bộ Máy Tính AKA1SY H410 i5 10400 Ram 8Gb Ssd 240Gb VGA GTX 1650 kèm màn 22-24 chơi mượt game Liên minh, fifa 4, csgo
              </h5>
              <div class="d-flex gap-2">
                <a href="#" class="total-review" style="border-right: 1px solid black; padding-right: 12px;">45 Đánh giá</a>
                <a href="#" class="total-sold">45 Đã bán</a>
              </div>
              <div class="mt-4 fw-bold fs-2 text-danger">
                <span class="product-price">8.900.000</span>
              </div>
              <div class="mt-4 w-fit d-flex gap-2 align-items-center">
                <div style="width: 64px;">
                  <input type="number" class="form-control" min="1" id="quantity" value="1" placeholder="Số lượng">
                </div>
                <span class="text-nowrap"><span class="in-stock">2000</span> sản phẩm trong kho</span>
              </div>
              <div class="mt-4">
                <div class="d-flex align-items-center gap-4">
                  <button type="button" class="btn btn-lg btn-primary border-0 btn-add-to-cart">Thêm vào giỏ hàng</button>
                  <a href="./orders.php" type="button" class="btn btn-lg btn-danger btn-buy-now">Mua ngay</a>
                </div>
              </div>
              <div class="mt-4">
                <ul class="list-unstyled d-flex justify-content-between">
                  <li class="d-flex align-items-center gap-2">
                    <img src="./assets/img/return.png" width="32px" alt="">
                    <span>7 ngày miễn phí trả hàng</span>
                  </li>
                  <li class="d-flex align-items-center gap-2">
                    <img src="./assets/img/check.png" width="32px" alt="">
                    <span>7 ngày miễn phí trả hàng</span>
                  </li>
                  <li class="d-flex align-items-center gap-2">
                    <img src="./assets/img/ship.png" width="32px" alt="">
                    <span>7 ngày miễn phí trả hàng</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="card">
          <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-bordered">
      
              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#about-product">Giới thiệu sản phẩm</button>
              </li>
    
              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#details">Chi tiết sản phẩm</button>
              </li>
    
            </ul>
            <div class="tab-content w-fit mt-4 mb-4">
              <div class="tab-pane fade show active about-product col-6" id="about-product">
                  <h4 class="product-name fw-bold">MSI MPG Trident 3</h4>
                  <div class="product-description">
                    <p class="fs-6 my-4">
                        MSI MPG Trident 3 10SC-005AU Intel i7 10700F, 2060 SUPER, 16GB RAM, 512GB SSD, 2TB HDD, Windows 10 Home, Gaming Keyboard and Mouse 3 Years Warranty Gaming Desktop
                    </p>
                  </div>
                  <div>
                      <span class="fw-bold">Nếu bạn có câu hỏi? </span>
                      <a href="#">Liên hệ với chúng tôi</a>
                  </div>
              </div>
              <div class="tab-pane fade details" id="details">
                  <table class="table table-striped table-bordered" width="300">
                    <tbody>
                    <tr>
                    <td scope="row"><strong>CPU</strong></td>
                    <td id="cpu" scope="row">Ryzen 5-7535HS (3.30GHz up to 4.50GHz, 16MB Cache)</td>
                    </tr>
                    <tr>
                    <td scope="row"><strong>RAM</strong></td>
                    <td id="ram" scope="row">8GB (1x8GB) SO-DIMM DDR5 4800MHz (+1 slot nâng cấp tối đa 16GB)</td>
                    </tr>
                    <tr>
                    <td scope="row"><strong>Ổ cứng</strong></td>
                    <td id="hardware" scope="row">512GB SSD M.2 2242 PCIe® 4.0×4 NVMe®</td>
                    </tr>
                    <tr>
                      <td scope="row"><strong>Card VGA</strong></td>
                      <td id="cardvga" scope="row">NVIDIA GeForce RTX 2050 4GB GDDR6</td>
                    </tr>
                    <tr>
                      <td scope="row"><strong>Màn hình</strong></td>
                      <td id="display" scope="row">15.6inch FHD (1920×1080) IPS 250nits Anti-glare, 45% NTSC, 120Hz, FreeSync™</td>
                    </tr>
                    <tr>
                      <td scope="row"><strong>Camera</strong></td>
                      <td id="camera" scope="row">HD 720p</td>
                    </tr>
                    <tr>
                    <td scope="row"><strong>Cổng kết nối</strong></td>
                      <td id="port" scope="row"><span class="comma">1x USB 3.2 Type-C Thunderbolt 4<br>
                        </span><span class="comma">1x HDMI 2.0<br>
                        </span>1x Ethernet (RJ45)<br>
                        1x Jack tai nghe 3.5 mm<br>
                        2x USB 3.2 Type-A<br>
                        1x&nbsp;Power connector
                      </td>
                    </tr>
                    <tr>
                    <td scope="row"><strong>Trọng lượng</strong></td>
                    <td id="weight" scope="row">2.3 kg</td>
                    </tr>
                    <tr>
                    <td scope="row"><strong>Pin</strong></td>
                    <td id="pin" scope="row">60 Wh</td>
                    </tr>
                    <tr>
                    <td scope="row"><strong>Hệ điều hành</strong></td>
                    <td id="window" scope="row">Window 11 bản quyền</td>
                    </tr>
                    </tbody>
                    </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title fw-bold fs-5 d-flex justify-content-between">Đánh giá sản phẩm
              <button class="btn btn-primary border-0 btn-review" data-bs-toggle="modal" data-bs-target="#modal-review">Đánh giá</button>
            </h3>
            <div class="review-list">
              <div class="review-item-no fs-5 text-center ">
                Sản phẩm chưa có đánh giá nào
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
  
  <div class="modal fade" id="modal-image" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-body">
          <img src="" alt="" class="w-100 h-100 object-fit-cover">
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modal-review" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content p-4">
        <div class="modal-header">
          <h5 class="modal-title fw-bold fs-6 product-name" id="exampleModalLabel">Đánh giá [Mới 100%] Lenovo Ideapad Gaming 3 model 2023 15ARH7 (Ryzen 5-7535HS, 8GB, 512GB, RTX 2050 4GB, 15.6″ FHD 120Hz) 
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" id="formAddReview">
        <div class="modal-body">
            <div class="row">
              <textarea name="" id="content" cols="30" rows="10" class="w-100 form-control" placeholder="Mời bạn chia sẻ cảm nhận"></textarea>
            </div>
            <div class="row">
              <div class="col-6">
                <h4 class="my-3 fs-5 fw-bold">
                  Gửi ảnh chụp thực tế
                </h4>
                <div class="row gap-2">
                  <span data-id="image-input-1" id="span-1" style="width: 80px;height: 80px; border: 2px dashed #ccc;" class="d-flex align-items-center justify-content-center p-0 image-span">
                    <i class="bi bi-plus"></i>
                  </span>
                  <input type="file" id="image-input-1" class="image-input" style="display: none;">
                  <span data-id="image-input-2" id="span-2" style="width: 80px;height: 80px; border: 2px dashed #ccc;" class="d-flex align-items-center justify-content-center p-0 image-span">
                    <i class="bi bi-plus"></i>
                  </span>
                  <input type="file" id="image-input-2" class="image-input" style="display: none;">
                  <span data-id="image-input-3" id="span-3" style="width: 80px;height: 80px; border: 2px dashed #ccc;" class="d-flex align-items-center justify-content-center p-0 image-span">
                    <i class="bi bi-plus"></i>
                  </span>
                  <input type="file" id="image-input-3" class="image-input" style="display: none;">
                </div>
              </div>
              <div class="col-6 my-3">
                <div class="d-flex justify-content-between">
                  <div class="item d-flex flex-column align-items-center justify-content-center gap-2">
                    <i class="bi bi-star-fill fs-4 star"></i>
                    <label for="rating-1" class="fs-6">Rất Tệ</label>
                  </div>
                  <div class="item d-flex flex-column align-items-center justify-content-center gap-2">
                    <i class="bi bi-star-fill fs-4 star"></i>
                    <label for="rating-2" class="fs-6">Tệ</label>
                  </div>
                  <div class="item d-flex flex-column align-items-center justify-content-center gap-2">
                    <i class="bi bi-star-fill fs-4 star"></i>
                    <label for="rating-3" class="fs-6">Bình thường</label>
                  </div>
                  <div class="item d-flex flex-column align-items-center justify-content-center gap-2">
                    <i class="bi bi-star-fill fs-4 star"></i>
                    <label for="rating-4" class="fs-6">Tốt</label>
                  </div>
                  <div class="item d-flex flex-column align-items-center justify-content-center gap-2">
                    <i class="bi bi-star-fill fs-4 star"></i>
                    <label for="rating-5" class="fs-6">Rất Tốt</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
            <button type="submit" class="btn btn-primary">Đánh giá</button>
          </div>
        </form>
      </div>
    </div>
  </div>

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

  <script src="./assets/js/auth.js"></script>
  <script>
    // var userRole = checkAuth()
    // console.log(userRole);

    var urlParams = new URLSearchParams(window.location.search);
    var productId = urlParams.get('id');
    if(!productId) {
      window.location.href = 'filter.php'
    }
    let selectedImages = []; // Mảng để lưu trữ các tệp ảnh đã chọn
    let rate = 0;
    const showImagePreview = (event) => {
      // Lấy giá trị của thẻ img
      console.log('hehe');
      const image = event.target;
      var myModal = new bootstrap.Modal($('#modal-image'), {
      keyboard: false
      })
      $('.modal-body img').attr('src',image.src);
      myModal.show()
    }

    $(document).ready(function() {
      // Gắn sự kiện "click" cho tất cả các phần tử <img> trong .review-image
      $(document).on('click', '.review-image img', showImagePreview);
    });

    $('.image-span').click(function() {
      const inputId = $(this).data('id');
      $('#' + inputId).click();
    });

    $('.image-input').change(function() {
      const file = this.files[0];
      const inputId = $(this).attr('id');
      const spanId = inputId.replace('image-input-', 'span-');
      console.log(inputId);
      if (file) {
        const reader = new FileReader();

        reader.addEventListener('load', function() {

          const image = $('<img>').attr('src', reader.result).css('width', '100%').css('height', '100%');
          $('#span').innerHTML = '';
          $('#' + spanId).empty().append(image);

          const selectedImage = {
            inputId: inputId,
            file: file
          };
          selectedImages.push(selectedImage);
        });
        console.log(selectedImages);
        reader.readAsDataURL(file);
      }else {
        $('#' + spanId).html('<i class="bi bi-plus"></i>');

        const index = selectedImages.findIndex(image => image.inputId === inputId);
        if (index > -1) {
          selectedImages.splice(index, 1);
        }
        console.log(selectedImages);
      }
    })

    $('.item').click(function() {
      // Lấy vị trí của label được nhấp
      const position = $(this).index();
      rate = position + 1

      // Xóa lớp 'active' từ tất cả các ngôi sao
      $('.star').removeClass('text-warning');
      // Làm sáng các ngôi sao từ đầu đến vị trí label
      $('.item:lt(' + (position + 1) + ') .star').addClass('text-warning');
    });

    const getProductById = (id) => {
      $.ajax({
        url: "http://localhost:3000/server/product.php",
        type: "POST",
        data: `action=getbyid&id=${id}`,
        success: (response) => {
          console.log(JSON.parse(response));
          let product = JSON.parse(response)
          $('#slideshow').empty()
          product.images.forEach((image, index) => {
            let html = `
                  <div class="carousel-item ${index === 1 ? 'active': ''}">
                    <img src="./server/${image}" class="d-block w-100" alt="...">
                  </div>
                `
            $('#slideshow').append(html)
          })
          $('.product-name').each(function() {
            $(this).html(product.name)
          })
          $('.total-sold').html(product.total_orders + ' Đã bán')
          $('.product-price').html(convertToCurrency(product.price))
          $('.in-stock').html(product.quantity)
          $('#quantity').attr('max', product.quantity);
          $('.product-description').html(product.description)
          $('#cpu').html(product.cpu)
          $('#ram').html(product.ram)
          $('#hardware').html(product.hardware)
          $('#cardvga').html(product.cardvga)
          $('#display').html(product.display)
          $('#camera').html(product.camera)
          $('#port').html(product.port)
          $('#weight').html(product.weight)
          $('#pin').html(product.pin)
          $('#window').html(product.window)
        }
      });
    }

    $('#formAddReview').on('submit', function(e) {
      e.preventDefault();

      var content = $('#content').val()
      var star = rate;
      var images = selectedImages
      console.log(content, star, images);

      var formData = new FormData();
      formData.append("content", content);
      formData.append("rate", star);
      for (var i = 0; i < images.length; i++) {
        var file = images[i];
        formData.append("images[]", file.file);
      }
      formData.append('product_id', productId)
      formData.append('user_id', 16)
      formData.append('action', 'create')
      $.ajax({
        url: "http://localhost:3000/server/review.php",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {
          let {status, message} = JSON.parse(response)
          if(status) {
            showAlert('success', message)
            setTimeout(function() {
              window.location.reload()
            }, 2000)
          }else {
            // alert(message)
            showAlert('danger', message)
          }
        }
      });
    })

    $('.btn-add-to-cart').click(() => handleAddToCart(productId))

    const handleAddToCart = (id) => {
      let number = $('#quantity').val()
      let instock = $('.in-stock').html()
      if (number > instock) {
        showAlert('danger', 'Số lượng trong kho không đủ')
        return
      }
      let data = {
        user_id: 16,
        product_id: id,
        quantity: number,
        action: 'create'
      }
      $.ajax({
        url: "http://localhost:3000/server/cart.php",
        type: "POST",
        data: data,
        success: function(response) {
          let {status, message} = JSON.parse(response)
          if(status) {
            showAlert('success', message)
            setTimeout(function() {
              window.location.reload()
            }, 2000)
          }else {
            alert(message)
          }
        }
      });
    }

    const getReviewById = (id) => {
      $.ajax({
        url: 'http://localhost:3000/server/review.php',
        type: 'POST',
        data: `action=read&id=${id}`,
        success: (response) => {
          let userId = localStorage.getItem('userId');
          console.log(JSON.parse(response));
          let reviews = JSON.parse(response)
          $('.total-review').html(reviews.length + ' Đánh giá')
          if (reviews.length > 0) {
            $('.review-list').empty()
            reviews.forEach(function(view) {
              if(view.user_id === userId) {
                $('.btn-review').remove()
              }
              let starHtml = '';
              let imageHtml = '';
              let listImage = view.image.split(';')
              listImage.pop()
              console.log(listImage);
              for(let i = 0; i < listImage.length; i++) {
                imageHtml += `<img src="./server/${listImage[i]}" width="76" alt="">`
              }
              for (let i = 0; i < view.rate; i++) {
                starHtml += '<i class="bi bi-star-fill text-warning"></i>';
              }
              for (let i = 0; i < 5 - view.rate; i++) {
                starHtml += '<i class="bi bi-star-fill"></i>';
              }
              let html = `
                <div class="review-item mb-1 d-flex gap-3">
                  <div class="image">
                    <img src="./server/${view.user_image}" alt="Profile" width="48" class="rounded-circle">
                  </div>
                  <div>
                    <h6 class="fw-bold mb-0">${view.first_name + ' ' + view.last_name}</h6>
                    <div class="star col">
                      ${starHtml}
                    </div>
                    <small>${view.created_at} | Phân loại hàng: Bộ GAME 24in</small>
                    <div class="review-content">
                      ${view.content}
                    </div>
                    <div class="review-image">
                      ${imageHtml}
                    </div>
                  </div>
                </div>
                ${view.reply != "" ? 
                  `
                  <div class="mb-3 p-2" style="background: #eee; width: 600px; margin-left:52px;">
                  <span class="fw-bold">Cửa hàng Thảo Hiền</span>
                  <p>${view.reply}</p>
                  </div>
                  `
                  : ''
                }
              `
              $('.review-list').append(html)
            })
          }
        }
      })
    }

    const getCartById = () => {
      let userId = localStorage.getItem('userId');
      $.ajax({
        url: 'http://localhost:3000/server/cart.php',
        type: 'POST',
        data: `action=read&id=${userId}`,
        success: (response) => {
          console.log(JSON.parse(response));
          let carts = JSON.parse(response)
          $('.total-cart').each(function() {
            $(this).html(carts.length)
          })
        }
      })
    }

    const checkBuyProduct = () => {
      // getOrderByUserId
      let userId = localStorage.getItem('userId');
      $.ajax({
        url: 'http://localhost:3000/server/order.php',
        type: 'POST',
        data: `action=checkBuyOrderByUserId&id=${userId}&product_id=${productId}`,
        success: (response) => {
          console.log(JSON.parse(response));
          let isBuy = JSON.parse(response).length
          if(isBuy == 0) {
            $('.btn-review').remove()
          }

        }
      })
    }

    getCartById()
    getProductById(productId)
    getReviewById(productId)
    checkBuyProduct()
  </script>
</body>

</html>