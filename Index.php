<?php

require_once('./class/Item.php');
require_once('./class/Pasta.php');
require_once('./class/Objeto.php');
require_once('./class/Gaveta.php');
require_once('./class/Documento.php');
require_once('./class/Armario.php');
require_once('./class/Escritorio.php');

$documento1 = new Documento ("CNH", "Documento de habilitação", "2024-10-01");
$documento2 = new Documento ("Como tirar 10 na p2 do Valdir", "guia 100% funciona e pog na veia","2021-01-01");
$objeto1 = new Objeto ("Teclado Gamer pog", "Teclado que nao é menbrana pois é nogers", "500.0");
$pasta1 = new Pasta ("Lista de alunos 1 da p2 do 1 ano B 2024", "Deixo você escrever Valdas!", "Papeis");


$gaveta1 = new Gaveta ();
$gaveta1 -> adicionarItem($documento1);
$gaveta1 -> adicionarItem($documento2);
$gaveta1 -> adicionarItem($objeto1);
$gaveta1 -> adicionarItem($pasta1);


$armario1 = new Armario ();
$armario1 -> adicionarGaveta($gaveta1);

$escritorio = new Escritorio ();
$escritorio -> adicionarArmario($armario1);



$escritorio -> auditoria();