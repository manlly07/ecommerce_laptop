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
            <div class="card-body mt-5 pt-5">
              <ul
                class="nav nav-tabs nav-tabs-bordered w-fit m-auto gap-3 fw-bold fs-4"
              >
                <li class="nav-item">
                  <button
                    class="nav-link active"
                    data-bs-toggle="tab"
                    data-bs-target="#about-product"
                  >
                    Giỏ hàng
                  </button>
                </li>

                <li class="nav-item">
                  <button
                    class="nav-link"
                    data-bs-toggle="tab"
                    data-bs-target="#details"
                  >
                    Thanh toán
                  </button>
                </li>

              </ul>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="tab-content mt-4 mb-4">
                <div class="tab-pane fade show active about-product" id="about-product">
                    <div class="row ">
                        <div class="col-lg-7">
                        <div class="card">
                            <div class="card-body">
                            <h5 class="card-title"></h5>
    
                            <!-- Default Table -->
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Sản phẩm</th>
                                    <th scope="col">Số lượng</th>
                                    <th scope="col">Gía</th>
                                    <th scope="col">Tổng giá</th>
                                </tr>
                                </thead>
                                <tbody id="table-cart">
                                <tr>
                                    <td scope="row">
                                        <div class="d-flex justify-content-start align-items-center">
                                            <div class="avatar-wrapper me-3">
                                            <div style="width: 80px;height: 96px;">
                                                <img src="./assets/img/messages-1.jpg" class="w-100 h-100" alt="Avatar">
                                            </div>
                                            </div>
                                            <div class="d-flex flex-column">
                                            <a href="about-product.php" class="text-truncate">
                                                <span class="text-heading fs-7 fw-medium">Cristine Easom</span>
                                            </a>
                                            <a href="javascript:void(0)" class="d-flex align-items-center fw-medium text-secondary"><i class="bi bi-x fs-3"></i> Xóa bỏ</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td style="vertical-align:middle">
                                        <div class="form-group" style="width: 84px;">
                                            <input type="number" class="form-control" value="1" min="1">
                                        </div>
                                    </td>
                                    <td style="vertical-align:middle">
                                        <span>19000000</span>
                                        <sup>đ</sup>
                                    </td>
                                    <td class="fw-bold" style="vertical-align:middle">
                                        <span>19000000</span>
                                        <sup>đ</sup>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <!-- End Default Table Example -->
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-5">
                        <div class="card border border-2 border-dark">
                            <div class="card-body">
                                <div class="card-title fw-bold">Chi tiết giỏ hàng</div>

                                <div class="row px-3 gap-3">
                                    <div class="form-group border border-2 border-dark p-3">
                                        <div class="form-check fs-5" >
                                            <input class="form-check-input" value="Giao hàng miễn phí" type="radio" name="shipping_method" id="flexRadioDefault1" checked>
                                            <label class="form-check-label" for="flexRadioDefault1">
                                            Giao hàng miễn phí
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group border border-2 border-dark p-3">
                                        <div class="form-check fs-5">
                                            <input class="form-check-input" value="Giao hàng hỏa tốc" type="radio" name="shipping_method" id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                            Giao hàng hỏa tốc
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="px-3 d-flex justify-content-between mt-4">
                                    <span class="fw-bold fs-4">Tổng:</span>
                                    <span class="fs-4"><span class="total-bill">1.000.000</span> <sup>đ</sup></span>
                                </div>

                                <button class="btn btn-dark mt-3 w-100 p-3">Thanh toán</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade details" id="details">
                    <div class="row">
                        <div class="col-lg-7">
                            <form action="" id="formAddOrder">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title fw-bold fs-5">Thông tin liên lạc</h4>
                                        
                                        <div class="row">
                                            <div class="col-lg-6 mb-3">
                                                <label for="firstname" class="form-label">Họ</label>
                                                <input type="text" class="form-control" id="firstname">
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label for="lastname" class="form-label">Tên</label>
                                                <input type="text" class="form-control" id="lastname">
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label for="phone" class="form-label">Số điện thoại</label>
                                                <input type="text" class="form-control" id="phone">
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="email">
                                            </div>
                                            <div class="col-12 mb-3">
                                                <label for="address" class="form-label">Địa chỉ</label>
                                                <textarea type="text" class="form-control" id="address"></textarea>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <label for="address" class="form-label">Ghi chú</label>
                                                <textarea type="text" class="form-control" id="note"></textarea>
                                            </div>
                                            <div class="col-12 mb-3 gap-3  nav nav-tabs nav-tabs-bordered">
                                              <div class="form-check form-switch nav-item">
                                                <input class="form-check-input active" type="radio" id="flexSwitchCheckDefault" value="COD" name="payment-method" checked 
                                                data-bs-toggle="tab"
                                                data-bs-target="#cod"
                                                >
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Thanh toán khi nhận hàng</label>
                                              </div>
                                              <div class="form-check form-switch nav-item">
                                                <input class="form-check-input" type="radio" id="flexSwitchCheckChecked" value="OnlineBanking" name="payment-method"
                                                data-bs-toggle="tab"
                                                data-bs-target="#pay"
                                                >
                                                <label class="form-check-label" for="flexSwitchCheckChecked">Thanh toán chuyển khoản</label>
                                              </div>
                                            </div>
                                            <!-- <div class="tab-content">
                                              <div class="tab-pane fade show active cod" id="cod">
                                                hello
                                              </div>
                                              <div class="tab-pane fade show pay" id="pay">
                                                pay
                                              </div>
                                            </div> -->
                                        </div>

                                        <button class="btn btn-dark w-100 p-3 buy-now">Đặt hàng</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-5">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title fw-bold">Chi tiết giỏ hàng</div>
                                    <div class="row">
                                        <table class="table">
                                            <tbody id="table-cart-2">
                                              
                                              
                                            </tbody>
                                            <tfoot>
                                              <tr>
                                                  <td scope="row" class="fw-bold fs-5">
                                                      Tổng
                                                  </td>
                                                  <td><span class="fs-6 fw-bold"><span class="total-bill">234.000.000</span></span> <sup>đ</sup></td>
                                                </tr>
                                            </tfoot>
                                          </table>
                                    </div>
                                </div>
                            </div>
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

    <script src="./assets/js/auth.js"></script>

    <script>
      let totalBill = 0
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
            $('#table-cart').empty()
            $('#table-cart-2').empty()
            carts.forEach((cart) => {
              totalBill += cart.quantity * cart.product_price
              let htmls = `
                        <tr>
                          <td scope="row">
                              <div class="d-flex justify-content-start align-items-center">
                                  <div class="avatar-wrapper me-3">
                                  <div style="width: 80px;height: 96px;">
                                      <img src="./server/${cart.product_image}" class="w-100 h-100" alt="Avatar">
                                  </div>
                                  </div>
                                  <div class="d-flex flex-column">
                                  <a href="about-product.php?id=${cart.product_id}" class="text-truncate">
                                      <span class="text-heading fs-7 fw-medium">${cart.product_name}</span>
                                  </a>
                                  <a onclick="handleDelete(${cart.id})" href="javascript:void(0)" class="d-flex align-items-center fw-medium text-secondary"><i class="bi bi-x fs-3"></i> Xóa bỏ</a>
                                  </div>
                              </div>
                          </td>
                          <td style="vertical-align:middle">
                              <div class="form-group" style="width: 84px;">
                                  <input type="number" class="form-control" value="${cart.quantity}" min="1" onchange="calculateTotal(this)">
                              </div>
                          </td>
                          <td style="vertical-align:middle">
                              <span>${cart.product_price}</span>
                              <sup>đ</sup>
                          </td>
                          <td class="fw-bold" style="vertical-align:middle">
                              <span>${cart.quantity * cart.product_price}</span>
                              <sup>đ</sup>
                          </td>
                        </tr>
              `

              let htmls2 = `
                            <tr>
                              <td scope="row">
                                  <div class="d-flex justify-content-start align-items-center">
                                      <div class="avatar-wrapper me-3">
                                        <div style="width: 80px;height: 96px;">
                                          <img src="./server/${cart.product_image}" class="w-100 h-100" alt="Avatar">
                                        </div>
                                      </div>
                                      <div class="d-flex flex-column">
                                        <a href="about-product.php?id=${cart.product_id}" class="text-truncate">
                                          <span class="text-heading fs-6 fw-medium">Cristine Easom</span>
                                        </a>
                                        <div class="form-group" style="width: 84px;">
                                          <input type="number" class="form-control" value="${cart.quantity}" min="1" disabled readonly>
                                        </div>
                                      </div>
                                    </div>
                              </td>
                              <td class="fw-bold fs-5" style="vertical-align:middle">
                                  <span>${cart.quantity * cart.product_price}</span>
                                  <sup>đ</sup>
                              </td>
                            </tr>
              
              `
              $('#table-cart').append(htmls)
              $('#table-cart-2').append(htmls2);
            })
            $('.total-bill').html(totalBill)

            if (carts.length === 0) {
              $('.buy-now').remove()
            }
          }
        })
      }
      const handleDelete = (id) => {
        console.log(id);
        $.ajax({
          url: 'http://localhost:3000/server/cart.php',
          type: 'POST',
          data: `action=delete&id=${id}`,
          success: (response) => {
            console.log(JSON.parse(response));
            let {status, message} = JSON.parse(response)
            if (status) {
              getCartById(16)
              alert(message)
            }else {
              alert(message)
            }
          }
        })
      }
      const calculateTotal = (input) => {
        // Lấy giá trị số lượng từ ô input
        var quantity = input.value;

        // Lấy ô td cuối cùng trong hàng chứa ô input
        var row = input.parentNode.parentNode.parentNode; // Điều chỉnh dựa trên cấu trúc của bảng thực tế
        var totalCell = row.querySelector("td:last-child");

        // Lấy giá sản phẩm từ ô td giá
        var price = parseFloat(row.querySelector("td:nth-child(3) span").innerText);

        // Tính toán tổng giá mới
        var total = price * quantity;

        // Cập nhật giá trị tổng giá trong ô td cuối cùng
        totalCell.innerHTML = `<span>${total}</span><sup>đ</sup>`;


        // Lấy id sản phẩm từ thuộc tính href của thẻ a trong cùng hàng
        var productId = $(input).closest("tr").find("a").attr("href").split("=")[1];
        console.log(productId);
        var data = {
          user_id: 16,
          product_id: productId,
          quantity,
          action: 'update'
        }
        $.ajax({
          url: 'http://localhost:3000/server/cart.php',
          type: 'POST',
          data: data,
          success: (response) => {
            console.log(JSON.parse(response));
            let {status, message} = JSON.parse(response)
            if (!status) {
              alert(message)
            }
            getCartById()
          }
        })
      }
      const getDate = () => {
        var currentDate = new Date();

        var day = currentDate.getDate();
        var month = currentDate.getMonth() + 1;
        var year = currentDate.getFullYear();

        var currentTime = day + '/' + month + '/' + year;
        return currentTime
      }

      $('#formAddOrder').on('submit', function(e) {
        e.preventDefault()
        var firstname = $('#firstname').val()
        var lastname = $('#lastname').val()
        var phone = $('#phone').val()
        var email = $('#email').val()
        var address = $('#address').val()
        var note = $('#note').val()
        var shipping_method = $('input[name="shipping_method"]:checked').val()
        var payment_method = $('input[name="payment-method"]:checked').val()
        var action = 'create'
        var user_id = 16
        var total = totalBill
        var payload = {
          firstname, lastname, phone, email, address, note, shipping_method, payment_method, user_id, action, total
        }
        console.log(payload);
        $.ajax({
          url: 'http://localhost:3000/server/order.php',
          type: 'POST',
          data: payload,
          success: (response) => {
            console.log(JSON.parse(response));
            let data = JSON.parse(response)
            if (data.status) {
              window.location.href = `./order-success.php?order_id=${data.order}&date=${getDate()}&total=${total}&method=${shipping_method}`
            }
          }
        })
      })
      getCartById()
    </script>
  </body>
</html>
