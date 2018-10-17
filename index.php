<?php
    include "fileLoad.php";
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Homework 4</title>
    <style>
        .gallery{
            width: 900px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            background-color: lightgray;
            border: 1px solid #000;

        }
        .item{
            margin: 10px;
        }
        .item img:hover{
            filter: saturate(10);
            transition: filter 500ms;
        }
    </style>
</head>
<body>
<br><br>
<form action="?" method="post" enctype="multipart/form-data">
    <label>Размер не должен превышать 3mb<input type="file" name="imges"></label>
    <input type="submit" value="Загрузить картинку">
</form>

<?php
$bigImgFolder = "img/max/";
$smallImgFolder = "img/min/";

if(isset($_FILES['imges'])) {
    uploadFile($bigImgFolder, $smallImgFolder);
}
?>

<div class="gallery">
<?php
    outputImagesFromDir($bigImgFolder, $smallImgFolder);
?>
</div>

</body>
</html>