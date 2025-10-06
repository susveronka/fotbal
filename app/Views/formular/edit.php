<?= $this->include('layout/layout') ?>
<h1>Upravit článek</h1>
<form action="<?= base_url('formular/update/' . (is_array($article) ? $article['id'] : $article->id)) ?>" method="post">
    <div class="form-group">
        <label for="title">Název</label>
        <input type="text" name="title" id="title" class="form-control" value="<?= is_array($article) ? $article['title'] : $article->title; ?>" required>
    </div>
    <div class="form-group">
        <label for="photo">Fotografie (název souboru)</label>
        <input type="text" name="photo" id="photo" class="form-control" value="<?= is_array($article) ? $article['photo'] : $article->photo; ?>">
    </div>
    <div class="form-group">
        <label for="text">Text</label>
        <textarea name="text" id="text" class="form-control" rows="5"><?= is_array($article) ? $article['text'] : $article->text; ?></textarea>
    </div>
    <div class="form-check">
        <input type="checkbox" name="top" id="top" class="form-check-input" <?= (is_array($article) ? (!empty($article['top']) ? 'checked' : '') : (!empty($article->top) ? 'checked' : '')); ?>>
        <label for="top" class="form-check-label">Top článek</label>
    </div>
    <div class="form-check">
        <input type="checkbox" name="published" id="published" class="form-check-input" <?= is_array($article) ? (!empty($article['published']) ? 'checked' : '') : (!empty($article->published) ? 'checked' : ''); ?>>
        <label for="published" class="form-check-label">Publikovat</label>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Uložit</button>
</form>