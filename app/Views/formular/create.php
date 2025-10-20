<?= $this->include('layout/layout') ?>
<?= $this->include('layout/sablona') ?>

<!-- Load TinyMCE from CDN -->
<script src="https://cdn.tiny.cloud/1/1g40swj73gdyfitj5wuf7qxz795ir6sqt4lnqdral3beq2qy/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<script>
    // Initialize TinyMCE for the textarea with ID 'text'
    tinymce.init({
        selector: '#text',
        plugins: 'lists link image code',
        toolbar: 'undo redo | styleselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | code',
        menubar: true,
        height: 300,
        branding: false
    });
</script>

<div class="container-fluid">
    <h1>Přidat nový článek</h1>

    <form action="<?= base_url('formular/store') ?>" method="post" enctype="multipart/form-data">
        <div class="form-floating mb-3">
            <input type="text" name="title" id="title" class="form-control" placeholder="Název článku" required>
            <label for="title">Název článku</label>
        </div>

        <div class="mb-3">
            <label for="photo" class="form-label">Vyber obrázek:</label>
            <input class="form-control" type="file" name="photo" id="photo" required>
        </div>

        <div class="form-floating mb-3">
            <textarea class="form-control"  placeholder="Napište text článku zde" id="text" name="text"></textarea>
            <label for="text">Text článku</label>
        </div>

        <div class="form-floating mb-3">
            <input type="date" class="form-control" id="date" name="date"
                   value="<?= date('Y-m-d') ?>" min="<?= date('Y-m-d') ?>" required>
            <label for="date">Vyberte datum</label>
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
