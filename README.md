# Praktikum 12:Framework Lanjutan (CRUD)


### Instruksi Praktikum

1. Persiapkan text editor misalnya VSCode.
2. Buka kembali folder dengan nama lab11_php_ci pada docroot webserver (htdocs)
3. Ikuti langkah-langkah praktikum yang akan dijelaskan berikutnya.

### Langkah-langkah Praktikum
### Persiapan.

Untuk memulai membuat aplikasi CRUD sederhana, yang perlu disiapkan adalah
database server menggunakan MySQL. Pastikan MySQL Server sudah dapat dijalankan
melalui XAMPP.
Membuat Database: Studi Kasus Data Artikel

### Membuat Databases 

![create_databases.png](img/create_databases.png)

### Membuat table Artikel

![table_artikel.png](img/table_artikel.png)

### Konfigurasi koneksi database

Konfigurasi Koneksi Database, konfigurasi untuk menghubungkan dengan database, setver. Konfigurasi dapat dilakukan dengan dua cara yaitu :

1. app/config/database.php

![database.png](img/database.png)

2. Pada bagian File .env 

![database_env](img/database_env.png)

### Membuat Model
Selanjutnya adalah membuat Model untuk memproses data Artikel. Buat file baru pada
direktori app/Models dengan nama ArtikelModel.php

![Artikel_Model.png](img/Artikel_Model.png)

### Membuat Controller

Buat Controller baru dengan nama Artikel.php pada direktori app/Controllers.

![artikel.png](img/artikel.png)

### Membuat View

Buat direktori baru dengan nama `artikel` 

![folder_artikel.png](img/folder_artikel.png)

Pada direktori app/views, kemudian buat file
baru dengan nama `index.php`.

![index.png](img/index.png)

Selanjutnya buka browes, dengan mengakses URL http://localhost:8080/artikel

![hasil1.png](img/hasil1.png)

Belum ada data yang ditampilkan. Maka Tambahkan beberapa data pada database agar bisa ditampilkan.

![insert.png](img/insert.png)

Refresh kembali browser, sehingga akan ditampilkan hasilnya.

![hasil_insert.png](img/hasil_insert.png)

### Membuat Tampilan Detail Artikel

Tampilan pada saat judul berita di klik maka akan diarahkan ke halaman yang berbeda. Tambahkan fungsi baru pada Controller Artikel dengan nama view().

![artikel1.png](img/artikel1.png)

### Membuat View Detail

Buat view baru untuk halaman detail dengan nama app/views/artikel/detail.php.

![detail.png](img/detail.png)

### Membuat Routing untuk artikel detail

Buka Kembali file app/config/Routes.php, kemudian tambahkan routing untuk artikel detail.

![detail_hasil2.png](img/detail_hasil2.png)

Refresh kembali browser, lalu pilih salah satu artikel sehingga akan ditampilkan hasilnya.

![detail_hasil.png](img/detail_hasil.png)

### Membuat Menu Admin

Menu admin adalah untuk proses CRUD data artikel. Buat method baru pada Controller Artikel dengan nama admin_index().

![admin.png](img/admin.png)

Selanjunya pada bagian views artikel buat file dengan nama admin_index.php

![admin1.png](img/admin1.png)

Tambahkan routing untuk menu admin seperti berikut:

![admin2.png](img/admin2.png)

Akses menu admin dengan url http://localhost:8080/admin/artikel

![admin3.png](img/admin3.png)

### Menambah Data Artikel

Tambahkan fungsi/method baru pada Controller Artikel dengan nama add().

![add1.png](img/add1.png)

Kemudian buat view untuk form tambah dengan nama form_add.php

![add2.png](img/add2.png)

Akses URL http://localhost:8080/index.php/admin/artikel/add

![add3.png](img/add3.png)


### Mengubah Data

Tambahkan fungsi/method baru pada Controller Artikel dengan nama edit().

![ubah.png](img/ubah.png)

Kemudian buat view untuk form tambah dengan nama form_add.php

![ubah1.png](img/ubah1.png)

refres browser lalu klik tombol ubah 


![ubah2.png](img/ubah2.png)


### Menghapus Data

Tambahkan fungsi/method baru pada Controller Artikel dengan nama delete().

![delete.png](img/delete.png)

![delete1.png](img/delete1.png)


# Pertanyaan dan Tugas

Selesaikan programnya sesuai Langkah-langkah yang ada. Anda boleh melakukan improvisasi.

# Laporan Praktikum
1. Melanjutkan praktikum sebelumnya pada repository dengan nama Lab11Web.
2. Kerjakan semua latihan yang diberikan sesuai urutannya.
3. Screenshot setiap perubahannya.
4. Update file README.md dan tuliskan penjelasan dari setiap langkah praktikum beserta screenshotnya.
5. Commit hasilnya pada repository masing-masing.
6. Kirim URL repository pada e-learning ecampus

