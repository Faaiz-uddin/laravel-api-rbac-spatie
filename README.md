# Laravel RBAC API with Spatie Permission

A secure and scalable Laravel REST API implementing **Role-Based Access Control (RBAC)** using [Spatie Permission](https://spatie.be/docs/laravel-permission) and **Laravel Sanctum** for authentication. Built for blog-style content management with roles like **Admin**, **Author**, and **Viewer**.

## 🔐 Features

- ✅ Role-Based Access Control (RBAC)
- ✅ Secure token-based authentication using Laravel Sanctum
- ✅ Granular permission handling with Spatie Permission
- ✅ RESTful API endpoints
- ✅ Clean and consistent JSON responses
- ✅ Ownership checks & global admin override
- ✅ Ready for extension with more roles and features

---

## 📚 Roles and Permissions

| Role    | Permissions                                                                 |
|---------|-----------------------------------------------------------------------------|
| Admin   | Full control over all posts; can manage everything                          |
| Author  | Can view, create, edit, and delete **own** posts                            |
| Viewer  | Read-only access to all published posts                                     |

---

## 🚀 What We’ll Build

- Blog API with role-based authorization
- Sanctum-powered authentication system
- Secure endpoints for:
  - Creating, editing, and deleting posts
  - Viewing posts (public and protected)
- Middleware & policy-based authorization
- Proper error handling for unauthorized access

---

## 🛠️ Tech Stack

- Laravel 12
- Laravel Sanctum
- Spatie Laravel Permission
- MySQL 
- Postman (for API testing)

---

## 📦 Installation

```bash
git clone https://github.com/bantawa04/laravel-rabc.git
cd laravel-rabc

# Install dependencies
composer install

# Set up environment
cp .env.example .env
php artisan key:generate

# Configure database in .env, then run:
php artisan migrate --seed

# Install Sanctum
php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"

# Serve the app
php artisan serve
