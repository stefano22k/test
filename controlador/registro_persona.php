<?php 
if (!empty($_POST["btnregistrar"])) {
    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["dni"]) and !empty($_POST["fecha"]) and !empty($_POST["correo"])) {
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $dni=$_POST["dni"];
        $fecha=$_POST["fecha"];
        $coreo=$_POST["correo"];

        $sql=$conexion->query("  insert into persona(nombre,apellido,dni,fecha_nac,correo)values('$nombre','$apellido','$fecha','$correo')");

        if($sql==1){
            echo '<div class="alert alert-success">Persona registrado correctamente</div>';
        } else {
            echo '<div class="alert alert-denger">Error al registrar</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Algunos de los campos esta vacio.</div>';
    }
}
?>