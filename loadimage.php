<?php

    $path = "./img/";
    $diretorio = dir($path);
    $imagens = []; 

    while($arquivo = $diretorio -> read()){
        if(strlen ($arquivo) > 4){
            array_push($imagens,$path.$arquivo); 
        }
        
    }
    $diretorio -> close();
    //$imagens = array('/img/img.jpg','/img/img2.png','/img/img3.png','/img/img4.jpg'); 

    $indice = 0;

    $proxImagem = 0;
    $anteriorImagem = 0;

    if(!isset($_GET["foto"])){

        $indice         = 0;
        $anteriorImagem = count($imagens) - 1;
        $proxImagem     = 1;

    }else if( (int)$_GET["foto"]  >= 0 ){

        $indice         = (int)$_GET['foto']; 
        $anteriorImagem = (($indice - 1) >= 0)               ? $indice-1  :  count($imagens) -1;
        $proxImagem     = (($indice + 1) >= count($imagens)) ? 0          :  $indice +1;  

    }else{

        $indice         = 0;
        $anteriorImagem = count($imagens) - 1;
        $proxImagem     = 1;  
    } 
    ?>