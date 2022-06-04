<pre>
    <?php
        $funcionarios = [
            'Mayron',
            'Odenilson',
            'Bianca',
            'Julio',
            'Ozadaque',
            'Daniel',
            'Roberta',
            'Marcos',
            'Gerson',
            'Cordeiro'
        ];
        // var_dump($funcionarios);
    ?>
</pre>

<ul>
    <?php
        foreach($funcionarios as $funcionario){
            echo "<li>{$funcionario}</li>";
        }
    ?>
</ul>