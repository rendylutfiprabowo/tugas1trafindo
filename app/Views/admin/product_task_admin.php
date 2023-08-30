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
              <th>Task</th>
              <th>Desc</th>
              <th width="20%">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($tasks as $key => $task) : ?>
              <tr>
                <td><?= ++$key ?></td>
                <td><?= $task->nama_taskproduct ?></td>
                <td><?= $task->desc_taskproduct ?></td>
                <td>
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal-<?= $task->id ?>">
                    Edit
                  </button>
                  <a href="<?= base_url('taskproduct/delete/' . $task->id) ?>" class="btn btn-danger" onclick="return confirm('Are you sure ?')">Delete</a>
                </td>
                </td>
              </tr>
              <!-- Edit Contact Modal -->
              <div class="modal fade" id="editModal-<?= $task->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Edit Task Product</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </button>
                    </div>
                    <form action="<?= base_url('taskproduct/edit/' . $task->id) ?>" method="post">
                      <?= csrf_field(); ?>
                      <div class="modal-body">
                        <div class="form-group">
                          <label for="name">Nama Task</label>
                          <input type="text" name="nama_taskproduct" class="form-control" value="<?= $task->nama_taskproduct ?>" id="nama_taskproduct" placeholder="Nama Task Product" required>
                        </div>
                        <div class="form-group">
                          <label for="desc">Deskripsi Produk</label>
                          <textarea type="text" name="desc_taskproduct" class="form-control" value="<?= $task->desc_taskproduct ?>" id="desc_product" placeholder="Masukan Deskripsi Task"></textarea>
                          <input hidden type="text" class="form-control" name="id_product" value="<?= $product->id ?>">
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
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Task untuk Product : <?= $product->nama_product ?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= base_url('taskproduct') ?>" method="post">
        <?= csrf_field(); ?>
        <div class="modal-body">
          <div class="form-group">
            <label for="name">Nama Task</label>
            <input type="text" name="nama_taskproduct" class="form-control" id="nama_product" placeholder="Masukkan Nama Task Product" required>
          </div>
          <div class="form-group">
            <label for="desc">Deskripsi Task</label>
            <textarea type="text" name="desc_taskproduct" class="form-control" id="desc_taskproduct" placeholder="Masukan Deskripsi"></textarea>
            <input hidden type="text" class="form-control" name="id_product" value="<?= $product->id ?>">
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