
# <div style="display:flex; align-items:center; justify-content:center; gap:10px;"><img src="public/images/logo.png" alt="logo" width="100" style="margin-right:30px" />Food Menu System (Laravel)<img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300" alt="Laravel Logo"></div>

![Laravel](https://img.shields.io/badge/Laravel-10.x-red?logo=laravel)  ![TailwindCSS](https://img.shields.io/badge/TailwindCSS-3.x-38B2AC?logo=tailwind-css) ![MySQL](https://img.shields.io/badge/Database-MySQL-blue?logo=mysql)

## ✨ Features
- 📋 Manage Food Menus (Create, Read, Update, Delete)  
- 🖼️ Upload & Display Food Images (stored in `storage/app/public`)  
- 💰 Manage Menu Price & Description  
- 📱 Responsive UI with TailwindCSS
- 🌐 Provides Public API

## 🛠️ Tech Stack
- **Framework**: Laravel 10  
- **Frontend**: TailwindCSS  
- **Database**: MySQL  
- **Bundler**: Vite  

## 🚀 Installation
1. Clone this repository:

```bash
  git clone https://github.com/ariefmb/food-menu-system-laravel.git
  cd food-menu-system-laravel
```
2. Install PHP dependencies:

```bash
  composer Install
```
3. Install Node.js dependencies

```bash
  npm install
```
4. Configure your database in `.env`, then run migration:

```bash
  php artisan migrate
```
5. Link storage for images:

```bash
  php artisan storage:link
```
6. Start development server:

```bash
  php artisan serve
  npm run dev
```

## Screenshots
<div style="display:flex; align-items:center; justify-content:center; gap:10px;">
<img src="public/images/ss-1.png" alt="dashboard" width="500" />
<img src="public/images/ss-2.png" alt="tambah menu" width="500" />
<img src="public/images/ss-3.png" alt="edit menu" width="500" />
</div>

## Authors
- Developed by [ariefmb](https://www.github.com/ariefmb)🚀

## License
The Laravel framework is open-sourced software licensed under the [MIT License](https://opensource.org/license/MIT)
