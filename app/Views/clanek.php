
<?= $this->include('layout/navbar') ?>

<?php 
$article = $articles; // Fix: use the correct variable from controller
?>

<div class= "container-fluid">

<?php
$fotka = [
    'src' => base_url('obrazky/sigma/'.$article['photo']),
    'class' => 'img-fluid img-thumbnail mb-3',
];
echo img($fotka);
?>

<h1><?= $article['title'] ?> </h1>
<p class="text-muted">Publikováno dne <?= date('j.n.Y', $article['date']) ?></p>


<?= $article['text'] ?>
</div>