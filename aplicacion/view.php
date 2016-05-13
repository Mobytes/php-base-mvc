<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of view
 *
 * @author pedro
 */
class view {

    //put your code here
    private $_controlador;
    private $_menu;
    private $_alerta;
    private $_js;
    private $_css;

    //parametro request = es el parametro del ccontrolador
     //$menu, $alerta
    public function __construct(request $peticion) {
        //guardamos el nombre del controlador
        $this->_controlador = $peticion->get_controlador();
        //$this->_menu = $menu;
       // $this->_alerta = $alerta;
        $this->_js = array();
        $this->_css = array();
    }

    public function renderizar($vista, $item = false) {
        //aqui podemos poner el menu
        //creamos la ruta de la vista

        $ruta_vista = ROOT . 'vista' . DS . $this->_controlador . DS . $vista . '.php';

        $js = array();
        $css = array();

        if (count($this->_js)) {
            $js = $this->_js;
        }
        if (count($this->_css)) {
            $css = $this->_css;
        }

        $_params = array(
            'ruta_css' => BASE_URL . 'lib/css/',
            'ruta_js' => BASE_URL . 'lib/js/',
            'ruta_img' => BASE_URL . 'lib/img/',
            'js' => $js,
            'css' => $css
        );

        //die($ruta_vista);
        //comprobamos si el archivo existe y es legible
        //die($ruta_vista);
        if (is_readable($ruta_vista)) {
            //enviamos parametros como css, js
            //archivos propios del template
            //incluimos los layout
            include_once ROOT . DS . 'cabecera.php';
           // include_once ROOT . DS . 'alerta.php';
           // new alerta($this->_alerta);
            //include_once ROOT . DS . 'menu.php';
            //new menu($this->_menu);
            include_once $ruta_vista;
            include_once ROOT . DS . 'pie.php';
            //incluimos la vista
        } else {
            throw new Exception('Error de vista');
        }
    }

    public function renderizar_webservice($vista, $item = false) {
        //aqui podemos poner el menu
        //creamos la ruta de la vista

        $ruta_vista = $ruta_vista = ROOT . 'vista' . DS . $this->_controlador . DS . $vista . '.php';
        //comprobamos si el archivo existe y es legible

        if (is_readable($ruta_vista)) {
            //incluimos los layout
            require_once ROOT . 'lib'.DS.'nusoap'.DS.'nusoap.php';
            include_once $ruta_vista;
            //incluimos la vista
        } else {
            throw new Exception('Error de vista');
        }
    }

    public function renderiza_web($vista, $item = false) {
        $js = array();
        $css = array();

        if (count($this->_js)) {
            $js = $this->_js;
        }
        if (count($this->_css)) {
            $css = $this->_css;
        }
        $_params = array(
            'ruta_css' => BASE_URL . 'lib/css/',
            'ruta_js' => BASE_URL . 'lib/js/',
            'ruta_img' => BASE_URL . 'lib/img/',
            'js' => $js,
            'css' => $css
        );
        $ruta_vista = ROOT . 'vista' . DS . $this->_controlador . DS . $vista . '.php';
        if (is_readable($ruta_vista)) {
            include_once ROOT . 'vista' . DS . $this->_controlador . DS . 'cabecera.php';
            include_once $ruta_vista;
            include_once ROOT . 'vista' . DS . $this->_controlador . DS . 'pie.php';
            //incluimos la vista
        } else {
            throw new Exception('Error de vista');
        }
    }

    public function setJs(array $js) {
        if (is_array($js) && count($js)) {
            for ($i = 0; $i < count($js); $i++) {
                $this->_js[] = BASE_URL . 'vista/' . $this->_controlador . "/js/" . $js[$i] . '.js';
            }
        } else {
            throw new Exception('Error de js');
        }
    }

    public function setCss(array $css) {
        if (is_array($css) && count($css)) {
            for ($i = 0; $i < count($css); $i++) {
                $this->_css[] = BASE_URL . 'vista/' . $this->_controlador . "/css/" . $css[$i] . '.css';
            }
        } else {
            throw new Exception('Error de css');
        }
    }

    public function renderizar_reporte($vista, $item = false) {
        //aqui podemos poner el menu
        //creamos la ruta de la vista

        $ruta_vista = ROOT . 'vista' . DS . $this->_controlador . DS . $vista . '.php';
        //comprobamos si el archivo existe y es legible

        if (is_readable($ruta_vista)) {
            //incluimos los layout
            include_once $ruta_vista;
            //incluimos la vista
        } else {
            throw new Exception('Error de vista');
        }
    }

}

?>