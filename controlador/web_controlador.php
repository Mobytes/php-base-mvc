<?php

class web_controlador extends controller {
    
    private $_web;
    private $_datos_jungla;

    public function __construct() {
        parent::__construct();
        $this->_web = $this->cargar_modelo('articulos');
        $this->_datos_jungla = $this->cargar_modelo('datos_empresa');
    }
    
    public function index() {
        $this->_web->tipo = "Principal";
        $this->_vista->datos = $this->_web->selecciona();
        $this->_vista->datos_jungla = $this->_datos_jungla->selecciona();
        $this->_vista->setJs(array('sexylightbox','jquery.easing','jflow.plus.min','funciones_index'));
        $this->_vista->setCss(array('sexylightbox','estilos_index','jflow.style'));
        $this->_vista->renderiza_web('index');
    }
    
    public function servicios(){
        $this->_web->tipo = "Servicios";
        $this->_vista->datos = $this->_web->selecciona();
        $this->_vista->setJs(array('sexylightbox','jquery.easing','funciones_servicios'));
        $this->_vista->setCss(array('sexylightbox','estilos_servicios'));
        $this->_vista->renderiza_web('servicios');
    }
    
    public function fotos(){
        $this->_vista->setJs(array('funciones_fotos'));
        $this->_vista->setCss(array('estilos_fotos'));
        $this->_vista->renderiza_web('fotos');
    }
    
    public function contactenos(){
        $this->_vista->datos_jungla = $this->_datos_jungla->selecciona();
        $this->_vista->setJs(array('funciones_contactenos'));
        $this->_vista->setCss(array('estilos_contactenos'));
        $this->_vista->renderiza_web('contacto');
    }
    
    public function faceJungla($id){
        $this->_vista->idfb= $id;
        $this->_vista->renderizar_reporte('faceJungla');
    }
    
}

?>
