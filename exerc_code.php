<?php // generated from http://www.generatedata.com/

require 'funcoes.php';

require 'pedidos.php';

$state = $_GET['state'];

if ($state == 1) {

echo getValorTotal($pedidos);

//getAnalitico($pedidos);

}

elseif($state == 2) {
	
	getTresMaisVendidos33($pedidos);
}

elseif($state == 3) {
	
	getDezMenosVendidos($pedidos);
	
}

elseif($state == 4) {
	
	getAnalitico($pedidos);
	
}

?>