<?php 

require 'Template.php';

$array = array(
    'titulo' => 'Títulera Doida',
    'nome' => 'Guga Doido',
    'idade' => 32
);

$tpl = new Template('template.phtml');
$tpl->render($array);
