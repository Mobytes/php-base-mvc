<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="shortcut icon" href="<?php echo BASE_URL?>lib/img/favicon.ico" type="image/x-icon" />
        <title>La Jungla</title>
        <link href="<?php echo $_params['ruta_css']; ?>styles/kendo.common.min.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="<?php echo $_params['ruta_css']; ?>styles/kendo.black.min.css" media="screen" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="<?php echo $_params['ruta_js']; ?>jquery.js"></script>
        <script type="text/javascript" src="<?php echo $_params['ruta_js']; ?>funciones.js"></script>
        <script type="text/javascript" src="<?php echo $_params['ruta_js']; ?>validaciones.js"></script>
        <script type="text/javascript" src="<?php echo $_params['ruta_js']; ?>jquery.min.js"></script>
        <script type="text/javascript">
            jQuery(function (){jQuery(".slide_likebox").hover(function(){jQuery(".slide_likebox").stop(true, false).animate({right:"0"},"medium");},
                function(){jQuery(".slide_likebox").stop(true, false).animate({right:"-250"},"medium");},500);return false;});
        </script>
        <link rel="stylesheet" href="<?php echo $_params['ruta_css']; ?>fanbox.css" type="text/css" media="screen">
        <script type="text/javascript" src="<?php echo $_params['ruta_js']; ?>kendo.web.min.js"></script>
        <link type="text/css" href="<?php echo $_params['ruta_css']; ?>estilosgeneral.css" rel="stylesheet" media="screen" />
        <link type="text/css" href="<?php echo $_params['ruta_css']; ?>estilossistema.css" rel="stylesheet" media="screen" />
        <?php if(isset($_params['js']) && count($_params['js'])): ?>
        <?php for($i=0; $i < count($_params['js']); $i++): ?>
        
        <script src="<?php echo $_params['js'][$i] ?>" type="text/javascript"></script>
        
        <?php endfor; ?>
        <?php endif; ?>
        
        <?php if(isset($_params['css']) && count($_params['css'])): ?>
        <?php for($i=0; $i < count($_params['css']); $i++): ?>
        
        <link href="<?php echo $_params['css'][$i] ?>" type="text/css" rel="stylesheet" media="screen" />
        
        <?php endfor; ?>
        <?php endif; ?>
    </head>
    <body>
        <a href="<?php echo BASE_URL ?>index" id="cabecera"></a>
        <div id="principal">
        	<div id="siscom"><h1 class="k-label">La Jungla</h1></div>
            	<div id="sesion">
                        
                        <div id="linkSesion">
                             
                            <a href="<?php echo BASE_URL?>login/cerrar">cerrar sesion</a>
                        </div>
                        <div id="servidorSesion">
                            
                            <label>IP: <?php echo $_SERVER['SERVER_NAME'] ?></label>
                        </div>
                </div>
