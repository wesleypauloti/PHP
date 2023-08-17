<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula WEB</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <main>
        <?php 
            $n1 = $_REQUEST["n1"] ?? 0;
            $n2 = $_REQUEST["n2"] ?? 0;
            $n3 = $_REQUEST["n3"] ?? 0;
            $resultado = $n1 + $n2 + $n3;
        ?>
        <pre>
            <h1>Gerador de Resultado na mesma Página</h1>
            <form action="<?=$_SERVER['PHP_SELF'] ?>" method="post">
                <h2 class="equacao">Soma</h2>
                <label for="n1">Digite o primeiro Valor</label>
                <input type="number" name="n1" min="0" value="<?=$n1?>">
                <label for="n1">Digite o segundo Valor</label>
                <input type="number" name="n2" min="0" value="<?=$n2?>">
                <label for="n1">Digite o terceiro Valor</label>
                <input type="number" name="n3" min="0" value="<?=$n3?>">
                <input type="submit" value="Calcular">
            </form>
            <p><a href="javascript:history.go(-1)">Voltar</a></p>
        </pre>        
        <section>
            <h2>Resultado</h2>
            <?php
                echo "A soma dos valores é igual a $resultado";
            ?>
        </section>
        
    </main>
</body>
</html>