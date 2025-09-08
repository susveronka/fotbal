
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
 
    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

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
    border-radius: 12px;
}

.card-grid .side-card {
    border-radius: 12px;
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
    padding: 1.5rem;
    font-weight: bold;
    text-shadow: 0 2px 8px rgba(0,0,0,0.7);
}

.card-grid .main-card .card-title {
    font-size: 2rem;
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
}
<>/style>

    <?= $this->renderSection('content') ?>
</body>
</html>