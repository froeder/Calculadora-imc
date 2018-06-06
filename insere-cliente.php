
<?php include("cabecalho.php");
 	include("conecta.php");
	include("banco-produto.php");

    $conexao = mysqli_connect('localhost', 'root', '', 'calcula_imc');
	$nome = $_GET["nome"];
	$peso = $_GET["peso"];
	$altura = $_GET["altura"];
	$imc = $peso / ($altura * $altura) ;

    if($imc <= 18.4){
        $situao = 'Abaixo do peso';
        $sintomas = 'Fadiga, stress, ansiedade' ;
    } else if($imc > 18.4 && $imc <= 24.9){
        $situacao = 'Normal' ;
        $sintomas = 'Menor risco de doenças cardíacas e vasculares' ;
    }else if($imc >= 25 && $imc <=29.9){
        $situacao = 'Acima do peso' ;
        $sintomas = 'Fadiga, má circulação, varizes' ;
    } else if($imc >= 30 && $imc <= 34.8){
        $situacao = 'Obsedidade I' ;
        $sintomas = 'Diabetes, angina, infarto, aterosclerose' ;
    } else if($imc >= 35 && $imc <= 40){
        $situacao = 'Obesidade II' ;
        $sintomas = 'Apneia do sono, falta de ar' ;
    } else if($imc > 40){
        $situacao = 'Obsesidade III';
        $sintomas = 'Refluxo, dificuldade para se mover, escaras, diabetes, infarto, AVC' ;
    }


	$squery = "insert into usuarios (nome, preco) values ('{$nome}', {$peso} , {$altura}, {$imc}, '{$situacao}', '{$sintomas}')";
	if(insereCliente($conexao, $nome, $peso, $altura, $imc, $situacao, $sintomas)){
		?>
		<p class ="text-success">O produto <?= $nome ?>, <?= $peso?> foi adicionado. </p>
	<?php } else { 
		$msg = mysqli_error($conexao);	
	?>
		<p class ="text-danger">O produto <?= $nome ?> não foi adicionado. <?= $msg?> </p>
	<?php }
	?>
	

<?php include("rodape.php") ?>