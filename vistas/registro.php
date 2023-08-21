<div class="container is-fluid mb-5">
    <h1 class="title">Registro Usuario</h1>
</div>
<div class="container pb-4 pt-4">
    <div class="form-rest mb-4 mt-4"></div>
    <form action="./php/guardar_registro.php" method="POST" autocomplete="off" class="Formulario">
        <div class="field">
            <label class="label">Nombres</label>
            <div class="control">
                <input class="input" type="text" name="usuario_nombre" maxlength="100" required>
            </div>
        </div>
        <div class="field">
            <label class="label">Apellidos</label>
            <div class="control">
                <input class="input" type="text" name="usuario_apellido" maxlength="100" required>
            </div>
        </div>
        <div class="field">
            <label class="label">Usuario</label>
            <div class="control">
                <input class="input" type="text" name="usuario_usuario" maxlength="10" required>
            </div>
        </div>
        <div class="field">
            <label class="label">Contraseña</label>
            <div class="control">
                <input class="input" type="password" name="usuario_contra" maxlength="100" required>
            </div>
        </div>
        <p class="has-text-centered">
            <button class="button is-info is-rounded" type="submit">Guardar</button>
        </p>
    </form>
</div>
