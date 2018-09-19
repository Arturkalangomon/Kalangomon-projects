<!DOCTYPE html>

<html>
<head>
	<title> Interface calculadora PHP </title>
	</head>
<body bgcolor="silver"> <meta charset="utf-8">


<?php
$a = @$_POST['a'];
$b = @$_POST['b'];
$operacao = @$_POST['operacao'];

$soma = 0; //@$_POST['soma'];
$subtracao = 0; //@$_POST['subtrai'];
$multiplicacao = 0; //@$_POST['multiplica'];
$divisao = 0; //@$_POST['divide'];
$resultado = 0;

if(!empty($operacao)){
	if($operacao == 'soma'){
		$soma = $a + $b;
		$resultado = $soma;
	}

	if($operacao == 'subtrai'){
		$subtração = $a - $b;
		$resultado = $subtracao;
	}

	if($operacao == 'multiplica'){
		$multiplicacao = $a * $b;
		$resultado = $multiplicacao;
	}
	
	if($operacao == 'divide'){
		$divisao = $a / $b;
		$resultado = $divisao;
	}
	
	if($operacao == 'quadrado'){
		if($quadrado = $a * $a){
			$resultado = $quadrado;
		}
		if($quadrado = $b * $b){
			$resultado = $quadrado;
		}
	}
	
	if($operacao == 'raizquad'){
		if($raizquad = $a / $a){
			$resultado = $raizquad;
		}
		if($raizquad = $b / $b){
			$resultado = $raizquad;
		}
	}
}
?> <center>
<fieldset>
<fieldset>
<legend> calculadora (em testes) </legend>
<form action="calculadoramaster.php" method="post">
	valor 1: <input type="text" name="a">
	valor 2: <input type="text" name="b"> </br>
	<input type="submit" name="operacao" value="soma">
	<input type="submit" name="operacao" value="subtrai">
	<input type="submit" name="operacao" value="multiplica">
	<input type="submit" name="operacao" value="divide">
	</br>
	<input type="submit" name="operacao" value="quadrado">
	<input type="submit" name="operacao" value="raizquad">
</form>
</fieldset>
<hr>
<hr width="100" size="29"  <?php echo" resultado: ". $resultado; ?> >

<table>
<tr>
<td bgcolor="green"> 
<?php
if($resultado < 100){
	echo" Resultado: <font color='red'> ". $resultado. "</font>";  
}
if($resultado >= 100){
	echo " Resultado: <font color='blue'> ". $resultado . "</font>";
}?>
</td>
</tr>
</table>


<hr> <center> ©kalangomon Developed <font color="red"> >.-.> :v </font> </center>
</fieldset> </center>

</body>
</html>