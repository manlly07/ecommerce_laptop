<?php
    include './database.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Thêm category mới
        if ($_POST['action'] == 'create') {
            $category_name = $_POST['category_name'];
            $status = $_POST['status'] ?? 1;
            $description = $_POST['description'] ?? '';

            $sql = "INSERT INTO categories (name, description, is_active) VALUES (?, ?, ?)";
            $parameters = [$category_name, $description, $status];
            $result = executeQuery($connection, $sql, $parameters);   
            if ($result) {
                echo json_encode([
                    'status' => true,
                    'message' => 'Successfully'
                ]);
            }else {
                echo json_encode([
                    'status' => false,
                    'message' => 'Something went wrong'
                ]);
            }
        }

        // Lấy toàn bộ categories 
        if ($_POST['action'] == 'read') {
            $sql = "SELECT * FROM categories";
            $categories = executeQuery($connection, $sql, [], true);
            echo json_encode($categories);
        }

        // Lấy toàn bộ categories theo id
        if ($_POST['action'] == 'getbyid') {
            $id = $_POST['id'];
            $sql = "SELECT * FROM categories WHERE id = $id";
            $categories = executeQuery($connection, $sql, [], true);
            echo json_encode($categories);
        }

        // Cập nhật thông tin categories
        if ($_POST['action'] == 'update') {
            $category_name = $_POST['category_name'];
            $status = $_POST['status'];
            $id = $_POST['id'];
            $description = $_POST['description'];

            $sql = "UPDATE categories SET name = ?, description = ?, is_active = ? WHERE id = ?";
            $parameters = [$category_name, $description, $status, $id];
    
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

        // Xóa trạng thái categories

        if ($_POST['action'] == 'delete') {
            $category_id = $_POST['id'];

            $sql = "DELETE FROM categories WHERE id = ?";
            $parameters = [$category_id];
    
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