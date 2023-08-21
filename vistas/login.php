<div class="main-container">
	<form class="box login" action="" method="POST" autocomplete="off">
		<h5 class="title is-5 has-text-centered is-uppercase">Sistema Contrucciones Castillo</h>
		<div class="field">
			<div class="control">
				<input class="input" type="text" name="login_usuario" placeholder="Usuario">
			</div>
		</div>

		<div class="field">
			<div class="control">
				<input class="input" type="password" name="login_contra" placeholder="Contraseña" >
			</div>
		</div>

		<p class="has-text-centered mb-4 mt-3">
			<button type="submit" class="button is-info">Iniciar sesión</button>
		</p>
		
		<?php
			if(isset($_POST['login_usuario']) && isset($_POST['login_contra'])){
				require_once "./php/main.php";
				require_once "./php/usuario_sesion.php";
			}
		?>
	</form>
</div>