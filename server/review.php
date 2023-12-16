<?php
    include './database.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Thêm review mới
        if ($_POST['action'] == 'create') {
            $product_id = $_POST['product_id'];
            $user_id = $_POST['user_id'];
            $rate = $_POST['rate'] ?? 5;
            $images = $_FILES['images'] ?? [];
            $content = $_POST['content'] ?? '';
            $path  = "";

            if(count($images) <= 0) {
                echo json_encode([
                    'status' => false,
                    'message' => 'Bạn phải gửi ít nhất một hình ảnh đánh giá'
                ]);
                exit();
            }

            if($rate == 0) {
                echo json_encode([
                    'status' => false,
                    'message' => 'Hãy đánh giá sản phẩm!'
                ]);
                exit();
            }
            
            foreach ($images['tmp_name'] as $key => $tmp_name) {
                $file = $images['name'][$key];

                $new_image_name = generateImageName($file);

                // Thư mục lưu trữ file ảnh
                $upload_directory = 'uploads/';

                // Đường dẫn đầy đủ của file ảnh
                $upload_path = $upload_directory . $new_image_name;

                // Di chuyển file ảnh vào thư mục lưu trữ
                move_uploaded_file($tmp_name, $upload_path);

                $path .= $upload_path.";";
            }

            $sql = "INSERT INTO reviews (product_id, user_id, rate, image, content) VALUES (?, ?, ?, ?, ?)";
            $parameters = [$product_id, $user_id, $rate, $path, $content];
            $result = executeQuery($connection, $sql, $parameters);   
            if ($result) {
                echo json_encode([
                    'status' => true,
                    'message' => 'Đánh giá thành công'
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'message' => 'Có lỗi khi đánh giá'
                ]);
            }
        }

        // Lấy toàn bộ reviews 
        if ($_POST['action'] == 'read') {
            $sql = "SELECT reviews.*, users.first_name, users.last_name, users.image as user_image
                    FROM reviews 
                    INNER JOIN users ON reviews.user_id = users.id";
        
            if (isset($_POST['id'])) {
                $product_id = $_POST['id'];
                $sql .= " WHERE reviews.product_id = ?";
                $parameters = [$product_id];
                $reviews = executeQuery($connection, $sql, $parameters, true);
            } else {
                $reviews = executeQuery($connection, $sql, [], true);
            }
            echo json_encode($reviews);
        }

        // Lấy thông tin review theo id
        if ($_POST['action'] == 'getbyid') {
            $id = $_POST['id'];
            $sql = "SELECT * FROM reviews WHERE id = $id";
            $review = executeQuery($connection, $sql, [], true);
            echo json_encode($review);
        }

        // Cập nhật thông tin review
        if ($_POST['action'] == 'update') {
            $product_id = $_POST['product_id'];
            $user_id = $_POST['user_id'];
            $rate = $_POST['rate'];
            $image = $_POST['image'];
            $content = $_POST['content'];
            $id = $_POST['id'];

            $sql = "UPDATE reviews SET product_id = ?, user_id = ?, rate = ?, image = ?, content = ? WHERE id = ?";
            $parameters = [$product_id, $user_id, $rate, $image, $content, $id];

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

        // Xóa review
        if ($_POST['action'] == 'delete') {
            $id = $_POST['id'];

            $sql = "DELETE FROM reviews WHERE id = ?";
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