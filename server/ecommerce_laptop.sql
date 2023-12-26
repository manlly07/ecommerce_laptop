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
  `image` varchar(255) DEFAULT "",
  `content` varchar(255) DEFAULT "",
  `reply` varchar(255) DEFAULT "",
  `created_at` DATE DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE `otp` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `request_count` varchar(255) NOT NULL,
  `expiration_time` TIMESTAMP
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

ALTER TABLE `otp` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);




Table users{
  id int [primary key, increment]
  user_name varchar(20) [not null, unique]
  password varchar(20) [not null]
  email varchar(50) [not null, unique]
  phone varchar(10) [not null, unique]
  address varchar [default: '']
  email_verify boolean [default:false]
  role varchar(10)  [default:'user']
  created_at DATE [default: `now()`]
  updated_at DATE
  is_active boolean [default: false]
}

Table categories{
  id int [primary key, increment]
  name varchar [default: '']
  description varchar [default: '']
  created_at DATE [default: `now()`]
  is_active boolean [default: false]
}

Table branches {
  id int [primary key, increment]
  name varchar [default: '']
  description varchar [default: '']
  image varchar [default: '']
  created_at DATE [default: `now()`]
  is_active boolean [default: false]
}

Table products{
  id int [primary key, increment]
  name varchar [not null]
  description text [default: '']
  cpu varchar [default: '']
  ram varchar [default: '']
  hardware varchar [default: '']
  cardvga varchar [default: '']
  display varchar [default: '']
  camera varchar [default: '']
  port varchar [default: '']
  weight varchar [default: '']
  pin varchar [default: '']
  window varchar [default: '']
  price decimal(10, 2) [default: 0]
  quantity int [default: 0]
  category_id int
  branches_id int
  is_active boolean [default: false]
}

Table images{
  id int [primary key, increment]
  link varchar
  product_id int [not null]
  is_active boolean [default: false]
}

Ref: images.product_id > products.id
Ref: products.category_id > categories.id
Ref: products.branches_id > branches.id

Table orders{
  id int [primary key, increment]
  user_id int
  fullname varchar(100) [default: '']
  email varchar(100) [default: '']
  phone varchar(10) [not null]
  address varchar(100) [not null]
  note varchar(100) [default: '']
  order_date varchar [default: `now()`]
  status order_status [default: 'processing']
  total float
  payment_method payment [default: 'COD']
  shipping_date DATE
  shipping_method varchar(100)
  is_active boolean [default: false]
}

ENUM order_status {
  pending
  processing
  shipped
  delivered
  cancelled
}

ENUM payment {
  COD
  OnlineBanking
}

Table order_details{
  id int [primary key, increment]
  order_id int [not null]
  product_id int [not null]
  price float
  quantity int [default: 1]
  is_active boolean [default: false]
}

Ref: order_details.order_id > orders.id
Ref: order_details.product_id > products.id

Table carts{
  id int [primary key, increment]
  user_id int [not null]
  product_id int
  quantity int [default: 1]
}

Ref: carts.product_id > products.id
Ref: carts.user_id > users.id


Table reviews{
  id int [primary key, increment]
  product_id int [not null]
  user_id int [not null]
  rate int
  content varchar [default: '']
}

Ref: reviews.user_id > users.id
Ref: reviews.product_id > products.id


