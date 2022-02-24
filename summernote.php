<!DOCTYPE html>
<html>
<head>
    <title>Summernote Editor</title>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.min.js"></script>
        <script>
                $(document).ready(function(){
                        $('#summernote').summernote();
                });
        </script>
</head>
<body>
 
       <div class="kotak">
        <h1>
            Summernote Editor
        </h1>  
 
        <textarea id="summernote" rows="10"></textarea>
        <br/>
        <button class="tombol">Simpan</button>
    </div>
 
</body>
</html>