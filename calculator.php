<html>
    <?php
        include("fonctions.php");
        start_page("ANNNTOOOOOOOOOOOOINEEEEEEEEEE GRIEEEEEEEEEEEEZMAAAAAAAAAAAN");
    ?>

    <form name="Calcul" method="post" action="calcul.php">
        Veuillez renseigner votre première opérande mon bon monsieur : <input type="text" name="op1"/> <br/>
        Même demande ici, mais avec la deuxième opérande cette fois  : <input type="text" name="op2"/><br/>
        <br>

        <?php
            $operateurs = '*+-/';
            for($cpt = 0 ; $cpt <= 3 ; ++$cpt) {
                echo '<input ';
                if($cpt == 0)
                    echo 'checked="checked" ';
                echo 'type="submit" name="action" value="' . $operateurs[$cpt] . '"/>'
                      . ' <br/>' . "\n";
            }
        ?>

        <br>
        <input type="submit" name="action" value="C'EST L'HEURE DU DU-DU-DU-DU-DU-EL"/>
    </form>

    <?php
        end_page("Aie aie aie, c'est la fin");
    ?>
</html>

