<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Project

Website Quản lý khách sạn

## Install

1. Clone:
- HTTPS: git clone https://gitlab.com/vuduy0212/cnpm.git
- SSH: git clone git@gitlab.com:vuduy0212/cnpm.git

2. Install Package
- composer install
- npm install
- npm run dev

3. Tạo database và config database
- Tạo database có tên khachsan trên phần mềm quản lý mysql
- cp .env.example .env
- Cập nhật file env: DB_DATABASE=khachsan

4. Tạo key
- php artisan key:generate

5. Tạo ra các bảng và dữ liệu mẫu cho database
- php artisan migrate
- php artisan db:seed
- php artisan db:seed --class='UserSeeder'

6. Chạy trên web và đăng nhập để sử dụng
- Username: super_admin@gmail.com
- Password: 12345678

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
