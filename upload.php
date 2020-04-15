<html>
  <head>
    <title>file uploader
    </title>
  </head>
  <body>
    <form action="" method="post" enctype="multipart/form-data">
      <input name="dokumen" type="file" id="dokumen" />
      <input type="submit" name="upload" id="upload" value="Upload" />
    </form>
<?php
mkdir("upload");
$file              = $_FILES['dokumen'];
$nm_file       = $file['name'];
$nm_tmp     = $file['tmp_name'];
$upload_dir = "upload/";
move_uploaded_file($nm_tmp, $upload_dir . $nm_file);
echo "Successful.";
?>
  </body>
</html>
