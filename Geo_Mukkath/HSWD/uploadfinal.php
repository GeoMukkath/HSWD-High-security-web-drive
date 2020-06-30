    
    <html>
        <head>
            <title>Upload</title>
            <link rel="stylesheet" href="upload.css">
            <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">

            <style>
         
            </style>
       
        </head>
        <body>
            
        <div class="ui container">
        <h1>Your Drive</h1>
    <form method="POST" enctype="multipart/form-data" action="upload.php">
    <input type="file" name="file" class="ui button">
    <button type="submit"  class="ui button"> Upload</button>
    </form>
    


    <?php
    $files = scandir("uploads");
     
    for($a=2; $a<count($files); $a++)
    {
        ?>
        <p>
        <a download="<?php echo $files[$a] ?>" href="uploads/<?php echo $files[$a] ?>"><?php echo $files[$a] ?> </a>
        </p>
        <?php
        

    }
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
    </div>
</body>
    </html>







