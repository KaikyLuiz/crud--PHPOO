<?php

namespace app\db;

use PDOException;

class banco_de_dados{
    const Host = 'db';
    const nome = 'crud_phpoo';
    const User = 'root';
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
            
            $this->conexao_pdo = new PDO ('mysql:host='.self::Host.';dbname='.self::nome,self::User, self::pass);

            $this->conexao_pdo->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }
        catch(PDOException $E){
            die ('Erro: ' . $E->getMessage());
        }

    }





}






?>