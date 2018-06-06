<?php include("cabecalho.php");
 include("conecta.php");
 include("banco-produto.php"); ?>

<?php
    if(array_key_exists("removido", $_GET) && $_GET['removido'] == true){ ?>
        <p class="alert-success">Produto apagado com successo.</p>
<?php } ?>

<table class="table table-striped table-bordered">
    <tr>
        <th>Nome</th>
        <th>Peso</th>
        <th>Altua</th>
        <th>Imc</th>
        <th>Situacao</th>
        <th>Sintomas</th>
        <th>Ações</th>
    </tr>
    <?php
    $clientes = listaClientes($conexao);
    foreach($clientes as $cliente) :
    ?>
    <tr class="paciente">
        <td class="nome"><?= $cliente['nome'] ?></td>
        <td class="peso"><?= $cliente['peso'] ?></td>
        <td class="altura"><?= $cliente['altura'] ?></td>
        <td class="imc"><?= $cliente['imc'] ?></td>
        <td class="situacao"><?= $cliente['situacao'] ?></td>
        <td class="sintomas"><?= $cliente['sintomas'] ?></td>
        <td>
            <a href="remove-produto.php?id=<?=$cliente['id']?>" class="text-danger">remover</a>
        </td>
    </tr>
    <?php
        endforeach
    ?>
</table>
<?php include("rodape.php") ?>

<script>
    var trsPacientes = document.getElementsByClassName("paciente");
    for (var posicaoAtual = 0; posicaoAtual <= trsPacientes.length - 1; posicaoAtual++) {

        var pacienteTr = trsPacientes[posicaoAtual];

        var imc = pacienteTr.getElementsByClassName("imc")[0].textContent;
        var tdImc = pacienteTr.getElementsByClassName("imc")[0];


        if(imc <= 18.4){
            tdImc.setAttribute("bgcolor", "#FF4B33");
        } else if(imc > 18.4 && imc <= 24.9){
            tdImc.setAttribute("bgcolor", "#ADC80A");
        }else if(imc >= 25 && imc <=29.9){
            tdImc.setAttribute("bgcolor", "#FF4B33");
        } else if(imc >= 30 && imc <= 34.8){
            tdImc.setAttribute("bgcolor", "#FF4B33");
        } else if(imc >= 35 && imc <= 40){
            tdImc.setAttribute("bgcolor", "#FF4B33");
        } else if(imc > 40){
            tdImc.setAttribute("bgcolor", "#FF4B33");
        }


    }

</script>
