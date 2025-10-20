<head>
   
<script src="https://cdn.tiny.cloud/1/1g40swj73gdyfitj5wuf7qxz795ir6sqt4lnqdral3beq2qy/tinymce/6/tinymce.min.js" referrerpolicy="origin" crossorigin="anonymous"></script>
    
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
            forced_root_block: 'p',        
            block_formats: 'Paragraph=p;Heading 1=h1;Heading 2=h2',
            paste_as_text: true,          
            branding: false
        });
    </script>
</head>