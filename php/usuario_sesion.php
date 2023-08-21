<?php 

    $usuario = ($_POST["login_usuario"]);
    $contra = ($_POST["login_contra"]);

    if($usuario==""|| $contra==""){
        echo'<div class="notification is-primary">
        <button class="delete"></button>
        </strong>Error, dato vacio</strong>
       </div>';
        exit();
    }


    $conn=conexion();
    $conn=$conn->query("SELECT * FROM usuario WHERE usuario_usuario='$usuario' AND usuario_contra='$contra'");

    if($conn->rowCount()==1){
        $conn=$conn->fetch();

        if($conn ['usuario_usuario']==$usuario && $conn ['usuario_contra']==$contra ){

            $_SESSION['id']=$conn['usuario_id'];
            $_SESSION['nombre']=$conn['usuario_nombre'];
            $_SESSION['apellido']=$conn['usuario_apellido'];
            $_SESSION['usuario']=$conn['usuario_usuario'];

            if(headers_sent()){
                echo"<script>window.location.href='index.php?vista=principal'</script>";

            }else{
                header("Location: index.php?vista=principal");
            }


        }else
        echo'<div class="notification is-primary">
        <button class="delete"></button>
        </strong>Contraseña o Usuario Incorrecto</strong>
       </div>';
    }else{
        echo'<div class="notification is-primary">
        <button class="delete"></button>
        </strong>Contraseña o Usuario Incorrecto</strong>
       </div>';
    }

    $conn=null;
