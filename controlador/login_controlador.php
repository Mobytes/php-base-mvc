<?php

class login_controlador extends controller {
    
    private $_empleados;
    
    public function __construct() {
        parent::__construct();
        $this->_empleados=  $this->cargar_modelo('empleados');
    }

    public function index() {
        $datos=$this->_empleados->seleccionar($_POST['usuario'],$_POST['clave']);
        
        if($datos[0]['USUARIO']==$_POST['usuario'] && $datos[0]['IDEMPLEADO']!=''){
            session::set('autenticado', true);
            session::set('empleado', $datos[0]['NOMBRES'].' '.$datos[0]['APELLIDOS']);
            session::set('idempleado', $datos[0]['IDEMPLEADO']);
            session::set('perfil', $datos[0]['PERFIL']);
            session::set('idperfil', $datos[0]['IDPERFIL']);
            $this->redireccionar();
        }else{
            echo '<script>alert("usuario o clave incorrecta")</script>';
            $this->redireccionar();
        }
    }
    
    public function mostrar() {
        echo 'Empleado: ' . session::get('empleado') . '<br>';
        echo 'Perfil: ' . session::get('perfil') . '<br>';
    }

    public function cerrar() {
        session::destroy();
        echo '<script>alert("Sesion finalizada")</script>';
        $this->redireccionar();
    }

}

?>
