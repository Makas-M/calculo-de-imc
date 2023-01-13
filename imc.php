<!DOCTYPE html>
<html lang="pt-pt">
<head>
	<meta charset="utf-8">
	<title>Calculo do Indice de Massa Corporal</title>
	<style>
		div {
			font-size: 30px;
			color: green;
		}
		label {
			font-size: 30px;
			color: pink;
		}
	</style>
</head>
<body>
	<?php

		//sexo
		$sex = isset($_GET["sexo"]) ? $_GET["sexo"]: "[Nao Informado]" ;
		//peso
		$p = isset($_GET["peso"]) ? $_GET["peso"] : 1;
		//altura
		$a = isset($_GET["altura"]) ? $_GET["altura"] : 2;
		
		//calculo do desconto
		if ($a != 0) {
		
		
		$imc = (int)$p/((int)$a*(int)$a);
		}

		//saida dos resultados
		echo "O seu Indice de Massa Corporal é de  ". number_format($imc, 2). "<br>";

		if ($sex == "Feminino") {
				echo "Mulher";
		
		if ($imc <= 18.5) {
			echo "<br><label> Abaixo do peso! </label>";
			echo "<br> Peso ideal: ". number_format((53.695 + (($a-1.524)*53.5433)), 2);


		} elseif ($imc >= 18.6 && $imc <= 29.9) {
			echo "<br><div> Peso Normal! </div>";
			echo "<br> Peso ideal: ". number_format((53.695 + (($a-1.524)*53.5433)), 2);

		}
		elseif ($imc >= 30 && $imc <= 34.9) {
			echo "<br>Obesidade grau 1";
			echo "<br> Peso ideal: ". number_format((53.695 + (($a-1.524)*53.5433)), 2);

		}
		elseif ($imc >= 35 && $imc <= 39.9) {
			echo "<br>Obesidade grau 2";
			echo "<br> Peso ideal: ". number_format((53.695 + (($a-1.524)*53.5433)), 2);

		}
		elseif ($imc >= 40) {
			echo "<br>Obesidade grau 3";
			echo "<br> Peso ideal: ". number_format((53.695 + (($a-1.524)*53.5433)), 2);

		}

}
elseif
($sex == "Masculino") {
				echo "Homem <br>";
		
		if ($imc <= 18.5) {
			echo "<br><label> Abaixo do peso! </label>";
			echo "<br> Peso ideal: ". number_format((61.2328 + (($a-1.6002)*53.5433)), 2);

		} elseif ($imc >= 18.6 && $imc <= 29.9) {
			echo "<br><div> Peso Normal! </div>";
			echo "<br> Peso ideal: ". number_format((61.2328 + (($a-1.6002)*53.5433)), 2);
		}
		elseif ($imc >= 30 && $imc <= 34.9) {
			echo "<br>Obesidade grau 1";
			echo "<br> Peso ideal: ". number_format((61.2328 + (($a-1.6002)*53.5433)), 2);

		}
		elseif ($imc >= 35 && $imc <= 39.9) {
			echo "<br>Obesidade grau 2";
			echo "<br> Peso ideal: ". number_format((61.2328 + (($a-1.6002)*53.5433)), 2);
		}
		elseif ($imc >= 40) {
			echo "<br>Obesidade grau 3";
			echo "<br> Peso ideal: ". number_format((61.2328 + (($a-1.6002)*53.5433)), 2);
		}
	}
	?>
		<br><a href="index.html">voltar</a>
</body>
</html>