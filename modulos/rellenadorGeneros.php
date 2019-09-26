<?php

    include "librerias/conexion.php";

    $sql = "SELECT tipo_genero FROM genero";
    $listar = mysqli_query($cn, $sql);

    while ($rs = mysqli_fetch_array($listar)) {
      $genero = $rs['tipo_genero'];
      ?>
        <a class="btn " href="#" role="button"style="background-color: #00091e; color: white; font-size: 50%;"><?php echo $genero ?></a>
      <?php
    }

?>