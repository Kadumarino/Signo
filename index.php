<?php

echo "<h1>Ler XML com PHP</h1>";

$xml = simplexml_load_file('arquivo.xml');

echo 'dataInicio' . $xml->dataInicio . '<br>';
echo 'dataFim' . $xml->dataFim . '<br>';
echo 'signoNome' . $xml->signoNome . '<br>';
echo 'descricao' . $xml->descricao . '<br>';

?>