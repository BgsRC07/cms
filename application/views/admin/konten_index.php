<div id="ngilang">
    <?= $this->session->flashdata('alert'); ?>
</div>
<div class="col-lg-4 col-md-6">
    <div class="mb-3">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Tambah Konten
        </button>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="<?= site_url('admin/konten/simpan') ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Konten</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-form-label">Judul</label>
                                <input type="text" class="form-control" name="judul" placeholder="Nama" required>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Kategori</label>
                                <select name="id_kategori" class="form-control">
                                    <?php foreach ($kategori as $aa) { ?>
                                        <option value="<?= $aa['id_kategori'] ?>"><?= $aa['nama_kategori'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Keterangan</label>
                                <textarea name="keterangan" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Foto</label>
                                <input type="file" class="form-control" name="foto" accept="image/png, image/jpeg">
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
                        <th>Judul</th>
                        <th>Kategori konten</th>
                        <th>Tanggal</th>
                        <th>Kreator</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach ($konten as $aa) { ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $aa['judul'] ?></td>
                            <td><?= $aa['nama_kategori'] ?></td>
                            <td><?= $aa['tanggal'] ?></td>
                            <td><?= $aa['nama'] ?></td>
                            <td>
                                <a href="<?= base_url('assets/upload/konten/' . $aa['foto']) ?>" target="_blank">
                                    <i class="fas fa-search"></i>Lihat Foto
                                </a>
                            </td>
                            <td>
                                <a href="<?php echo site_url('admin/konten/delete_data/' . $aa['foto']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah km yakin menghapus data ini?')">
                                    <i class="fas fa-trash"></i></a>
                                    
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#konten<?= $no; ?>">
                                <i class="fas fa-edit"></i>
                                </button>

                                <div class="modal fade" id="konten<?= $no; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <form action="<?= site_url('admin/konten/update') ?>" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="nama_foto" value="<?= $aa['foto'] ?>">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"><?= $aa['judul'] ?></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label class="col-form-label">Judul</label>
                                                        <input type="text" class="form-control" name="judul" value="<?= $aa['judul'] ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-form-label">Kategori</label>
                                                        <select name="id_kategori" class="form-control">
                                                            <?php foreach ($kategori as $uu) { ?>
                                                                <?php if($uu['id_kategori']==$aa['id_kategori']){echo"selected";} ?>
                                                                <option value="<?= $uu['id_kategori'] ?>"><?= $uu['nama_kategori'] ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-form-label">Keterangan</label>
                                                        <textarea name="keterangan" class="form-control"><?= $aa['keterangan'] ?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-form-label">Foto</label>
                                                        <input type="file" class="form-control" name="foto" accept="image/png, image/jpeg">
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
                            </td>
                        </tr>
                    <?php $no++; } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>