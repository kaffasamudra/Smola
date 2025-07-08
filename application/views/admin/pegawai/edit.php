        <div class="modal fade container-fluid py-2" id="modalEdit" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
            <div class="row modal-dialog">
                <div class="col-12 modal-content pt-4">
                    <div class="">
                        <?php if (validation_errors()) : ?>
                            <div class="alert alert-danger" role="alert">
                                <p><?= validation_errors() ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="modal-header bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                                <h6 class="modal-title text-white text-center text-capitalize" id="modalEditLabel">Edit Data Pegawai</h6>
                            </div>
                        </div>
                        <div class="modal-body">
                            <form role="form" class="text-start" action="<?= site_url('admin_pegawai_index_edit') ?>" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <input type="hidden" name="edit-id" id="edit-id" value="">
                                <div class="input-group input-group-outline my-3 is-filled">
                                    <label class="form-label" for="nip">NIP</label>
                                    <input name="nip" id="edit-nip" type="text" class="form-control" value="">
                                </div>
                                <div class="input-group input-group-outline my-3 is-filled">
                                    <label class="form-label" for="nama">Nama</label>
                                    <input name="nama" id="edit-nama" type="text" class="form-control" value="">
                                </div>
                                <div class="input-group input-group-outline my-3 is-filled">
                                    <label class="form-label" for="alamat">Alamat</label>
                                    <input name="alamat" id="edit-alamat" type="text" class="form-control" value="">
                                </div>
                                <div class="input-group input-group-outline my-3 is-filled">
                                    <label class="form-label">No Handphone</label>
                                    <input name="telp" id="edit-telp" type="number" class="form-control" value="">
                                </div>
                                <div class="input-group input-group-outline my-3 position-relative">
                                    <select name="jabatan" id="edit-jabatan" class="form-control pe-5">
                                        <option selected hidden>Jabatan</option>
                                        <option value="direktur" <?= (isset($pegawai['jabatan']) && $pegawai['jabatan'] == 'direktur') ? 'selected' : '' ?>>Direktur</option>
                                        <option value="pegawai" <?= (isset($pegawai['jabatan']) && $pegawai['jabatan'] == 'pegawai') ? 'selected' : '' ?>>Pegawai</option>
                                    </select>
                                    <span class="material-symbols-rounded position-absolute end-0 top-50 translate-middle-y me-3 text-secondary pointer-events-none transition-arrow">
                                        keyboard_arrow_down
                                    </span>
                                </div>
                                <div class="input-group input-group-outline my-3 position-relative">
                                    <select name="user_id" id="edit-user_id" class="form-control pe-5">
                                        <option selected hidden>Email</option>
                                        <?php foreach ($users as $user) : ?>
                                            <option value="<?= $user->id ?>" <?= (isset($pegawai['user_id']) && $pegawai['user_id'] == $user->id) ? 'selected' : '' ?>>
                                                <?= $user->email ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <span class="material-symbols-rounded position-absolute end-0 top-50 translate-middle-y me-3 text-secondary pointer-events-none transition-arrow">
                                        keyboard_arrow_down
                                    </span>
                                </div>
                                <div class="input-group input-group-outline mb-3">
                                    <span class="bg-gradient-dark text-white text-center p-2 rounded me-2">Foto</span>
                                    <input name="foto" type="file" class="form-control" id="edit-foto">
                                </div>
                                <div class="modal-footer text-center">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn bg-gradient-dark">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>