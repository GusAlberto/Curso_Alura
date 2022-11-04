<?php

echo "Hello World";
print "Olá Mundo";

$tela = fopen('php://stdout', 'w');
fwrite($tela, 'Olá Mundo');