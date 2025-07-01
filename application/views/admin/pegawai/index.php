        <div class="container-fluid py-2">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                                <h6 class="text-white text-capitalize ps-3">Data Pegawai</h6>
                                <button class="btn btn-success me-3" data-bs-toggle="modal" data-bs-target="#modalTambah"><i class="material-symbols-rounded">add</i></button>
                            </div>
                        </div>
                        <?php $this->load->view('admin/kepegawaian/input'); ?>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center justify-content-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Alamat</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Jabatan</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No Telp</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">User Id</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Aksi</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // $no = 1;
                                        foreach ($pegawai as $p) {
                                        ?>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2">
                                                        <div>
                                                            <img src="<?php echo base_url('assets/img/pegawai/' . $p->foto) ?>" class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                                                        </div>
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-sm"><?php echo $p->nama ?></h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-sm font-weight-bold mb-0"><?php echo $p->alamat ?></p>
                                                </td>
                                                <td>
                                                    <p class="text-sm font-weight-bold mb-0 text-capitalize"><?php echo $p->jabatan ?></p>
                                                </td>
                                                <td>
                                                    <span class="text-xs font-weight-bold"><?php echo $p->telp ?></span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <span class="me-2 text-xs font-weight-bold"><?php echo $p->user_id ?></span>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <a href="<?php echo site_url('admin_kepegawaian_edit/' . $p->id) ?>" class="text-info pe-3 border-end btn-no-outline" data-bs-toggle="modal" data-bs-target="#modalTambah"><i class="material-symbols-rounded">edit</i></a>
                                                        <a href="<?php echo site_url('admin_kepegawaian_delete/' . $p->id) ?>" class="text-xs font-weight-bold text-danger"><i class="material-symbols-rounded">delete</i></a>
                                                    </div>
                                                </td>
                                                <td class="align-middle">
                                                    <button class="btn btn-link text-secondary mb-0">
                                                        <i class="fa fa-ellipsis-v text-xs"></i>
                                                    </button>
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