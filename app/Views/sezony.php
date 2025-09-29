<?= $this->include("layout/navbar"); ?>

<div class="container mt-4">
    <h2>Přehled sezón</h2>
    <?php if (!empty($season)): ?>
        <?php
        // Seskupení sezón po desetiletích
        $decades = [];
        foreach ($season as $s) {
            // Předpokládáme, že 'start' je ve formátu YYYY-MM-DD nebo YYYY
            $year = isset($s['start']) ? (int)substr($s['start'], 0, 4) : 0;
            $decade = floor($year / 10) * 10;
            $decades[$decade][] = $s;
        }
        ksort($decades); // Seřadit dekády vzestupně
        ?>
        <?php foreach ($decades as $decade => $seasons): ?>
            <h4 class="mt-4"><?= $decade ?>–<?= $decade + 9 ?></h4>
            <div class="row row-cols-2 row-cols-md-4 g-3 mb-3">
                <?php foreach ($seasons as $s): ?>
                    <div class="col">
                        <a href="<?= site_url('sezona/' . $s['id']) ?>" class="btn btn-outline-primary w-100 mb-2">
                            <?= esc($s['name'] ?? $s['start']) ?>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <div class="alert alert-info">Žádné sezóny k zobrazení.</div>
    <?php endif; ?>
</div>