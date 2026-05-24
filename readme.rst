# FazTech — Security Solutions Company Website

> A full-stack company profile and e-commerce website for **FazTech Solution**, a professional security systems provider based in Bekasi, West Java. Built from scratch — from UI design to production deployment.

[![CodeIgniter](https://img.shields.io/badge/CodeIgniter-3.x-EF4223?style=flat&logo=codeigniter&logoColor=white)](https://codeigniter.com)
[![PHP](https://img.shields.io/badge/PHP-7.4+-777BB4?style=flat&logo=php&logoColor=white)](https://php.net)
[![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?style=flat&logo=mysql&logoColor=white)](https://mysql.com)
[![Status](https://img.shields.io/badge/Status-Live-brightgreen)](https://faztechcctv.com)
[![Role](https://img.shields.io/badge/Role-Solo%20Developer%20%26%20Designer-blue)](https://maullanna.github.io/Portofolio)

---

## 🌐 Live Website

**[faztechcctv.com](https://faztechcctv.com)** — Currently live and actively used by the client.

---

## 📌 Overview

FazTech is a full-stack web project developed independently for a CCTV and security systems business client. I handled the entire project lifecycle — from requirements gathering, UI/UX design, backend development, to production deployment on a live hosting environment.

The website serves as both a **company profile** and a **product catalog platform** with an inquiry/order system, connected to a full admin panel for content management.

---

## ✨ Features

### Public Website
| Feature | Description |
|---|---|
| 🏠 **Landing Page** | Hero section, company highlights, featured packages |
| 📦 **Product Catalog** | Categorized products (CCTV, CCTV WiFi, Access Control, Barrier Gate, Smart Solution) |
| 🛒 **Order Form** | Customer inquiry & order submission form with property type selection |
| 🖼️ **Portfolio Gallery** | Visual documentation of completed installation projects |
| ⭐ **Testimonials** | Customer reviews with photo |
| 👤 **Company Profile** | About page with company background |
| ❓ **FAQ Section** | Common questions with expandable answers |
| 📞 **Contact & WhatsApp** | Direct WhatsApp integration for quick consultation |
| 📱 **Responsive Design** | Fully responsive across mobile, tablet, and desktop |

### Admin Panel
| Feature | Description |
|---|---|
| 📦 **Product Management** | Add, edit, delete products with image upload |
| 🗂️ **Category Management** | Manage product categories |
| 🛒 **Order Management** | View and manage incoming customer orders |
| 🖼️ **Gallery Management** | Upload and manage portfolio/job photos |
| ⭐ **Testimonial Management** | Manage customer testimonials with photos |
| ❓ **FAQ Management** | Add and edit FAQ content |
| 🔐 **Admin Authentication** | Secure login for admin access |

---

## 🛠️ Tech Stack

| Layer | Technology |
|---|---|
| **Backend** | PHP 8.0, CodeIgniter 3.x |
| **Frontend** | HTML5, CSS3, JavaScript, Bootstrap |
| **Database** | MySQL 8.0 |
| **UI Design** | Custom design from scratch (no template) |
| **Deployment** | Shared Hosting / VPS |
| **Version Control** | Git & GitHub |

---

## 🗂️ Project Structure

```
faztech-main/
├── application/
│   ├── controllers/
│   │   ├── Home.php              # Landing page controller
│   │   ├── Produk.php            # Product catalog
│   │   ├── Pekerjaan.php         # Portfolio/jobs gallery
│   │   ├── Testimoni.php         # Customer testimonials
│   │   ├── Profile.php           # Company profile
│   │   └── Admin/                # Admin panel controllers
│   │       ├── Dashboard.php
│   │       ├── Products.php
│   │       ├── Orders.php
│   │       ├── Gallery.php
│   │       └── Testimonials.php
│   ├── models/
│   │   ├── Product_model.php
│   │   ├── Order_model.php
│   │   ├── Gallery_model.php
│   │   └── Testimonial_model.php
│   └── views/
│       ├── home/                 # Public pages
│       └── admin/                # Admin panel pages
├── assets/
│   ├── img/                      # Static images
│   ├── css/                      # Custom stylesheets
│   └── js/                       # Custom scripts
├── uploads/
│   ├── products/                 # Product images
│   ├── jobs/                     # Portfolio photos
│   └── testimonials/             # Testimonial photos
└── README.md
```

---

## ⚙️ Installation

### Prerequisites
- PHP 8.0+
- MySQL 8.0
- Apache/Nginx web server
- Composer (optional)

### Setup

```bash
# Clone repository
git clone https://github.com/maullanna/faztech-main.git
cd faztech-main
```

### Database Configuration

Edit `application/config/database.php`:

```php
$db['default'] = array(
    'hostname' => 'localhost',
    'username' => 'your_db_user',
    'password' => 'your_db_password',
    'database' => 'faztech_db',
    'dbdriver' => 'mysqli',
);
```

### Base URL Configuration

Edit `application/config/config.php`:

```php
$config['base_url'] = 'http://localhost/faztech-main/';
```

### Import Database

```bash
mysql -u root -p faztech_db < database/faztech_db.sql
```

### Run

```bash
# Using PHP built-in server
php -S localhost:8000

# Or configure Apache/Nginx virtual host
```

---

## 🔐 Security

- **CSRF Protection** — Enabled on all form submissions
- **XSS Prevention** — Input filtering on all user inputs via CodeIgniter's Security class
- **SQL Injection Prevention** — Active Record / Query Builder for all database queries
- **Admin Authentication** — Session-based authentication with login protection on all admin routes
- **File Upload Validation** — File type and size validation on all image uploads

---

## 📱 Pages Overview

| Route | Page |
|---|---|
| `/` | Landing page with hero, features, packages, gallery, testimonials, FAQ, contact |
| `/produk` | Full product catalog |
| `/kategori/:slug` | Products filtered by category |
| `/pekerjaan` | Portfolio / installation gallery |
| `/testimoni` | Customer testimonials |
| `/profile` | Company profile |
| `/admin` | Admin login |
| `/admin/dashboard` | Admin dashboard |
| `/admin/products` | Product management |
| `/admin/orders` | Order management |

---

## 🎨 Design

- Designed from scratch — no premium templates used
- Custom color scheme matching FazTech brand identity
- Mobile-first responsive layout
- WhatsApp floating button for direct customer contact
- Online status indicator for live customer support feel

---

## 👨‍💻 Developer

**Yusuf Maulana** — Solo Developer & UI Designer

- 🌐 Portfolio: [maullanna.github.io/Portofolio](https://maullanna.github.io/Portofolio)
- 💼 LinkedIn: [linkedin.com/in/yusuf-maulana-a3888736a](https://www.linkedin.com/in/yusuf-maulana-a3888736a)
- 📧 Email: maullanna35@gmail.com

---

## 📄 License

This project is licensed under the MIT License. The original CodeIgniter framework is licensed under the [MIT License](https://opensource.org/licenses/MIT).
