<div id="ngilang">
    <?= $this->session->flashdata('alert'); ?>
</div>
<div class="col-x1-12">
  <div class="card">
    <form action="<?= site_url('admin/carousel/simpan') ?>" method="post" enctype="multipart/form-data">
      <h5 class="card-header">File Input</h5>
      <div class="card-body">
        <div class="modal-body">
          <div class="form-group">
            <label class="col-form-label">Judul</label>
            <input type="text" class="form-control" name="judul">
          </div>
          <div class="mb-3">
            <label for="formfile" class="form-label">Pilih foto dengan ukuran (1:3)</label>
            <input type="file" class="form-control" name="foto">
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </div>
    </form>
  </div>
</div>    
<?php foreach ($carousel as $aa) { ?>
  <div class="col-md-12 mb-3 mt-3">
    <div class="card h-100">
      <img class="card-img-top" src="<?= base_url('assets/upload/carousel/' . $aa['foto']) ?>" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title"><?= $aa['judul'] ?></h5>
        <a href="<?php echo site_url('admin/carousel/delete_data/' . $aa['foto']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah km yakin menghapus data ini?')">
          <i class="fas fa-trash"></i></a>
      </div>
    </div>
  </div>
<?php } ?>