<?= $this->include('layout/layout') ?>


<!-- TinyMCE from CDN -->
<script src="https://cdn.tiny.cloud/1/1g40swj73gdyfitj5wuf7qxz795ir6sqt4lnqdral3beq2qy/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<!-- TinyMCE Init -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    tinymce.init({
        selector: '#text',
        height: 300,
        menubar: true,
        plugins: 'lists link image code paste',
        toolbar: 'undo redo | styleselect | bold italic underline | alignleft aligncenter alignright | bullist numlist | link image | code',
        block_formats: 'Paragraph=p;Heading 1=h1;Heading 2=h2;Heading 3=h3',
        forced_root_block: 'p',
        paste_as_text: true,
        automatic_uploads: true,
        file_picker_types: 'image',
        file_picker_callback: function (cb, value, meta) {
            if (meta.filetype === 'image') {
                const input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');
                input.onchange = function () {
                    const file = this.files[0];
                    const reader = new FileReader();
                    reader.onload = function () {
                        const id = 'blobid' + (new Date()).getTime();
                        const blobCache = tinymce.activeEditor.editorUpload.blobCache;
                        const base64 = reader.result.split(',')[1];
                        const blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);
                        cb(blobInfo.blobUri(), { title: file.name });
                    };
                    reader.readAsDataURL(file);
                };
                input.click();
            }
        }
    });
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
            <!-- Fixed: removed '#' from id -->
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
