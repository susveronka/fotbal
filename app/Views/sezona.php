<?= $this->include('layout/layout') ?>
<div class="container-fluid">
    <?php if (!empty($league)): ?>
        <?php foreach($league as $row): ?>
            <p> Liga: <?= esc($row['name'] ?? '') ?> </p>
            <?php
            if (!empty($row['logo'])) {
                $logo = [
                    'src'=> base_url('obrazky/league/' . esc($row['logo'])),
                    'class' => "img-thumbnail",
                    'style'=> "width: 50px; height: auto;"
                ];
                echo img($logo);
            }
            ?>
            <p>Level: <?= esc($row['level'] ?? '') ?></p>
            <hr>
        <?php endforeach; ?>
    <?php else: ?>
        <div class="alert alert-info">Žádné soutěže k zobrazení.</div>
    <?php endif; ?>
</div>