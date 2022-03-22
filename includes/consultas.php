<?php
//include 'db.php';
include_once '/includes/db.php';
class Consultas extends DB{
    private $name;

    public function setConsulta($sub_nucleo){
        $resultado = $this->connect()->prepare('SELECT * FROM empresas WHERE id_subnucleo= :sub_nucleo');
        $resultado->execute(['sub_nucleo' => $sub_nucleo]);
        
        return $resultado;
    }
    public function setSubnucleo($id_nucleo){
        $resultado = $this->connect()->prepare('SELECT * FROM subnucleos WHERE id_nucleo= :id_nucleo');
        $resultado->execute(['id_nucleo' => $id_nucleo]);
        
        return $resultado;
    }
    public function setEmpresa(){
        $resultado = $this->connect()->prepare('SELECT * FROM empresas ');
        $resultado->execute();
        
        return $resultado;
    }
    public function setZona(){
        $resultado = $this->connect()->prepare('SELECT DISTINCT zona FROM empresas ');
        $resultado->execute();
        
        return $resultado;
    }
    public function getPorZona($zona){
        $resultado = $this->connect()->prepare('SELECT * FROM empresas WHERE zona= :zona');
        $resultado->execute(['zona' => $zona]);
        
        return $resultado;
    }
    public function setClasificacion(){
        $resultado = $this->connect()->prepare('SELECT DISTINCT clasificacion FROM empresas ');
        $resultado->execute();
        
        return $resultado;
    }
    public function getPorClasificacion($clasificacion){
        $resultado = $this->connect()->prepare('SELECT * FROM empresas WHERE clasificacion= :clasificacion');
        $resultado->execute(['clasificacion' => $clasificacion]);
        
        return $resultado;
    }

    public function getBusqueda($dato){
        $resultado = $this->connect()->prepare('SELECT * FROM empresas WHERE name= :name OR codigo= :codigo OR representante= :representante');
        $resultado->execute(['name' => $dato , 'codigo' => $dato, 'representante' => $dato]);
        
        return $resultado;
    }
      
    public function getName(){
        return $this->name;
    }
    
}
?>