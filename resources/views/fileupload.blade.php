<html>
    <head>
        <title>File Upload</title>
    </head>
    <body>
        <form action="fileupload" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="f1">
            <br>
            <button type="submit">Upload File</button>
        </form>
    </body>
</html>

