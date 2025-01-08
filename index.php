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

<!-- /*************************************** */-->

<?php
    echo "arrays";

    /* escalares */
    $estudiantes = array("Carlos","Jose","Vanesa");

    /* asociativos */
    $tutor = ["nombre"=>"Carlos","apellidos"=>"Carlitos"];
    
    /* multiple dimensiones */
    $tutor_2 = ["nombre"=>"Carlos","apellidos"=>"Carlitos","cursos"=>["PHP","JAVA","SQL"]];

    echo$tutor_2["cursos"][2];
    echo count($tutor_2);

?>

<!-- /*************************************** */-->

<?php
    echo "concatenacion";

    $nombre = "Carlos";
    $pais = "Argentina";

    echo "El nombre es:" .$nombre.$pais;

    echo "El pais de recidiencia es {$pais}"

?>


