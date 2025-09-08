
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container">
    <a class="navbar-brand" href="<?= site_url('/') ?>">Fotbal Klub</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('/') ?>">Domů</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('seznamClanku/1') ?>">Články</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('clanek/1') ?>">Detail článku</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?= $this->renderSection('content') ?>

<script src