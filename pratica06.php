<?php
    /*
    - PRIMEIRO FOI DECLARADO UM ARRAY, E DENTRO DELE OUTROS ARRAYS
    - NA PROSIÇÃO ZERO DO PRIMEIRO ARRAY, TEM-SE UM ARRAY COM POSIÇÕES ZERO E UM
    - NA PROSIÇÃO UM DO PRIMEIRO ARRAY, TEM-SE UM ARRAY COM POSIÇÕES ZERO E UM E ASSIM SUCETIVAMENTE
    */
    $bandas = [
        [
            'Rosa de saroon', 
            10
        ],

        [
            'Anjos de resgate', 
            20
        ],
            
        [
            'Bon jovi',
            30
        ],

        [
            'Nirvana',
            3
        ]
        
    ];

?>

<table border="1">
    <tr>
        <td>Banda</td>
        <td>Quantidade de Músicas</td>
    </tr>
    <tr>
        <td>
            <?php
            //ARMAZENANDO OS VALORES DO ARRAY NA VARIAVEL $bandas E LOGO DEPOIS ACESSANDO A INFORMAÇÃO PASSANDO SUA POSIÇÃO
                foreach ($bandas as $banda){
                    echo "{$banda[0]}<br>";
                }
            ?>
        </td>
        <td>
            <?php
                foreach ($bandas as $banda){
                    echo "{$banda[1]}<br>";
                }
            ?>
        </td>
    </tr>
</table>