<?= $this->include('layout/layout') ?>


<div class="container-fluid">
    <h1>Přidat nový článek</h1>

<form action="<?= base_url('formular/clanek') ?>" method="post">
    
    <div class="form-floating mb-3">
        <input type="text" name="title" id="title" class="form-control" placeholder="Název článku" required>
        <label for="title">Název článku</label>
    </div>
    
   <?php
# https://moodle.oauh.cz/mod/book/view.php?id=45960&chapterid=34
?>

    <div class="form-floating mb-3">
         <textarea class="form-control" placeholder="Napište text článku zde" id="text" style="height: 300px" name="text"></textarea>
         <label for="text">Text článku</label>

    </div>
    <div class="form-check">
        <input type="checkbox" name="top" id="top" class="form-check-input">
        <label for="top" class="form-check-label">Top článek</label>
    </div>
    <div class="form-check">
        <input type="checkbox" name="published" id="published" class="form-check-input">
        <label for="published" class="form-check-label">Publikovat</label>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Uložit</button>
</form>
</div>
