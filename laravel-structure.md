# CẤU TRÚC CƠ BẢN CỦA LARAVEL FRAMEWORK

## 📁 CẤU TRÚC THƯ MỤC CHÍNH

```
laravel-project/
├── 📁 app/                          # Ứng dụng chính
│   ├── 📁 Console/                  # Artisan Commands
│   ├── 📁 Exceptions/               # Exception Handlers
│   ├── 📁 Http/                     # HTTP Layer
│   │   ├── 📁 Controllers/          # Controllers
│   │   ├── 📁 Middleware/           # Middleware
│   │   ├── 📁 Requests/             # Form Requests
│   │   └── 📁 Resources/            # API Resources
│   ├── 📁 Models/                   # Eloquent Models
│   ├── 📁 Providers/                # Service Providers
│   └── 📁 Services/                 # Business Logic
│
├── 📁 bootstrap/                    # Khởi tạo ứng dụng
│   ├── app.php                      # Bootstrap chính
│   └── providers.php                # Service Providers
│
├── 📁 config/                       # Cấu hình ứng dụng
│   ├── app.php                      # Cấu hình chung
│   ├── database.php                 # Cấu hình database
│   ├── auth.php                     # Cấu hình xác thực
│   └── ...                          # Các file config khác
│
├── 📁 database/                     # Database
│   ├── 📁 factories/                # Model Factories
│   ├── 📁 migrations/               # Database Migrations
│   ├── 📁 seeders/                  # Database Seeders
│   └── database.sqlite              # SQLite Database
│
├── 📁 public/                       # Web Root
│   ├── index.php                    # Entry Point
│   ├── 📁 css/                      # CSS Files
│   ├── 📁 js/                       # JavaScript Files
│   └── 📁 images/                   # Images
│
├── 📁 resources/                    # Resources
│   ├── 📁 views/                    # Blade Templates
│   ├── 📁 css/                      # CSS Source
│   ├── 📁 js/                       # JavaScript Source
│   └── 📁 lang/                     # Language Files
│
├── 📁 routes/                       # Route Definitions
│   ├── web.php                      # Web Routes
│   ├── api.php                      # API Routes
│   └── console.php                  # Console Routes
│
├── 📁 storage/                      # Storage
│   ├── 📁 app/                      # App Storage
│   ├── 📁 framework/                # Framework Cache
│   └── 📁 logs/                     # Log Files
│
├── 📁 tests/                        # Test Files
│   ├── 📁 Feature/                  # Feature Tests
│   └── 📁 Unit/                     # Unit Tests
│
├── 📁 vendor/                       # Composer Dependencies
├── artisan                          # Artisan CLI
├── composer.json                    # Composer Config
└── .env                             # Environment Variables
```

## 🏗️ KIẾN TRÚC MVC CỦA LARAVEL

```
┌─────────────────────────────────────────────────────────────┐
│                    LARAVEL MVC ARCHITECTURE                 │
└─────────────────────────────────────────────────────────────┘

┌─────────────────┐    ┌─────────────────┐    ┌─────────────────┐
│   📱 VIEW       │    │   🎮 CONTROLLER │    │   📊 MODEL       │
│   (Blade)       │◄──►│   (Logic)       │◄──►│   (Eloquent)    │
│                 │    │                 │    │                 │
│ • Templates     │    │ • Handle HTTP   │    │ • Database      │
│ • UI/UX         │    │ • Business      │    │ • Relationships │
│ • Components    │    │   Logic         │    │ • Validation    │
└─────────────────┘    └─────────────────┘    └─────────────────┘
         │                       │                       │
         │                       │                       │
         ▼                       ▼                       ▼
┌─────────────────────────────────────────────────────────────┐
│                    DATABASE LAYER                           │
│  ┌─────────────┐  ┌─────────────┐  ┌─────────────┐         │
│  │ Migrations  │  │   Models    │  │  Seeders    │         │
│  │             │  │             │  │             │         │
│  │ • Schema    │  │ • Eloquent  │  │ • Test Data │         │
│  │ • Structure │  │ • Relations │  │ • Sample    │         │
│  └─────────────┘  └─────────────┘  └─────────────┘         │
└─────────────────────────────────────────────────────────────┘
```

## 🔄 REQUEST LIFECYCLE

```
1. 📥 HTTP Request
   ↓
2. 🌐 Route Resolution (routes/web.php)
   ↓
3. 🛡️ Middleware Stack
   ↓
4. 🎮 Controller Action
   ↓
5. 📊 Model/Database Operations
   ↓
6. 📱 View Rendering (Blade)
   ↓
7. 📤 HTTP Response
```

## 🧩 CORE COMPONENTS

### 1. **Service Container (IoC)**
- Dependency Injection
- Service Binding
- Auto Resolution

### 2. **Service Providers**
- Register Services
- Boot Services
- Configuration

### 3. **Facades**
- Static Interface
- Service Access
- Clean API

### 4. **Middleware**
- Request Filtering
- Authentication
- CORS, CSRF Protection

### 5. **Artisan CLI**
- Code Generation
- Database Management
- Cache Management

## 📋 CÁC LỆNH ARTISAN QUAN TRỌNG

```bash
# Tạo Model
php artisan make:model ModelName

# Tạo Controller
php artisan make:controller ControllerName

# Tạo Migration
php artisan make:migration create_table_name

# Tạo Seeder
php artisan make:seeder SeederName

# Tạo Middleware
php artisan make:middleware MiddlewareName

# Chạy Migration
php artisan migrate

# Chạy Seeder
php artisan db:seed

# Tạo Key
php artisan key:generate

# Clear Cache
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

## 🔧 CẤU HÌNH QUAN TRỌNG

### Environment (.env)
```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:...
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=sqlite
DB_DATABASE=/path/to/database.sqlite

CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_CONNECTION=sync
```

### Service Providers (bootstrap/providers.php)
```php
return [
    App\Providers\AppServiceProvider::class,
    App\Providers\Filament\AdminPanelProvider::class,
];
```

## 🎯 FILAMENT INTEGRATION (Trong dự án của bạn)

```
app/
├── 📁 Filament/
│   ├── 📁 Resources/        # CRUD Resources
│   ├── 📁 Pages/           # Custom Pages
│   └── 📁 Widgets/         # Dashboard Widgets
└── 📁 Providers/
    └── 📁 Filament/
        └── AdminPanelProvider.php
```

## 🚀 WORKFLOW PHÁT TRIỂN

1. **Setup**: `composer install`, `php artisan key:generate`
2. **Database**: Tạo migration, chạy migrate
3. **Models**: Tạo Eloquent models
4. **Controllers**: Tạo controllers với logic
5. **Routes**: Định nghĩa routes
6. **Views**: Tạo Blade templates
7. **Testing**: Viết tests
8. **Deployment**: Deploy lên server

---

*Cấu trúc này dựa trên Laravel 12.x với Filament 4.0 integration*
