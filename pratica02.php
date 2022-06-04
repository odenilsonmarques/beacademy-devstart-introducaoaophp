<form action="" method="POST">
    <fieldset>
        <legend>Formulario de Cadastro</legend>
        <input type="text" name="nome" id="nome" placeholder="Digite seu nome"><br><br>
        <input type="email" name="email" id="email" placeholder="Digite seu email"><br><br>
        <input type="text" name="telefone" placeholder="Digite seu telefone"><br><br>
        <button>Cadastrar</button>
    </fieldset>
</form><br><br>

<table style="border:1">
    <tr>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>TELEFONE</th>
    </tr>
    <?php
    $nome = filter_input(INPUT_POST,'nome');
    $email = filter_input(INPUT_POST,'email');
    $telefone = filter_input(INPUT_POST,'telefone');
    $dados = array($_POST); //armazenando os dados vindo do formulario

    if($nome && $email && $telefone){
        foreach($dados as $dado){ ?>
            <tr></tr>
            <tr>
                <td><?=$dado['nome'];?></td>
                <td><?=$dado['email'];?></td>
                <td><?=$dado['telefone'];?></td>
            </tr>
        <?php }
    }
    ?>    
</table>

<style>

table,tr {
    border:1px solid #ccc;
    width:40%;
    text-align:center
}

</style>