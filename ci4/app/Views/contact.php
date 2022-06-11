<?= $this->include('template/header'); ?>
<div class="kontak">
  <div class="contak">
    <div class="from-contak">
      <form action="">
        <h2>Kontak</h2>
        <hr>
        <div class="from-grup">
          <label for="Email">Email</label>
          <input type="text" class="form-control" id="Email" placeholder="Masukan Email....">
        </div>
        <div class="from-grup">
          <label for="Nama">Nama</label>
          <input type="text" class="form-control" id="Nama" placeholder="Masukan Nama....">
        </div>
        <div class="from-grup">
          <label for="Pesan">Pesan</label>
          <textarea name="form-control" id="Pesan" cols="30" rows="10" placeholder="Isi..."></textarea>
        </div>
        <button type="submit" class="kirim-kontak">Kirim</button>
      </form>
    </div>
  </div>
</div>
<?= $this->include('template/footer'); ?>