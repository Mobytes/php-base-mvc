<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>La Jungla</title>
        <meta name="description" content="Albergue Turistico La Jungla Tarapoto" />
        <meta name="keywords" content="jungla, tarapoto, turismo, hospedaje, selva" />
	
        <link rel="shortcut icon" href="<?php echo BASE_URL?>lib/img/favicon.ico" type="image/x-icon" />
        <script type="text/javascript" src="<?php echo $_params['ruta_js']; ?>jquery.min.js"></script>
        
        <!-- compartir-->
        <script type="text/javascript">var switchTo5x=true;</script>
        <script type="text/javascript" src="<?php echo $_params['ruta_js']; ?>buttons.js"></script>
        <script type="text/javascript">stLight.options({publisher: "658251a0-6222-4f0c-a9c3-235584b8e73a"});</script>
        
        <!--facebook-->
        <script type="text/javascript">
            jQuery.noConflict();jQuery(function (){jQuery(".slide_likebox").hover(function(){jQuery(".slide_likebox").stop(true, false).animate({right:"0"},"medium");},
                function(){jQuery(".slide_likebox").stop(true, false).animate({right:"-250"},"medium");},500);return false;});
        </script>
        <link rel="stylesheet" href="<?php echo $_params['ruta_css']; ?>fanbox.css" type="text/css" media="screen">
        <div class="slide_likebox">    
            <div style="color: rgb(255, 255, 255); padding: 8px 5px 0pt 50px;"> 
                <div class='likeboxwrap'> 
                    <span>
                        <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Flajungla.tarapoto&amp;width=238&amp;colorscheme=light&amp;connections=12&amp;stream=false&amp;header=false&amp;height=350" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:240px; height:320px;">
                        </iframe>
                    </span>        
                </div>    
            </div>
        </div>	
            
        <script type="text/javascript" src="<?php echo $_params['ruta_js']; ?>jquery.js"></script>
        <script type="text/javascript" src="<?php echo $_params['ruta_js']; ?>funcionesweb.js"></script>
        <script type="text/javascript" src="<?php echo $_params['ruta_js']; ?>kendo.web.min.js"></script>
        <link href="<?php echo $_params['ruta_css']; ?>styles/kendo.common.min.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="<?php echo $_params['ruta_css']; ?>styles/kendo.black.min.css" media="screen" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?php echo $_params['ruta_css']; ?>estilosgeneral.css" media="all" />
        <link rel="stylesheet" href="<?php echo $_params['ruta_css']; ?>estilosweb.css" media="all" />

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
        <a href="<?php echo BASE_URL ?>" id="cabecera"></a>
        <div id="principal">
            <div><h1 class="k-label">La Jungla</h1></div>
            <div id="sesion">
                <?php if(session::get('autenticado')){ ?>
                            <div id="userSesion"><label><?php echo session::get('empleado')?></label></div>
                            <div id="linkSesion"><label><?php echo session::get('perfil')?></label> | <a href="<?php echo BASE_URL?>login/cerrar">cerrar sesion</a></div>
                            <div id="servidorSesion"><label><?php echo Main::get_servidor() ?></label> | 
                                <label>IP: <?php echo $_SERVER['SERVER_NAME'] ?></label>
                            </div>
                        <?php }else{ ?>
                <form method="post" action="<?php echo BASE_URL?>login" id="login" onsubmit="return validarLogin();">
                    <table>
                        <tr>
                            <td>
                                <label>Usuario:&nbsp;</label> 
                            </td>
                            <td>
                                <input type="text" placeholder="Ingrese Usuario" id="usuario" name="usuario" class="k-textbox" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Clave:&nbsp;</label> 
                            </td>
                            <td>
                                <input type="password" placeholder="Ingrese Clave" id="clave" name="clave" class="k-textbox" />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button type="submit" class="k-button">Ingresar</button>
                            </td>
                        </tr>
                    </table>
                </form>
                        <?php } ?>
                <div id="icn_compartir">
<!--                    <span class='st_fblike_large' displayText='Facebook Like'></span>
                    <span class='st_facebook_large' displayText='Facebook'></span>-->
                    <div class='st_twitter_large' displayText='Tweet'>&nbsp;&nbsp;&nbsp;</div><br>
                    <div class='st_googleplus_large' displayText='Google +'></div><br>
                    <div class='st_blogger_large' displayText='Blogger'></div><br>
                    <div class='st_messenger_large' displayText='Messenger'></div><br>
                    <div class='st_linkedin_large' displayText='LinkedIn'></div><br>
                    <div class='st_email_large' displayText='Email'></div>
                </div>
            </div>
            <nav id="menuNav">
                <ul id="menu">
                    <li><a href="<?php echo BASE_URL ?>"><label>INICIO</label><br>Home</a></li>
                    <li><a href="<?php echo BASE_URL ?>web/servicios"><label>SERVICIOS</label><br>Services</a></li>
                    <li><a href="<?php echo BASE_URL ?>web/fotos"><label>FOTOS</label><br>Photos</a></li>
                    <li><a href="<?php echo BASE_URL ?>web/contactenos"><label>CONTACTENOS</label><br>Contac Us</a></li>
                    <?php if(session::get('autenticado')){ ?>
                    <li><a href="<?php echo BASE_URL ?>index"><label>SISTEMA</label><br>System</a></li>
                    <style type="text/css">
                        #menu li{
                            width:19.87%;
                        }
                    </style>
                    <?php }?>
                </ul>
            </nav>
            <div id="contenido">