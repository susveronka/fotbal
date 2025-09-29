
<?= $this->include('layout/navbar') ?>


<div class="container mt-4">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php if (!empty($articles)): ?>
            <?php foreach ($articles as $article): ?>
                <div class="col">
                    <div class="card h-100 shadow">
                        <?php if (!empty($article['photo'])): ?>
                            <img src="<?= base_url('obrazky/sigma/' . esc($article['photo'])) ?>" class="card-img-top" alt="<?= esc($article['title']) ?>">
                        <?php endif; ?>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><?= esc($article['title']) ?></h5>
                            <p class="card-text"><?= esc($article['perex'] ?? '') ?></p>
                            <div class="mt-auto">
                                <a href="<?= site_url('clanek/' . $article['id']) ?>" class="btn btn-primary">Zobrazit článek</a>
                            </div>
                        </div>
                        <div class="card-footer text-muted">
                            <?= date('j.n.Y', $article['date']) ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="col">
                <div class="alert alert-info">Žádné články k zobrazení.</div>
            </div>
        <?php endif; ?>
    </div>
</div>

