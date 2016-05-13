<script src="<?php echo BASE_URL ?>vista/web/js/funciones_fotos.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL ?>vista/web/js/sexylightbox.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL ?>vista/web/js/jquery.easing.js" type="text/javascript"></script>
<link href="<?php echo BASE_URL ?>vista/web/css/sexylightbox.css" type="text/css" rel="stylesheet" media="screen" />
<?php 
$galeria = file_get_contents("https://graph.facebook.com/".$this->idfb."/photos?limit=100"); 

$galeria = json_decode($galeria);

$fotos = $galeria->data;
            $divfotos .=
                '<label class="titleContacto">Fotos del Album</label>
                    <ul class="scroll-pane">
                <p>'. $valor['total'].' fotos publicadas</p>';
                    foreach($fotos as $idfoto => $foto){
                        $divfotos .= '<span><a rel="sexylightbox[kmx]" title="Foto '.($idfoto+1).' de la galería" href="'.$foto->source.'"><img class="imgfb" title="Foto '.($idfoto+1).' de la galería" src="'.$foto->picture.'" /></a></span>';
                    }
            $divfotos .='<br>
                </ul>';
    echo $divfotos;
?>