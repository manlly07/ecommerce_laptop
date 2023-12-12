CREATE TABLE `users` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT "",
  `last_name` varchar(255) DEFAULT "",
  `phone` varchar(10) UNIQUE NOT NULL,
  `image` varchar(255) DEFAULT "",
  `phone_verify` boolean DEFAULT false,
  `password` varchar(20) NOT NULL,
  `address` varchar(255) DEFAULT "",
  `role` varchar(10) DEFAULT "user",
  `created_at` DATE DEFAULT (now()),
  `updated_at` DATE,
  `is_active` boolean DEFAULT false
);

CREATE TABLE `categories` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255) DEFAULT "",
  `description` varchar(255) DEFAULT "",
  `created_at` DATE DEFAULT (now()),
  `is_active` boolean DEFAULT false
);

CREATE TABLE `branches` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255) DEFAULT "",
  `description` varchar(255) DEFAULT "",
  `image` varchar(255) DEFAULT "",
  `created_at` DATE DEFAULT (now()),
  `is_active` boolean DEFAULT false
);

CREATE TABLE `products` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT "",
  `cpu` varchar(255) DEFAULT "",
  `ram` varchar(255) DEFAULT "",
  `hardware` varchar(255) DEFAULT "",
  `cardvga` varchar(255) DEFAULT "",
  `display` varchar(255) DEFAULT "",
  `camera` varchar(255) DEFAULT "",
  `port` varchar(255) DEFAULT "",
  `weight` varchar(255) DEFAULT "",
  `pin` varchar(255) DEFAULT "",
  `window` varchar(255) DEFAULT "",
  `price` decimal(10, 2) DEFAULT 0,
  `quantity` int DEFAULT 0,
  `category_id` int,
  `branches_id` int,
  `created_at` DATE DEFAULT (now()),
  `is_active` boolean DEFAULT false
);

CREATE TABLE `images` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `link` varchar(255),
  `product_id` int NOT NULL,
  `is_active` boolean DEFAULT false
);

CREATE TABLE `orders` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `user_id` int,
  `fullname` varchar(100) DEFAULT "",
  `email` varchar(100) DEFAULT "",
  `phone` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `note` varchar(100) DEFAULT "",
  `order_date` varchar(255) DEFAULT (now()),
  `status` ENUM ('pending', 'processing', 'shipped', 'delivered', 'cancelled') DEFAULT "processing",
  `total` float,
  `payment_method` ENUM ('COD', 'OnlineBanking') DEFAULT "COD",
  `shipping_date` DATE,
  `shipping_method` varchar(100),
  `is_active` boolean DEFAULT false
);

CREATE TABLE `order_details` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `price` float,
  `quantity` int DEFAULT 1,
  `is_active` boolean DEFAULT false
);

CREATE TABLE `carts` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `product_id` int,
  `quantity` int DEFAULT 1
);

CREATE TABLE `reviews` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `product_id` int NOT NULL,
  `user_id` int NOT NULL,
  `rate` int,
  `content` varchar(255) DEFAULT ""
);

ALTER TABLE `images` ADD FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

ALTER TABLE `products` ADD FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

ALTER TABLE `products` ADD FOREIGN KEY (`branches_id`) REFERENCES `branches` (`id`);

ALTER TABLE `order_details` ADD FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

ALTER TABLE `order_details` ADD FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

ALTER TABLE `carts` ADD FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

ALTER TABLE `carts` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

ALTER TABLE `reviews` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

ALTER TABLE `reviews` ADD FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
