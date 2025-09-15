
<?= $this->include("layout/navbar");?> 

<div class="container mt-4">
    <div class="card-grid">
        <?php if (!empty($articles)): ?>
            <?php foreach ($articles as $article): ?>
                <div class="main-card position-relative" style="min-height:400px;">
                    <div class="position-absolute top-0 start-0 w-100 h-100" 
                        style="background-size: cover;background-position:center;background-image: url('<?= esc($article['image'] ?? '') ?>')"></div>
                    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50 d-flex flex-column justify-content-center align-items-start text-white text-left p-3">
                        <a class="mt-auto fw-bold fs-2 text-white text-decoration-none" href="<?= site_url('clanek/' . $article['id']) ?>">
                            <?= esc($article['title'] ?? 'Bez názvu') ?>
                        </a>
                        <div class="mt-3 fs-4 text-white"><?= esc($article['date'] ?? '') ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="alert alert-info">Žádné články k zobrazení.</div>
        <?php endif; ?>
    </div>
</div>