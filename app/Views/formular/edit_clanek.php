<?= $this->include('layout/layout') ?>
<h1>Upravit článek</h1>
<form action="<?= base_url('formular/update_clanek/'.$articles->id) ?>" method="post">
    <div class="form-group">
        <label for="title">Název</label>
        <input type="text" name="title" id="title" class="form-control" value="<?= $articles->title; ?>" required>
    </div>
    <div class="form-group">
        <label for="photo">Fotografie (název souboru)</label>
        <input type="text" name="photo" id="photo" class="form-control" value="<?= $articles->photo; ?>">
    </div>
    <div class="form-group">
        <label for="text">Text</label>
        <textarea name="text" id="text" class="form-control" rows="5"><?= $articles->text; ?></textarea>
    </div>
    <div class="form-check">
        <input type="checkbox" name="top" id="top" class="form-check-input" <?= $articles->top ? 'checked' : ''; ?>>
        <label for="top" class="form-check-label">Top článek</label>
    </div>
    <div class="form-check">
        <input type="checkbox" name="published" id="published" class="form-check-input" <?= $articles->published ? 'checked' : ''; ?>>
        <label for="published" class="form-check-label">Publikovat</label>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Uložit</button>
</form>