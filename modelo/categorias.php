<?php

class categorias extends Main{

    public $idcategoria;
    public $descripcion;
    public $nro_elemento;
    public $table='personas';

    public function selecciona() {
        if(is_null($this->descripcion)){
            $this->descripcion='';
        }
        if(is_null($this->idcategoria)){
            $this->idcategoria=0;
        }
        $datos = array($this->idcategoria, $this->descripcion);
        $r = $this->get_consulta("pa_selecciona_categorias", $datos);
        if ($r[1] == '') {
            $stmt = $r[0];
        } else {
            die($r[1]);
        }
        $r = null;
        if (conexion::$_servidor == 'oci') {
            oci_fetch_all($stmt, $data, null, null, OCI_FETCHSTATEMENT_BY_ROW);
            return $data;
        } else {
            $stmt->setFetchMode(PDO::FETCH_ASSOC);       
            return $stmt->fetchall();
        }
    }

    public function elimina($id) {
                 return $this->delete($this->table, $id);
            }

    public function inserta($datos) {
        //$datos = array($this->idcategoria, $this->descripcion, $this->nro_elemento);
        $r = $this->insert($this->table, $datos);
        if($r=='OK'){
            return $r;
        }else{
             die("Error");   
        }
       
    }
    public function getCategoria($id){
        return $this->get($this->table,$id);
    }
    public function actualiza($datos) {
        return $this->update($this->table, $datos);
    }
    public function todos(){
            $r = $this->select($this->table);
        return $r;
    }

}

?>