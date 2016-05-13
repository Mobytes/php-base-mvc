<h3>Configurar Base de Datos</h3>
<form method="post" action="<?php if(isset ($this->action))echo $this->action ?>" id="frm">
    <input type="hidden" name="guardar" id="guardar" value="1"/>
    <div id="tabla">
    <table class="tabForm">
        <tr>
            <td><label for="sgbd">SGBD: </label></td>
            <td>
                <select placeholder="Seleccione..." class="combo" name="sgbd" required id="sqbd">
                    <option></option>
                    <option value="mysql">MySQL</option>            
                    <option value="pgsql">PostgreSQL</option>            
                    <option value="mssql">SQL Server</option>            
                    <option value="oci">Oracle</option>            
                </select>
                <span class="k-invalid-msg" data-for="sgbd"></span>
            </td>
            <td>
                <div class="k-invalid-msg msgerror" data-for="sgbd"></div>
            </td>
        </tr>
        <tr>
            <td><label for="usuario">Usuario: </label></td>
            <td><input type="text" placeholder="Ingrese usuario" required class="k-textbox" name="usuario" value="" /></td>
            <td>
                <div class="k-invalid-msg msgerror" data-for="usuario"></div>
            </td>
        </tr>
        <tr>
            <td><label>Clave: </label></td>
            <td><input type="password" placeholder="Ingrese contraseña" class="k-textbox" name="clave" value="" /></td>
            <td>
                <div class="msgerror"></div>
            </td>
        </tr>
        <tr>
            <td><label for="host">Host: </label></td>
            <td><input type="text" placeholder="Ingrese host" class="k-textbox" required name="host" value="" /></td>
            <td>
                <div class="k-invalid-msg msgerror" data-for="host"></div>
            </td>
        </tr>
        <tr>
            <td><label for="puerto">Puerto: </label></td>
            <td><input type="text" placeholder="Ingrese puerto" class="k-textbox" required name="puerto" value="" /></td>
            <td>
                <div class="k-invalid-msg msgerror" data-for="puerto"></div>
            </td>
        </tr>
        <tr>
            <td><label for="basedatos">Base de Datos: </label></td>
            <td><input type="text" placeholder="Ingrese nombre bd" class="k-textbox" required name="basedatos" value="" /></td>
            <td>
                <div class="k-invalid-msg msgerror" data-for="basedatos"></div>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <p><button type="submit" class="k-button" id="saveform">Guardar</button>
                <a href="<?php echo BASE_URL ?>" class="k-button cancel">Cancelar</a></p>
            </td>
            <td>
                <div class="msgerror"></div>
            </td>
        </tr>
    </table>
    </div>
</form>
