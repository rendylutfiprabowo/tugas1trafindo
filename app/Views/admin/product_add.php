<?= $this->extend('admin/layouts/layout_admin'); ?>

<?= $this->section('content'); ?>
<div class="row">
  <div class="col-md-12">
    <?php if (isset($validation)) { ?>
      <div class="alert alert-danger" role="alert">
        <?php echo $validation->listErrors() ?>
      </div>
    <?php } ?>
    <div class="card">
      <div class="card-body">
        <form action="<?php echo base_url('addstore') ?>" method="POST">
          <div class="form-group">
            <h6 hidden>id_user</h6>
            <input hidden type="text" class="form-control" name="id_user" value="<?= session()->get('id') ?>">
            <!-- Mengambil ID user dari session dan menampilkannya dalam input -->
          </div>
          <div class="form-group">
            <h6>Nama</h6>
            <input type="text" class="form-control" name="nama_product" placeholder="Masukkan Nama Product">
          </div>
          <div class="form-group">
            <h6>Description Product</h6>
            <textarea class="form-control" name="desc_product" rows="4" placeholder="Masukkan Deskripsi"></textarea>
          </div>
          <button type="submit" class="btn btn-primary mt-2">SIMPAN</button>
          <a href="<?= base_url('product') ?>" class="btn btn-success mt-2">KEMBALI</a>
        </form>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>