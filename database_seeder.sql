-- Tạo thêm categories
INSERT INTO categories (name, slug, description, is_active, sort_order, created_at, updated_at) VALUES
('Đồng hồ nữ', 'dong-ho-nu', 'Đồng hồ dành cho nữ', 1, 1, NOW(), NOW()),
('Đồng hồ nam', 'dong-ho-nam', 'Đồng hồ dành cho nam', 1, 2, NOW(), NOW()),
('Đồng hồ cặp', 'dong-ho-cap', 'Đồng hồ cặp đôi', 1, 3, NOW(), NOW()),
('Dây đồng hồ', 'day-dong-ho', 'Dây đeo đồng hồ', 1, 4, NOW(), NOW()),
('Trang sức', 'trang-suc', 'Trang sức phụ kiện', 1, 5, NOW(), NOW());

-- Tạo thêm sản phẩm đồng hồ nữ
INSERT INTO products (name, slug, description, spec, price, original_price, discount_percent, image, category_id, is_featured, is_active, view_count, stock, created_at, updated_at) VALUES
('Elan Lumine Silver DW00100716', 'elan-lumine-silver-dw00100716', 'Đồng hồ nữ Elan Lumine Silver', 'Nữ 22mm', 1850000, 2850000, 35, 'DW00100699-247x296.webp', 1, 1, 1, 150, 25, NOW(), NOW()),
('Petite Sterling DW00100002', 'petite-sterling-dw00100002', 'Đồng hồ nữ Petite Sterling', 'Nữ 28mm', 1690000, 2600000, 35, 'DW00100699-247x296.webp', 1, 1, 1, 120, 30, NOW(), NOW()),
('Classic Petite DW00100003', 'classic-petite-dw00100003', 'Đồng hồ nữ Classic Petite', 'Nữ 26mm', 1950000, 3000000, 35, 'DW00100699-247x296.webp', 1, 0, 1, 80, 20, NOW(), NOW()),
('Elan Lumine Gold DW00100717', 'elan-lumine-gold-dw00100717', 'Đồng hồ nữ Elan Lumine Gold', 'Nữ 22mm', 1950000, 3000000, 35, 'DW00100699-247x296.webp', 1, 1, 1, 200, 15, NOW(), NOW()),
('Petite Sterling Rose DW00100004', 'petite-sterling-rose-dw00100004', 'Đồng hồ nữ Petite Sterling Rose', 'Nữ 28mm', 1750000, 2700000, 35, 'DW00100699-247x296.webp', 1, 0, 1, 90, 35, NOW(), NOW()),
('Classic Petite Black DW00100005', 'classic-petite-black-dw00100005', 'Đồng hồ nữ Classic Petite Black', 'Nữ 26mm', 1850000, 2850000, 35, 'DW00100699-247x296.webp', 1, 1, 1, 110, 28, NOW(), NOW()),
('Elan Lumine Black DW00100718', 'elan-lumine-black-dw00100718', 'Đồng hồ nữ Elan Lumine Black', 'Nữ 22mm', 1950000, 3000000, 35, 'DW00100699-247x296.webp', 1, 0, 1, 75, 22, NOW(), NOW()),
('Petite Sterling Gold DW00100006', 'petite-sterling-gold-dw00100006', 'Đồng hồ nữ Petite Sterling Gold', 'Nữ 28mm', 1850000, 2850000, 35, 'DW00100699-247x296.webp', 1, 1, 1, 130, 18, NOW(), NOW());

