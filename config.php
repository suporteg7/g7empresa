<?php
session_start();
require 'objetos/acesso/RotinasAcesso.php';

$acesso = new AcessoInterno();

//$g7emp= $acesso->sistemag7emp();
$g7cond= $acesso->sistemag7cond();
//$g7inner= $acesso->sistemag7inner();
$g7sistema=$acesso->g7sistema();

$base='http://projeto2';
$api = [
    'error'=>'',
    'resultado' => []
];


