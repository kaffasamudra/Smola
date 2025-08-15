        <div class="modal fade container-fluid py-2" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
            <div class="row modal-dialog">
                <div class="col-12 modal-content pt-4">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="modal-header bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                                <h6 class="modal-title text-white text-center text-capitalize" id="modalTambahLabel">Tambah Data Siswa</h6>
                            </div>
                        </div>
                        <div class="modal-body">
                            <form role="form" class="text-start" action="<?php echo site_url('admin_siswa_input') ?>" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label" for="nama">Nama Siswa</label>
                                    <input class="form-control" type="text" id="nama" name="nama" required>
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label" for="nis">NIS</label>
                                    <input class="form-control" type="text" id="nis" name="nis" required>
                                </div>
                                <div class="input-group input-group-outline my-3 position-relative">
                                    <select name="kelas_id" class="form-control pe-5">
                                        <option selected hidden>Kelas</option>
                                        <?php foreach ($kelas as $k) : ?>
                                            <option value="<?= $k->id ?>"><?= $k->nama_kelas ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <span class="material-symbols-rounded position-absolute end-0 top-50 translate-middle-y me-3 text-secondary pointer-events-none transition-arrow">
                                        keyboard_arrow_down
                                    </span>
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label" for="nama_orangtua">Nama Orang Tua</label>
                                    <input class="form-control" type="text" id="nama_orangtua" name="nama_orangtua" required>
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label" for="alamat">Alamat</label>
                                    <input class="form-control" type="text" id="alamat" name="alamat">
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label" for="tgl_lahir"></label>
                                    <input class="form-control" type="date" id="tgl_lahir" name="tgl_lahir" placeholder="">
                                </div>
                                <div class="input-group input-group-outline mb-3">
                                    <span class="bg-gradient-dark text-white text-center p-2 rounded me-2">Foto</span>
                                    <input name="foto" type="file" class="form-control">
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