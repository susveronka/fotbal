
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  


    <style>
    .card-grid {
        display: grid;
        grid-template-columns: 2fr 1fr 1fr;
        grid-template-rows: 1fr 1fr;
        gap: 1.5rem;
        padding: 2rem;
    }
    .card-grid .main-card {
        grid-row: 1 / span 2;
        grid-column: 1 / 2;
        position: relative;
        overflow: hidden;
        border-radius: 16px;
        min-height: 500px;
    }
    .card-grid .side-card {
        border-radius: 16px;
        overflow: hidden;
        position: relative;
        min-height: 220px;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
    }
    .card-grid .main-card img,
    .card-grid .side-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        position: absolute;
        left: 0;
        top: 0;
        z-index: 1;
    }
    .card-grid .main-card .card-content,
    .card-grid .side-card .card-content {
        position: relative;
        z-index: 2;
        color: #fff;
        padding: 2rem 1.5rem 1.5rem 1.5rem;
        font-weight: bold;
        text-shadow: 0 2px 8px rgba(0,0,0,0.7);
    }
    .card-grid .main-card .card-title {
        font-size: 2.2rem;
        margin-bottom: 1rem;
    }
    .card-grid .side-card .card-title {
        font-size: 1.1rem;
        margin-bottom: 0.5rem;
    }
    .card-grid .card-date {
        font-size: 1rem;
        font-weight: normal;
        margin-top: 0.5rem;
        opacity: 0.85;
    }
    @media (max-width: 991px) {
        .card-grid {
            grid-template-columns: 1fr 1fr;
            grid-template-rows: auto;
        }
        .card-grid .main-card {
            grid-row: 1 / 2;
            grid-column: 1 / 3;
            min-height: 300px;
        }
    }
    @media (max-width: 600px) {
        .card-grid {
            grid-template-columns: 1fr;
            gap: 1rem;
            padding: 1rem;
        }
        .card-grid .main-card,
        .card-grid .side-card {
            grid-column: 1 / 2;
            min-height: 180px;
        }

      .btn-primary {
    background: linear-gradient(90deg, #6ec1e4 0%, #bfe9ff 100%);
    color: #222;
    border: none;
    box-shadow: 0 2px 8px rgba(110,193,228,0.15);
    font-weight: 600;
    letter-spacing: 0.5px;
   
}

    }
    </style>
</head>
<body>
    <?= $this->renderSection('content') ?>

    

<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">
            <span class="visually-hidden">(current)</span>
          </a>
        </li>

        <a class="navbar-brand d-flex align-text-centre" href="<?= site_url('prvniStranka') ?>">
      <img src="<?= base_url('logo.png') ?>" alt="Logo" width="40" height="40" class="d-inline-block align-text-top me-2">
    </a>


        <li class="nav-item">
          <a class="nav-link d-inline-block align-text-top me-2" href="<?= site_url('seznamClanku/') ?>">Články</a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-inline-block align-text-top me-2" href="<?= site_url('sezony/') ?>">Sezóny</a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-inline-block align-text-top me-2" href="<?= site_url('formular/admin/') ?>">Administrace</a>
        </li>
    
      </ul>
      
    </div>
  </div>
</nav>






