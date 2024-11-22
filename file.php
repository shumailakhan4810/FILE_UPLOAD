<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FILE_UPLOAD</title>
</head>
<body>
<?php
if(isset($_FILES['image'])){
    // echo "<pre>";
    // print_r($_FILES);
    // echo "</pre>";
   $file_name= $_FILES['image']['name'];
   $file_tmp= $_FILES['image']['tmp_name'];
//    echo  $file_name;
//    echo  $file_tmp;

// move_uploaded_file(tamp,desc)

move_uploaded_file($file_tmp,"gallery/". $file_name);
if(move_uploaded_file($file_tmp,"gallery/". $file_name)){
    echo "File is Uploaded Successfully";
}else{
    echo "File cannot upload";
}


}

?>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image" > <br><br>
        <input type="submit" >
    
    </form>
   
</body>
</html>