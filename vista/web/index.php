<div id="sliderContainer">
    <div id="mySlides">
      <div id="slide1" class="slide"> <img src="<?php echo $_params['ruta_img']; ?>jungla1.jpg" alt="Slide 1 jFlow Plus" />
        <div class="slideContent">
          <h3>Bienvenidos a la Jungla</h3>
          <p>Somos tu mejor alternativa en alojamiento turistico.</p>
        </div>
      </div>
      <div id="slide2" class="slide"> <img src="<?php echo $_params['ruta_img']; ?>jungla2.jpg" alt="Slide 2 jFlow Plus" />
        <div class="slideContent">
          <h3>Alojamiento y Areas Verdes</h3>
          <p>Disfruta de la naturaleza de una forma libre y comoda con nosotros.</p>
        </div>
      </div>
      <div id="slide3" class="slide"> <img src="<?php echo $_params['ruta_img']; ?>jungla3.jpg" alt="Slide 3 jFlow Plus" />
        <div class="slideContent">
          <h3>Restaurante</h3>
          <p>Disfruta de la mejores platos regionales e internacionales.</p>
        </div>
      </div>
      <div id="slide4" class="slide"> <img src="<?php echo $_params['ruta_img']; ?>jungla4.jpg" alt="Slide 3 jFlow Plus" />
        <div class="slideContent">
          <h3>Piscina</h3>
          <p>Disfruta de la piscina con la familia y amigos en una ambiente tranquilo.</p>
        </div>
      </div>
    </div>
    <div id="myController"> 
        <span class="jFlowControl"></span> 
        <span class="jFlowControl"></span> 
        <span class="jFlowControl"></span> 
        <span class="jFlowControl"></span> 
    </div>
    <div class="jFlowPrev"></div>
    <div class="jFlowNext"></div>
  </div>
          
<table>
    <tr valign="top">
        <td width="60%">
            <div id="articulos">
                <?php if (isset($this->datos) && count($this->datos)) {?>
                <h4 class="k-widget k-header">Nuestros Articulos</h4>
                <?php for ($i = 0; $i < count($this->datos); $i++) { ?>

                <div class="article">
                    <?php if (isset ($this->datos[$i]['IMAGEN']) && ($this->datos[$i]['IMAGEN'] != " ")){?>
                       <a rel="sexylightbox[kmx]" href="<?php echo $_params['ruta_img']?>articulos/<?php echo $this->datos[$i]['IMAGEN'] ?>" title="<?php echo $this->datos[$i]['TITULOS'] ?>">
                            <img src="<?php echo $_params['ruta_img']?>articulos/thumb/thumb_<?php echo $this->datos[$i]['IMAGEN'] ?>" class="fotoArt" />
                        </a>
                        <?php } ?>
                    <span class="contArt">
                        <h3><?php echo $this->datos[$i]['TITULO'] ?></h3>
                        <p><?php echo $this->datos[$i]['DESCRIPCION'] ?></p>
                    </span>
                </div>
                <?php }} else echo "<h1>No hay articulos</h1>"; ?>
            </div>
        </td>
        <td align="center">
            <span id="position">
                <?php if (isset($this->datos_jungla) && count($this->datos_jungla)) {?>
                <ul id="panelbar">
                    <li class="k-state-active">
                        <span class="k-link k-state-selected">¿Qui&eacute;nes somos?</span>
                        <div style="padding: 10px;">
                            <p><?php echo $this->datos_jungla[0]['PRESENTACION'] ?></p>
                        </div>
                    </li>
                    <li>
                        <span>Misi&oacute;n</span>
                        <div style="padding: 10px;">
                            <p><?php echo $this->datos_jungla[0]['MISION'] ?></p>
                        </div>
                    </li>
                    <li>
                        <span>Visi&oacute;n</span>
                        <div style="padding: 10px;">
                            <p><?php echo $this->datos_jungla[0]['VISION'] ?></p>
                        </div>
                    </li>
                </ul>
                <?php } ?>
            </span>
            <div class="iframe">
                <h4 class="k-widget k-header">Nuestro video en YouTube</h4>
                <iframe width="420" height="315" src="http://www.youtube.com/embed/3a0iGZ-IOSA" frameborder="0" allowfullscreen></iframe>
            </div>
        </td>
    </tr>
</table>
                    