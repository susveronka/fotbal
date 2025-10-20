<?= $this->include('layout/layout') ?>

<head>
    <!-- TinyMCE from node_modules -->
    <script src="/node_modules/tinymce/tinymce.min.js" referrerpolicy="origin" crossorigin="anonymous"></script>
    
    <script>
        tinymce.init({
            selector: '#text', 
            plugins: 'lists link paste',
            toolbar: 'undo redo | formatselect | bold italic underline | \
                      alignleft aligncenter alignright | \
                      bullist numlist | removeformat | link',
            height: 300,
            menubar: false,
            language: 'cs',
            forced_root_block: 'p',        // vždy obalí odstavce do <p>
            block_formats: 'Paragraph=p;Heading 1=h1;Heading 2=h2',
            paste_as_text: true,          // vložení jako prostý text
            branding: false
        });
    </script>
</head>

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
            <textarea class="form-control" placeholder="Napište text článku zde" id="text" name="text"></textarea>
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
