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
public $cep;
public $lougradouro;
public $n_residencia;
public $email;
public $senha;

public function inserir_dados(){
// definir a data 

$this->data_nascimento = date('Y-m-d');

// inserir no banco
$obj_BD = new banco_de_dados ("cliente");

        $obj_BD->insert([
            'tipo' => $this->tipo_cliente,
            'foto' => $this->Foto,
            'nome' => $this->nome,
            'data_nasc' => $this->data_nascimento,
            'estado' => $this->estado,
            'cidade' => $this->cidade,
            'bairro' => $this->bairro,
            'cep' => $this->cep,
            'lougradouro' => $this->lougradouro,
            'n_residencia' => $this->n_residencia,
            'email' => $this->email,
            'senha' => $this->senha]);

 
// atribuir o valor na instancia 

//retornar sucesso
}
}


?>