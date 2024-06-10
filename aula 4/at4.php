<?php
    $nome = 'fulano';

    switch($nome) {
        case 'fulano';
            echo 'E ai Fulano!';
        break;
        
        case 'sicrano';
            echo 'E ai Sicrano!';
        break;
        
        case 'beltrano';
            echo 'E ai Beltrano!';
        break;

        default:
            echo 'qual é seu nome?';
            break;
    }
?>