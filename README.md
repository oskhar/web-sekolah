<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## A. Info Project

-   Tujuan: Membangun website sekolah yang berfungsi sebagai platform informasi dan interaksi antara siswa, guru, dan orang tua.
-   Teknologi: `sweetalert2` versions 11.6.14
-   Fitur: Halaman beranda, profil sekolah, daftar pengumuman, jadwal pelajaran, daftar siswa, daftar guru, sistem autentikasi pengguna, dll.
    <a href="resources/docs/info_lanjutan.md">Info lebih lanjut</a>

## B. Persiapan dan Installasi

Tidak seperti CodeIgniter, Laravel saat pertama kali diinstall projectnya sudah termasuk dengan depedensi yang dibutuhkan. Tapi meski begitu, tetap saja kita perlu beberapa persiapan dan konfigurasi agar program laravel dapat berjalan dengan baik.

Pastikan php yang terinstall di laptop kalian adalah php versi 7 keatas. Saya menggunakan PHP versi 8.2.6 (cli).

1.) Konfigurasi pada file php.ini => Pastikan beberapa ekstensi berikut siap dipakai (sudah di-uncomment)

    - extension=bcmath
    - extension=curl
    - extension=exif
    - extension=intl
    - extension=zip

2.) clone repository ke dalam folder yang diinginkan

```
    ~$ cd folder_tujuan
    ~$ git clone https://github.com/MuhamadOskhar/web-sekolah.git
    ~$ cd web-sekolah
```

3.) Install semua depedensi yang dibutuhkan laravel

```
    ~$ composer install
```

4.) Duplikat file `.env.example` dan ubah namanya menjadi `.env`. lalu kalian hanya perlu memasukan informasi yang sesuai dengan kondisi server kalian, seperti database, username database, password database dan semacamnya.

5.) Generate key yang baru untuk tujuan keamanan. Untuk membuat key enkripsi yang baru anda dapat menjalankan perintah berikut dalam terminal.

```
    ~$ php artisan key:generate
```

6.) Lakukan migrasi database untuk memangun struktur database yang sesuai dengan project yang sedang dibangun.

```
    ~$ php artisan migrate
```

7.) Lakukan seeding database **bila diperlukan**, untuk menambahkan data palsu atau data uji coba ke dalam database.

```
    ~$ php artisan db:seed
```

8.) Sampai tahap ini semua sudah selesai dan tinggal menjalankan program saja, dan melakukan proses developing. Perlu diketahui bahwa 5 perintah di atas biasanya hanya sekali dilakukan, tapi masih bisa diotak atik lagi sesuai kebutuhan. Berikut adalah cara untuk menjalankan server laravel

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

#### e. pelaporan bug dan error

Bug dan error yang terjadi selama pengembangan hanya dibahas pada issue yang sudah disediakan dalam task project github, hal ini bertujuan agar pembahasan topik menjadi lebih jelas dan menyingkirkan berbagai topik yang tidak berkaitan, sehingga forum diskusi menjadi lebih effektif dan terarah.

#### f. penggunaan blade

Blade merupakan program yang dirancang dengan tujuan agar developer tidak perlu lagi membuat program php yang berantakan dan menyatu dengan html. Program yang rapi akan memberikan kemudahan tersendiri dalam mengembangkan program sekala besar.

Hindari penggunaan program php dalam laravel view, pasikan semua program php yang ingin digunakan harus diganti dengan blade.

1.) mengakses file css dan javascript menggunakan blade. Untuk mengakses file css, pertama anda harus siapkan file css dan masukan file css tersebut ke dalam folder public seperti ini: `public/css/nama_folder_induk/nama_file.css`

setelah progam cssnya tersedia, developer bisa memanggil filenya dengan program ini: `<link rel="stylesheet" href="{{ asset('css/pages/home.css' )}}">` jadi pastikan anda memanggil nama file dalam folder dengan penggunaan link seperti ini `{{ asset('css/pages/home.css' )}}`

## D. Alur Pengembangan

Berikut adalah alur yang harus diikuti baik bagi saya maupun bagi setiap anggota tim.

#### a. struktur folder

Laravel memiliki struktur folder yang cantik, terutama pada vendor yang menyimpan library inti laravel. Khusus untuk frontend developer yang tidak terlalu mendalami laravel atau bahkan tidak tau cara kerja dengan laravel, berikut adalah beberapa folder yang perlu dipahami dalam membuat view yang akan ditampilkan kepada user.

#### b. melaksanakan sprint

Sprint adalah jangka waktu untuk melakukan fokus dalam mencapai objektif yang telah ditentukan (<a href="resources/docs/sprint.md">Lebih detail mengenai sprint</a>).

#### c. panduan pembuatan file

Saat anggota tim developer akan membuat tampilan kedalam bentuk kode program, tentu seorang developer harus membuat file yang menampung kode programnya. Berikut adalah panduan untuk pembuatan file pada setiap halaman web yang akan dibuat.

##### page general (Tanpa Login)

1.) standar penamaan file:

| Page Name              | Pembuatan File                                   |
| ---------------------- | ------------------------------------------------ |
| Halaman Home           | resources/views/pages/`home.blade.php`           |
| Halaman Tentang        | resources/views/pages/`tentang.blade.php`        |
| Halaman Latar Belakang | resources/views/pages/`latar_belakang.blade.php` |
| Halaman Visi Misi      | resources/views/pages/`visi_misi.blade.php`      |
| Halaman Berita & Acara | resources/views/pages/`berita_acara.blade.php`   |
| Halaman Contact        | resources/views/pages/`contact.blade.php`        |
| Halaman Materi         | resources/views/pages/`materi.blade.php`         |
| Halaman Login Murid    | resources/views/pages/`login_murid.blade.php`    |
| Halaman Login Guru     | resources/views/pages/`login_guru.blade.php`     |
| Halaman Login Admin    | resources/views/pages/`login_admin.blade.php`    |

2.) template penulisan:

```blade
@extends('components.template_pages')

@section('title', "{{Masukan title sesuai halaman di sini (Ex. Halaman Home)}}")

@section('mainContainer')
    {{Masukan isi code program sesuai dengan disain yang diberikan}}
@endsection
```

3.) link untuk akses setiap halaman

| Page Name              | URL             |
| ---------------------- | --------------- |
| Halaman Home           | /               |
| Halaman Tentang        | /tentang        |
| Halaman Latar Belakang | /latar-belakang |
| Halaman Visi Misi      | /visi-misi      |
| Halaman Berita & Acara | /berita-acara   |
| Halaman Contact        | /contact        |
| Halaman Materi         | /materi         |
| Halaman Login Murid    | /login/murid    |
| Halaman Login Guru     | /login/guru     |
| Halaman Login Admin    | /login/admin    |

##### page student (Login Akun Murid)
