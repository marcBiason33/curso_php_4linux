<?php // generated from http://www.generatedata.com/
//Calcular o valor total de vendas
function getValorTotal( $pedidos ) {
	
	$total = 0;

foreach ($pedidos as $key => $valor) {

$total = $total + $valor['valor_bruto'];

} 

return " O valor total das vendas é de R$ : " . $total;

}



//Retornar Tres mais vendidos

function getTresMaisVendidos( $pedidos ) {

     $total = 0;

      $arrayContadorDeVendas1 = array_count_values(array_column($pedidos , 'produto_id'));

      $arrayContadorDeVendas =  array_column($pedidos , 'valor_bruto' , 'produto_id' );

      arsort($arrayContadorDeVendas1);

     foreach ($arrayContadorDeVendas1 as $key => $valor1) {

     //echo $key . " - " . $valor1 . " - " . $total ;

     //echo "<br>";

      }

      //echo "<br>";

      //echo "<br>";

      arsort($arrayContadorDeVendas);

foreach ($arrayContadorDeVendas as $key => $valor) {    

foreach ($arrayContadorDeVendas1 as $key1 => $valor1) {
	
	if ($key1 == $key){
		
		$total = $valor * $valor1;
		
		$arrayFeito[$key] = $total;
		
		//echo $key . " - " . $valor . " - " . $valor1 . " - " . $total ;
		
		//echo "<br>";
		
	}

     //echo $key . " - " . $valor1 . " - " . $total ;

      }
	  
}

arsort($arrayFeito); 

$contador = 0;

foreach ($arrayFeito as $key1 => $valor1) {

while( $contador < 3) {
	
	echo "<br>";
		
		echo "Produto_Id : " . $key1 . " vendeu R$ : " . $valor1 ;
		
		echo "<br>";
	
	$contador = $contador +1;
	
	break;
	
}

}

}

//Retornar 10 menos vendidos

function getDezMenosVendidos( $pedidos ) {

     $total = 0;

      $arrayContadorDeVendas1 = array_count_values(array_column($pedidos , 'produto_id'));

      $arrayContadorDeVendas =  array_column($pedidos , 'valor_bruto' , 'produto_id' );

      arsort($arrayContadorDeVendas1);

      arsort($arrayContadorDeVendas);

foreach ($arrayContadorDeVendas as $key => $valor) {    

foreach ($arrayContadorDeVendas1 as $key1 => $valor1) {
	
	if ($key1 == $key){
		
		$total = $valor * $valor1;
		
		$arrayFeito[$key] = $total;
		
	}

      }
	  
}

arsort($arrayFeito); 

$contador = count($arrayFeito) - 1;

foreach ($arrayFeito as $key1 => $valor1) {

while( $contador < 10) {
	
	echo "<br>";
		
		echo "Produto_Id : " . $key1 . " vendeu R$ : " . $valor1 ;
		
		echo "<br>";
	
	
	
	break;
	
}

$contador = $contador - 1;

}

}

function getAnalitico($pedidos) {

     $total = 0;

      $arrayContadorDeVendas1 = array_count_values(array_column($pedidos , 'produto_id'));

      $arrayContadorDeVendas =  array_column($pedidos , 'valor_bruto' , 'produto_id' );

      arsort($arrayContadorDeVendas1);

      arsort($arrayContadorDeVendas);

foreach ($arrayContadorDeVendas as $key => $valor) {    

foreach ($arrayContadorDeVendas1 as $key1 => $valor1) {
	
	if ($key1 == $key){
		
		echo "O Produto de Produto_ID : " . $key . " tem o valor de R$ : " . $valor . " e foi vendido : " . $valor1 . " vezes. " ;
		
		echo "<br>";
		
		echo "<br>";
		
	}

     //echo $key . " - " . $valor1 . " - " . $total ;

      }
	  
}

}


function getTresMaisVendidos33( $pedidos ) {

     $total = 0;

      $arrayContadorDeVendas1 = array_count_values(array_column($pedidos , 'produto_id'));

      $arrayContadorDeVendas =  array_column($pedidos , 'valor_bruto' , 'produto_id' );

      arsort($arrayContadorDeVendas1);

      arsort($arrayContadorDeVendas);

foreach ($arrayContadorDeVendas as $key => $valor) {    

foreach ($arrayContadorDeVendas1 as $key1 => $valor1) {
	
	if ($key1 == $key){
		
		$total = $valor * $valor1;
		
		$arrayFeito[$key] = $total;
		
	}

      }
	  
}

arsort($arrayFeito); 

$contador = 0;

foreach ($arrayFeito as $key1 => $valor1) {

while( $contador < 3) {
	
	echo "<br>";
		
		echo "Produto_Id : " . $key1 . " vendeu R$ : " . $valor1 ;
		
		echo "<br>";
	
	$contador = $contador +1;
	
	break;
	
}

}

}
