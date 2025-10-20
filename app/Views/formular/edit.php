
<?= $this->include('layout/layout') ?>
<head>
    <script src="/node_modules/tinymce/tinymce.min.js" referrerpolicy="origin" crossorigin="anonymous"></script>
</head>
<div class="container-fluid">
<h1>Upravit článek</h1>
<form action="<?= base_url('formular/update/' . (is_array($article) ? $article['id'] : $article->id)) ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title">Název</label>
        <input type="text" name="title" id="title" class="form-control" value="<?= is_array($article) ? $article['title'] : $article->title; ?>" required>
    </div>

    <div class="mb-3">
            <label for="image" >Vyber obrázek:</label>
            <input class="form-control" type="file" name="image" id="image" required>
        </div>

    <div class="form-group">
        <label for="text">Text</label>
        <textarea name="text" id="text" class="form-control" rows="5"><?= is_array($article) ? $article['text'] : $article->text; ?></textarea>
    </div>

    <div class="mb-3">
               <label for="date">Vyberte datum</label>
            <input type="date"  class="form-control" id="date" name="date"  value="<?= is_array($article) ? $article['date'] : $article->date; ?>"  min="<?= date('j.n.Y') ?>"  required></div>
           
       

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

<script>
document.addEventListener('DOMContentLoaded', function () {
    tinymce.init({
        selector: '#text',
        height: 300,
        menubar: false,
        plugins: 'lists link paste',
        toolbar: 'undo redo | formatselect | bold italic underline | alignleft aligncenter alignright | bullist numlist | removeformat | link',
        block_formats: 'Paragraph=p;Heading 1=h1;Heading 2=h2;Heading 3=h3',
        forced_root_block: 'p',
        paste_as_text: true
    });
});
</script>

</div>