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
            $resultado = $n1 - 273.15;    
        ?>
        <pre>
            <h1>Gerador de Resultado na mesma Página</h1>
            <form action="<?=$_SERVER['PHP_SELF'] ?>" method="post">
                <h2 class="equacao">Conversão de Kelvin para Celsius</h2>
                <label for="n1">Digite um valor para converter</label>
                <input type="number" name="n1" min="0" value="<?=$n1?>">
                <input type="submit" value="Converter">
            </form>
            <div class="funcao">
            <p><a href="javascript:history.go(-1)">Voltar</a></p>

            </div>
        </pre>        
        <section>
            <h2>Resultado</h2>
            <?php
                echo "$n1 ° Kelvin é igual a " . number_format($resultado, 2) . "° em Celsius";
            ?>
        </section>
        
    </main>
</body>
</html>