<?php
    require_once 'config.php';

    // Datos login
    $userLogin = $_POST['correo'];
    $passLogin = $_POST['password'];

    // Extraer contraseña
    $sql = $conexion->prepare(
       'SELECT password 
        FROM   Usuarios 
        WHERE  correo = ?');
    $sql->bind_param("s", $userLogin);
    $sql->execute();
    $resultado = $sql->get_result();
    $fila = $resultado->fetch_row();

    // Contraseña no encontrada
    if ($resultado->num_rows === 0) {
        $errorLogin = "Nombre y/o contraseña no válidos.";
        include_once "login.php";
    }
    $passExtraida = $fila[0];

    // Redireccionar
    if (password_verify( $passLogin, $passExtraida )) {
        session_start();
        $_SESSION["USUARIO"]=$userLogin;
        // Se diferencia entre el admin y un académico
        if ($userLogin == 'admin@uda.cl') {
            include_once "AdminMenu.php";
        } else {
            include_once "AdminMenu - Perfil.html";
        }

    } else {
        $errorLogin = "Nombre y/o contraseña no válidos.";
        include_once "login.php";
    }
?>