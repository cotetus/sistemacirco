<?php

class Consult extends Database {
        
        public $stmt;   


    public function selectUser($name) {
        $this->stmt = $this->conexion->prepare(SQL_USER);
        
        $this->stmt->bindValue(':letra', '%'.$name.'%', PDO::PARAM_STR);
        $this->stmt->execute();
   
}

    public function selectEsp($id){

            $this->stmt = $this->conexion->prepare(SQL_ESP);

    $this->stmt->bindValue(':id', $id, PDO::PARAM_STR);
    $this->stmt->execute();

    }

    public function selectBussines($idu) {

            $this->stmt = $this->conexion->prepare(SQL_BUSSINES);

    $this->stmt->bindValue(':id', $idu, PDO::PARAM_STR);
    $this->stmt->execute();

    }

    public function selectReview($idu, $id) {

        $this->stmt = $this->conexion->prepare(SQL_REVIEW);

    $this->stmt->bindValue(':idu', $idu, PDO::PARAM_STR);
    $this->stmt->bindValue(':id', $id, PDO::PARAM_STR);
    $this->stmt->execute();
    
    }


}
