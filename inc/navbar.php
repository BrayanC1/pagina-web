<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="index.php?vista=principal">
            <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    Usuarios
                </a>

                <div class="navbar-dropdown">
                    <a class="navbar-item" href="index.php?vista=registro">Nuevo</a>
                    <a class="navbar-item" href="index.php?vista=lista_usuario">Lista</a>

                </div>
            </div>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    Facturas
                </a>

                <div class="navbar-dropdown">
                    <a class="navbar-item" href="index.php?vista=registro_factura">Nuevo</a>
                    <a class="navbar-item" href="index.php?vista=lista_factura">Lista</a>

                </div>
            </div>

        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <a class="button is-primary is-link" href="index.php">
                        Cerrar Sesion
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>