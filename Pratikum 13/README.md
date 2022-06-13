# Praktikum 13: Framework Lanjutan (Modul Login)

#### Nama   : Fajar Firmansyah
#### Nim    : 312010309
#### Kelas  : TI.20.A2

### Langkah-langkah Praktikum

### Persiapan.

Untuk memulai membuat modul Login, yang perlu disiapkan adalah database server
menggunakan MySQL. Pastikan MySQL Server sudah dapat dijalankan melalui
XAMPP.

### Membuat Table User

Masuk kedalam databse `lab_ci4` dan buat table baru seperti dibawah ini

![1.png](img/1.png)

### Membuat Model User

Selanjutnya adalah membuat Model untuk memproses data Login. Buat file baru pada
direktori `app/Models` dengan nama `UserModel.php`

![2.png](img/2.png)

### Membuat Controller User

Buat Controller baru dengan nama `User.php` pada direktori `app/Controllers`.
Kemudian tambahkan method `index()` untuk menampilkan daftar user, dan method
`login()` untuk proses login.

![3.png](img/3.png)

![4.png](img/4.png)

### Membuat View Login

Buat direktori baru dengan nama `user` pada direktori `app/views`, kemudian buat file
baru dengan nama `login.ph`p. 

![5.png](img/5.png)

### Membuat Database Seeder

Database seeder digunakan untuk membuat data dummy. Untuk keperluan ujicoba modul
login, kita perlu memasukkan data user dan password kedaalam database. Untuk itu buat
database seeder untuk tabel user. Buka CLI, kemudian tulis perintah berikut:

![6.png](img/6.png)

Selanjutnya, buka file `UserSeeder.php` yang berada di lokasi direktori
`/app/Database/Seeds/UserSeeder.php` kemudian isi dengan kode berikut:

![7.png](img/7.png)

Selanjutnya buka kembali CLI dan ketik perintah berikut:

![8.png](img/8.png)

### Uji Coba Login

Selanjutnya buka url http://localhost:8080/user/login seperti berikut:

![9.png](img/9.png)

### Menambahkan Auth Filter

Selanjutnya membuat filer untuk halaman admin. Buat file baru dengan nama `Auth.php`
pada direktori app/Filters. 

![10.png](img/10.png)

Selanjutnya buka file app/Config/Filters.php tambahkan kode berikut:

![11.png](img/11.png)

Selanjutnya buka file app/Config/Routes.php dan sesuaikan kodenya.

![12.png](img/12.png)

### Percobaan Akses Menu Admin

Buka url dengan alamat http://localhost:8080/admin/artikel ketika alamat tersebut
diakses maka, akan dimuculkan halaman login. 

### Fungsi Logout

Tambahkan method logout pada Controller User seperti berikut:

![13.png](img/13.png)

### Pertanyaan dan Tugas

Selesaikan programnya sesuai Langkah-langkah yang ada. Anda boleh melakukan
improvisasi.

#### Membuat Tombol Home pada bagian login

pada bagian `views\user\login.php` tembahkan tombol untuk kembali ketampilan awal.

![14.png](img/14.png)

Tampilan

![15.png](img/15.png)

#### Membuat Tombol Logout

Memberikan tombol logout pada bagian admin

![16.png](img/16.png)

Tampilan

![17.png](img/17.png)




