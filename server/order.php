<?php
include './database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Thêm đơn hàng mới
    // if ($_POST['action'] == 'create') {
    //     // $user_id = $_POST['user_id'];
    //     $serializedObject = $_SESSION['user']; // Lấy chuỗi đối tượng từ phiên
    //     $user = unserialize($serializedObject); // Chuyển đổi chuỗi thành đối tượng ban đầu
    //     $user_id = $user['id']; //
    //     $firstname = $_POST['firstname'];
    //     $lastname = $_POST['lastname'];
    //     $fullname = $firstname.' '.$lastname;
    //     $email = $_POST['email'];
    //     $phone = $_POST['phone'];
    //     $address = $_POST['address'];
    //     $note = $_POST['note'];
    //     $total = $_POST['total'];
    //     $payment_method = $_POST['payment_method'];
    //     $shipping_method = $_POST['shipping_method'];

    //     $sql = "INSERT INTO orders (user_id, fullname, email, phone, address, note, total, payment_method, shipping_method, is_active) 
    //             VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, true)";
    //     $parameters = [$user_id, $fullname, $email, $phone, $address, $note, $total, $payment_method, $shipping_method];
    //     $order_id = executeQuery($connection, $sql, $parameters, false, true);

    //     if ($order_id) {
    //         // Lấy sản phẩm từ giỏ hàng của user_id
    //         $sql = "SELECT c.product_id, p.price, c.quantity
    //         FROM carts c
    //         JOIN products p ON c.product_id = p.id
    //         WHERE c.user_id = ?";
    //         $parameters = [$user_id];
    //         $cart_items = executeQuery($connection, $sql, $parameters, true);

    //         // Thêm chi tiết đơn hàng từ sản phẩm trong giỏ hàng
    //         foreach ($cart_items as $item) {
    //             $product_id = $item['product_id'];
    //             $price = $item['price'];
    //             $quantity = $item['quantity'];

    //             $sql = "INSERT INTO order_details (order_id, product_id, price, quantity, is_active) VALUES (?, ?, ?, ?, true)";
    //             $parameters = [$order_id, $product_id, $price, $quantity];
    //             $result = executeQuery($connection, $sql, $parameters);

    //             if (!$result) {
    //                 echo json_encode([
    //                     'status' => false,
    //                     'message' => 'Có lỗi khi thêm chi tiết đơn hàng'
    //                 ]);
    //                 break;
    //             }
    //         }

    //         // Xóa sản phẩm trong giỏ hàng của user_id sau khi đã thêm chi tiết đơn hàng
    //         $sql = "DELETE FROM carts WHERE user_id = ?";
    //         $parameters = [$user_id];
    //         $result = executeQuery($connection, $sql, $parameters);

    //         if ($result) {
    //             echo json_encode([
    //                 'status' => true,
    //                 'message' => 'Tạo đơn hàng thành công',
    //                 'order' => $order_id
    //             ]);
    //         } else {
    //             echo json_encode([
    //                 'status' => false,
    //                 'message' => 'Có lỗi khi xóa sản phẩm trong giỏ hàng'
    //             ]);
    //         }
    //     } else {
    //         echo json_encode([
    //             'status' => false,
    //             'message' => 'Có lỗi khi tạo đơn hàng'
    //         ]);
    //     }
    // }
    if ($_POST['action'] == 'create') {
        // $user_id = $_POST['user_id'];
        $serializedObject = $_SESSION['user']; // Lấy chuỗi đối tượng từ phiên
        $user = unserialize($serializedObject); // Chuyển đổi chuỗi thành đối tượng ban đầu
        $user_id = $user['id']; //
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $fullname = $firstname.' '.$lastname;
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $note = $_POST['note'];
        $total = $_POST['total'];
        $payment_method = $_POST['payment_method'];
        $shipping_method = $_POST['shipping_method'];

        // Lấy sản phẩm từ giỏ hàng của user_id
        $sql = "SELECT c.product_id, p.price, c.quantity, p.quantity as inStock
        FROM carts c
        JOIN products p ON c.product_id = p.id
        WHERE c.user_id = ?";
        $parameters = [$user_id];
        $cart_items = executeQuery($connection, $sql, $parameters, true);
        foreach($cart_items as $item) {
            if($item['quantity'] > $item['inStock']) {
                echo json_encode([
                    'status' => false,
                    'message' => 'Kiểm tra lại số lượng sản phẩm khi mua'
                ]);
                exit();
            }
        }

        $sql = "INSERT INTO orders (user_id, fullname, email, phone, address, note, total, payment_method, shipping_method, is_active) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, true)";
        $parameters = [$user_id, $fullname, $email, $phone, $address, $note, $total, $payment_method, $shipping_method];
        $order_id = executeQuery($connection, $sql, $parameters, false, true);

        if ($order_id) {
            // Thêm chi tiết đơn hàng từ sản phẩm trong giỏ hàng
            foreach ($cart_items as $item) {
                $product_id = $item['product_id'];
                $price = $item['price'];
                $quantity = $item['quantity'];

                $sql = "INSERT INTO order_details (order_id, product_id, price, quantity, is_active) VALUES (?, ?, ?, ?, true)";
                $parameters = [$order_id, $product_id, $price, $quantity];
                $result = executeQuery($connection, $sql, $parameters);

                $inStock = $item['inStock'] - $item['quantity'];
                $sql = "UPDATE products SET quantity = ? WHERE id = ?";
                $parameters = [$inStock, $product_id];
                $result = executeQuery($connection, $sql, $parameters);

                if (!$result) {
                    echo json_encode([
                        'status' => false,
                        'message' => 'Có lỗi khi thêm chi tiết đơn hàng'
                    ]);
                    break;
                }
            }

            // Xóa sản phẩm trong giỏ hàng của user_id sau khi đã thêm chi tiết đơn hàng
            $sql = "DELETE FROM carts WHERE user_id = ?";
            $parameters = [$user_id];
            $result = executeQuery($connection, $sql, $parameters);

            if ($result) {
                echo json_encode([
                    'status' => true,
                    'message' => 'Tạo đơn hàng thành công',
                    'order' => $order_id
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'message' => 'Có lỗi khi xóa sản phẩm trong giỏ hàng'
                ]);
            }
        } else {
            echo json_encode([
                'status' => false,
                'message' => 'Có lỗi khi tạo đơn hàng'
            ]);
        }
    }

    // Đọc thông tin đơn hàng
    if ($_POST['action'] == 'read') {
        $sql = "SELECT o.*, u.image, u.first_name, u.last_name, u.phone, u.id as user_id
                FROM orders o
                JOIN users u ON o.user_id = u.id;";
        $orders = executeQuery($connection, $sql, [], true);
        echo json_encode($orders);
    }

    // Cập nhật thông tin đơn hàng
    if ($_POST['action'] == 'update_order') {
        $order_id = $_POST['order_id'];
        $serializedObject = $_SESSION['user']; // Lấy chuỗi đối tượng từ phiên
        $user = unserialize($serializedObject); // Chuyển đổi chuỗi thành đối tượng ban đầu
        $user_id = $user['id']; //
        // $user_id = $_POST['user_id'];
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $note = $_POST['note'];
        $order_date = $_POST['order_date'];
        $status = $_POST['status'];
        $total = $_POST['total'];
        $payment_method = $_POST['payment_method'];
        $shipping_date = $_POST['shipping_date'];
        $shipping_method = $_POST['shipping_method'];

        $sql = "UPDATE orders SET user_id = ?, fullname = ?, email = ?, phone = ?, address = ?, note = ?, order_date = ?, status = ?, total = ?, payment_method = ?, shipping_date = ?, shipping_method = ? WHERE id = ?";
        $parameters = [$user_id, $fullname, $email, $phone, $address, $note, $order_date, $status, $total, $payment_method, $shipping_date, $shipping_method, $order_id];
        $result = executeQuery($connection, $sql, $parameters);

        if ($result) {
            echo json_encode([
                'status' => true,
                'message' => 'Cập nhật đơn hàng thành công'
            ]);
        } else {
            echo json_encode([
                'status' => false,
                'message' => 'Có lỗi khi cập nhật đơn hàng'
            ]);
        }
    }

    // Xóa đơn hàng
    if ($_POST['action'] == 'delete') {
        $order_id = $_POST['id'];

        $sql = "DELETE FROM order_details WHERE order_id = ?";
        $parameters = [$order_id];
        $result = executeQuery($connection, $sql, $parameters);
        
        if($result) {
            $sql = "DELETE FROM orders WHERE id = ?";
            $parameters = [$order_id];
            $result = executeQuery($connection, $sql, $parameters);
                
            if ($result) {
                echo json_encode([
                    'status' => true,
                    'message' => 'Xóa đơn hàng thành công'
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'message' => 'Có lỗi khi xóa đơn hàng'
                ]);
            }
        } else {
            echo json_encode([
                'status' => false,
                'message' => 'Có lỗi khi xóa đơn hàng'
            ]);
        }
    }

    if ($_POST['action'] == 'getOrderById') {
        $order_id = $_POST['id'];
        $sql1 = "SELECT od.id AS order_detail_id, od.order_id, od.quantity, p.name AS product_name, p.price AS product_price, i.link AS image_link
        FROM order_details od
        JOIN products p ON od.product_id = p.id
        LEFT JOIN (
            SELECT link, product_id
            FROM images
            GROUP BY product_id
        ) i ON p.id = i.product_id
        WHERE od.order_id = $order_id";
        $orders1 = executeQuery($connection, $sql1, [], true);

        $sql2 = "SELECT o.*, od.price, od.quantity
        FROM orders o
        JOIN order_details od ON o.id = od.order_id
        WHERE o.id = $order_id limit 1;";
        $orders2 = executeQuery($connection, $sql2, [], true);
        $orders2[0]['details'] = $orders1;
        echo json_encode($orders2[0]);
    }

    if ($_POST['action'] == 'getOrderByUserId') {
        $userId = $_POST['id'];
        $sql1 = "SELECT * FROM orders WHERE user_id = $userId";
        $orders = executeQuery($connection, $sql1, [], true);

        echo json_encode($orders);
    }

    if ($_POST['action'] == 'checkBuyOrderByUserId') {
        $userId = $_POST['id'];
        $product_id = $_POST['product_id'];
        $sql1 = "SELECT * FROM orders o JOIN order_details od ON o.id = od.order_id WHERE o.user_id = $userId AND od.product_id = $product_id";
        $orders = executeQuery($connection, $sql1, [], true);

        echo json_encode($orders);
    }

    if ($_POST['action'] == 'updateStatus') {
        $id = $_POST['id'];
        $status = $_POST['status'];
        
        if ($status == 'cancelled') {
            $sql1 = "SELECT product_id, quantity FROM order_details WHERE order_id = $id";
            $orderDetails = executeQuery($connection, $sql1, [], true);
 
            foreach ($orderDetails as $item) {
                $product_id = $item['product_id'];
                $quantity = $item['quantity'];
                $updateStock = "UPDATE products SET quantity = quantity + $quantity WHERE id = $product_id";
                executeQuery($connection, $updateStock, [], true);
            }
        }
        $sql = "UPDATE orders SET status = '$status' WHERE id = $id";
        $result = executeQuery($connection, $sql, []);
        if ($result) {
            echo json_encode([
                'status' => true,
                'message' => 'Cập nhật trạng thái đơn hàng thành công'
            ]);
        } else {
            echo json_encode([
                'status' => false,
                'message' => 'Có lỗi khi cập nhật trạng thái đơn hàng'
            ]);
        }
    }
}
?>