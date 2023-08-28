<?= $this->extend('admin/layouts/layout_admin'); ?>

<?= $this->section('content'); ?>
<div class="row">
  <div class="col-6">
    <h4 class="mb-0" style="color: white;"><b>Data Master Product</b></h4>
  </div>
  <div class="col-6">
    <a href="<?php echo base_url('showaddproduct') ?>" class="btn btn-md btn-success mb-3">TAMBAH DATA</a>
  </div>
  <div class="table-responsive">
    <table class="table table-bordered table-striped">
      <thead class="thead-dark">
        <tr>
          <th>No</th>
          <th>Nama Produk</th>
          <th>Desc</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1;
        foreach ($products as $key => $product) : ?>

          <tr>
            <td>
              <?php echo $no++ . "." ?>
            </td>
            <td><?php echo $product->nama_product ?></td>
            <td><?php echo $product->desc_product ?></td>
            <td>
              <a href="product/edit/ <?= $product->id ?>" class="btn btn-md btn-primary mb-3">Edit Data</a>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
  <?= $this->endSection(); ?>