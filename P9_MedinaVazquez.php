<!DOCTYPE html>
<HTML LANG="es">
    <head>
        <META charset="UTF-8">
        <title> Metodo Post </title>
    </head>
    <body>
        <font color=#82E0AA size=5>Metodo Post</font>
        <br><br>

        <form method="post" action="P9_MedinaVazquez.php">
            <p>Nombre: <input type="text" name="nom" size="20"></p>
            <p>Escuela: <input type="text" name="esc" size="20"></p>
            <p>Turno: <input type="text" name="turno" size="20"></p>
            <p>Grupo: <input type="text" name="gr" size="20"></p>
            <p>Matricula: <input type="text" name="mat" size="20"></p>
            <p><input type="submit" value="Enviar" name="b1"></p>
        <font color=8693C6 size=4>
            <?php
                $nombre = @$_POST['nom'];
                $escuela = @$_POST['esc'];
                $turno = @$_POST['turno'];
                $grupo = @$_POST['gr'];
                $matricula = @$_POST['mat'];
                echo "Su nombre es $nombre<br>
                Asite a la escuela $escuela<br>
                Va en el turno $turno<br>
                va en el grupo $grupo<br>
                Su matricula es $matricula";
            
            ?>