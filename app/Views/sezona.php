<?= $this->include('layout/layout') ?>
<div class="container-fluid">
    <?php foreach($league as $row): ?>
        <p> Jméno: <?= $row->name; ?> </p>
<?php
$logo = [
    'src'=> base_url('obrazky/league/'.$row->logo),
    'class' => "img-thumbanil",
    'style'=> "width: 100px; height: auto;"
];
echo img($logo);
?> <p>Level: <?= $row->level; ?> </p>
    
    <?php endforeach; ?>
</div>
