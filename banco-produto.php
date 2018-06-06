<?php
    function listaClientes($conexao) {
        $usuarios = array();
        $resultado = mysqli_query($conexao, "select * from usuarios");
        while($usuario = mysqli_fetch_assoc($resultado)){
            array_push($usuarios, $usuario);
        }
        return $usuarios;
    }
    function insereCliente($conexao, $nome, $peso, $altura, $imc , $situacao, $sintomas){
		$squery = "insert into usuarios (nome, peso, altura, imc, situacao, sintomas) values ('{$nome}', {$peso} , {$altura}, {$imc}, '{$situacao}' , '{$sintomas}')";
		return mysqli_query($conexao, $squery);
    }
    function removeProduto($conexao, $id){
        $query = "delete from usuarios where id = {$id}";
        return mysqli_query($conexao, $query);
    }