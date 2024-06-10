<html>
    <body>
        <?php

            echo "<br>Seu sistema operacional é: </br>" . $_POST ["sistema"] . "<br><br>";

            if(isset($_POST["numero"]))
            {
                echo "<br>Os numeros de sua preferencia sao: </br><br>";
           
                foreach($_POST["numeros"] as $numero)
                {
                    echo ". " . $numero . "<br><br>";
                }

            }
            
            else 
            {
                echo "<br>Voce nao escolheu numero preferido!</br><br><br>";
            }

            echo "<br> Seu processador é: </br>" . $_POST ["processador"] . "<br>";
        ?>
    </body>
</html>