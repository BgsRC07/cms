<div id="ngilang">
    <?= $this->session->flashdata('alert'); ?>
</div>
<div class="col-lg-4 col-md-6">
    <div class="mb-3">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Tambah User
        </button>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="<?= site_url('admin/user/simpan') ?>" method="post">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-form-label">Nama</label>
                                <input type="text" class="form-control" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Username</label>
                                <input type="text" class="form-control" name="username" required>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Password</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <div class="col-mb-6">
                                <label class="form-label">level</label>
                                <select name="level" class="form-control">
                                    <option value="admin">Admin</option>
                                    <option value="kontributor">Kontributor</option>
                                </select>
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
        <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Level</th>
                        <th>Aksi</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($user as $aa) { ?>
                        <tr>
                            <td><?= $aa['username'] ?></td>
                            <td><?= $aa['nama'] ?></td>
                            <td><?= $aa['level'] ?></td>
                            <td>
                                <a href="<?php echo site_url('admin/user/delete_data/' . $aa['id_user']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah km yakin menghapus data ini?')">
                                    <i class="fas fa-trash"></i>
                                </a>
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit<?= $aa['id_user'] ?>">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <div class="modal fade" id="edit<?= $aa['id_user'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <form action="<?= site_url('admin/user/update') ?>" method="post">
                                        <input type="hidden" name="id_user" value="<?= $aa['id_user'] ?>">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label class="col-form-label">Nama</label>
                                                        <input type="text" class="form-control" name="nama" value="<?= $aa['nama'] ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-form-label">Username</label>
                                                        <input type="text" class="form-control" name="username" value="<?= $aa['username'] ?>" readonly>
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
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>