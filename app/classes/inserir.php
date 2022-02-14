<?php

namespace app\classes;

use app\db\banco_de_dados;

class cadastro {

public $id;
public $tipo_cliente;
public $Foto;
public $nome;
public $data_nascimento;
public $estado;
public $cidade;
public $bairro;
public $lougradouro;
public $n_residencia;
public $email;
public $senha;

public function inserir_dados(){
// definir a data 

$this->data_nascimento = date('Y-m-d');

// inserir no banco
$obj_BD = new banco_de_dados ("cliente");

 
// atribuir o valor na instancia 

//retornar sucesso
}
}


?>