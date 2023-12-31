const filePaths = [
    { path: 'index.php', role: 'admin' },
    { path: 'products-list.php', role: 'admin' },
    { path: 'add-product.php', role: 'admin' },
    { path: 'all-customer.php', role: 'admin' },
    { path: 'branch-list.php', role: 'admin' },
    { path: 'category-list.php', role: 'admin' },
    { path: 'customer-detail-security.php', role: 'admin' },
    { path: 'customer-detail.php', role: 'admin' },
    { path: 'edit-product.php', role: 'admin' },
    { path: 'manage-review.php', role: 'admin' },
    { path: 'orders-detail.php', role: 'admin' },
    { path: 'orders-list.php', role: 'admin' },

    { path: 'about-product.php', role: 'guest' },
    { path: 'filter.php', role: 'guest' },

    { path: 'orders.php', role: 'user' },

    { path: 'pages-login.php', role: 'auth' },
    { path: 'pages-register.php', role: 'auth' }

];
const checkAuth = () => {
    $.ajax({
      url: 'http://localhost:3000/server/auth.php',
      type: 'POST',
      data: {
        action: "checkAuth"
      },
      success: (response) => {
        // console.log(response);
        let {status, message, user} = JSON.parse(response)
        console.log(status, message, user);

        var url = window.location.href;
        var filePath = '';

        // Tìm vị trí của ký tự "/" sau tên miền
        var domainSlashIndex = url.indexOf('/', 8); // 8 là chiều dài của "http://" hoặc "https://"

        if (domainSlashIndex !== -1) {
            // Lấy đường dẫn sau tên miền
            filePath = url.substr(domainSlashIndex + 1);
        }
        console.log(filePath);
        var allowedRoles = filePaths.filter(function(item) {
            return filePath.includes(item.path);
          }).map(function(item) {
            return item.role;
        })[0];
        console.log(allowedRoles);

        if (allowedRoles == 'auth') {
            if (user.role != 'guest') {
                let file = user.role == 'admin' ? 'index.php' : 'filter.php'
                window.location.href = file;
            }
        }

        if (allowedRoles == 'admin') {
            if(user.role == 'guest') {
                window.location.href = 'pages-login.php';
            }
            if (user.role == 'user') {
                window.location.href = 'filter.php';
            }
        }

        
        if (allowedRoles == 'user') {
            if (user.role == 'admin') {
                window.location.href = 'index.php';
            }
            if (user.role == 'guest') {
                window.location.href = 'filter.php';
            }
        }

        if (allowedRoles == 'guest') {
            if (user.role == 'admin') {
                window.location.href = 'index.php';
            }
        }

        if (allowedRoles == 'guest' && user.role == 'guest') {
            var parentEl = $('.btn-add-to-cart').parent().empty();
            parentEl.append('<a href="pages-login.php">Vui lòng đăng nhập để tiếp tục mua hàng</a>')
            let navHeader =  $('.header-nav').empty()
            let htmls = `
                <a class="btn btn-outline-warning" href="pages-register.php">Đăng ký</a>
                <a class="btn btn-primary ms-3" href="pages-login.php">Đăng nhập</a>
            `
            $('.btn-review').remove()
            navHeader.append(htmls)
            return
        }

        localStorage.setItem('userId', user.id)
        $('.profile-image').attr('src', `${user.image == '' ? './assets/img/user-1.png' : './server/' + user.image}`)
        $('.profile-name').html(user.first_name.charAt(0) + '.' + user.last_name)
        
      }
    })
}


const showAlert = (type, message) => {
    let alertElment = `  <div class="position-absolute" id="box-alert" style="z-index: 100; top:80px; right: 10px">
                            <div class="alert alert-${type}" role="alert">
                                ${message}
                            </div>
                        </div>`
    $('body #box-alert').remove()
    $('body').append(alertElment)
    $(".alert").fadeTo(2000, 500).slideUp(500, function() {
      $(".alert").slideUp(500);
    });
}

$(document).on('click', '.sign-out', function() {
    $.ajax({
        url: 'http://localhost:3000/server/auth.php',
        type: 'POST',
        data: {
          action: "logout"
        },
        success: (response) => {
          console.log(response);
          window.location.reload()
        }
      })
})

checkAuth()