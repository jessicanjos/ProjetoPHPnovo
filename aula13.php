<?php 

	function validarNome(){
		echo "Executando!!!";
	}

	function somaValor($num1,$num2){
		return($num1+$num2);
	}
    
 	//executando as funções

 	$val1 = 20.0;
 	$val2 = 20.0;

    validarNome();

    echo "<br> A soma é " .somaValor($val1, $val2);


 ?>