<form method="post" action="<?php if(isset ($this->action))echo $this->action ?>" id="frm">
    <input type="hidden" name="guardar" id="guardar" value="1"/>
     <h3><?php echo $this->titulo ?></h3>
    <div id="tabla">
    <table align="center" class="tabForm">
        <tr>
            <td><label>Codigo:</label></td>
            <td><input type="text" class="k-textbox" readonly="readonly" name="id" id="id"
                       value="<?php if(isset ($this->datos[0]['ID'])){echo $this->datos[0]['ID'];}else{ echo" ";} ?>"/>
            </td>
            <td>
                <div class="msgerror"></div>
            </td>
        </tr>
        <tr>
            <td><label>Descripcion:</label></td>
            <td><input type="text" class="k-textbox" placeholder="Ingrese descripcion" required name="persona"
                   id="descripcion" value="<?php if(isset ($this->datos[0]['PERSONA']))echo $this->datos[0]['PERSONA']?>"/>
            </td>
            <td>
                <div class="k-invalid-msg msgerror" data-for="descripcion"></div>
            </td>
        </tr>
        <tr>
            <td><label>Nro.Elemento:</label></td>
            <td><input type="numeric" class="cantidad" placeholder="Ingrese nro. elemento" required name="dni" 
                   id="nro_elemento" value="<?php if(isset ($this->datos[0]['DNI']))echo $this->datos[0]['DNI']?>"/>
            </td>
            <td>
                <div class="k-invalid-msg msgerror" data-for="nro_elemento"></div>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <p>
                    <button type="submit" class="k-button" id="saveform">Guardar</button>
                    <a href="<?php echo BASE_URL ?>categorias" class="k-button cancel">Cancelar</a>
                </p>
            </td>
        </tr>
    </table>
    </div>
</form>