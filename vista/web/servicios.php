    <div id="servicios">
    	<div id="titServicios">
            <h3>La Jungla ofrece los siguientes servicios</h3>
        </div>
        <?php if (isset($this->datos) && count($this->datos)) {?>
                <?php for ($i = 0; $i < count($this->datos); $i++) { ?>
                <div class="titcuServicios">
                    <?php echo $this->datos[$i]['TITULO'] ?>
                </div>
                <div class="textServicios"><?php echo $this->datos[$i]['DESCRIPCION'] ?></div>
                    <?php if (isset ($this->datos[$i]['IMAGEN']) && ($this->datos[$i]['IMAGEN'] != " ")){?>
                <div>
                       <a rel="sexylightbox[kmx]" href="<?php echo $_params['ruta_img']?>articulos/<?php echo $this->datos[$i]['IMAGEN'] ?>" title="<?php echo $this->datos[$i]['TITULO'] ?>">
                            <img src="<?php echo $_params['ruta_img']?>articulos/thumb/thumb_<?php echo $this->datos[$i]['IMAGEN'] ?>" class="imgServicios" />
                        </a>
                </div>
                        <?php } ?>
                <?php }} else echo "<h1>No hay articulos</h1>"; ?>
    </div>