<h1 align="center">🛒 Multi-Vendor E-Commerce API</h1>

<p align="center">
  <strong>A powerful, scalable & secure Multi-Vendor E-Commerce REST API built with Laravel.</strong>
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-13-FF2D20?style=for-the-badge&logo=laravel&logoColor=white">
  <img src="https://img.shields.io/badge/PHP-8.x-777BB4?style=for-the-badge&logo=php&logoColor=white">
  <img src="https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql&logoColor=white">
  <img src="https://img.shields.io/badge/API-REST-009688?style=for-the-badge">
</p>

<p align="center">
  ⭐ If you find this project useful, consider giving it a star!
</p>

---

## 📖 About The Project

**Multi-Vendor E-Commerce API** is a scalable RESTful API designed to power modern multi-vendor e-commerce platforms.

The system allows multiple merchants to create and manage their stores, products, inventory, and orders.

Customers can browse products, manage their shopping carts, place orders, make payments, add products to wishlists, and submit reviews.

The API can be consumed by:

- 🌐 Web Applications
- 📱 Mobile Applications
- 🖥️ Admin Dashboards
- 🏪 Merchant Dashboards

---

# 🚀 Features

## 🔐 Authentication & Authorization

- Customer Registration & Login
- Merchant Registration & Login
- Secure API Authentication
- Role-Based Access Control
- Permissions Management
- Laravel Policies & Authorization
- Logout & Token Management

---

## 👤 Customer Management

- Customer Registration
- Customer Profile
- Update Profile
- Manage Addresses
- View Orders
- Order History

---

## 🏪 Merchant Management

- Merchant Registration
- Merchant Profile
- Store Management
- Merchant Dashboard
- Product Management
- Order Management
- Inventory Management

### Merchant Registration Includes

- Personal Information
- Store Information
- Business Information
- Tax Number
- Commercial Registration Number
- Store Address
- Store Logo
- Store Banner

---

## 🏬 Store Management

Merchants can:

- Create and manage stores
- Update store information
- Upload store logo and banner
- Manage store status
- Manage store products

---

## 📦 Product Management

- Create Products
- Update Products
- Delete Products
- Product Categories
- Product Images
- Product Variants
- Product Pricing
- Product Stock Management
- Product Search & Filtering

---

## 📂 Category Management

- Create Categories
- Update Categories
- Delete Categories
- Parent & Child Categories
- Assign Products to Categories

---

## 🛒 Shopping Cart

Customers can:

- Add Products to Cart
- Update Product Quantity
- Remove Products
- View Cart
- Calculate Cart Total

---

## ❤️ Wishlist

- Add Products to Wishlist
- Remove Products from Wishlist
- View Wishlist

---

## 📋 Order Management

- Create Orders
- View Order Details
- Order Status Management
- Customer Order History
- Merchant Order Management
- Order Tracking

### Order Status

```text
Pending
Processing
Shipped
Delivered
Cancelled
```

---

## 💳 Payment Management

- Payment Processing
- Payment Status Tracking
- Multiple Payment Methods
- Payment History

---

## 📊 Inventory Management

- Product Stock Tracking
- Stock Updates
- Low Stock Management
- Prevent Out-of-Stock Purchases

---

## ⭐ Reviews & Ratings

Customers can:

- Review Products
- Rate Products
- Update Reviews
- Delete Reviews

---

# 🛠️ Tech Stack

<p align="center">

| Technology | Usage |
|---|---|
| 🐘 **PHP** | Backend Language |
| 🔥 **Laravel 13** | Backend Framework |
| 🐬 **MySQL** | Database |
| 🔐 **Laravel Sanctum** | API Authentication |
| 🛡️ **Spatie Permission** | Roles & Permissions |
| ⚖️ **Laravel Policies** | Authorization |
| 📦 **Composer** | Dependency Management |
| 🔗 **REST API** | API Architecture |
| 🐙 **Git & GitHub** | Version Control |

</p>

---

# 🏗️ Project Architecture

The project follows a clean and scalable Laravel architecture.

```text
app/
│
├── Http/
│   ├── Controllers/
│   ├── Middleware/
│   ├── Requests/
│   └── Resources/
│
├── Models/
├── Policies/
├── Services/
│
database/
├── migrations/
├── factories/
└── seeders/
│
routes/
└── api.php
```

The project separates responsibilities between:

- Controllers
- Models
- Form Requests
- API Resources
- Services
- Policies
- Middleware
- Routes

This makes the application easier to **maintain, test and scale**.

---

# 📌 API Endpoints

## 🔐 Authentication

```http
POST api/V1/auth/customer/register

POST api/V1/auth/merchant/register

POST /api/auth/login
POST /api/auth/logout
```

---

## 📦 Products

```http
GET    /api/products
GET    /api/products/{id}
POST   /api/products
PUT    /api/products/{id}
PATCH  /api/products/{id}
DELETE /api/products/{id}
```

