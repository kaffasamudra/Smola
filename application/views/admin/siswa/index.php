        <div class="container-fluid py-2">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                                <h6 class="text-white text-capitalize ps-3">Data Siswa</h6>
                                <div class="flex align-items-center me-3">
                                    <button class="btn btn-info"><i class="material-symbols-rounded">print</i></button>
                                    <button class="btn btn-warning"><i class="fas fa-file-excel"></i></button>
                                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalTambah"><i class="material-symbols-rounded">add</i></button>
                                </div>
                            </div>
                        </div>
                        <?php $this->load->view('admin/siswa/input'); ?>
                        <?php $this->load->view('admin/siswa/edit'); ?>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center justify-content-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Foto</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Siswa</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">NIS</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kelas</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Orang Tua</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Alamat</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Tgl Lahir</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Aksi</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // $no = 1;
                                        foreach ($siswa as $s) {
                                        ?>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2">
                                                        <div>
                                                            <img src="<?= filter_var($s->foto, FILTER_VALIDATE_URL) ? $s->foto : base_url('assets/images/siswa/' . $s->foto) ?>" class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm"><?= $s->nama ?></h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-sm font-weight-bold mb-0 text-capitalize"><?= $s->nis ?></p>
                                                </td>
                                                <td>
                                                    <span class="text-xs font-weight-bold"><?= $s->nama_kelas ?></span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span class="me-2 text-xs font-weight-bold"><?= $s->nama_orangtua ?></span>
                                                </td>
                                                <td>
                                                    <p class="text-sm font-weight-bold mb-0 text-capitalize"><?= $s->alamat ?></p>
                                                </td>
                                                <td>
                                                    <p class="text-sm font-weight-bold mb-0 text-capitalize"><?= $s->tanggal_lahir ?></p>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <button type="button"
                                                            data-id="<?= $s->id ?>"
                                                            data-nis="<?= $s->nis ?>"
                                                            data-nama="<?= $s->nama ?>"
                                                            data-alamat="<?= $s->alamat ?>"
                                                            data-kelas_id="<?= $s->kelas_id ?>"
                                                            
                                                            data-foto="<?= $s->foto ?>"
                                                            data-tanggal_lahir="<?= $s->tanggal_lahir ?>"
                                                            class="edit-btn text-info pe-3 border-end btn-no-outline" data-bs-toggle="modal" data-bs-target="#modalEdit"><i class="material-symbols-rounded">edit</i></button>
                                                        <a href="<?= site_url('admin_siswa_delete/' . $s->id) ?>" class="delete-btn text-xs font-weight-bold text-danger"><i class="material-symbols-rounded">delete</i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>