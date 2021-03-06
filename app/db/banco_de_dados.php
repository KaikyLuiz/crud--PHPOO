<?php

namespace app\db;

use PDO;
use PDOException;

class banco_de_dados{
    const Host = 'localhost';
    const nome = 'crud_php_oo';
    const User = 'root2';
    const pass = '';

    private $tabela;
    private  $conexao_pdo;

    public function __construct($tabela = null)
    {
        $this->tabela = $tabela;
        $this->set_conexao();
    }

    private function set_conexao(){
        try{
            $this->conexao_pdo = new PDO ('mysql:host='. self::Host.';dbname='.self::nome,self::User, self::pass);
            $this->conexao_pdo->setAttribute (PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        }
        catch(PDOException $E){
            die ('Erro: ' . $E->getMessage());
        }

    }

    public function insert($value){

        $sql = ('INSERT INTO ' . $this->tabela .'(tipo, foto, nome, data_nasc, estado, cidade, bairro, cep, lougradouro, n_residencia, email, senha ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)');

        echo $sql;
        exit;

    }

}


?>