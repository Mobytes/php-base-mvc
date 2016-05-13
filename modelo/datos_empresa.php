<?php

class datos_empresa extends Main{

    public $telefono;
    public $ruc;
    public $direccion;
    public $e_mail;
    public $presentacion;
    public $mision;
    public $vision;
    public $id;

    public function selecciona() {
        if(is_null($this->id)){
            $this->id=1;
        }
        $datos = array($this->id);
        $r = $this->get_consulta("pa_selecciona_datos_empresa", $datos);
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

    public function actualiza() {
        $datos = array(1, $this->telefono, $this->movistar, $this->rpm, $this->rpc, $this->direccion, $this->e_mail, $this->presentacion, $this->mision, $this->vision);
        $r = $this->get_consulta("pa_actualiza_datos", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }
    public function inserta() {
        $datos = array(0, $this->telefono, $this->movistar, $this->rpm, $this->rpc, $this->direccion, $this->e_mail, $this->presentacion, $this->mision, $this->vision);
        $r = $this->get_consulta("pa_actualiza_datos", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

}

?>