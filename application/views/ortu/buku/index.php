    <!-- Main Content Start -->
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 my-lg-4 p-4">
        <?php $this->load->view('ortu/buku/detail'); ?>

        <!-- Book Item -->
        <div class="col">
            <div class="card h-100 border-0 shadow-sm">
                <img src="./assets/admin/img/drake.jpg" class="card-img-top" alt="Cover 4">
                <div class="card-body px-3">
                    <h6 class="card-title fw-semibold">Mobile UI Design Trends Present & Future</h6>
                </div>
                <div class="card-footer bg-white border-0 px-3 pb-3">
                    <button type="button" class="btn custom-btn" data-bs-toggle="modal" data-bs-target="#modalDetailBuku">
                        Lihat Detail Buku
                    </button>
                </div>
            </div>
        </div>

        <!-- Tambah lebih banyak kartu di sini jika perlu -->

    </div>
    <!-- Main Content End -->