<?php

require_once "vendor/autoload.php";

use natal\ConsultaCep\Search;

$busca = new Search;

$resultado = $busca -> getAddressFromZipcode('68459820');

print_r($resultado);