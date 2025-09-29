<?= $this->include("layout/navbar");?> 

<div class="container mt-4">
    <div class="row g-4">
        <?php if (!empty($articles)): ?>
            <?php foreach ($articles as $i => $article): ?>
                <?php if ($i === 0): ?>
                    <div class="col-6">
                        <div class="ratio ratio-1x1 position-relative overflow-hidden rounded">
                            <div class="position-absolute top-0 start-0 w-100 h-100" style="background-size: cover;background-position:center;background-image: url('<?= base_url('obrazky/sigma/' . esc($article['photo'] ?? '')) ?>')"></div>
                            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50 d-flex flex-column justify-content-center align-items-start text-white text-left p-3">
                                <a class="mt-auto fw-bold fs-2 text-white text-decoration-none" href="<?= site_url('clanek/' . $article['id']) ?>">
                                    <?= esc($article['title'] ?? 'Bez názvu') ?>
                                </a>

                                <div class="mt-3 fs-4 text-white"><?= date('j.n.Y', $article['date']) ?></div>
                            </div>
                            
                        </div>
                    </div>
                <?php else: ?>
                

                    <div class="col-3">
                       <div class="ratio ratio-1x1 position-relative overflow-hidden rounded">
                            <div class="position-absolute  w-100 h-100" style="background-size: cover;background-position:center;background-image: url('<?= base_url('obrazky/sigma/' . esc($article['photo'] ?? '')) ?>')"></div>
                            <div class="position-absolute w-100 h-100 bg-dark bg-opacity-50 d-flex flex-column justify-content-center align-items-start text-white text-left p-3">
                                <a class="mt-auto fw-bold fs-5 text-white text-decoration-none" href="<?= site_url('clanek/' . $article['id']) ?>">
                                    <?= esc($article['title'] ?? 'Bez názvu') ?>
                                </a>


                                <div class="mt-3 fs-6 text-white"><?= date('j.n.Y', $article['date']) ?></div>
                            </div>


                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="alert alert-info">Žádné články k zobrazení.</div>
        <?php endif; ?>
    </div>
</div>
 // napsat aby byly aby malé byly 2x2









