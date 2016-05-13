<?php

class categorias_controlador extends controller {
    
    private $_categorias;

    public function __construct() {
        parent::__construct();
        $this->_categorias = $this->cargar_modelo('categorias');
    }

    public function index() {
       $this->_vista->datos=$this->_categorias->todos();
       $this->_vista->titulo="Lista de Clientes";
        $this->_vista->setJs(array('funcion'));
        $this->_vista->renderizar('index');
    }
    
    public function buscador(){
        $this->_categorias->idcategoria = 0;
        if(isset($_POST['filtro'])&&$_POST['filtro']==0){
            $this->_categorias->descripcion=$_POST['persona'];
        }
        echo json_encode($this->_categorias->selecciona());
    }

    public function nuevo() {
        if (isset($_POST['guardar'])&&$_POST['guardar'] == 1 ) {
            $this->_categorias->inserta($_POST);
            $this->redireccionar('categorias');
        }
        $this->_vista->titulo = 'Registrar Categoria';
        $this->_vista->action = BASE_URL . 'categorias/nuevo';
        $this->_vista->setJs(array('funciones_form'));
        $this->_vista->renderizar('form');
    }

    public function editar($id) {
        if (!$this->filtrarInt($id)) {
            $this->redireccionar('categorias');
        }

        $this->_categorias->idcategoria = $this->filtrarInt($id);
        $this->_vista->datos = $this->_categorias->getCategoria($id);

        if (isset($_POST['guardar'])&&$_POST['guardar'] == 1) {        
            $this->_categorias->actualiza($_POST);
            $this->redireccionar('categorias');
        }
        $this->_vista->titulo = 'Actualizar Categoria';
        $this->_vista->setJs(array('funciones_form'));
        $this->_vista->renderizar('form');
    }

    public function eliminar($id) {
        if (!$this->filtrarInt($id)) {
            $this->redireccionar('categorias');
        }
        $this->_categorias->elimina($this->filtrarInt($id));
        $this->redireccionar('categorias');
    }
}

?>
