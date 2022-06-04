
<?php
    $aluno1 = [
        'nome'=>'Patricia',
        'email'=>'paty@gmail.com',
        'telefone'=>'(98)99992 - 6891'
    ];

    $aluno2 = [
        'nome'=>'Odenilson',
        'email'=>'od@gmail.com',
        'telefone'=>'(98)98106 - 1009'
    ];

    $alunos = [
        $aluno1,
        $aluno2
    ];

    //acessando dados dos array de segunda dimensao
    // foreach($alunos as $cadaAluno){
    //     print_r($cadaAluno);

    // }
    
?>

<table border="1">
    <tr>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>TELEFONE</th>
    </tr>
    <?php
        foreach($alunos as $cadaAluno){ ?>
            <tr>
                <td><?=$cadaAluno['nome'];?></td>
                <td><?=$cadaAluno['email'];?></td>
                <td><?=$cadaAluno['telefone'];?></td>
            </tr>
            
        <?php }
    ?>
</table>

    








