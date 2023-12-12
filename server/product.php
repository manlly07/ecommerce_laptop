<?php
include './database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Thêm sản phẩm mới
    if ($_POST['action'] == 'create') {
        $product_name = $_POST['product_name'];
        $branch_id = $_POST['branch_id'];
        $category_id =  $_POST['category_id'];
        $images = $_FILES['images'];
        $cpu = $_POST['cpu'];
        $ram = $_POST['ram'];
        $hardware = $_POST['hardware'];
        $cardvga = $_POST['cardvga'];
        $display = $_POST['display'];
        $camera = $_POST['camera'];
        $port = $_POST['port'];
        $weight = $_POST['weight'];
        $pin = $_POST['pin'];
        $window = $_POST['window'];
        $description = $_POST['description'] ?? '';
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];

        $sql = "INSERT INTO products (name, description, cpu, ram, hardware, cardvga, display, camera, port, weight, pin, window, price, quantity, category_id, branches_id)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $parameters = array($product_name, $description, $cpu, $ram, $hardware, $cardvga, $display, $camera, $port, $weight, $pin, $window, $price, $quantity, $category_id, $branch_id);

        $product_id = executeQuery($connection, $sql, $parameters, false, true);

        if ($product_id) {
            foreach ($images['tmp_name'] as $key => $tmp_name) {
                $file = $images['name'][$key];

                $new_image_name = generateImageName($file);

                // Thư mục lưu trữ file ảnh
                $upload_directory = 'uploads/';

                // Đường dẫn đầy đủ của file ảnh
                $upload_path = $upload_directory . $new_image_name;

                // Di chuyển file ảnh vào thư mục lưu trữ
                move_uploaded_file($tmp_name, $upload_path);

                $sql = "INSERT INTO images (link, product_id)
                    VALUES (?, ?)";

                $parameters = array($upload_path, $product_id);

                $result = executeQuery($connection, $sql, $parameters);
            }
        } else {
            echo json_encode([
                'status' => false,
                'message' => 'Something went wrong'
            ]);
        }

        echo json_encode([
            'status' => true,
            'message' => 'Successfully'
        ]);
    }

    // Lấy toàn bộ sản phẩm 
    if ($_POST['action'] == 'read') {
        $sql = "SELECT * FROM products";
        $products = executeQuery($connection, $sql, [], true);
        echo json_encode($products);
    }

    // Lấy toàn bộ sản phẩm theo id
    if ($_POST['action'] == 'getbyid') {
        $id = $_POST['id'];
        $sql = "SELECT p.*, i.link
                FROM products p
                LEFT JOIN images i ON i.product_id = p.id
                WHERE p.id = '$id'";
        $products = executeQuery($connection, $sql, [], true);
        if (empty($products)) {
            echo json_encode([]);
        }else {
            $product = $products[0];
            $product["images"] = [];

            foreach ($products as $image) {
                if ($image["link"] !== null) {
                    $product["images"][] = $image["link"];
                }
            }
            echo json_encode($product);
        }
    }

    // Lấy sản phẩm theo số tổng sản phẩm, số tiền bán được và trạng thái của branch đó
    if ($_POST['action'] == 'readandfilter') {
        $sql = "SELECT
                    p.id,
                    (
                    SELECT link
                    FROM images
                    WHERE product_id = p.id
                    LIMIT 1
                    ) AS image,
                    p.name,
                    p.description,
                    c.name AS category_name,
                    b.name AS branch_name,
                    p.quantity,
                    p.price,
                    p.created_at,
                    p.is_active
                FROM
                    products p
                    LEFT JOIN categories c ON p.category_id = c.id
                    LEFT JOIN branches b ON p.branches_id = b.id";
        $branches = executeQuery($connection, $sql, [], true);
        echo json_encode($branches);
    }

    // Cập nhật thông tin sản phẩm
    if ($_POST['action'] == 'update') {
        $product_name = $_POST['product_name'];
        $branch_id = $_POST['branch_id'];
        $category_id =  $_POST['category_id'];
        $images = $_FILES['images'] ?? [];
        $images_old = json_decode($_POST['images_old']);
        $cpu = $_POST['cpu'];
        $ram = $_POST['ram'];
        $hardware = $_POST['hardware'];
        $cardvga = $_POST['cardvga'];
        $display = $_POST['display'];
        $camera = $_POST['camera'];
        $port = $_POST['port'];
        $weight = $_POST['weight'];
        $pin = $_POST['pin'];
        $window = $_POST['window'];
        $description = $_POST['description'] ?? '';
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $id = $_POST['id'];
        $files = [];

        if(count($images) > 0 ) {
            foreach ($images['tmp_name'] as $key => $tmp_name) {
                $file = $images['name'][$key];
                $new_image_name = generateImageName($file);
                // Thư mục lưu trữ file ảnh
                $upload_directory = 'uploads/';
                // Đường dẫn đầy đủ của file ảnh
                $upload_path = $upload_directory . $new_image_name;
                // Di chuyển file ảnh vào thư mục lưu trữ
                move_uploaded_file($tmp_name, $upload_path);
    
                // Tạo một đối tượng với hai khóa "status" và "file"
                $fileObject = [
                    'status' => 1,
                    'file' => $upload_path
                ];
                // Đẩy đối tượng vào mảng $files
                array_push($files, $fileObject);
            }
        }
        foreach ($images_old as $image) {
            $fileObject = [
                'status' => $image->status,
                'file' => $image->file
            ];
            array_push($files, $fileObject);
        }

        $sql = "UPDATE products SET name = ?, description = ?, cpu = ?, ram = ?, hardware = ?, cardvga = ?, display = ?, camera = ?, port = ?, weight = ?, pin = ?, window = ?, price = ?, quantity = ?, category_id = ?, branches_id = ? WHERE id = ?";
        $parameters = array($product_name, $description, $cpu, $ram, $hardware, $cardvga, $display, $camera, $port, $weight, $pin, $window, $price, $quantity, $category_id, $branch_id, $id);

        $result = executeQuery($connection, $sql, $parameters);
        if($result) {
            // Xóa hình ảnh cũ của sản phẩm
            $sql = "DELETE FROM images WHERE product_id = ?";
            $parameters = array($id);
            executeQuery($connection, $sql, $parameters);
            foreach($files as $image) {
                if($image['status'] == 1) {
                    $sql = "INSERT INTO images (link, product_id) VALUES (?, ?)";
                    $parameters = array($image['file'], $id);
                    executeQuery($connection, $sql, $parameters);
                } else if(file_exists($image['file'])) {
                    unlink($image['file']);
                }
            }
        }else {
            echo json_encode([
                'status' => false,
                'message' => 'Something went wrong'
            ]);
            return;
        }
        echo json_encode([
            'status' => true,
            'message' => 'Successfully'
        ]);
    }

    // Xóa trạng thái product

    if ($_POST['action'] == 'delete') {
        $id = $_POST['id'];

        $sql = "DELETE FROM images WHERE product_id = ?";
        $parameters = [$id];
        $result = executeQuery($connection, $sql, $parameters);

        $sql = "DELETE FROM products WHERE id = ?";
        $parameters = [$id];

        $result = executeQuery($connection, $sql, $parameters);

        if($result) {
            echo json_encode([
                'status' => true,
                'message' => 'Successfully'
            ]);
        }else {
            echo json_encode([
                'status' => false,
                'message' => 'Something went wrong'
            ]);
            return;
        }
    }
}
