<?= $this->include('template/header'); ?>
<div class="artikel_index">
  <?php
  if ($artikel) :
    foreach ($artikel as $row) : ?>
      <article class="entry">
        <h2><a href="<?= base_url('/artikel/' . $row['slug']); ?>"><?= $row['judul']; ?></a></h2>
        <img style="height: 250px; width:250px ;" src="<?= base_url('/gambar/' . $row['gambar']); ?>" alt="<?= $row['judul']; ?>">
        <p><?= substr($row['isi'], 0, 1000); ?></p>
      </article>

      <hr class="divider" />
    <?php endforeach;
  else : ?>
    <article class="entry">
      <h2>Belum Ada Data.</h2>
    </article>
  <?php endif; ?>
</div>
<?= $this->include('template/box'); ?>
<?= $this->include('template/footer'); ?>