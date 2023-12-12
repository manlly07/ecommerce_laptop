<?php
include './database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Thêm user mới
    if ($_POST['action'] == 'create') {
        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        $role = $_POST['role'];
        $address = $_POST['address'];
        $verify = $_POST['verify'] ?? false;
        $is_active = $_POST['is_active'] ?? false;
        $image = '';
        // Kiểm tra mật khẩu và xác nhận mật khẩu
        if ($password !== $confirmPassword) {
            echo json_encode([
                'status' => false,
                'message' => 'Password and Confirm Password do not match'
            ]);
            exit;
        }

        if(isset($_FILES['image'])) {
            $image = $_FILES['image'];
            // Tạo tên mới cho file ảnh
            $new_image_name = generateImageName($image);
            // Thư mục lưu trữ file ảnh
            $upload_directory = 'uploads/';
            // Đường dẫn đầy đủ của file ảnh
            $upload_path = $upload_directory . $new_image_name;

            //Di chuyển file ảnh vào thư mục lưu trữ
            move_uploaded_file($image['tmp_name'], $upload_path);
            $image = $upload_path;
        }

        $sql = "INSERT INTO users (first_name, last_name, phone, image, phone_verify, password, $address,role, is_active) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $parameters = [$first_name, $last_name, $phone, $image, $verify, $password, $address, $role, $is_active];
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
                    COUNT(o.id) AS total_orders,
                    SUM(o.total) AS total_amount_paid
                FROM
                    users u
                LEFT JOIN
                    orders o ON u.id = o.user_id
                GROUP BY
                    u.id, u.first_name, u.last_name, u.phone, u.image, u.role";
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
                    u.id = 8
                GROUP BY
                    u.id";
        $user = executeQuery($connection, $sql, [], true);
        echo json_encode($user[0]);
    }

    // Cập nhật thông tin user
    if ($_POST['action'] == 'update') {
        $id = $_POST['id'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $role = $_POST['role'];
        $is_active = $_POST['is_active'];

        $sql = "UPDATE users SET first_name = ?, last_name = ?, phone = ?, password = ?, role = ?, is_active = ? WHERE id = ?";
        $parameters = [$first_name, $last_name, $phone, $password, $role, $is_active, $id];

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
}
?>