---

## 📂 Categories

```http
GET    /api/categories
GET    /api/categories/{id}
POST   /api/categories
PUT    /api/categories/{id}
DELETE /api/categories/{id}
```

---

## 🛒 Cart

```http
GET    /api/cart
POST   /api/cart
PUT    /api/cart/{id}
DELETE /api/cart/{id}
```

---

## 📋 Orders

```http
GET  /api/orders
POST /api/orders
GET  /api/orders/{id}
```

---

# ⚡ Installation & Setup

<p align="center">
  Follow these simple steps to get the project up and running 🚀
</p>

---

## 📥 1. Clone the Repository

```bash
git clone https://github.com/abdullahEL-dakhly/Multi-VendorE-CommerceAPI.git
```

---

## 📂 2. Enter the Project Directory

```bash
cd Multi-VendorE-CommerceAPI
```

---

## 📦 3. Install Dependencies

```bash
composer install
```

---

## ⚙️ 4. Create Environment File

### Windows

```bash
copy .env.example .env
```

### Linux / macOS

```bash
cp .env.example .env
```

---

## 🔑 5. Generate Application Key

```bash
php artisan key:generate
```

---

## 🗄️ 6. Configure the Database

Open your `.env` file:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ecommerce
DB_USERNAME=root
DB_PASSWORD=
```

Create the database before running migrations.

---

## 🧱 7. Run Database Migrations

```bash
php artisan migrate
```

Or run migrations with seeders:

```bash
php artisan migrate --seed
```

---

## 🖼️ 8. Create Storage Link

```bash
php artisan storage:link
```

---

## 🧹 9. Clear Application Cache

```bash
php artisan optimize:clear
```

---

## 🚀 10. Start Development Server

```bash
php artisan serve
```

The API will be available at:

```text
http://127.0.0.1:8000
```

<p align="center">
  🎉 <strong>That's it! Your application is ready.</strong>
</p>

---

# 📦 Download Without Git

Don't have Git installed?

You can download the project manually:

1. Open the GitHub repository
2. Click **Code**
3. Select **Download ZIP**
4. Extract the ZIP file
5. Open the project directory
6. Run:

```bash
composer install
```

Then continue with the installation steps above.

---

# 🔄 Update The Project

If you already have the project installed and want to download the latest changes:

```bash
git pull origin main
```

Then:

```bash
composer install
php artisan migrate
php artisan optimize:clear
```

---

# 🧪 API Testing

You can test the API using:

- 🟠 Postman
- 🟣 Insomnia
- 🔵 Thunder Client

### Example Request

```http
POST /api/auth/customer/register
```

### Request Body

```json
{
    "name": "John Doe",
    "email": "john@example.com",
    "phone": "01000000000",
    "password": "password",
    "password_confirmation": "password"
}
```

---

# 🔒 Security

The project follows several security practices:

- 🔐 API Authentication
- 🔑 Password Hashing
- ✅ Request Validation
- 👥 Role-Based Access Control
- 🛡️ Permissions
- ⚖️ Laravel Policies
- 🔒 Protected API Routes

> [!WARNING]
> Never commit your `.env` file to GitHub.
> It may contain database credentials, API keys and other sensitive information.

---

# 🗺️ Project Roadmap

### Core

- [x] Laravel Project Setup
- [x] Database Design
- [x] Authentication System

### Users

- [x] Customer Registration
- [x] Merchant Registration

### E-Commerce

- [ ] Store Management
- [ ] Category Management
- [ ] Product Management
- [ ] Inventory Management
- [ ] Shopping Cart
- [ ] Wishlist
- [ ] Order Management
- [ ] Payment Integration
- [ ] Reviews & Ratings

### Additional Features

- [ ] Notifications
- [ ] Merchant Dashboard API
- [ ] Admin Dashboard API

---

# 📚 API Documentation

API documentation will be available using:

- Postman Collection
- Swagger / OpenAPI

> Full API documentation will be added as development progresses.

---

# 🤝 Contributing

Contributions, issues and feature requests are welcome.

### 1. Fork the repository

### 2. Create a new branch

```bash
git checkout -b feature/new-feature
```

### 3. Commit your changes

```bash
git commit -m "Add new feature"
```

### 4. Push the branch

```bash
git push origin feature/new-feature
```

### 5. Open a Pull Request

---

# 👨‍💻 Author

<p align="center">

### Abdullah Ahmed EL-Dakhly

**Backend Developer**

PHP • Laravel • MySQL • REST APIs

</p>

---

# 📄 License

This project is open-source and available under the **MIT License**.

---

<p align="center">
  Made with ❤️ using <strong>Laravel</strong>
</p>

<p align="center">
  ⭐ <strong>If you find this project useful, consider giving it a star!</strong> ⭐
</p>