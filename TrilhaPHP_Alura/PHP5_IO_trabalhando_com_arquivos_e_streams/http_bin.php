<?php

$contexto = stream_context_create([
    'http' => [
        'method' => 'DELETE',
        'header' => 'X-from: PHP'
    ]
]);

$contexto2 = stream_context_create([
    'http' => [
        'method' => 'POST',
        'header' => "X-from: PHP\r\nContent-Type: text/plain",
        'content' => 'Teste do corpo da requisição'
    ]
]);

echo file_get_contents('http://httpbin.org/delete', false, $contexto);
echo file_get_contents('http://httpbin.org/post', false, $contexto2);