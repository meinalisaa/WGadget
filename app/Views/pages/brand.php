<?= $this->extend('layout/template-user') ?>
<?= $this->section('content') ?>
  <?php foreach($database as $db) : ?>
    <div class="container mt-3 mb-4">
      <h1 align="center"><?= $db->nama_hp ?></h1>
    </div>
  <?php endforeach ?>
<?= $this->endSection() ?>
