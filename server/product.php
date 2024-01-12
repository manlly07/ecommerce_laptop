<?php
include './database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Thêm sản phẩm mới
    if ($_POST['action'] == 'create') {
        $product_name = $_POST['product_name'];
        $branch_id = $_POST['branch_id'];
        $category_id =  $_POST['category_id'];
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

        if (empty($product_name) || empty($branch_id) || empty($category_id) || empty($cpu) || empty($ram) || empty($hardware) || empty($cardvga) || empty($display) || empty($camera) || empty($port) || empty($weight) || empty($pin) || empty($window) || empty($price) || empty($quantity) || !isset($_FILES['images'])) {
            echo json_encode([
                'status' => false,
                'message' => 'Vui lòng điền đầy đủ thông tin của máy tính'
            ]);
            exit();
        }        

        if($price < 0 || $quantity < 0) {
            echo json_encode([
                'status' => false,
                'message' => 'Kiểm tra lại giá và số lượng'
            ]);
            exit();
        }

        $sql = "INSERT INTO products (name, description, cpu, ram, hardware, cardvga, display, camera, port, weight, pin, window, price, quantity, category_id, branches_id)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $parameters = array($product_name, $description, $cpu, $ram, $hardware, $cardvga, $display, $camera, $port, $weight, $pin, $window, $price, $quantity, $category_id, $branch_id);

        $product_id = executeQuery($connection, $sql, $parameters, false, true);

        if ($product_id && isset($_FILES['images'])) {
            $images = $_FILES['images'];
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
            
        }

        echo json_encode([
            'status' => true,
            'message' => 'Thêm sản phẩm thành công'
        ]);
        exit();
    }

    // Lấy toàn bộ sản phẩm 
    if ($_POST['action'] == 'read') {
        $sql = "SELECT * FROM products";
        $products = executeQuery($connection, $sql, [], true);
        echo json_encode($products);
    }

    // Lấy toàn bộ sản phẩm theo id
    // if ($_POST['action'] == 'getbyid') {
    //     $id = $_POST['id'];
    //     $sql = "SELECT p.*, i.link
    //             FROM products p
    //             LEFT JOIN images i ON i.product_id = p.id
    //             WHERE p.id = '$id'";
    //     $products = executeQuery($connection, $sql, [], true);
    //     if (empty($products)) {
    //         echo json_encode([]);
    //     }else {
    //         $product = $products[0];
    //         $product["images"] = [];

    //         foreach ($products as $image) {
    //             if ($image["link"] !== null) {
    //                 $product["images"][] = $image["link"];
    //             }
    //         }
    //         echo json_encode($product);
    //     }
    // }

    if ($_POST['action'] == 'getbyid') {
        $id = $_POST['id'];
        
        // Lấy thông tin sản phẩm
        $sql = "SELECT p.*, i.link
                FROM products p
                LEFT JOIN images i ON i.product_id = p.id
                WHERE p.id = '$id'";
        $products = executeQuery($connection, $sql, [], true);
        
        if (empty($products)) {
            echo json_encode([]);
        } else {
            $product = $products[0];
            $product["images"] = [];
            
            foreach ($products as $image) {
                if ($image["link"] !== null) {
                    $product["images"][] = $image["link"];
                }
            }
            
            // Lấy tổng số đơn hàng của sản phẩm
            $sql = "SELECT COUNT(DISTINCT order_id) as total_orders
                    FROM order_details
                    WHERE product_id = '$id'";
            $result = executeQuery($connection, $sql, [], true);
            $totalOrders = $result[0]['total_orders'] ?? 0;
            
            // Gán tổng số đơn hàng vào mảng sản phẩm
            $product['total_orders'] = $totalOrders;
            
            echo json_encode($product);
        }
    }

    // Lấy sản phẩm theo số tổng sản phẩm, số tiền bán được và trạng thái của branch đó
    // if ($_POST['action'] == 'readandfilter') {
    //     $categories = $_POST['categories'];
    //     $branches = $_POST['branches'];
    //     $priceFrom = $_POST['priceFrom'];
    //     $priceTo = $_POST['priceTo'];
    //     $rate = $_POST['rate'];
    //     $sql = "SELECT
    //             p.id,
    //             (
    //                 SELECT link
    //                 FROM images
    //                 WHERE product_id = p.id
    //                 LIMIT 1
    //             ) AS image,
    //             p.name,
    //             p.description,
    //             c.name AS category_name,
    //             b.name AS branch_name,
    //             p.quantity,
    //             p.price,
    //             p.created_at,
    //             p.is_active,
    //             AVG(r.rate) AS average_rate,
    //             COUNT(r.id) AS total_reviews
    //         FROM
    //             products p
    //             LEFT JOIN categories c ON p.category_id = c.id
    //             LEFT JOIN branches b ON p.branches_id = b.id
    //             LEFT JOIN reviews r ON p.id = r.product_id
    //         GROUP BY
    //             p.id, p.name, p.description, c.name, b.name, p.quantity, p.price, p.created_at, p.is_active";
        
    //     $products = executeQuery($connection, $sql, [], true);
    //     echo json_encode($products);
    // }
    if ($_POST['action'] == 'readandfilter') {
        $categories = isset($_POST['categories']) ? json_decode($_POST['categories']) : [];
        $branches = isset($_POST['branches']) ? json_decode($_POST['branches']) : [];
        $priceFrom = isset($_POST['priceFrom']) ? $_POST['priceFrom'] : '';
        $priceTo = isset($_POST['priceTo']) ? $_POST['priceTo'] : '';
        $rate = isset($_POST['rate']) ? $_POST['rate'] : '';
        $role = isset($_POST['role']) ? $_POST['role'] : '';

        if($role == 0) {
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
            p.is_active,
            AVG(r.rate) AS average_rate,
            COUNT(r.id) AS total_reviews
        FROM
            products p
            LEFT JOIN categories c ON p.category_id = c.id
            LEFT JOIN branches b ON p.branches_id = b.id
            LEFT JOIN reviews r ON p.id = r.product_id 
        WHERE p.is_active = 1";
        }
        // Xây dựng câu truy vấn SQL
        else {
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
            p.is_active,
            AVG(r.rate) AS average_rate,
            COUNT(r.id) AS total_reviews
        FROM
            products p
            LEFT JOIN categories c ON p.category_id = c.id
            LEFT JOIN branches b ON p.branches_id = b.id
            LEFT JOIN reviews r ON p.id = r.product_id ";
        }
    
        // Xây dựng mảng điều kiện filter
        $filterConditions = [];
    
        if (!empty($categories)) {
            $categoryCondition = "c.id IN ('" . implode("','", $categories) . "')";
            $filterConditions[] = $categoryCondition;
        }
    
        if (!empty($branches)) {
            $branchCondition = "b.id IN ('" . implode("','", $branches) . "')";
            $filterConditions[] = $branchCondition;
        }
    
        if (!empty($priceFrom)) {
            $priceFromCondition = "p.price >= " . $priceFrom;
            $filterConditions[] = $priceFromCondition;
        }
    
        if (!empty($priceTo)) {
            $priceToCondition = "p.price <= " . $priceTo;
            $filterConditions[] = $priceToCondition;
        }
    
        // if (!empty($rate)) {
        //     // $rateValue = str_replace('rate-', '', $rate);
        //     $rate = floor($rate);
        //     $rateCondition = "AVG(r.rate) = " . $rate;
        //     $filterConditions[] = $rateCondition;
        // }
    
        // Thêm điều kiện filter vào câu truy vấn SQL
        if (!empty($filterConditions)) {
            $sql .= " WHERE " . implode(" AND ", $filterConditions);
        }
    
        $sql .= " GROUP BY
                    p.id, p.name, p.description, c.name, b.name, p.quantity, p.price, p.created_at, p.is_active";
        if (!empty($rate)) {
            $sql .= " HAVING ROUND(AVG(r.rate), 0) = $rate";
            // $filterConditions[] = $rateCondition;
        }
        // Thực hiện truy vấn và lấy kết quả
        $products = executeQuery($connection, $sql, [], true);
        echo json_encode($products);
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

        if (empty($product_name) || empty($branch_id) || empty($category_id) || empty($cpu) || empty($ram) || empty($hardware) || empty($cardvga) || empty($display) || empty($camera) || empty($port) || empty($weight) || empty($pin) || empty($window) || empty($price) || empty($quantity)) {
            echo json_encode([
                'status' => false,
                'message' => 'Vui lòng điền đầy đủ thông tin của máy tính'
            ]);
            exit();
        }

        if($price < 0 || $quantity < 0) {
            echo json_encode([
                'status' => false,
                'message' => 'Kiểm tra lại giá và số lượng'
            ]);
            exit();
        }

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
                'message' => 'Đã xảy ra lỗi khi cập nhật!'
            ]);
            return;
        }
        echo json_encode([
            'status' => true,
            'message' => 'Cập nhật sản phẩm thành công'
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

    if($_POST['action'] == 'updateStatus') {
        $id = $_POST['id'];
        $status = $_POST['status'];
        $sql = "UPDATE products SET is_active = $status WHERE id = $id";
        $result = executeQuery($connection, $sql, []);

        if($result) {
            echo json_encode([
                'status' => true,
                'message' => 'Cập nhật trạng thái thành công'
            ]);
        }else {
            echo json_encode([
                'status' => false,
                'message' => 'Cập nhật trạng thái thất bại'
            ]);
            return;
        }
    }
}
