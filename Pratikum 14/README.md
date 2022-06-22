#### Nama   : Fajar Firmansyah
#### Nim    : 312010309
#### Kelas  : TI.20.A2


# Pratikum 14 lanjutan

## Instruksi Praktikum

1. Persiapkan text editor misalnya VSCode.
2. Buka kembali folder dengan nama lab11_php_ci pada docroot webserver (htdocs)
3. Ikuti langkah-langkah praktikum yang akan dijelaskan berikutnya.

## Langkah-langkah Praktikum

### Membuat Pagination

Pagination merupakan proses yang digunakan untuk membatasi tampilan yang panjang
dari data yang banyak pada sebuah website. Fungsi pagination adalah memecah
tampilan menjadi beberapa halaman tergantung banyaknya data yang akan ditampilkan
pada setiap halaman.

Pada Codeigniter 4, fungsi pagination sudah tersedia pada Library sehingga cukup
mudah menggunakannya.

Untuk membuat pagination, buka Kembali Controller Artikel, kemudian modifikasi
kode pada method admin_index seperti berikut

![1.png](img/1.png)

Kemudian buka file views/artikel/admin_index.php dan tambahkan kode berikut
dibawah deklarasi tabel data

![2.png](img/2.png)

Pada Gambar diatas berikan nama class baru di akhir penutup table. Selanjutnya akses http://localhost:8080/index.php/admin/artikel

![3.png](img/3.png)

### Membuat Pencarian

Pencarian data digunakan untuk memfilter data.
Untuk membuat pencarian data, buka kembali Controller Artikel, pada method
admin_index ubah kodenya seperti berikut

![4.png](img/4.png)

Kemudian buka kembali file views/artikel/admin_index.php dan tambahkan form
pencarian sebelum deklarasi tabel seperti berikut:

![5.png](img/5.png)

Dan pada link pager ubah seperti berikut. 

![6.png](img/6.png)

Selanjutnya ujicoba dengan membuka kembali halaman admin artikel, masukkan kata
kunci tertentu pada form pencarian. Akses http://localhost:8080/index.php/admin/artikel

![7.png](img/7.png)

### Upload Gambar

Menambahkan fungsi unggah gambar pada tambah artikel. Buka kembali Controller
Artikel, sesuaikan kode pada method add seperti berikut:

![8.png](img/8.png)

Kemudian pada file views/artikel/form_add.php tambahkan field input file seperti
berikut.

![9.png](img/9.png)

Dan sesuaikan tag form dengan menambahkan ecrypt type seperti berikut.

![10.png](img/10.png)

Ujicoba file upload dengan mengakses menu tambah artikel. Akses http://localhost:8080/index.php/admin/artikel/add

![11.png](img/11.png)



