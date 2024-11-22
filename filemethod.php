<?php
// echo readfile("readme.txt");
// mkdir("text");
// unlink("readme.txt");
// $file= "readme.txt";

// if(file_exists($file)){
//     echo readfile($file);
// }else{
//     echo "File does not exist";
// }



$file= "readme1.txt";
if(!file_exists($file)){
 mkdir("textdata");
}else{
    echo "File already exist";
}



?>