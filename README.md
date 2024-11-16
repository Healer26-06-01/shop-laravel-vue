# Laravel-Vue-SPA-Ecommerce:

SPA Laravel E-commerce project. E-commerce platform with REST Api, Multiple Auth (admin , editor , user) and admin panel integration.

## Features:
- Authentication and Authorization (Breeze Starter kit)
- Multiple Authentication (Admin, Editors, Users)
- Search (Name, Tag, SKU)
- Reports
- Chart report
- Add dynamic product Attributes
- Coupon
- Shipping
- payment gateway
- Site settings
- Mobile First Design


![Dashboard](https://i.ibb.co/mD1jSpN/image.png)

## Run Locally:

Clone the project:

```bash
  git clone https://github.com/Healer26-06-01/shop-laravel-vue.git
```

Go to the project frontend directory:

```bash
  cd shop/frontend
```

Install frontend dependencies:

```bash
  npm install
```
Run frontend:

```bash
  npm run dev
```

Go to the project backend directory:

First open new terminal.

```bash
  cd shop/backend
```

Install dependencies:

```bash
  composer install
  npm install
```
Create .env file and copy .env.example to .env, create database name and add into .env database name.

Key Generate
```bash
  php artisan key:generate
```
Storage Link
```bash
  php artisan storage:link
```

Migrate database:

```bash
  php artisan migrate --seed
```

Run project:

```bash
  php artisan serve
```

Open another terminal for vite:

```bash
  cd shop/backend
```

```bash
  npm run dev
```

Open: http://127.0.0.1:8000

**If you work with order, add stripe key and mail config in .env**

## Tech Stack

**Client:** Vue.js, Pinia, Axios, Bootstrap, sweetalert2

**Server:** PHP8.1, Laravel10.x, Liveware, Bootstrap


## Authors

- [@Healer](https://github.com/Healer26-06-01)
