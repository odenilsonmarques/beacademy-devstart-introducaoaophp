<!-- Inicio do codigo para gerar o formulario Html -->
<form action="" Method="POST">
    <fieldset>
        <legend>CALCULADORA</legend><br/>
        <input type="number" name="n1" id="n1" placeholder="INFORME UM NUMERO" class="valor" ><br/><br/>
        <input type="number" name="n2"  id="n2" placeholder="INFORME UM NUMERO" class="valor"><br/><br/>
        <button name="soma">Soma</button>
        <button name="subtracao">subtrair</button>
        <button name="multiplicacao">Multiplicar</button>
        <button name="divisao">Dividir</button>
    </fieldset>
</form>
<!-- Fim do codigo -->

<!-- Inicio do codigo responsavel por aplicar um estilo no input e no button -->
<style>
    .valor{
        width: 350px;
        height: 30px;
        border-radius: 10px;
        border: 1px solid #ccc
    }
    #soma{
        background-color: #A9A9A9;
        color:#111;
        padding: 7px;
        
    }
</style>
<!-- Fim do codigo -->

<!-- Inicio do codigo em php -->
<?php
    $n1 = filter_input(INPUT_POST, 'n1');
    $n2 = filter_input(INPUT_POST, 'n2');
    // $sub = 
    $operacao;
    
    if($n1 && $n2) {
        switch($operacao) {
            case($operacao == isset($_POST['soma'])):
                echo "RESULTADO :".$result = $n1 + $n2;
                break;

            case($operacao == isset($_POST['subtracao'])):
                echo "RESULTADO :".$result = $n1 - $n2;
                break;

            case($operacao == isset($_POST['multiplicacao'])):
                echo "RESULTADO :".$result = $n1 * $n2;
                break;

            case($operacao == isset($_POST['divisao'])):
                echo "RESULTADO :".$result = $n1 / $n2;
                break;

            default:
            echo "Erro !";
        }
    }
