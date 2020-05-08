<?php
    $url = "http://169.254.169.254/latest/meta-data/instance-id";
    $instance_id = file_get_contents($url);
    echo "<h1> <font color='black'> Instance ID: <b>" . $instance_id . "</b><br/></font> </h1>"
?>
    <!DOCTYPE html PUBLIC "..//IETF//DTD HTML 2.0//EN">
        <HEAD>
            <TITLE>
                Treinamento
            </TITLE>
        </HEAD>
    <BODY>
        <br>
        <H1>Treinamentos</H1>
        <span style="color:red;font-size:25px">Iniciar Stress do Processador 100% </span>
        <a href="exec.php" target="_blank">AQUI</a>
        <br>
        <br>
        <span style="color:red;font-size:25px">Iniciar Stress do Processador 30% </span>
        <a href="20.php" target="_blank">AQUI</a>
        <br>
        <br>
        <span style="color:red;font-size:25px">Parar stress processador </span>        
        <a href="parar.php">PARAR</a>
        </br>
    </BODY>