<?php

Class alerta {

    protected $_datos;

    public function __construct($datos) {
        $this->_datos = $datos;
        $this->newalertas();
    }

    function newalertas() {
        if(isset($this->_datos) && count($this->_datos)){
                echo '<div class="slide_likebox red">';
                echo '<div style="color: rgb(255, 255, 255); padding: 8px 5px 0pt 50px;"> ';
                echo '<div class="likeboxwrap">';
                echo '<div class="msg_pendientes"><ul>';
                for($i=0; $i< count($this->_datos); $i++){
                    echo "<li><a href='".BASE_URL . $this->_datos[$i]['MODULO']."'>".$this->_datos[$i]['DESCRIPCION']."</a></li><br>";
                }
                echo '</ul></div></div></div></div>';
        } 
        else {
                echo '<div class="slide_likebox green">';
                echo '<div style="color: rgb(255, 255, 255); padding: 8px 5px 0pt 50px;"> ';
                echo '<div class="likeboxwrap">';
                echo '<div class="msg_pendientes">';
                echo '<p>No hay mensajes pendientes</p>';
                echo '</div></div></div></div>';
        }
    }
}
?>