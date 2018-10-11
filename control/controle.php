<?php

include_once '../model/Formulario.php';
include_once '../model/Validacao.php';

$f = new Formulario();

$f->nome = $_REQUEST['nome'];
$f->matricula = $_REQUEST['matricula'];
$f->idade = $_REQUEST['idade'];
$f->cpf = $_REQUEST['cpf'];
$f->cidade = $_REQUEST['cidade'];

$v = new validacao($f);

echo $v->validaTudo();

header("location:../view/respostaFormulario.php?"
           . "&dados=".$v->validaTudo());