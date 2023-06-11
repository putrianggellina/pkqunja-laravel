# PKQ UNJA

System ini dibuat untuk mempermudah mahasiswa dalam proses mengaji sampai dengan mendapatkan serifikat PKQ UNJA
## Features Mahasiswa

- Mendaftar
- Mengaji
- Mendapatkan Sertifikat

## Features Admin

- Daftar Mahasiswa
- List Mengaji
- Verifikasi Sertifikat

## Tech

- [CRUDBOOSTER] - membantu dalam pembuatan website 
- [Laravel] - framework berbasis bahasa pemrograman PHP yang bisa digunakan untuk membantu proses pengembangan sebuah website agar lebih maksimal. Dengan menggunakan Laravel, website yang dihasilkan akan lebih dinamis.

## Installation
 1. download atau salin link project pada github yang sudah dishare
 2. setelah itu buka file project yang sudah terinstall pada vscode
 3. buka terminal lalu ketikan 
    ```sh
    composer install 
    ```
 4. buka file yang bernama (.env.example)
    ```sh
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=
    ```
 5. ganti BD_DATABASE menjadi seperti dibawah ini
     ```sh
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=pkqunja
    DB_USERNAME=root
    DB_PASSWORD=
    ```
 6. setelah itu jangan lupa save dan ganti file (.env.example) menjadi (.env)
 7.  selanjutnya membuat database pada phpmyadmin dengan nama (pkqunja)
 8.  untuk mendapatkan APP_KEY yang sebelumnya tidak ada makan ketikan kode berikut pada terminal
        ```sh
        php artisan key:generate
        ```
 9. setelah itu maka impor database dibawah
    
    data base: https://drive.google.com/file/d/1GHQkOPiG4CcjCRuhfxpX-5yxGP7rm88b/view?usp=sharing
    
    data base tersebut berisikan data-data seperti data user dan data admin maka wajib di impor
 10.  setelah berhasil di impor masuk kembali ke terminal dan jalankan perintah berikut
         ```sh
        php artisan serve
        ```

##  Cara untuk menjalankan project
 1. open crome dan ketikan http://127.0.0.1:8000/tampilan/login pada pencarian browser, jangan lupa nyalakan xampp
 2. untuk masuk ke tampilan user makan untuk username dan passwordnya adalah seperti dibawah
    ```sh
    username : user@gmail.com
    password : 123456
    ```
 3. untuk masuk ke tampilan admin makan untuk username dan passwordnya adalah seperti dibawah
    ```sh
    username : admin@gmail.com
    password : 123456
    ```
