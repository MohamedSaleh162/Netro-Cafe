# ☕ Netro Cafe Website — Setup Guide

A fully responsive café website built with **HTML, CSS, JavaScript** (frontend) and **PHP + MySQL** (backend).

---

## 📁 Project Structure

```
netro-cafe/
├── index.html           → Homepage
├── menu.html            → Full menu with category tabs
├── about.html           → About Us page
├── reservation.html     → Table reservation form
├── contact.html         → Contact form
├── login.html           → Login / Register page
│
├── css/
│   └── style.css        → All styles (responsive)
│
├── js/
│   └── main.js          → All JavaScript
│
├── images/
│   └── logo.png         → Netro Cafe logo
│
├── php/
│   ├── config.php       → Database connection
│   ├── database.sql     → Run this ONCE to set up tables
│   ├── reservation.php  → Handles reservation form
│   ├── contact.php      → Handles contact form
│   ├── login.php        → Handles login
│   ├── register.php     → Handles registration
│   └── logout.php       → Handles logout
│
└── admin/
    ├── dashboard.php    → Admin overview
    ├── reservations.php → Manage reservations
    ├── messages.php     → View contact messages
    └── users.php        → Manage users
```

---

## ⚙️ Setup Steps

### 1. Requirements
- PHP 7.4 or higher
- MySQL 5.7 or higher
- A local server: **XAMPP**, **WAMP**, or **MAMP**

### 2. Place files
Copy the `netro-cafe` folder into:
- **XAMPP** → `C:/xampp/htdocs/netro-cafe`
- **WAMP**  → `C:/wamp64/www/netro-cafe`

### 3. Set up the database
1. Open **phpMyAdmin** → `http://localhost/phpmyadmin`
2. Click **Import**
3. Select `php/database.sql`
4. Click **Go**

### 4. Configure the connection
Open `php/config.php` and update:
```php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');   // Your MySQL username
define('DB_PASS', '');       // Your MySQL password (empty for XAMPP default)
define('DB_NAME', 'netro_cafe');
```

### 5. Open the website
Visit: `http://localhost/netro-cafe/`

---

## 🔐 Admin Panel

Access the admin dashboard at:
`http://localhost/netro-cafe/admin/dashboard.php`

**Default admin credentials:**
- Email: `admin@netrocafe.com`
- Password: `password`

> ⚠️ Change the admin password immediately after first login!

---

## ✨ Features

### Frontend
- Fully responsive (mobile, tablet, desktop)
- Animated hero section with scroll effects
- Scrolling marquee strip
- Menu page with 12 category tabs & filtering
- Smooth scroll reveal animations
- Animated counter stats
- Mobile hamburger navigation

### Backend (PHP + MySQL)
- User registration & login with password hashing
- Session-based authentication
- Table reservation system (saved to DB)
- Contact form (saved to DB)
- Admin panel with:
  - Dashboard with live stats
  - Reservation management (confirm/cancel)
  - Messages inbox with read/unread tracking
  - User management (roles, delete)

---

## 🎨 Color Palette
| Color  | Hex       | Usage              |
|--------|-----------|--------------------|
| Dark   | `#1a0e0a` | Navbar, Footer     |
| Gold   | `#c87941` | Accents, Buttons   |
| Cream  | `#fdf6ee` | Page background    |
| White  | `#ffffff` | Cards              |

---

*Built for college project — Netro Cafe & More, Est. 2022, Suez, Egypt*
