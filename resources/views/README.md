# 📁 CẤU TRÚC THƯ MỤC VIEWS TRONG LARAVEL

## 🎯 **Tổng quan cấu trúc**

```
resources/views/
├── 📁 layouts/                    # Layout chính
│   ├── app.blade.php             # Layout cho user đã đăng nhập
│   ├── guest.blade.php           # Layout cho guest (chưa đăng nhập)
│   ├── navigation.blade.php      # Navigation menu
│   └── footer.blade.php          # Footer
│
├── 📁 components/                 # Blade Components
│   ├── application-logo.blade.php # Logo component
│   ├── app-layout.blade.php      # App layout wrapper
│   ├── auth-session-status.blade.php # Auth status
│   ├── danger-button.blade.php   # Button nguy hiểm (đỏ)
│   ├── dropdown.blade.php        # Dropdown menu
│   ├── dropdown-link.blade.php   # Dropdown link
│   ├── guest-layout.blade.php    # Guest layout wrapper
│   ├── input-error.blade.php     # Hiển thị lỗi input
│   ├── input-label.blade.php     # Label cho input
│   ├── modal.blade.php           # Modal popup
│   ├── nav-link.blade.php        # Navigation link
│   ├── primary-button.blade.php  # Button chính
│   ├── responsive-nav-link.blade.php # Responsive nav link
│   ├── secondary-button.blade.php # Button phụ
│   └── text-input.blade.php      # Input text
│
├── 📁 auth/                       # Authentication views
│   ├── login.blade.php           # Trang đăng nhập
│   ├── register.blade.php        # Trang đăng ký
│   ├── forgot-password.blade.php # Quên mật khẩu
│   └── reset-password.blade.php  # Reset mật khẩu
│
├── 📁 profile/                    # Profile management
│   ├── edit.blade.php            # Chỉnh sửa profile
│   └── 📁 partials/              # Partial views
│       ├── update-profile-information-form.blade.php
│       ├── update-password-form.blade.php
│       └── delete-user-form.blade.php
│
├── dashboard.blade.php            # Trang dashboard chính
├── welcome.blade.php              # Trang chào mừng
└── README.md                      # File hướng dẫn này
```

## 🏗️ **Cách sử dụng các Layout**

### 1. **App Layout** (Cho user đã đăng nhập)
```blade
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
```

### 2. **Guest Layout** (Cho user chưa đăng nhập)
```blade
<x-guest-layout>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <!-- Form content -->
    </form>
</x-guest-layout>
```

## 🧩 **Các Component chính**

### **Buttons**
```blade
<!-- Primary Button -->
<x-primary-button>Save</x-primary-button>

<!-- Secondary Button -->
<x-secondary-button>Cancel</x-secondary-button>

<!-- Danger Button -->
<x-danger-button>Delete</x-danger-button>
```

### **Form Components**
```blade
<!-- Input Label -->
<x-input-label for="email" :value="__('Email')" />

<!-- Text Input -->
<x-text-input id="email" name="email" type="email" class="mt-1 block w-full" />

<!-- Input Error -->
<x-input-error :messages="$errors->get('email')" class="mt-2" />
```

### **Navigation**
```blade
<!-- Nav Link -->
<x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
    Dashboard
</x-nav-link>

<!-- Responsive Nav Link -->
<x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
    Dashboard
</x-responsive-nav-link>
```

### **Dropdown**
```blade
<x-dropdown align="right" width="48">
    <x-slot name="trigger">
        <button class="flex items-center text-sm font-medium text-gray-500">
            {{ Auth::user()->name }}
        </button>
    </x-slot>

    <x-slot name="content">
        <x-dropdown-link :href="route('profile.edit')">
            Profile
        </x-dropdown-link>
    </x-slot>
</x-dropdown>
```

### **Modal**
```blade
<x-modal name="confirm-deletion" :show="$showModal">
    <div class="p-6">
        <h2 class="text-lg font-medium text-gray-900">
            Are you sure?
        </h2>
        <!-- Modal content -->
    </div>
</x-modal>
```

## 🔐 **Authentication Views**

### **Login Page**
- Sử dụng `guest-layout`
- Form đăng nhập với email/password
- Remember me checkbox
- Link quên mật khẩu

### **Register Page**
- Form đăng ký với name, email, password
- Confirm password
- Link đến trang login

### **Password Reset**
- Forgot password form
- Reset password form với token

## 👤 **Profile Management**

### **Profile Edit**
- Update profile information
- Change password
- Delete account (với confirmation modal)

## 🎨 **Styling & CSS**

### **Tailwind CSS Classes**
- Sử dụng Tailwind CSS cho styling
- Responsive design với breakpoints
- Dark mode support
- Consistent color scheme

### **Custom CSS**
- Có thể thêm custom CSS trong `resources/css/app.css`
- Sử dụng Vite để compile assets

## 📱 **Responsive Design**

### **Breakpoints**
- `sm:` - 640px và lên
- `md:` - 768px và lên  
- `lg:` - 1024px và lên
- `xl:` - 1280px và lên
- `2xl:` - 1536px và lên

### **Mobile First**
- Thiết kế mobile-first
- Progressive enhancement cho desktop

## 🔧 **Best Practices**

### 1. **Component Reusability**
- Tạo components cho các element được sử dụng nhiều lần
- Sử dụng props để customize components

### 2. **Layout Consistency**
- Sử dụng layout chung cho consistency
- Tách navigation và footer thành partials

### 3. **Error Handling**
- Hiển thị validation errors
- Sử dụng session status cho thông báo

### 4. **Security**
- CSRF protection cho forms
- XSS protection với `{{ }}` syntax
- Input validation

### 5. **Performance**
- Sử dụng `@vite` cho asset compilation
- Lazy loading cho images
- Minify CSS/JS trong production

## 🚀 **Cách thêm View mới**

### 1. **Tạo file view**
```bash
# Tạo file trong thư mục phù hợp
touch resources/views/pages/about.blade.php
```

### 2. **Sử dụng layout**
```blade
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            About Us
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Content here -->
        </div>
    </div>
</x-app-layout>
```

### 3. **Tạo route**
```php
// routes/web.php
Route::get('/about', function () {
    return view('pages.about');
});
```

## 📚 **Tài liệu tham khảo**

- [Laravel Blade Documentation](https://laravel.com/docs/blade)
- [Tailwind CSS Documentation](https://tailwindcss.com/docs)
- [Alpine.js Documentation](https://alpinejs.dev/)
- [Laravel Authentication](https://laravel.com/docs/authentication)

---

*Cấu trúc này được tối ưu cho Laravel 12.x với Filament 4.0 integration*
