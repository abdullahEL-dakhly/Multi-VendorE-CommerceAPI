<a id="top"></a>

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

<a id="table-of-contents"></a>

# 📑 Table of Contents

- [📖 About The Project](#about)
- [🚀 Features](#features)
  - [🔐 Authentication & Authorization](#authentication-authorization)
  - [👤 Customer Management](#customer-management)
  - [🏪 Merchant Management](#merchant-management)
  - [🏬 Store Management](#store-management)
  - [📦 Product Management](#product-management)
  - [📂 Category Management](#category-management)
  - [🛒 Shopping Cart](#shopping-cart)
  - [❤️ Wishlist](#wishlist)
  - [📋 Order Management](#order-management)
  - [💳 Payment Management](#payment-management)
  - [📊 Inventory Management](#inventory-management)
  - [⭐ Reviews & Ratings](#reviews-ratings)
- [🛠️ Tech Stack](#tech-stack)
- [🏗️ Project Architecture](#architecture)
- [📌 API Endpoints](#api-endpoints)
  - [🔐 Authentication Endpoints](#authentication-endpoints)
  - [📦 Product Endpoints](#product-endpoints)
  - [📂 Category Endpoints](#category-endpoints)
  - [🛒 Cart Endpoints](#cart-endpoints)
  - [📋 Order Endpoints](#order-endpoints)
- [⚡ Installation & Setup](#installation)
- [📦 Download Without Git](#download)
- [🔄 Update The Project](#update)
- [🧪 API Testing](#api-testing)
- [🔒 Security](#security)
- [🗺️ Project Roadmap](#roadmap)
- [📚 API Documentation](#api-documentation)
- [🤝 Contributing](#contributing)
- [👨‍💻 Author](#author)
- [📄 License](#license)

---

<a id="about"></a>

# 📖 About The Project

**Multi-Vendor E-Commerce API** is a scalable RESTful API designed to power modern multi-vendor e-commerce platforms.

The system allows multiple merchants to create and manage their stores, products, inventory, and orders.

Customers can browse products, manage their shopping carts, place orders, make payments, add products to wishlists, and submit reviews.

The API can be consumed by:

- 🌐 Web Applications
- 📱 Mobile Applications
- 🖥️ Admin Dashboards
- 🏪 Merchant Dashboards

[⬆ Back to Top](#top)

---

<a id="features"></a>

# 🚀 Features

<a id="authentication-authorization"></a>

## 🔐 Authentication & Authorization

- Customer Registration & Login
- Merchant Registration & Login
- Email Verification
- Resend Email Verification
- Forgot Password
- Reset Password
- Secure API Authentication
- Laravel Sanctum Token Authentication
- Role-Based Access Control
- Permissions Management
- Laravel Policies & Authorization
- Logout & Token Management

[⬆ Back to Top](#top)

---

<a id="customer-management"></a>

## 👤 Customer Management

- Customer Registration
- Customer Login
- Email Verification
- Password Reset
- Customer Profile
- Update Profile
- Manage Addresses
- View Orders
- Order History
- Wishlist Management
- Shopping Cart

[⬆ Back to Top](#top)

---

<a id="merchant-management"></a>

## 🏪 Merchant Management

- Merchant Registration
- Merchant Login
- Merchant Profile
- Store Management
- Merchant Dashboard
- Product Management
- Order Management
- Inventory Management
- Earnings Management
- Withdrawal Requests

### Merchant Registration Includes

- Personal Information
- Store Information
- Business Information
- Tax Number
- Commercial Registration Number
- Store Address
- Store Logo
- Store Banner

[⬆ Back to Top](#top)

---

<a id="store-management"></a>

## 🏬 Store Management

Merchants can:

- Create and manage stores
- Update store information
- Upload store logo and banner
- Manage store status
- Manage store products
- Manage inventory
- View store orders

[⬆ Back to Top](#top)

---

<a id="product-management"></a>

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

[⬆ Back to Top](#top)

---

<a id="category-management"></a>

## 📂 Category Management

- Create Categories
- Update Categories
- Delete Categories
- Parent & Child Categories
- Assign Products to Categories

[⬆ Back to Top](#top)

---

<a id="shopping-cart"></a>

## 🛒 Shopping Cart

Customers can:

- Add Products to Cart
- Update Product Quantity
- Remove Products
- View Cart
- Calculate Cart Total

[⬆ Back to Top](#top)

---

<a id="wishlist"></a>

## ❤️ Wishlist

Customers can:

- Add Products to Wishlist
- Remove Products from Wishlist
- View Wishlist

[⬆ Back to Top](#top)

---

<a id="order-management"></a>

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

[⬆ Back to Top](#top)

---

<a id="payment-management"></a>

## 💳 Payment Management

- Payment Processing
- Payment Status Tracking
- Multiple Payment Methods
- Payment History

[⬆ Back to Top](#top)

---

<a id="inventory-management"></a>

## 📊 Inventory Management

- Product Stock Tracking
- Stock Updates
- Low Stock Management
- Prevent Out-of-Stock Purchases

[⬆ Back to Top](#top)

---

<a id="reviews-ratings"></a>

## ⭐ Reviews & Ratings

Customers can:

- Review Products
- Rate Products
- Update Reviews
- Delete Reviews

[⬆ Back to Top](#top)

---

<a id="tech-stack"></a>

# 🛠️ Tech Stack

| Technology | Usage |
|---|---|
| 🐘 **PHP** | Backend Language |
| 🔥 **Laravel 13** | Backend Framework |
| 🐬 **MySQL** | Database |
| 🔐 **Laravel Sanctum** | API Authentication |
| 🛡️ **Spatie Permission** | Roles & Permissions |
| ⚖️ **Laravel Policies** | Authorization |
| 📬 **Laravel Notifications** | Email & System Notifications |
| ⚙️ **Laravel Queue** | Background Jobs |
| 📦 **Composer** | Dependency Management |
| 🔗 **REST API** | API Architecture |
| 🐙 **Git & GitHub** | Version Control |
| 🟠 **Postman** | API Testing & Documentation |

[⬆ Back to Top](#top)

---

<a id="architecture"></a>

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
├── Notifications/
├── Policies/
├── Services/
│
database/
│   ├── migrations/
│   ├── factories/
│   └── seeders/
│
routes/
│   └── api.php
```

The project separates responsibilities between:

- Controllers
- Models
- Form Requests
- API Resources
- Services
- Policies
- Middleware
- Notifications
- Queues
- Routes

### Request Flow

```text
Client Request
      ↓
    Route
      ↓
  Middleware
      ↓
 Form Request
      ↓
  Controller
      ↓
   Service
      ↓
Model / Database
      ↓
 API Resource
      ↓
JSON Response
```

This architecture makes the application easier to **maintain, test and scale**.

[⬆ Back to Top](#top)

---

<a id="api-endpoints"></a>

# 📌 API Endpoints

<a id="authentication-endpoints"></a>

## 🔐 Authentication

### Customer Registration

```http
POST /api/V1/auth/customer/register
```

### Merchant Registration

```http
POST /api/V1/auth/merchant/register
```

### Login

```http
POST /api/V1/auth/login
```

### Logout

```http
POST /api/V1/auth/logout
```

### Forgot Password

```http
POST /api/V1/auth/forgot-password
```

### Reset Password

```http
POST /api/V1/auth/reset-password
```

> Some authentication endpoints may require an authenticated user or verified email depending on the route configuration.

[⬆ Back to Top](#top)

---

<a id="product-endpoints"></a>

## 📦 Products

```http
GET    /api/products
GET    /api/products/{id}
POST   /api/products
PUT    /api/products/{id}
PATCH  /api/products/{id}
DELETE /api/products/{id}
```

[⬆ Back to Top](#top)

---

<a id="category-endpoints"></a>

## 📂 Categories

```http
GET    /api/categories
GET    /api/categories/{id}
POST   /api/categories
PUT    /api/categories/{id}
DELETE /api/categories/{id}
```

[⬆ Back to Top](#top)

---

<a id="cart-endpoints"></a>

## 🛒 Cart

```http
GET    /api/cart
POST   /api/cart
PUT    /api/cart/{id}
DELETE /api/cart/{id}
```

[⬆ Back to Top](#top)

---

<a id="order-endpoints"></a>

## 📋 Orders

```http
GET  /api/orders
POST /api/orders
GET  /api/orders/{id}
```

[⬆ Back to Top](#top)

---

<a id="installation"></a>

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

Open your `.env` file and configure your database:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ecommerce
DB_USERNAME=root
DB_PASSWORD=
```

Create the database before running the migrations.

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

## ⚙️ 10. Start Queue Worker

If the project uses queued notifications and background jobs:

```bash
php artisan queue:work
```

Keep the queue worker running in a separate terminal.

---

## 🚀 11. Start Development Server

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

[⬆ Back to Top](#top)

---

<a id="download"></a>

# 📦 Download Without Git

Don't have Git installed?

You can download the project manually:

1. Open the GitHub repository.
2. Click **Code**.
3. Select **Download ZIP**.
4. Extract the ZIP file.
5. Open the project directory.
6. Install the dependencies.

```bash
composer install
```

Then continue with the installation steps above.

[⬆ Back to Top](#top)

---

<a id="update"></a>

# 🔄 Update The Project

If you already have the project installed and want to download the latest changes:

```bash
git pull origin main
```

Then update the dependencies:

```bash
composer install
```

Run any new migrations:

```bash
php artisan migrate
```

Finally, clear the application cache:

```bash
php artisan optimize:clear
```

[⬆ Back to Top](#top)

---

<a id="api-testing"></a>

# 🧪 API Testing

You can test the API using:

- 🟠 Postman
- 🟣 Insomnia
- 🔵 Thunder Client

### Example Request

```http
POST /api/V1/auth/customer/register
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

### Example Success Response

```json
{
    "status": "success",
    "message": "Customer registered successfully",
    "data": {
        "name": "John Doe",
        "email": "john@example.com"
    }
}
```

> Response fields may vary depending on the current API implementation.

[⬆ Back to Top](#top)

---

<a id="security"></a>

# 🔒 Security

The project follows several security practices:

- 🔐 Laravel Sanctum Authentication
- 🔑 Password Hashing
- ✅ Request Validation
- 📧 Email Verification
- 🔄 Password Reset Tokens
- 👥 Role-Based Access Control
- 🛡️ Permissions
- ⚖️ Laravel Policies
- 🔒 Protected API Routes
- 🎟️ Token Revocation

> [!WARNING]
> Never commit your `.env` file to GitHub.
> It may contain database credentials, API keys, tokens and other sensitive information.

[⬆ Back to Top](#top)

---

<a id="roadmap"></a>

# 🗺️ Project Roadmap

> 🚧 **This project is currently under active development.**

### Core

- [x] Laravel Project Setup
- [x] Database Design
- [x] Customer Authentication
- [x] Login
- [x] Logout
- [x] Email Verification
- [x] Forgot Password
- [x] Reset Password
- [x] Laravel Queue
- [x] Notifications

### Users

- [x] Customer Registration
- [ ] Merchant Registration
- [ ] Customer Profile
- [ ] Merchant Profile

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
- [ ] Coupons

### Merchant

- [ ] Merchant Dashboard API
- [ ] Merchant Products
- [ ] Merchant Orders
- [ ] Merchant Earnings
- [ ] Withdrawal Requests

### Admin

- [ ] Admin Dashboard API
- [ ] Customer Management
- [ ] Merchant Management
- [ ] Product Management
- [ ] Order Management
- [ ] Withdrawal Management

[⬆ Back to Top](#top)

---

<a id="api-documentation"></a>

# 📚 API Documentation

The API documentation can be maintained using:

- 🟠 Postman Collection
- 📘 Swagger / OpenAPI

The documentation will include:

- Available endpoints
- HTTP methods
- Request parameters
- Request body examples
- Authentication requirements
- Validation errors
- Success responses
- Error responses
- HTTP status codes

> 📌 Full API documentation will be updated as development progresses.

[⬆ Back to Top](#top)

---

<a id="contributing"></a>

# 🤝 Contributing

Contributions, issues and feature requests are welcome.

### 1. Fork the Repository

Fork the repository to your GitHub account.

### 2. Clone Your Fork

```bash
git clone https://github.com/YOUR_USERNAME/Multi-VendorE-CommerceAPI.git
```

### 3. Create a New Branch

```bash
git checkout -b feature/new-feature
```

### 4. Commit Your Changes

```bash
git add .
git commit -m "Add new feature"
```

### 5. Push the Branch

```bash
git push origin feature/new-feature
```

### 6. Open a Pull Request

Open a Pull Request and describe the changes you made.

[⬆ Back to Top](#top)

---

<a id="author"></a>

# 👨‍💻 Author

<p align="center">

### Abdullah Ahmed EL-Dakhly

**Backend Developer**

PHP • Laravel • MySQL • REST APIs

<br>

<a href="https://github.com/abdullahEL-dakhly">
  <img src="https://img.shields.io/badge/GitHub-abdullahEL--dakhly-181717?style=for-the-badge&logo=github">
</a>

</p>

[⬆ Back to Top](#top)

---

<a id="license"></a>

# 📄 License

This project is open-source and available under the **MIT License**.

[⬆ Back to Top](#top)

---

<p align="center">
  Made with ❤️ using <strong>Laravel</strong>
</p>

<p align="center">
  ⭐ <strong>If you find this project useful, consider giving it a star!</strong> ⭐
</p>

<p align="center">
  <a href="#top">⬆ Back to Top</a>
</p>