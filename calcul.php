<?php
    $op1 = $_POST['op1'];
    $op2 = $_POST['op2'];
    $action = $_POST['action'];

    if ('+' == $action) {
        echo $op1 + $op2;
    }
    elseif ('-' == $action) {
        echo $op1 - $op2;
    }
    elseif ('*' == $action) {
        echo $op1 * $op2;
    }
    elseif ('/' == $action) {
        echo $op1 / $op2;
    }
    else {
        echo '<br/><strong>WOW, TU FAIS QUOI, LE ' . $action . ' EST PAS GERE ICI !</strong>';
    }
?>