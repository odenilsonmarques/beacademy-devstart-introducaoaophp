<select name="" id="">
    <option selected>---Selecione o ano---</option>
    <?php
        for($ano=2022; $ano>=2000;  $ano--){
            echo "<option>{$ano}</option>";
        }
    ?>
</select>