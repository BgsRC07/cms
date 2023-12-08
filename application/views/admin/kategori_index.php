<div id="ngilang">
    <?= $this->session->flashdata('alert'); ?>
</div>
<div class="col-lg-4 col-md-6">
    <div class="mb-3">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Tambah Kategori
        </button>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="<?= site_url('admin/kategori/simpan') ?>" method="post">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-form-label">Nama Kategori</label>
                                <input type="text" class="form-control" name="nama_kategori" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Kategori</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori Konten</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach ($kategori as $aa) { ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $aa['nama_kategori'] ?></td>
                            <td>
                                <a href="<?php echo site_url('admin/kategori/delete_data/' . $aa['id_kategori']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah km yakin menghapus data ini?')">
                                    <i class="fas fa-trash"></i>
                                </a>
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit<?= $aa['id_kategori'] ?>">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <div class="modal fade" id="edit<?= $aa['id_kategori'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <form action="<?= site_url('admin/kategori/update') ?>" method="post">
                                        <input type="hidden" name="id_kategori" value="<?= $aa['id_kategori'] ?>">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label class="col-form-label">Nama Kategori Konten</label>
                                                        <input type="text" class="form-control" name="nama_kategori" value="<?= $aa['nama_kategori'] ?>">
                                                    </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php  $no++;  } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>