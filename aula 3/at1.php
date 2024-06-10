<html>
    <body>

        <?php
            //array com Chave => Valor 
            $ListaAlunoIdade = array (
                "Leonardo" => 31,
                "Gabriella" => 27,
                "Bianca" => 07
            );

            //array apenas com Valor 
            $ListaCores = array (
                "Vermelho",
                "Amarelo",
                "Verde",
                "Laranja"
            );

            //Acesso ao item do array $ListaAlunoIdade [CHAVE]
            echo $ListaAlunoIdade ["Leonardo"];

            echo "<br />";

            echo $ListaCores[2];

            echo "<br />";

            //Exibir em tela todo o conteudo (chave e valor) de um array var_dump(array)
            var_dump($ListaAlunoIdade);
            
            echo "<br />";

            var_dump($ListaCores);
        ?>
    </body>
</html>