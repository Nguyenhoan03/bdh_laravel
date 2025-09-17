-- =====================================================
-- DANIEL WELLINGTON - DATABASE ĐƠN GIẢN
-- =====================================================

CREATE DATABASE IF NOT EXISTS daniel_wellington_simple;
USE daniel_wellington_simple;

-- =====================================================
-- 1. BẢNG DANH MỤC (CATEGORIES)
-- =====================================================
CREATE TABLE categories (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    slug VARCHAR(100) UNIQUE NOT NULL,
    description TEXT,
    image VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- =====================================================
-- 2. BẢNG SẢN PHẨM (PRODUCTS)
-- =====================================================
CREATE TABLE products (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    slug VARCHAR(255) UNIQUE NOT NULL,
    description TEXT,
    price DECIMAL(10,2) NOT NULL,
    sale_price DECIMAL(10,2) NULL,
    stock INT DEFAULT 0,
    images TEXT, -- JSON array of image URLs
    category_id INT NOT NULL,
    is_featured BOOLEAN DEFAULT FALSE,
    is_active BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE RESTRICT
);

-- =====================================================
-- 3. BẢNG KHÁCH HÀNG (CUSTOMERS)
-- =====================================================
CREATE TABLE customers (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    phone VARCHAR(20),
    password VARCHAR(255) NOT NULL,
    address TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- =====================================================
-- 4. BẢNG ĐƠN HÀNG (ORDERS)
-- =====================================================
CREATE TABLE orders (
    id INT PRIMARY KEY AUTO_INCREMENT,
    order_number VARCHAR(50) UNIQUE NOT NULL,
    customer_id INT NOT NULL,
    customer_name VARCHAR(255) NOT NULL,
    customer_phone VARCHAR(20) NOT NULL,
    customer_address TEXT NOT NULL,
    total_amount DECIMAL(10,2) NOT NULL,
    status ENUM('pending', 'confirmed', 'shipped', 'delivered', 'cancelled') DEFAULT 'pending',
    payment_method VARCHAR(50) NOT NULL,
    notes TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (customer_id) REFERENCES customers(id) ON DELETE RESTRICT
);

-- =====================================================
-- 5. BẢNG CHI TIẾT ĐƠN HÀNG (ORDER_ITEMS)
-- =====================================================
CREATE TABLE order_items (
    id INT PRIMARY KEY AUTO_INCREMENT,
    order_id INT NOT NULL,
    product_id INT NOT NULL,
    product_name VARCHAR(255) NOT NULL,
    quantity INT NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (order_id) REFERENCES orders(id) ON DELETE CASCADE,
    FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE RESTRICT
);

-- =====================================================
-- 6. BẢNG GIỎ HÀNG (CART)
-- =====================================================
CREATE TABLE cart (
    id INT PRIMARY KEY AUTO_INCREMENT,
    customer_id INT NOT NULL,
    product_id INT NOT NULL,
    quantity INT NOT NULL DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (customer_id) REFERENCES customers(id) ON DELETE CASCADE,
    FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE,
    UNIQUE KEY unique_customer_product (customer_id, product_id)
);

-- =====================================================
-- 7. BẢNG LIÊN HỆ (CONTACT)
-- =====================================================
CREATE TABLE contacts (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20),
    subject VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    status ENUM('new', 'read', 'replied') DEFAULT 'new',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- =====================================================
-- 8. BẢNG BLOG (BLOG_POSTS)
-- =====================================================
CREATE TABLE blog_posts (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    slug VARCHAR(255) UNIQUE NOT NULL,
    content TEXT NOT NULL,
    image VARCHAR(255),
    author VARCHAR(100) NOT NULL,
    is_published BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- =====================================================
-- 9. BẢNG ADMIN (ADMINS)
-- =====================================================
CREATE TABLE admins (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) UNIQUE NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    name VARCHAR(255) NOT NULL,
    role ENUM('admin', 'staff') DEFAULT 'staff',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- =====================================================
-- INSERT DỮ LIỆU MẪU
-- =====================================================

-- Thêm danh mục
INSERT INTO categories (name, slug, description) VALUES
('Đồng hồ Nam', 'dong-ho-nam', 'Đồng hồ dành cho nam giới'),
('Đồng hồ Nữ', 'dong-ho-nu', 'Đồng hồ dành cho nữ giới'),
('Đồng hồ Cặp', 'dong-ho-cap', 'Đồng hồ cặp đôi'),
('Phụ kiện', 'phu-kien', 'Dây đeo và phụ kiện');

-- Thêm sản phẩm mẫu
INSERT INTO products (name, slug, description, price, stock, category_id, is_featured) VALUES
('Classic Sheffield', 'classic-sheffield', 'Đồng hồ nam cổ điển với dây da', 2500000, 50, 1, TRUE),
('Classic Petite', 'classic-petite', 'Đồng hồ nữ nhỏ gọn', 2200000, 30, 2, TRUE),
('Classic Black', 'classic-black', 'Đồng hồ đen sang trọng', 2800000, 25, 1, FALSE),
('Classic Rose Gold', 'classic-rose-gold', 'Đồng hồ nữ màu hồng vàng', 2600000, 40, 2, TRUE);

-- Thêm admin mặc định
INSERT INTO admins (username, email, password, name, role) VALUES
('admin', 'admin@danielwellington.vn', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Administrator', 'admin');

-- Thêm bài blog mẫu
INSERT INTO blog_posts (title, slug, content, author, is_published) VALUES
('Cách chọn đồng hồ phù hợp', 'cach-chon-dong-ho-phu-hop', 'Hướng dẫn chọn đồng hồ phù hợp với phong cách của bạn...', 'Admin', TRUE),
('Lịch sử thương hiệu Daniel Wellington', 'lich-su-thuong-hieu-daniel-wellington', 'Tìm hiểu về lịch sử và sứ mệnh của thương hiệu...', 'Admin', TRUE);