-- Tạo thêm sản phẩm đồng hồ nam
INSERT INTO products (name, slug, description, spec, price, original_price, discount_percent, image, category_id, is_featured, is_active, view_count, stock, created_at, updated_at) VALUES
('Classic Sheffield DW00100001', 'classic-sheffield-dw00100001', 'Đồng hồ nam Classic Sheffield', 'Nam 40mm', 2080000, 3200000, 35, 'DW00100699-247x296.webp', 2, 1, 1, 300, 20, NOW(), NOW()),
('Classic Black DW00100007', 'classic-black-dw00100007', 'Đồng hồ nam Classic Black', 'Nam 40mm', 2200000, 2200000, 0, 'DW00100699-247x296.webp', 2, 1, 1, 250, 30, NOW(), NOW()),
('Classic Cornwall DW00100008', 'classic-cornwall-dw00100008', 'Đồng hồ nam Classic Cornwall', 'Nam 40mm', 2210000, 3400000, 35, 'DW00100699-247x296.webp', 2, 0, 1, 180, 25, NOW(), NOW()),
('Classic Sheffield Gold DW00100009', 'classic-sheffield-gold-dw00100009', 'Đồng hồ nam Classic Sheffield Gold', 'Nam 40mm', 2250000, 3500000, 35, 'DW00100699-247x296.webp', 2, 1, 1, 220, 15, NOW(), NOW()),
('Classic Black Rose DW00100010', 'classic-black-rose-dw00100010', 'Đồng hồ nam Classic Black Rose', 'Nam 40mm', 2150000, 3300000, 35, 'DW00100699-247x296.webp', 2, 0, 1, 160, 28, NOW(), NOW()),
('Classic Cornwall Silver DW00100011', 'classic-cornwall-silver-dw00100011', 'Đồng hồ nam Classic Cornwall Silver', 'Nam 40mm', 2300000, 3600000, 35, 'DW00100699-247x296.webp', 2, 1, 1, 190, 22, NOW(), NOW()),
('Classic Sheffield Black DW00100012', 'classic-sheffield-black-dw00100012', 'Đồng hồ nam Classic Sheffield Black', 'Nam 40mm', 2100000, 3200000, 35, 'DW00100699-247x296.webp', 2, 0, 1, 140, 35, NOW(), NOW()),
('Classic Cornwall Gold DW00100013', 'classic-cornwall-gold-dw00100013', 'Đồng hồ nam Classic Cornwall Gold', 'Nam 40mm', 2350000, 3700000, 35, 'DW00100699-247x296.webp', 2, 1, 1, 210, 18, NOW(), NOW());

-- Tạo thêm sản phẩm đồng hồ cặp
INSERT INTO products (name, slug, description, spec, price, original_price, discount_percent, image, category_id, is_featured, is_active, view_count, stock, created_at, updated_at) VALUES
('Classic Couple Set DW00100014', 'classic-couple-set-dw00100014', 'Bộ đồng hồ cặp Classic', 'Nam 40mm + Nữ 28mm', 3500000, 5000000, 30, 'DW00100699-247x296.webp', 3, 1, 1, 180, 12, NOW(), NOW()),
('Elan Couple Set DW00100015', 'elan-couple-set-dw00100015', 'Bộ đồng hồ cặp Elan', 'Nam 40mm + Nữ 22mm', 3800000, 5500000, 30, 'DW00100699-247x296.webp', 3, 0, 1, 150, 10, NOW(), NOW()),
('Petite Couple Set DW00100016', 'petite-couple-set-dw00100016', 'Bộ đồng hồ cặp Petite', 'Nam 40mm + Nữ 28mm', 3600000, 5200000, 30, 'DW00100699-247x296.webp', 3, 1, 1, 120, 8, NOW(), NOW()),
('Classic Rose Couple DW00100017', 'classic-rose-couple-dw00100017', 'Bộ đồng hồ cặp Classic Rose', 'Nam 40mm + Nữ 28mm', 3700000, 5300000, 30, 'DW00100699-247x296.webp', 3, 0, 1, 100, 15, NOW(), NOW()),
('Elan Gold Couple DW00100018', 'elan-gold-couple-dw00100018', 'Bộ đồng hồ cặp Elan Gold', 'Nam 40mm + Nữ 22mm', 3900000, 5600000, 30, 'DW00100699-247x296.webp', 3, 1, 1, 90, 6, NOW(), NOW()),
('Petite Silver Couple DW00100019', 'petite-silver-couple-dw00100019', 'Bộ đồng hồ cặp Petite Silver', 'Nam 40mm + Nữ 28mm', 3550000, 5100000, 30, 'DW00100699-247x296.webp', 3, 0, 1, 110, 9, NOW(), NOW());

