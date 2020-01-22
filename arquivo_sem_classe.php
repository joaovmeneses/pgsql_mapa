<?php
$matriz[1]['nome_botao'] = 'Café brigadeiro';
$matriz[1]['endereco'] = 'Rua Olinto Meira, Centro';
$matriz[1]['telefone'] = '(84)1234-1234';

$matriz[2]['nome_botao'] = 'Midway';
$matriz[2]['endereco'] = 'Av Salgado filho';
$matriz[2]['telefone'] = '(84)0000-0001';

$matriz[3]['nome_botao'] = 'ABC';
$matriz[3]['endereco'] = 'Av Dep Florêncio de Queiroz';
$matriz[3]['telefone'] = '(84)6666-6666';


echo json_encode($matriz);
?>