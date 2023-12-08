<div id="ngilang">
    <?= $this->session->flashdata('alert'); ?>
</div>
<form action="<?= site_url('admin/konfigurasi/update') ?>" method="post">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Konfigurasi</h5>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label class="col-form-label">Judul Website</label>
                <input type="text" class="form-control" name="judul" value="<?= $konfig->judul_web; ?>" >
            </div>
            <div class="form-group">
                <label class="col-form-label">Profile</label>
                <textarea name="profil_web" class="form-control" value="<?= $konfig->profil_web; ?>"></textarea>
            </div>
            <div class="form-group">
                <label class="col-form-label">Facebook</label>
                <input type="text" name="facebook" class="form-control" value="<?= $konfig->facebook; ?>" ></select>
            </div>
            <div class="form-group">
                <label class="col-form-label">Instagram</label>
                <input type="text"  name="instagram" class="form-control" value="<?= $konfig->instagram; ?>" ></select>
            </div>
            <div class="form-group">
                <label class="col-form-label">Email</label>
                <input type="email" name="email" class="form-control" value="<?= $konfig->email; ?>" ></select>
            </div>
            <div class="form-group">
                <label class="col-form-label">Alamat</label>
                <input  type="text"  name="alamat" class="form-control" value="<?= $konfig->alamat; ?>" ></select>
            </div>
            <div class="form-group">
                <label class="col-form-label">WhatsApp</label>
                <input  type="text"  name="no_wa" class="form-control" value="<?= $konfig->no_wa; ?>" ></select>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
</form>