-- Tạo thêm sản phẩm dây đồng hồ
INSERT INTO products (name, slug, description, spec, price, original_price, discount_percent, image, category_id, is_featured, is_active, view_count, stock, created_at, updated_at) VALUES
('Dây Đồng Hồ DW Petite Bondi 12mm', 'day-dong-ho-dw-petite-bondi-12mm', 'Dây da trắng - Khóa vàng', 'Dây da trắng - Khóa vàng', 350000, 700000, 50, 'DW00100699-247x296.webp', 4, 1, 1, 200, 50, NOW(), NOW()),
('Dây Đồng Hồ DW Classic Sheffield 20mm Bạc', 'day-dong-ho-dw-classic-sheffield-20mm-bac', 'Dây da đen - Khóa bạc', 'Dây da đen - Khóa bạc', 400000, 800000, 50, 'DW00100699-247x296.webp', 4, 1, 1, 180, 45, NOW(), NOW()),
('Dây Đồng Hồ DW Classic Sheffield 18mm Bạc', 'day-dong-ho-dw-classic-sheffield-18mm-bac', 'Dây da đen - Khóa bạc', 'Dây da đen - Khóa bạc', 375000, 750000, 50, 'DW00100699-247x296.webp', 4, 0, 1, 160, 40, NOW(), NOW()),
('Dây Đồng Hồ DW Classic Sheffield 20mm', 'day-dong-ho-dw-classic-sheffield-20mm', 'Dây da đen - Khóa vàng', 'Dây da đen - Khóa vàng', 400000, 800000, 50, 'DW00100699-247x296.webp', 4, 1, 1, 170, 35, NOW(), NOW()),
('Dây Đồng Hồ DW Classic Sheffield 18mm', 'day-dong-ho-dw-classic-sheffield-18mm', 'Dây da đen - Khóa vàng', 'Dây da đen - Khóa vàng', 375000, 750000, 50, 'DW00100699-247x296.webp', 4, 0, 1, 150, 38, NOW(), NOW()),
('Dây Đồng Hồ DW Petite St Mawes 14mm Bạc', 'day-dong-ho-dw-petite-st-mawes-14mm-bac', 'Dây da nâu - Khóa bạc', 'Dây da nâu - Khóa bạc', 350000, 700000, 50, 'DW00100699-247x296.webp', 4, 1, 1, 140, 42, NOW(), NOW()),
('Dây Đồng Hồ DW Petite St Mawes 12mm Bạc', 'day-dong-ho-dw-petite-st-mawes-12mm-bac', 'Dây da nâu - Khóa bạc', 'Dây da nâu - Khóa bạc', 325000, 650000, 50, 'DW00100699-247x296.webp', 4, 0, 1, 130, 48, NOW(), NOW()),
('Dây Đồng Hồ DW Petite Sheffield 14mm Bạc', 'day-dong-ho-dw-petite-sheffield-14mm-bac', 'Dây da đen - Khóa bạc', 'Dây da đen - Khóa bạc', 350000, 700000, 50, 'DW00100699-247x296.webp', 4, 1, 1, 120, 33, NOW(), NOW());

-- Tạo thêm sản phẩm trang sức
INSERT INTO products (name, slug, description, spec, price, original_price, discount_percent, image, category_id, is_featured, is_active, view_count, stock, created_at, updated_at) VALUES
('Vòng tay DW Classic Silver', 'vong-tay-dw-classic-silver', 'Vòng tay bạc Classic', 'Vòng tay bạc Classic', 800000, 1200000, 33, 'DW00100699-247x296.webp', 5, 1, 1, 100, 25, NOW(), NOW()),
('Vòng tay DW Classic Gold', 'vong-tay-dw-classic-gold', 'Vòng tay vàng Classic', 'Vòng tay vàng Classic', 850000, 1300000, 35, 'DW00100699-247x296.webp', 5, 0, 1, 90, 20, NOW(), NOW()),
('Vòng tay DW Petite Silver', 'vong-tay-dw-petite-silver', 'Vòng tay bạc Petite', 'Vòng tay bạc Petite', 750000, 1100000, 32, 'DW00100699-247x296.webp', 5, 1, 1, 80, 30, NOW(), NOW()),
('Vòng tay DW Petite Gold', 'vong-tay-dw-petite-gold', 'Vòng tay vàng Petite', 'Vòng tay vàng Petite', 800000, 1200000, 33, 'DW00100699-247x296.webp', 5, 0, 1, 70, 22, NOW(), NOW()),
('Vòng tay DW Elan Silver', 'vong-tay-dw-elan-silver', 'Vòng tay bạc Elan', 'Vòng tay bạc Elan', 900000, 1400000, 36, 'DW00100699-247x296.webp', 5, 1, 1, 60, 18, NOW(), NOW()),
('Vòng tay DW Elan Gold', 'vong-tay-dw-elan-gold', 'Vòng tay vàng Elan', 'Vòng tay vàng Elan', 950000, 1500000, 37, 'DW00100699-247x296.webp', 5, 0, 1, 50, 15, NOW(), NOW());

-- Cập nhật lại sản phẩm cũ để có category_id đúng
UPDATE products SET category_id = 2 WHERE id IN (1, 2, 3, 4);
