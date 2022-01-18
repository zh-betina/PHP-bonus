<?php

    include_once './operationClass.php';

    $a = $_POST['a'];
    $b = $_POST['b'];
    $operat = $_POST["operator"];
    $result;

    if (isset($a) && isset($b) && isset($operat)) {
        $calculate = new Calculate($a, $b);
        switch ($operat) {
            case 'add':
                $result = $calculate->add();
                break;
            case 'substr':
                $result = $calculate->substract();
                break;
            case 'divid':
                $result = $calculate->divide();
                break;
            case 'multip':
                $result = $calculate->multiply();
                break;
            default:
                $result = "Something went wrong";
                break;
        }
    } else {
        $result = false;
    }
?>