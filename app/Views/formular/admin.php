<?= $this->include('layout/navbar') ?>
<div class="container-fluid">
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Název</th>
            <th>Akce</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($articles as $article): ?>
        <tr>
            <td><?= esc(is_array($article) ? $article['id'] : $article->id); ?></td>
            <td><?= esc(is_array($article) ? $article['title'] : $article->title); ?></td>
            <td>
                <a href="<?= base_url('formular/edit/' . (is_array($article) ? $article['id'] : $article->id)) ?>" class="btn btn-warning">Upravit</a>
                <form action="<?= base_url('formular/delete/' . (is_array($article) ? $article['id'] : $article->id)) ?>" method="post" style="display:inline;">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Opravdu chcete smazat tento článek?')">Smazat</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    
</table>

    <a href="<?= base_url('formular/create') ?>" class="btn btn-primary mb-3">Přidat nový článek</a>
</div>