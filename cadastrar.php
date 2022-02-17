<?php

use app\classes\cadastro;

if (isset($_POST['enviar'])){

    $obj_cadastro = new cadastro;
    $obj_cadastro->tipo_cliente = $_POST['tipo_radio'] ;
    $obj_cadastro->foto = $_POST['img'] ;
    $obj_cadastro->nome = $_POST['nome'] ;
    $obj_cadastro->data = $_POST['date'] ;
    $obj_cadastro->estado = $_POST['estado'] ;
    $obj_cadastro->cidade = $_POST['cidade'] ;
    $obj_cadastro->bairro = $_POST['bairro'] ;
    $obj_cadastro->cep = $_POST['cep'] ;
    $obj_cadastro->lougradouro = $_POST['logradouro'] ;
    $obj_cadastro->n_residencia = $_POST['n_residencia'] ;
    $obj_cadastro->email = $_POST['email'] ;
    $obj_cadastro->senha = $_POST['senha'] ;            

}







?>