<div class='titleContacto'>GALERIA</div>
<?php
    $divfotos;
    include("fb.php");
    $listafotos =  fb_albums('472148372819412');
    foreach($listafotos as $index => $valor){
            $divfotos .= '<div class="fotofb"><a href="javascript:void(0)" onclick="cargar_php(\'faceJungla\',\'fotos_fb\',\''.$valor['ida'].'\')"><i style="background-image: url('.$valor['thumb'].')"></i></a><p> '. $valor['total'].' fotos publicadas'.'</p><p style="font-weight:bold;" title="'.$valor['nombre'].'">'.cortar_string ($valor['nombre'], 50).'</p></div>';
    }
    echo $divfotos;
?>
<div id="fotos_fb"></div>