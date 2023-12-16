<?php 
    include './database.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Thêm đăng ký tài khoản
        if ($_POST['action'] == 'register') {
            $first_name = $_POST['firstname'];
            $last_name = $_POST['lastname'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirmPassword'];
            $address = $_POST['address'];
            $image = '';
            // Kiểm tra mật khẩu và xác nhận mật khẩu
            if ($password !== $confirmPassword) {
                echo json_encode([
                    'status' => false,
                    'message' => 'Password and Confirm Password do not match'
                ]);
                exit;
            }
    
            $sql = "INSERT INTO users (first_name, last_name, phone, image, phone_verify, password, address) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $parameters = [$first_name, $last_name, $phone, $image, false, $password, $address];
            $result = executeQuery($connection, $sql, $parameters, false, true);
            if ($result) {
                echo json_encode([
                    'status' => true,
                    'message' => 'Đăng kí thành công',
                    'id' => $result
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'message' => 'Đăng ký không thành công! Kiểm tra lại thông tin của bạn'
                ]);
            }
        }

        if ($_POST['action'] == 'login') {
            $phone = $_POST['phone'];
            $password = $_POST['password'];

            // Kiểm tra mật khẩu và xác nhận mật khẩu
            $sql = "SELECT * FROM users WHERE phone = ? AND password = ?";
            $parameters = [$phone, $password];
            $result = executeQuery($connection, $sql, $parameters, true);
            if (count($result) == 0) {
                echo json_encode([
                    'status' => false,
                    'message' => 'Sai số điện thoại hoặc mật khẩu',
                    'phone' => false
                ]);
            } else {
                $verify = $result[0]['phone_verify'];
                if ($verify == 0) {
                    echo json_encode([
                        'status' => true,
                        'message' => 'Đăng nhập thành công! Vui lòng xác thực số điện thoại!',
                        'phone' => false,
                        'id' => $result[0]['id']
                    ]);
                }else {
                    echo json_encode([
                        'status' => true,
                        'message' => 'Đăng nhập thành công!',
                        'phone' => true,
                        'id' => $result[0]['id']
                    ]);
                }
            }
        }
    
        // Lấy toàn bộ users
        if ($_POST['action'] == 'read') {
            $sql = "SELECT * FROM users";
            $users = executeQuery($connection, $sql, [], true);
            echo json_encode($users);
        }
    
        // Lấy user 
        if ($_POST['action'] == 'readbyfilter') {
            $sql = "SELECT
                        u.id AS user_id,
                        u.first_name,
                        u.last_name,
                        u.image,
                        u.phone,
                        u.role,
                        u.is_active,
                        COUNT(o.id) AS total_orders,
                        SUM(o.total) AS total_amount_paid
                    FROM
                        users u
                    LEFT JOIN
                        orders o ON u.id = o.user_id
                    GROUP BY
                        u.id, u.first_name, u.last_name, u.phone, u.image, u.role, u.is_active";
            $users = executeQuery($connection, $sql, [], true);
            echo json_encode($users);
        }
    
        // Lấy thông tin user theo id
        if ($_POST['action'] == 'getbyid') {
            $id = $_POST['id'];
            $sql = "SELECT
                        u.*,
                        COUNT(o.id) AS total_orders,
                        SUM(o.total) AS total_amount_paid
                    FROM
                        users u
                    LEFT JOIN
                        orders o ON u.id = o.user_id
                    WHERE
                        u.id = $id
                    GROUP BY
                        u.id";
            $user = executeQuery($connection, $sql, [], true);
            echo json_encode($user[0]);
        }
    
        // Cập nhật thông tin user
        if ($_POST['action'] == 'update') {
            $first_name = $_POST['firstname'];
            $last_name = $_POST['lastname'];
            $phone = $_POST['phone'];
            $is_active = $_POST['status'] ?? 0;
            $role = $_POST['role'] ?? 'user';
            $address = $_POST['address'];
            $verify = $_POST['verify'] ?? 0;
            $imageOld = $_POST['image_old'] ?? '';
            $id = $_POST['id'];
            $image = '';
    
            if(isset($_FILES['image'])) {
                $image = $_FILES['image'];
                // Tạo tên mới cho file ảnh
                $new_image_name = generateImageName($image);
                // Thư mục lưu trữ file ảnh
                $upload_directory = 'uploads/';
                // Đường dẫn đầy đủ của file ảnh
                $upload_path = $upload_directory . $new_image_name;
    
                if (file_exists($imageOld)) {
                    unlink($imageOld);
                }
                //Di chuyển file ảnh vào thư mục lưu trữ
                move_uploaded_file($image['tmp_name'], $upload_path);
    
                $image = $upload_path;
            }
    
            $sql = "UPDATE users SET first_name = ?, last_name = ?, phone = ?, image = ?, phone_verify = ?, address = ?, role = ?, is_active = ?, updated_at = now() WHERE id = ?";
    
            $parameters = [$first_name, $last_name, $phone, $image, $verify, $address, $role, $is_active, $id];
            $result = executeQuery($connection, $sql, $parameters);
            if ($result) {
                echo json_encode([
                    'status' => true,
                    'message' => 'Successfully'
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'message' => 'Something went wrong'
                ]);
            }
        }
    
        // Xóa user
        if ($_POST['action'] == 'delete') {
            $id = $_POST['id'];
    
            $sql = "DELETE FROM users WHERE id = ?";
            $parameters = [$id];
    
            $result = executeQuery($connection, $sql, $parameters);
            if ($result) {
                echo json_encode([
                    'status' => true,
                    'message' => 'Successfully'
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'message' => 'Something went wrong'
                ]);
            }
        }
    
        // kích hoạt hoặc vô hiệu hóa khách hàng
        if ($_POST['action'] == 'status') {
            $data = $_POST['data'];
            $id = $_POST['id'];
            $sql = "UPDATE users SET is_active = ? WHERE id = ?";
            $parameters = [$data, $id];
    
            $result = executeQuery($connection, $sql, $parameters);
            if ($result) {
                echo json_encode([
                    'status' => true,
                    'message' => 'Successfully'
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'message' => 'Something went wrong'
                ]);
            }
        }
    
        // thay đổi mật khẩu
        if ($_POST['action'] == 'changePassword') {
            $id = $_POST['id'];
            $newPassword = $_POST['newPassword'];
            $confirmPassword = $_POST['confirmPassword'];
    
            if ($newPassword !== $confirmPassword) {
                echo json_encode([
                    'status' => false,
                    'message' => 'Password and Confirm Password do not match'
                ]);
                exit;
            }
            $sql = "UPDATE users SET password = ? WHERE id = ?";
            $parameters = [$password, $id];
    
            $result = executeQuery($connection, $sql, $parameters);
            if ($result) {
                echo json_encode([
                    'status' => true,
                    'message' => 'Successfully'
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'message' => 'Something went wrong'
                ]);
            }
        }
    }


?>