<div class="container-fluid mt-lg-4">
    <div class="row">
        <div class="col-lg-8">
            <div class="mb-4">
                <div class="card-body">
                    <h1 class="card-title fs-1">Featured Post Title</h1>
                    <div class="medium text-muted">January 1, 2023 - <span>Tim Kreatif</span></div>
                    <div class="my-4 d-flex flex-column gap-2">
                        <img class="card-img-top" src="<?= base_url('./assets/users/img/foto paud 2.png') ?>" alt="..." />
                        <h6 class="card-text text-muted small fw-lighter">Deskripsi gambar</h6>
                    </div>
                    <p class="card-text text-dark text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae unde quasi officiis blanditiis enim quod magni sed voluptatibus? Natus illo reiciendis, aut vitae eaque cum magni numquam autem deleniti nulla?
                    Vel sequi quia quo numquam nulla soluta, fuga quibusdam, mollitia neque quaerat, tempore porro similique dignissimos repellat aperiam doloremque. Doloremque pariatur exercitationem animi reprehenderit quas aliquam enim a molestias maiores.
                    Eos, sequi. Recusandae cum tempore consectetur fugit, enim laboriosam eum soluta. Corporis corrupti mollitia provident amet, facere dignissimos iure iusto praesentium deserunt similique blanditiis ex rerum nam molestiae quos nemo.
                    Beatae aut laudantium labore aliquid modi iure necessitatibus nobis velit ullam explicabo deleniti sunt nostrum, aspernatur, vitae reiciendis perspiciatis dolore! Voluptates eveniet cumque nesciunt esse in quam! Eveniet, eum obcaecati!
                    Aut quidem maxime harum ex ea doloremque atque facere fugit. Laborum maiores eos dolor assumenda ab quam deserunt aut, eaque sapiente quod necessitatibus neque adipisci, id ex amet alias non.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <a href="#" class="card mb-4 card-hover">
                <div class="card-body">
                    <div class="small text-muted">January 1, 2023</div>
                    <h2 class="card-title h4">
                        <?= character_limiter('Post Title', 30) ?>
                    </h2>
                    <p class="card-text text-muted">
                        <?= character_limiter('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam.', 100) ?>
                    </p>
                </div>
            </a>
        </div>
    </div>
</div>