<table id="contactenos" align="center">
    <tr valign="top">
        <td>
        <div class="contacto">
            <form action="<?php echo BASE_URL ?>mensajes/nuevo" method="post" id="frmContacto" onsubmit="return validarContacto();">
                <h1 class="titleContacto">Dejenos su mensaje</h1>
                <table align="center" id="tbl_contacto">
                    <tr>
                        <td><label class="txtCont">Nombre</label></td>
                        <td><input type="text" name="nombreContacto" id="nombreContacto" class="k-textbox inpCont" placeholder="Ingrese su nombre" /></td>
                    </tr>
                    <tr>
                        <td><label class="txtCont">E-mail</label></td>
                        <td><input type="email" name="emailContacto" id="emailContacto" class="k-textbox inpCont" placeholder="Ingrese su e-mail" /></td>
                    </tr>
                    <tr>
                        <td><label class="txtCont">Tel&eacute;fono</label></td>
                        <td><input type="text" name="telefonoContacto" id="telefonoContacto" class="k-textbox inpCont" placeholder="Ingrese su numero telefonico" /></td>
                    <tr>
                        <td><label class="txtCont">Mensaje</label></td>
                        <td><textarea name="mensaje" id="mensaje"  class="k-textbox inpCont" placeholder="Ingrese su mensaje" /></textarea></td>
                    </tr>
                    <tr align="center">
                        <td colspan="2">
                            <button type="submit" class="k-button" id="btn_contacto">Enviar</button>
                            <button type="reset" class="k-button">Limpiar</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="contacto">
            <h1 class="titleContacto">Contactenos</h1>
            <div id="mensajeContacto">
                <p>Si deseas visitar la ciudad de Tarapoto y disfrutar de los mejores lugares turisticos somos tu mejor opcion.</p>
                <h3>Informate</h3>
                <?php if (isset($this->datos_jungla) && count($this->datos_jungla)) {?>
                <?php if ($this->datos_jungla[0]['DIRECCION']!='') {?>
                <div><?php echo $this->datos_jungla[0]['DIRECCION'] ?></div><?php }?>
                <div>La Banda de Shilcayo - San Martin - San Martin - Per&uacute;</div>
                <?php if ($this->datos_jungla[0]['TELEFONO']!='') {?>
                <div>Telefono: <?php echo $this->datos_jungla[0]['TELEFONO'] ?></div><?php }?>
                <?php if ($this->datos_jungla[0]['RPM']!='') {?>
                <div>RPM: <?php echo $this->datos_jungla[0]['RPM'] ?></div><?php }?>
                <?php if ($this->datos_jungla[0]['MOVISTAR']!='') {?>
                <div>Movistar: <?php echo $this->datos_jungla[0]['MOVISTAR'] ?></div><?php }?>
                <?php if ($this->datos_jungla[0]['RPC']!='') {?>
                <div>RPC: <?php echo $this->datos_jungla[0]['RPC'] ?></div><?php }?>
                <?php if ($this->datos_jungla[0]['E_MAIL']!='') {?>
                <div>Email: <?php echo $this->datos_jungla[0]['E_MAIL'] ?></div><?php }?>
                <?php } ?>
            </div>
        </div>
        </td>
        <td>
            <div class="contacto">
            <h1 class="titleContacto">Nuestra Ubicación en Google Maps</h1>
                <iframe width="425" height="700" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=+&amp;q=tarapoto+la+jungla&amp;ie=UTF8&amp;hq=tarapoto+la+jungla&amp;hnear=&amp;ll=-6.484483,-76.35336&amp;spn=12.399078,21.643066&amp;t=m&amp;z=6&amp;iwloc=A&amp;cid=8407359377180249452&amp;output=embed"></iframe><br /><small><a href="javascript:void(0)" onclick="window.open('http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=es&amp;geocode=+&amp;q=tarapoto+la+jungla&amp;ie=UTF8&amp;hq=tarapoto+la+jungla&amp;hnear=&amp;ll=-6.484483,-76.35336&amp;spn=12.399078,21.643066&amp;t=m&amp;z=6&amp;iwloc=A&amp;cid=8407359377180249452')" style="color:#0000FF;text-align:left">Ver mapa más grande</a></small>
            </div>
        </td>
    </tr>
</table>