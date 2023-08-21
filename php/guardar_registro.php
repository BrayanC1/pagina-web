<?php
   
   
   #Datos Vacios
    require_once "main.php";

    $nombre = ($_POST["usuario_nombre"]);
    $apellido = ($_POST["usuario_apellido"]);
    $usuario = ($_POST["usuario_usuario"]);
    $contra = ($_POST["usuario_contra"]);

    if($nombre==""|| $apellido=="" || $usuario==""|| $contra==""){
        echo'<div class="notification is-primary">
        <button class="delete"></button>
        </strong>Ah ocurrido un error al llenar los datos, algun dato vacio o error de sintaxis</strong>
       </div>';
        exit();
    }


    #Datos Usuario
    $check_usuario=conexion();
    $check_usuario=$check_usuario->query("SELECT usuario_usuario FROM usuario WHERE usuario_usuario='$usuario'");
    if($check_usuario->rowCount()>0){
        echo '<div class="notification is-primary">
        <button class="delete"></button>
        </strong>Ah ocurrido un error, usuario ya existente</strong>
       </div>';
        exit();
    }
    $check_usuario=null;

    

   #Guardar Base de Datos
    $guardar_usuario=conexion();
    $guardar_usuario=$guardar_usuario->prepare("INSERT INTO usuario(usuario_nombre,usuario_apellido,usuario_usuario,usuario_contra) VALUES(:nombre,:apellido,:usuario,:contra)");

    $marcadores=[
        ":nombre"=>$nombre,
        ":apellido"=>$apellido,
        ":usuario"=>$usuario,
        ":contra"=>$contra
    ];

    $guardar_usuario->execute($marcadores);

    if($guardar_usuario->rowCount()==1){
        echo '<div class="notification is-primary">
        <button class="delete"></button>
        </strong>Registro Exitoso</strong>
       </div>';
    }else{
        echo '<div class="notification is-primary">
        <button class="delete"></button>
        </strong>Usuario no registrado, ERROR</strong>
       </div>';
    }
    $guardar_usuario=null;

   
?>