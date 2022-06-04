
<select name="" id="">
    <option selected>---Selecione o ano---</option>
    <?php
        $ano = 2000;
        while($ano >= 1900){
            echo "<option>".$ano."</option>";

            $ano --;
        }
    ?>
</select>


