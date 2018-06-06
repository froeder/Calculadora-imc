<html>
<?php include_once("cabecalho.php");?>
<h1>Formulário de cadastro</h1> <p>
<form action="insere-cliente.php">
    <table class="table">
        <tr>
            <td>Nome:</td>
            <td><input class="form-control" type="text"name="nome"><br/></td>
        </tr>
        <tr>
            <td>Peso:</td>
            <td><input class="form-control" type="number" step="0.01" name="peso"><br/></td>
        </tr>
        <tr>
            <td>Altura:</td>
            <td><input class="form-control" type="number" step="0.01" name="altura"><br/></td>
        </tr>
        <tr>
            <td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
        </tr>
    </table>
</form>
<?php include_once("rodape.php") ?>
</html>