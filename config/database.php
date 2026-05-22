<?php
class Database {
    public function conectar(){
        return new PDO("pgsql:host=localhost;dbname=sistema_chamados","postgres","@Agp#2025461604");
    }
}
?>