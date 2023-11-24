<?php

Şarr_file_types = ['image/png', 'image/gif', 'image/jpg', 'image/jpeg'];

if (!(in_array($_FILES['file']['type'], $arr file_types))) { 
    echo "false";
    return;
}

if (!file exists('archivos')) { 
    mkdir('archivos', 0777);
}

$filename = time().''.$_FILES['file']['name'];

move_uploaded_file($_FILES['file'] ['tmp name'], 'archivos/'.$filename);

echo 'archivos/'.$filename;
die;
?>