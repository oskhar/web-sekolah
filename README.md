<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## A. Info Project

-   Tujuan: Membangun website sekolah yang berfungsi sebagai platform informasi dan interaksi antara siswa, guru, dan orang tua.
-   Fitur: Halaman beranda, profil sekolah, daftar pengumuman, jadwal pelajaran, daftar siswa, daftar guru, sistem autentikasi pengguna, dll.
    <a href="resource/docs/info_lanjutan.md">Info lebih lanjut</a>

## B. Persiapan dan Installasi

Tidak seperti CodeIgniter, Laravel saat pertama kali diinstall projectnya sudah termasuk dengan depedensi yang dibutuhkan. Tapi meski begitu, tetap saja kita perlu beberapa persiapan dan konfigurasi untuk menjalankan project laravel agar dapat berkontribusi dengan baik.

Pastikan php yang terinstall di laptop kalian adalah php versi 7 keatas. Saya menggunakan PHP versi 8.2.6 (cli).

1.) Konfigurasi pada file php.ini => Pastikan beberapa ekstensi berikut siap dipakai dan sudah di-uncomment

    - extension=bcmath
    - extension=curl
    - extension=exif
    - extension=intl
    - extension=zip

2.) Duplikat file .env.example dan ubah namanya menjadi .env saja. lalu kalian hanya perlu memasukan informasi yang sesuai dengan kondisi server kalian, seperti database, username database, password database dan semacamnya.

3.) Generate key yang baru untuk tujuan keamanan. Untuk membuat key enkripsi yang baru anda dapat menjalankan perintah berikut dalam terminal.

```
    ~$ php artisan key:generate
```

4.) Lakukan migrasi database untuk memangun struktur database yang sesuai dengan project yang sedang dibangun.

```
    ~$ php artisan migrate
```

5.) Lakukan seeding database bila diperlukan, untuk menambahkan data palsu atau data uji coba ke dalam database.

```
    ~$ php artisan db:seed
```

6.) Sampai tahap ini semua sudah selesai dan tinggal menjalankan program saja, dan melakukan proses developing. Perlu diketahui bahwa 5 perintah di atas biasanya hanya sekali dilakukan, tapi masih bisa diotak atik lagi sesuai kebutuhan. Berikut adalah cara untuk menjalankan server laravel

```
    ~$ php artisan serve
```

## C. Rule atau Aturan

Berikut adalah beberapa aturan yang harus dijadikan pedoman selama pembuatan program, aturan ini harus ditaati baik oleh saya sendiri maupun anggota tim yang lain guna menciptakan kondusifitas selama kegiatan kolaboratif.

#### a. standar penamaan

Kesepakatan untuk penamaan pada setiap bagian yang ada di dalam project.

Penamaan harus bersifat informatif tapi effektif, Maksimal terdiri 5 kata.

-   Menggunakan snake case (Ex. penulisan_seperti_ini)
    -   penamaan file
    -   penamaan folder
    -   key pada array, season, dan semacamnya
    -   penamaan database
    -   penamaan tabel pada database
    -   penamaan field pada table
-   Menggunakan camel case (Ex. penulisanSepertiIni)
    -   variabel
    -   fungsi
    -   atribute pada class
    -   method pada class
-   Menggunakan kebab case (Ex. penulisan-seperti-ini)
    -   class dan id pada html

#### b. lebar tab

Untuk lebar tab sementara sepakat menggunakan 4 spasi untuk setiap bahasa pemrograman dan setiap program.

#### d. ketentuan komentar

Pastikan bahwa komentar tidak dibuat untuk menjelaskan nama variabel, nama fungsi, atau semacamnya, karna informasi tentang variabel terdapat pada nama variabel tersebut, sehingga komentar tidak diperlukan untuk menjelaskan ulang mengenai info atau deskripsi dari variabel.

Komentar hanya menjelaskan tetang logic yang berjalan pada program dibawahnya.

Khusus untuk HTML, komentar bisa digunakan untuk memisahkan setiap bagian yang ada sehingga developer dapat fokus pada satu bagian yang jelas jika ingin melakukan perubahan.

## D. Alur Pengembangan

Berikut adalah alur yang harus diikuti baik bagi saya maupun bagi setiap anggota tim.

#### a. struktur folder

Laravel memiliki struktur folder yang cantik, terutama pada vendor yang menyimpan library inti laravel. Khusus untuk frontend developer yang tidak terlalu mendalami laravel atau bahkan tidak tau cara kerja dengan laravel, berikut adalah beberapa folder yang perlu dipahami dalam membuat view yang akan ditampilkan kepada user.
