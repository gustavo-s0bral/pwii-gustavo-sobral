<!DOCTYPE html>
<html lang="pt-br">
<body>
    
    <form action="" method="POST">
        Distancia total: <input type="number" name="distanciaTotal"><br>
        Gasolina gasta: <input type="number" name="combustivel"><br>
        <input type="submit">
    </form>
    <br>

    <?php
        $distanciaNumero = $_POST[distanciaTotal];
        $combustivelNumero = $_POST[combustivel];

        $resultado = $distanciaNumero / $combustivelNumero;
        echo "O resultado é: $resultado";
    ?>
</body>
</html>