<?= $this->extend('admin/layouts/layout_admin') ?>
<?php $this->section('styles') ?>
<!-- Custom styles for this page -->
<link href="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.min.css') ?> " rel="stylesheet">
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-fluid">
  <!-- Page Heading -->
  <?php
  if (session()->getFlashData('success')) {
  ?>
    <div class="alert alert-success alert-dismissible" role="alert">
      <?= session()->getFlashData('success') ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'
    </div>
  <?php
  }
  ?>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
        Tambah Data
      </button>

    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Produk</th>
              <th>Desc</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($products as $key => $product) : ?>
              <tr>
                <td><?= ++$key ?></td>
                <td><?= $product['nama_product'] ?></td>
                <td><?= $product['desc_product'] ?></td>
                <td>
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal-<?= $product['id'] ?>">
                    Edit
                  </button>
                  <a href="<?= base_url('product/delete/' . $product['id']) ?>" class="btn btn-danger" onclick="return confirm('Are you sure ?')">Delete</a>
                </td>
                </td>
              </tr>
              <!-- Edit Contact Modal -->
              <div class="modal fade" id="editModal-<?= $product['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </button>
                    </div>
                    <form action="<?= base_url('product/edit/' . $product['id']) ?>" method="post">
                      <?= csrf_field(); ?>
                      <div class="modal-body">
                        <div class="form-group">
                          <label for="name">Nama Product</label>
                          <input type="text" name="nama_product" class="form-control" value="<?= $product['nama_product'] ?>" id="nama_product" placeholder="Nama Product" required>
                        </div>
                        <div class="form-group">
                          <label for="desc">Deskripsi Produk</label>
                          <textarea type="text" name="desc_product" class="form-control" value="<?= $product['desc_product'] ?>" id="desc_product" placeholder="Masukan Deskripsi"></textarea>
                          <input hidden type="text" class="form-control" name="id_user" value="<?= session()->get('id') ?>">
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Add Product Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Product</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= base_url('product') ?>" method="post">
        <?= csrf_field(); ?>
        <div class="modal-body">
          <div class="form-group">
            <label for="name">Nama Product</label>
            <input type="text" name="nama_product" class="form-control" id="nama_product" placeholder="Nama Product" required>
          </div>
          <div class="form-group">
            <label for="desc">Deskripsi Produk</label>
            <textarea type="text" name="desc_product" class="form-control" id="desc_product" placeholder="Masukan Deskripsi"></textarea>
            <input hidden type="text" class="form-control" name="id_user" value="<?= session()->get('id') ?>">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
<?php $this->section('scripts') ?>
<!-- Page level plugins -->
<script src="<?= base_url('assets/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>
<!-- Page level custom scripts -->
<script>
  // Call the dataTables jQuery plugin
  $(document).ready(function() {
    $('#dataTable').DataTable();
  });
</script>
<?php $this->endSection() ?>