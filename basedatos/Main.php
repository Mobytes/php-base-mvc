<?php

class Main extends conexion {
        
    protected static function get_consulta($pa, $datos) {
        $bd = new conexion();
        $bd->setAttribute(PDO::ATTR_CASE, PDO::CASE_UPPER);
        return self::procedimientoAlmacenado($pa, $datos, $bd);
    }

    protected static function get_query($sql){
      $bd=new conexion();
       $bd->setAttribute(PDO::ATTR_CASE, PDO::CASE_UPPER);
      return self::getConsultaQuery($sql,$bd);  
    }
    public function getConsultaQuery($sql){
        $bd=new conexion();
       $bd->setAttribute(PDO::ATTR_CASE, PDO::CASE_UPPER);
        $consulta = $bd->query($sql);
        $data= $consulta->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    //funcion para mostrar todos los datos
    public function select($table){
        $sql="Select * from ".$table;
       return $this->getConsultaQuery($sql);
    }

    public function insert($table,$data){
        //elimino la data guardar que difierencia el estado de un registro nuevo
        unset($data["guardar"]);
        //rescatamos a todos los atributos de la tabla
        $atributos=$this->atributos($table);
        $cadena="";
        //formamos la cadena de todos los campos que vamos a insertar
        for($i=0;$i<count($data);$i++){
            $cadena=$cadena."'".$data[$atributos[$i]["FIELD"]]."',";
        }
        //eliminamos la ultima ,
        $result = substr($cadena, 0, -1);
        //agrupamos las cadenas
        $sql="Insert into ".$table." VALUES(".$result.")";
        // generamos la conexion PDO
        $bd=new conexion();
        //enviamos atributos a la conexion
        $bd->setAttribute(PDO::ATTR_CASE, PDO::CASE_UPPER);
        //ejecutamos la consulta sql del insert
        $consulta = $bd->query($sql);
        
        return "OK";
    }
    public function delete($table,$id)
    {
        $sql="delete from ".$table." WHERE id =".$id;
        $bd=new conexion();
        $bd->setAttribute(PDO::ATTR_CASE, PDO::CASE_UPPER);
        
        $consulta = $bd->query($sql);
        return "OK";
    }
     public function update($table,$data){
        unset($data["guardar"]);
        $atributos=$this->atributos($table);
        $cadena="";
        for($i=0;$i<count($data);$i++){
            $cadena=$cadena." ".$atributos[$i]["FIELD"]."='".$data[$atributos[$i]["FIELD"]]."',";
        }
        $result = substr($cadena, 0, -1);
        $sql="update ".$table." set ".$result." WHERE id=".$data["id"];
        //echo $sql;exit();
        $bd=new conexion();
        $bd->setAttribute(PDO::ATTR_CASE, PDO::CASE_UPPER);
        $consulta = $bd->query($sql);
        return "OK";
    }

    public function get($table,$id) {
        $sql="Select * from ".$table." WHERE id=".$id;
       return $this->getConsultaQuery($sql);
    }

    public function atributos($table){
        $sql = "SHOW COLUMNS FROM " . $table;
        return $this->getConsultaQuery($sql);
    }

}

?>