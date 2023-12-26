<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>THêm sản phẩm</title>
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

  </header>

  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php">
          <i class="bi bi-grid"></i>
          <span>Trang chủ</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-bs-target="#products-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Sản phẩm</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="products-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="products-list.php">
              <i class="bi bi-circle"></i><span>Danh sách sản phẩm</span>
            </a>
          </li>
          <li>
            <a href="add-product.php" class="active">
              <i class="bi bi-circle"></i><span>THêm sản phẩm</span>
            </a>
          </li>
          <li>
            <a href="branch-list.php">
              <i class="bi bi-circle"></i><span>Danh sách thương hiệu</span>
            </a>
          </li>
          <li>
            <a href="category-list.php">
              <i class="bi bi-circle"></i><span>Danh sách phân loại</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#orders-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Đơn hàng</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="orders-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="orders-list.php">
              <i class="bi bi-circle"></i><span>Danh sách đơn hàng</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#customer-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Khách hàng</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="customer-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="all-customer.php">
              <i class="bi bi-circle"></i><span>Danh sách khách hàng</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="manage-review.php">
          <i class="bi bi-grid"></i>
          <span>Quản lý đánh giá</span>
        </a>
      </li>

    </ul>
  </aside>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Sản phẩm</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
          <li class="breadcrumb-item">Sản phẩm</li>
          <li class="breadcrumb-item active">Thêm sản phẩm</li>
        </ol>
      </nav>
    </div>

    <section class="section">
      <div class="row">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3">
          <div class="d-flex flex-column justify-content-center">
            <h4 class="mb-1 mt-3">Thêm sản phẩm mới</h4>
            <p>Thêm một sản phẩm mới vào cửa hàng của bạn</p>
          </div>
          <div class="d-flex align-content-center flex-wrap gap-3">
            <button type="submit" class="btn btn-primary save-product">Lưu sản phẩm</button>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-lg-8">

          <div class="card mb-4">
            <div class="card-header">
              <h5 class="card-title mb-0">Thông tin sản phẩm</h5>
            </div>
            <div class="card-body">
              <div class="form-floating form-floating-outline mb-4">
                <input type="text" class="form-control" id="ecommerce-product-name" placeholder="Product title" name="productTitle" aria-label="Product title" />
                <label for="ecommerce-product-name">Tên sản phẩm</label>
              </div>

              <div class="row mb-3">
                <div class="col">
                  <select class="form-select" aria-label="Default select example" id="ecommerce-product-branch">
                    <option value="" selected>Chọn thương hiệu cho sản phẩm</option>
                  </select>
                </div>
                <div class="col">
                  <select class="form-select" aria-label="Default select example" id="ecommerce-product-category">
                    <option value="" selected>Chọn loại cho sản phẩm</option>
                  </select>
                </div>
              </div>
            </div>
          </div>

          <div class="mb-4">
            <div class="card">
              <div class="card-body pt-4">
                <textarea id="default"></textarea>
              </div>
            </div>
          </div>

          <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="mb-0 card-title">Ảnh sản phẩm</h5>
              <a href="javascript:void(0);" class="fw-medium">Thêm ảnh vào sản phẩm</a>
            </div>
            <div class="card-body">
              <div class="row">
                <form class="dropzone needsclick dz-clickable col-6" id="dropzone-basic">
                  <div class="dz-message needsclick my-5">
                    Kéo hoặc thả sản phẩm vào đây
                    <small class="text-muted d-block fs-6 my-2">or</small>
                    <span class="needsclick btn btn-outline-primary d-inline waves-effect" id="btnBrowse">Tải ảnh lên</span>
                  </div>
                  <input type="file" class="position-absolute list-image" hidden>
                </form>
                <div class="col-6 px-4">
                  <div class="row gap-2 flex-wrap container-image">
                    <!-- <div class="image p-0 position-relative" style="height: 96px; width: 96px;">
                        <img src="./assets/img/product-1.jpg" alt="" class="w-100 h-100 object-fit-cover">
                        <span class="position-absolute fs-4 text-primary" style="top: -4px; right: 5px; cursor: pointer;" >&times;</span>
                      </div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card mb-4" data-select2-id="22">
            <div class="card-header">
              <h5 class="card-title mb-0">Chi tiết</h5>
            </div>
            <div class="card-body">
              <form class="form-repeater">
                <div class="row mb-3 mb-sm-0 align-items-center">
                  <div class="mb-3 col-sm-2">
                    <label for="cpu" class="fw-bold">CPU</label>
                  </div>
                  <div class="mb-3 col-sm-10">
                    <div class="form-floating form-floating-outline">
                      <input type="text" id="cpu" class="form-control" placeholder="Enter CPU">
                      <label for="cpu">CPU</label>
                    </div>
                  </div>
                </div>
                <div class="row mb-3 mb-sm-0 align-items-center">
                  <div class="mb-3 col-sm-2">
                    <label for="ram" class="fw-bold">RAM</label>
                  </div>
                  <div class="mb-3 col-sm-10">
                    <div class="form-floating form-floating-outline">
                      <input type="text" id="ram" class="form-control" placeholder="Enter RAM">
                      <label for="ram">RAM</label>
                    </div>
                  </div>
                </div>
                <div class="row mb-3 mb-sm-0 align-items-center">
                  <div class="mb-3 col-sm-2">
                    <label for="hardware" class="fw-bold">Ổ CỨNG</label>
                  </div>
                  <div class="mb-3 col-sm-10">
                    <div class="form-floating form-floating-outline">
                      <input type="text" id="hardware" class="form-control" placeholder="Enter Ổ CỨNG">
                      <label for="hardware">Ổ CỨNG</label>
                    </div>
                  </div>
                </div>
                <div class="row mb-3 mb-sm-0 align-items-center">
                  <div class="mb-3 col-sm-2">
                    <label for="cardvga" class="fw-bold">Card VGA</label>
                  </div>
                  <div class="mb-3 col-sm-10">
                    <div class="form-floating form-floating-outline">
                      <input type="text" id="cardvga" class="form-control" placeholder="Enter Card VGA">
                      <label for="cardvga">Card VGA</label>
                    </div>
                  </div>
                </div>
                
                <div class="row mb-3 mb-sm-0 align-items-center">
                  <div class="mb-3 col-sm-2">
                    <label for="display" class="fw-bold">Màn Hình</label>
                  </div>
                  <div class="mb-3 col-sm-10">
                    <div class="form-floating form-floating-outline">
                      <input type="text" id="display" class="form-control" placeholder="Enter Màn Hình">
                      <label for="display">Màn Hình</label>
                    </div>
                  </div>
                </div>

                <div class="row mb-3 mb-sm-0 align-items-center">
                  <div class="mb-3 col-sm-2">
                    <label for="camera" class="fw-bold">Camera</label>
                  </div>
                  <div class="mb-3 col-sm-10">
                    <div class="form-floating form-floating-outline">
                      <input type="text" id="camera" class="form-control" placeholder="Enter Camera">
                      <label for="camera">Camera</label>
                    </div>
                  </div>
                </div>

                <div class="row mb-3 mb-sm-0 align-items-center">
                  <div class="mb-3 col-sm-2">
                    <label for="port" class="fw-bold">Cổng kết nối</label>
                  </div>
                  <div class="mb-3 col-sm-10">
                    <div class="form-floating form-floating-outline">
                      <input type="text" id="port" class="form-control" placeholder="Enter Cổng kết nối">
                      <label for="port">Cổng kết nối</label>
                    </div>
                  </div>
                </div>

                <div class="row mb-3 mb-sm-0 align-items-center">
                  <div class="mb-3 col-sm-2">
                    <label for="weight" class="fw-bold">Trọng Lượng</label>
                  </div>
                  <div class="mb-3 col-sm-10">
                    <div class="form-floating form-floating-outline">
                      <input type="text" id="weight" class="form-control" placeholder="Enter Trọng Lượng">
                      <label for="weight">Trọng Lượng</label>
                    </div>
                  </div>
                </div>

                <div class="row mb-3 mb-sm-0 align-items-center">
                  <div class="mb-3 col-sm-2">
                    <label for="pin" class="fw-bold">Pin</label>
                  </div>
                  <div class="mb-3 col-sm-10">
                    <div class="form-floating form-floating-outline">
                      <input type="text" id="pin" class="form-control" placeholder="Enter Pin">
                      <label for="pin">Pin</label>
                    </div>
                  </div>
                </div>

                <div class="row mb-3 mb-sm-0 align-items-center">
                  <div class="mb-3 col-sm-2">
                    <label for="window" class="fw-bold">Hệ điều hành</label>
                  </div>
                  <div class="mb-3 col-sm-10">
                    <div class="form-floating form-floating-outline">
                      <input type="text" id="window" class="form-control" placeholder="Enter Hệ điều hành">
                      <label for="window">Hệ điều hành</label>
                    </div>
                  </div>
                </div>

              </form>
            </div>
          </div>

        </div>
        <div class="col-12 col-lg-4">

          <div class="card mb-4">
            <div class="card-header">
              <h5 class="card-title mb-0">Định giá</h5>
            </div>
            <div class="card-body">

              <div class="form-floating form-floating-outline mb-4">
                <input type="number" class="form-control" id="ecommerce-product-price" placeholder="Price" name="productPrice" aria-label="Product price" />
                <label for="ecommerce-product-price">Gía</label>
              </div>


              <div class="form-floating form-floating-outline mb-4">
                <input type="number" class="form-control" id="ecommerce-product-discount-price" placeholder="Discounted Price" name="productDiscountedPrice" aria-label="Product discounted price" />
                <label for="ecommerce-product-discount-price">Số lượng</label>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
  </main>


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


  <script src="./assets/js/auth.js"></script>

  <script src="https://cdn.tiny.cloud/1/by05nyt9dhljko786tzo81q4vzgsn5hrdjq81e4kb3wi5yyp/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  <script>

    var urlParams = new URLSearchParams(window.location.search);
    var productId = urlParams.get('id');
    console.log(productId);

    let listFile = [];
    $('.dz-message').click(function() {
      $('.list-image').click()
    })

    $('.list-image').change(function() {
      var files = $(this)[0].files;
      for (var i = 0; i < files.length; i++) {
        var file = files[i];
        // Thêm file vào mảng listFile
        listFile.push(file);
      }

      // Đặt lại giá trị của form
      $('#dropzone-basic')[0].reset();
      showImages()
      // In ra danh sách các file đã chọn
      console.log(listFile);
    });

    const showImages = () => {
      let images = '';
      listFile.forEach((e, i) => {
        let imageUrl = e instanceof File === true ?  URL.createObjectURL(e) : './server/' + e.file;
        if(e instanceof File === false && e.status === 0) {
            return
        }
        images += `
                  <div class="image p-0 position-relative" style="height: 96px; width: 96px;">
                    <img src="${imageUrl}" alt="images" class="w-100 h-100 object-fit-cover">
                    <span onclick="deleteImage(${i})" class="position-absolute fs-4 text-primary" style="top: -4px; right: 5px; cursor: pointer;" >&times;</span>
                  </div>
          `
      })
      $('.container-image').html(images)
    }

    const deleteImage = (index) => {
        console.log(listFile);
        if(listFile[index] instanceof File === false) {
            listFile[index].status = 0
            console.log('hehe');
        }else {
            listFile.splice(index, 1)
        }
        showImages()
    }

    const showCategory = () => {
      $.ajax({
        url: 'http://localhost:3000/server/category.php',
        type: 'POST',
        data: {
          action: "read"
        },
        success: (response) => {
          console.log(JSON.parse(response));
          let categories = JSON.parse(response)

          let selectElement = $('#ecommerce-product-category');
          categories.forEach((category) => {
            let option = $('<option></option>').attr('value', category.id).text(category.name);
            selectElement.append(option);
          });
        }
      })
    }

    const showBrach = () => {
      $.ajax({
        url: 'http://localhost:3000/server/branch.php',
        type: 'POST',
        data: {
          action: "read"
        },
        success: (response) => {
          console.log(JSON.parse(response));
          let branches = JSON.parse(response)
          let selectElement = $('#ecommerce-product-branch');
          branches.forEach((branch) => {
            let option = $('<option></option>').attr('value', branch.id).text(branch.name);
            selectElement.append(option);
          });
        }
      })
    }

    const getProductById = (id) => {
        $.ajax({
            url: "http://localhost:3000/server/product.php",
            type: "POST",
            data: `id=${id}&action=getbyid`,
            success: function(response) {
                var product = JSON.parse(response)
                console.log(product);
                $('#ecommerce-product-name').val(product.name);
                $('#cpu').val(product.cpu);
                $('#ram').val(product.ram);
                $('#hardware').val(product.hardware);
                $('#cardvga').val(product.cardvga);
                $('#display').val(product.display);
                $('#camera').val(product.camera);
                $('#port').val(product.port);
                $('#weight').val(product.weight);
                $('#pin').val(product.pin);
                $('#window').val(product.window);
                $('#ecommerce-product-price').val(product.price);
                $('#ecommerce-product-discount-price').val(product.quantity);
                $('#ecommerce-product-branch').val(product.branches_id);
                $('#ecommerce-product-category').val(product.category_id);
                tinymce.init({
                    selector: 'textarea#default',
                    placeholder: 'Mô tả sản phẩm ...',
                    highlight_on_focus: true,
                    setup: function (editor) {
                        editor.on('init', function (e) {
                        editor.setContent(product.description);
                        });
                    }
                });
                product.images.forEach(image => {
                    listFile.push({
                        status: 1,
                        file: image
                    })
                })
                // listFile = product.images
                showImages()
            }
        });
    }


    $('.save-product').click(function() {
      var product_name = $('#ecommerce-product-name').val();
      var branch_id = $('#ecommerce-product-branch').val();
      var category_id = $('#ecommerce-product-category').val();
      console.log(category_id);
      var content = tinymce.get('default').getContent();
      var cpu = $('#cpu').val();
      var ram = $('#ram').val();
      var hardware = $('#hardware').val();
      var cardvga = $('#cardvga').val();
      var display = $('#display').val();
      var camera = $('#camera').val();
      var port = $('#port').val();
      var weight = $('#weight').val();
      var pin = $('#pin').val();
      var window = $('#window').val();
      var price = $('#ecommerce-product-price').val();
      var quantity = $('#ecommerce-product-discount-price').val();
      var formData = new FormData();
      formData.append("id", productId);
      formData.append("product_name", product_name);
      formData.append("branch_id", branch_id);
      formData.append("category_id", category_id);
      formData.append("description", content);
      formData.append("cpu", cpu);
      formData.append("ram", ram);
      formData.append("hardware", hardware);
      formData.append("cardvga", cardvga);
      formData.append("display", display);
      formData.append("camera", camera);
      formData.append("port", port);
      formData.append("weight", weight);
      formData.append("pin", pin);
      formData.append("window", window);
      formData.append("price", price);
      formData.append("quantity", quantity);
      formData.append("action", 'update')
      let newListFile = []
      for (var i = 0; i < listFile.length; i++) {
          if(listFile[i] instanceof File) {
              formData.append("images[]", listFile[i]);
            }else {
                newListFile.push(listFile[i]);
            }
        }
       formData.append("images_old", JSON.stringify(newListFile));

      $.ajax({
        url: "http://localhost:3000/server/product.php",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {
          console.log(response);
        }
      });
    })

    showBrach()
    showCategory()
    getProductById(productId)
  </script>
</body>

</html>