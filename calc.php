<?php

    if (empty($_GET)) {
        return 'Nothing';
    }

    if (empty($_GET['operation'])) {
        return 'Nothing';
    }

    if (empty($_GET)) {
        return 'Not give';
    }

    if (empty($_GET['x1']) || empty($_GET['x2'])) {
        return 'Argument 1 or 2 not write';
    }


    $x1 = $_GET['x1'];
    $x2 = $_GET['x2'];
    $operation = $_GET['operation'];

    $expression = $x1 . ' ' . $operation . ' ' . $x2 . ' = ';

    switch ($operation) {
        case '+':
            $result = $x1 + $x2;
            break;
        case '-':
            $result = $x1 - $x2;
            break;
        case '/':
            $result = $x1 / $x2;
            break;
        case '*':
            $result = $x1 * $x2;
            break;
        default:
            return 'CANT NOT OPERATION';
    }

    return $expression . $result;


