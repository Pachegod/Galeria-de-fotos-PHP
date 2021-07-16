<?php  include("./loadimage.php"); ?> 
<!DOCTYPE html>
<html>
<head>
   <title>Site interno</title>
</head>
<body>
  <style type ="text/css">

    .foto{margin:0 auto; padding: 0 2%; max-width: 1800px;}
    .foto img{
      max-width: 1500px;
      width:100%;
    } 
  </style>

  <div class = "foto">  

    <img src="<?= $imagens[$indice] ?>" />    

    <div class="btns">      
      <a href="fotos.php?foto=<?=  $anteriorImagem  ?>">Voltar</a>
      <spam> | </spam>
      <a href="fotos.php?foto=<?=  $proxImagem      ?>">Avançar</a> 
    </div>

    <script>

      setInterval(function(){
        let indice = parseInt(`<?= $proxImagem ?>`);

        window.location.href="/fotos.php?foto="+indice;
      }, 8000);

    </script>

  </div> 
</body>
</html>
