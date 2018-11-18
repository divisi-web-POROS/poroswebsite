# Website Organisasi POROS

POROS adalah organisasi yang mewadahi pengguna GNU/Linux serta perangkat lunak sumber terbuka, bebas, dan legal di Universitas Brawijaya pada umumnya, di Fakultas Ilmu Komputer pada khususnya.

<!-- ## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system. -->

### Prasyarat

Untuk menjalankan website secara dikomputer anda, dibutuhkan :
1. [Composer](https://getcomposer.org/download/)
2. Apache2
3. MySql
4. PHP

### Instalasi

Step - step untuk menjalankan website di workspace secara lokal

Clone projek

```
git clone https://github.com/divisi-web-POROS/poroswebsite.git
```

Pindah ke direktori projek

```
cd poroswebsite
```

Install dependencies

```
composer install
```

Buat file .env dengan isi template seperti file .env.example, Kemudian isi informasi database

```
DB_DATABASE=(NAMA_DATABASE)
DB_USERNAME=(USERNAME_DATABASE)
DB_PASSWORD=(PASSWORD_DATABASE)
```

Generate Key

```
php artisan key:generate
```

Generate tabel beserta data bawaan

```
php artisan migrate --seed
```

Projek sudah siap untuk dijalankan

```
php artisan serve
```

Kemudian akses website menggunakan browser dengan URL

```
localhost:8000
```

<!-- ## Running the tests

Explain how to run the automated tests for this system

### Break down into end to end tests

Explain what these tests test and why

```
Give an example
```

### And coding style tests

Explain what these tests test and why

```
Give an example
```

## Deployment

Add additional notes about how to deploy this on a live system -->

## Dikembangkan menggunakan library/template

* [Laravel 5.4](https://laravel.com/docs/5.4) - PHP Website Framework
* [Voyager Admin](https://laravelvoyager.com/) - Laravel Admin Package
* [SIAM UB Auth](https://github.com/araditama/siam-ub-auth) - Vendor SIAM UB thanks to [Araditama](https://github.com/araditama)
* [JWT Auth](https://github.com/tymondesigns/jwt-auth) - Token based Auth
* [BizPro Template](https://themewagon.com/themes/free-business-website-template-one-page/) - HTML5 Template
* [OpenStreetMap](https://www.openstreetmap.org/about) - Visual Penunjuk Lokasi

<!-- ## Contributing

Please read [CONTRIBUTING.md](https://gist.github.com/PurpleBooth/b24679402957c63ec426) for details on our code of conduct, and the process for submitting pull requests to us.

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/your/project/tags).  -->

## Pengembang

* **Divisi Website POROS** - *Penanggung jawab* - [Account Page](https://github.com/divisi-web-POROS)

Daftar [kontributor](https://github.com/divisi-web-POROS/poroswebsite/graphs/contributors) yang berpartisipasi dalam projek.

## Lisensi

Projek ini dibawah lisensi MIT - lihat di [LICENSE](LICENSE) file untuk lebih jelas

<!-- ## Acknowledgments

* Hat tip to anyone whose code was used
* Inspiration
* etc -->
