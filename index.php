<!-- //Comentarios
#comentarios 2
/**
    multiple 
    linea 
    de
    comentarios
*/ -->

<?php
    echo "hola mundo con comentarios";
?>


<!-- /*************************************** */-->

<?php
    echo "tipos de datos";
    var_dump(7.5);
    var_dump('Hola mundos');
    var_dump(false);

?>

<!-- /*************************************** */-->

<?php
    echo "variables";

    $nombre = 'carlos';
    $nombre_completo = 'carlos alfaro';

    echo $nombre_completo;

?>

<!-- /*************************************** */-->

<?php
    echo "constantes";

    define("NOMBRE", "carlos pirovano");

    const apellido = "pirovano";

    echo apellido;
    

?>

