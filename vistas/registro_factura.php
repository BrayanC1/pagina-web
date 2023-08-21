<div class="container is-fluid mb-5">
        <h1 class="title">Registro de Factura</h1>
    </div>
    <div class="container pb-4 pt-4">
        <div class="form-rest mb-4 mt-4"></div>
        <form action="./php/procesar_factura.php" method="POST" autocomplete="off" class="Formulario">
            <div class="field">
                <label class="label">Número de Factura</label>
                <div class="control">
                    <input class="input" type="text" name="factura_numero" maxlength="100" required>
                </div>
            </div>
            <div class="field">
                <label class="label">Proveedor</label>
                <div class="control">
                    <input class="input" type="text" name="factura_proveedor" maxlength="100" required>
                </div>
            </div>
            <div class="field">
                <label class="label">Monto</label>
                <div class="control">
                    <input class="input" type="number" name="factura_monto" required>
                </div>
            </div>
            <div class="field">
                <label class="label">Fecha</label>
                <div class="control">
                    <input class="input" type="date" name="factura_fecha" required>
                </div>
            </div>
            <p class="has-text-centered">
                <button class="button is-info is-rounded" type="submit">Guardar Factura</button>
            </p>
        </form>
    </div>