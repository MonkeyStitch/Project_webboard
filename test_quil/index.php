<!-- Include stylesheet -->
<link href="https://cdn.quilljs.com/1.3.4/quill.snow.css" rel="stylesheet">

<!-- Create the editor container -->
<form action="output.php" method="post">

    <div id="editor">
        <p>Hello World!</p>
        <p>Some initial <strong>bold</strong> text</p>
        <p><br></p>
    </div>

    <textarea name="text" id="output" style="display: none;"></textarea>

    <button type="submit">Ok</button>

</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.3.4/quill.js"></script>

<!-- Initialize Quill editor -->
<script>
    var quill = new Quill('#editor', {
        theme: 'snow'
    });

    $(function() {
        $('#output').html($('#editor .ql-editor').html());
        $('#editor .ql-editor').keypress(function() {
           $('#output').html($(this).html());
        });
    });
</script>