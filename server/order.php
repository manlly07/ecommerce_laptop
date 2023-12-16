<?php
include './database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Thêm đơn hàng mới
    if ($_POST['action'] == 'create') {
        $user_id = $_POST['user_id'];
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

        $sql = "INSERT INTO orders (user_id, fullname, email, phone, address, note, total, payment_method, shipping_method, is_active) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, true)";
        $parameters = [$user_id, $fullname, $email, $phone, $address, $note, $total, $payment_method, $shipping_method];
        $order_id = executeQuery($connection, $sql, $parameters, false, true);

        if ($order_id) {
            // Lấy sản phẩm từ giỏ hàng của user_id
            $sql = "SELECT c.product_id, p.price, c.quantity
            FROM carts c
            JOIN products p ON c.product_id = p.id
            WHERE c.user_id = ?";
            $parameters = [$user_id];
            $cart_items = executeQuery($connection, $sql, $parameters, true);

            // Thêm chi tiết đơn hàng từ sản phẩm trong giỏ hàng
            foreach ($cart_items as $item) {
                $product_id = $item['product_id'];
                $price = $item['price'];
                $quantity = $item['quantity'];

                $sql = "INSERT INTO order_details (order_id, product_id, price, quantity, is_active) VALUES (?, ?, ?, ?, true)";
                $parameters = [$order_id, $product_id, $price, $quantity];
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
    if ($_POST['action'] == 'read_order') {
        $sql = "SELECT * FROM orders";
        $orders = executeQuery($connection, $sql, [], true);
        echo json_encode($orders);
    }

    // Cập nhật thông tin đơn hàng
    if ($_POST['action'] == 'update_order') {
        $order_id = $_POST['order_id'];
        $user_id = $_POST['user_id'];
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
    if ($_POST['action'] == 'delete_order') {
        $order_id = $_POST['order_id'];

        $sql = "DELETE FROM orders WHERE id = ?";
        $parameters = [$order_id];
        $result = executeQuery($connection, $sql, $parameters);

        if($result) {
            $sql = "DELETE FROM order_details WHERE order_id = ?";
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
}
?>