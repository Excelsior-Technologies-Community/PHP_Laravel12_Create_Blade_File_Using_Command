# PHP_Laravel12_Create_Blade_File_Using_Command

---

##  Introduction

This project demonstrates **how to create Blade view files using Artisan commands in Laravel 12**. It is designed for beginners and freshers to clearly understand:

* Laravel 12 project setup
* Laravel directory structure
* Creating Blade files using the `make:view` command
* Connecting Blade views with routes

This project follows best practices and uses **pure Laravel 12 commands**.

---

##  Project Overview

In Laravel, **Blade** is the powerful templating engine used to build application views. Instead of manually creating `.blade.php` files, Laravel 12 provides an Artisan command to generate them quickly and cleanly.

In this project, we will:

* Create a Laravel 12 project
* Generate Blade view files using Artisan commands
* Organize views using folders
* Display views using web routes

This project is purely focused on **view creation and structure**, without database or authentication complexity.

---

##  Prerequisites

Make sure the following are installed on your system:

* PHP 8.1 or higher
* Composer


Check versions using:

```bash
php -v
composer -v
```

---

## Create Laravel 12 Project

Run the following command in terminal:

```bash
composer create-project laravel/laravel PHP_Laravel12_Create_Blade_File_Using_Command "12.*"
```

### Explanation:

* `composer create-project` installs Laravel
* `laravel/laravel` is the official Laravel package
* `"12.*"` ensures Laravel version 12

---

##  Move into Project Directory

```bash
cd PHP_Laravel12_Create_Blade_File_Using_Command
```

---

##  Run Laravel Development Server

```bash
php artisan serve
```

Access the project in browser:

```
http://localhost:8000
```

---

##  Create Blade Files Using Artisan Command

###  Create a Simple Blade File

```bash
php artisan make:view home
```

This command creates:

```text
resources/views/home.blade.php
```

---

###  Create Blade File Inside Folder

```bash
php artisan make:view users.index
```

This command creates:

```text
resources/views/users/index.blade.php
```

**Note:** Dot (`.`) notation automatically creates folders.

---

##  Blade File Examples

### resources/views/home.blade.php

```blade
<!DOCTYPE html>
<html>
<head>
    <title>Laravel 12 Blade Example</title>
</head>
<body>

    <!-- Home Page Content -->
    <h1>Hello Laravel 12!</h1>
    <p>This Blade file is created using Artisan command.</p>

</body>
</html>
```

---

### resources/views/users/index.blade.php

```blade
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
</head>

<body>
    <div>
        <!-- Users Index Page -->
        <h2>User List Page</h2>
        <p>This view is inside users folder.</p>
    </div>
</body>

</html>
```

---

##  Define Routes for Blade Views

Open `routes/web.php` and add the following:

```php
<?php

use Illuminate\Support\Facades\Route;

// Home route
Route::get('/home', function () {
    return view('home');
});

// Users page route
Route::get('/users', function () {
    return view('users.index');
});
```

##  Project Structure

```text
PHP_Laravel12_Create_Blade_File_Using_Command/
│
├── app/                    # Application logic
├── bootstrap/              # Framework bootstrapping
├── config/                 # Configuration files
├── public/                 # Public entry point
├── resources/
│   └── views/              # Blade view files
│       ├── home.blade.php
│       └── users/
│           └── index.blade.php
├── routes/
│   └── web.php             # Web routes
├── storage/                # Logs and cache
├── tests/                  # Test files
├── .env                    # Environment config
└── composer.json
```

---

##  Access Pages in Browser

| Page       | URL                                                        |
| ---------- | ---------------------------------------------------------- |
| Home Page  | [http://localhost:8000/home](http://localhost:8000/home)   |
| Users Page | [http://localhost:8000/users](http://localhost:8000/users) |

---

##  Commands Summary

| Purpose                     | Command                                                                                        |
| --------------------------- | ---------------------------------------------------------------------------------------------- |
| Create Laravel 12 project   | `composer create-project laravel/laravel PHP_Laravel12_Create_Blade_File_Using_Command "12.*"` |
| Run development server      | `php artisan serve`                                                                            |
| Create Blade file           | `php artisan make:view home`                                                                   |
| Create Blade file in folder | `php artisan make:view users.index`                                                            |

---

##  Conclusion

This project clearly explains how to **create Blade view files using Artisan commands in Laravel 12**. It helps beginners understand:

* Laravel project setup
* Blade file creation
* View organization
* Routing with views

This project is **simple, clean, and submission‑ready** for academic or training purposes.

---

## Output

Home Page
---
<img width="1919" height="1092" alt="Screenshot 2025-12-15 113707" src="https://github.com/user-attachments/assets/0581964d-32fc-46d6-a1ed-73d5b09048cb" />

Users Page
---
<img width="1919" height="1089" alt="Screenshot 2025-12-15 113730" src="https://github.com/user-attachments/assets/6b2758de-fd80-49ee-8df7-c0de5466f3fa" />

---

Now Your PHP_Laravel12_Create_Blade_File_Using_Command Project is Ready!



