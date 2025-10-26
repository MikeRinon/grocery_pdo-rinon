CREATE DATABASE grocery_db;
USE grocery_db;

CREATE TABLE grocery_items (
    item_id INT AUTO_INCREMENT PRIMARY KEY,
    item_name VARCHAR(100) NOT NULL,
    category VARCHAR(50),
    price DECIMAL(10,2) NOT NULL,
    stock INT DEFAULT 0,
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO grocery_items (item_name, category, price, stock)
VALUES
('Eggs', 'Dairy', 6.50, 50),
('Rice', 'Grains', 42.00, 100),
('Canned Tuna', 'Canned Goods', 32.75, 40),
('Apples', 'Fruits', 15.00, 60),
('Toothpaste', 'Toiletries', 75.00, 30);
