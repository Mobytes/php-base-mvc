<form method="post" action="<?php if(isset ($this->action))echo $this->action ?>" id="frm">
    <input type="hidden" name="guardar" id="guardar" value="1"/>
     <h3><?php echo $this->titulo ?></h3>
    <div id="tabla">
    <table align="center" class="tabForm">
        <tr>
            <td><label>Codigo:</label></td>
            <td><input type="text" class="k-textbox" readonly="readonly" name="codigo" id="codigo"
                       value="<?php if(isset ($this->datos[0]['IDCUENTA']))echo $this->datos[0]['IDCUENTA']?>"/>
            </td>
            <td>
                <div class="msgerror"></div>
            </td>
        </tr>
        <tr>
            <td><label>Descripcion:</label></td>
            <td><input type="text" class="k-textbox" placeholder="Ingrese descripcion" required name="descripcion"
                       id="descripcion" value="<?php if(isset ($this->datos[0]['DESCRIPCION']))echo $this->datos[0]['DESCRIPCION']?>"/></td>
            <td>
                <div class="k-invalid-msg msgerror" data-for="descripcion"></div>
            </td>
        </tr>
        <tr>
            <td><label>Nro.de Cuenta:</label></td>
            <td><input type="text" class="k-textbox" placeholder="Ingrese Nro.de Cuenta" required name="nro_cuenta"
                       id="descripcion" value="<?php if(isset ($this->datos[0]['NRO_CUENTA']))echo $this->datos[0]['NRO_CUENTA']?>"/></td>
            <td>
                <div class="k-invalid-msg msgerror" data-for="nro_cuenta"></div>
            </td>
        </tr>
          <tr>
            <td><label>Cuenta Padre:</label></td>
            <td>
                <select class="combo" placeholder="Seleccione..." name="cuenta_padre">
                    <option></option>
                    <?php for($i=0;$i<count($this->datos_cuentas);$i++){ ?>
                        <?php if( $this->datos[0]['IDCUENTA_PADRE'] == $this->datos_cuentas[$i]['IDCUENTA'] ){ ?>
                    <option value="<?php echo $this->datos_cuentas[$i]['IDCUENTA'] ?>" selected="selected"><?php echo $this->datos_cuentas[$i]['NRO_CUENTA'].':'.$this->datos_cuentas[$i]['DESCRIPCION'] ?></option>
                        <?php } else { ?>
                    <option value="<?php echo $this->datos_cuentas[$i]['IDCUENTA'] ?>"><?php echo $this->datos_cuentas[$i]['NRO_CUENTA'].':'.$this->datos_cuentas[$i]['DESCRIPCION'] ?></option>
                        <?php } ?>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td><label>Categoria:</label></td>
            <td>
                <select class="combo" placeholder="Seleccione..." name="categoria">
                    <option></option>
                    <?php for($i=0;$i<count($this->datos_categorias);$i++){ ?>
                        <?php if( $this->datos[0]['IDCATEGORIA'] == $this->datos_categorias[$i]['IDCATEGORIA'] ){ ?>
                    <option value="<?php echo $this->datos_categorias[$i]['IDCATEGORIA'] ?>" selected="selected"><?php echo $this->datos_categorias[$i]['DESCRIPCION'] ?></option>
                        <?php } else { ?>
                    <option value="<?php echo $this->datos_categorias[$i]['IDCATEGORIA'] ?>"><?php echo $this->datos_categorias[$i]['DESCRIPCION'] ?></option>
                        <?php } ?>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <p><button type="submit" class="k-button" id="saveform">Guardar</button>
                <a href="<?php echo BASE_URL ?>plan_contable" class="k-button cancel">Cancelar</a></p>
            </td>
        </tr>
    </table>
    </div>
</form>
