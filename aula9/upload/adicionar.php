<?php

var_dump($_FILES);

if( $_FILES['imagem']['error'] == 0  && $_FILES['imagem']['size'] > 0){

    move_uploaded_file($_FILES['imagem']['tmp_name'], 
                       "img/{$_FILES['imagem']['name']}");
}

