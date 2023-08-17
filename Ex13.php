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
            $n1 = $_REQUEST["n1"] ?? 1; 
            $resultado = $n1 / 1.61;    
        ?>
        <pre>
            <h1>Gerador de Resultado na mesma Página</h1>
            <form action="<?=$_SERVER['PHP_SELF'] ?>" method="post">
                <h2 class="equacao">Conversão de quilômetros em milhas</h2>
                <label for="n1">Digite um valor para converter</label>
                <input type="number" name="n1" min="0" value="<?=$n1?>">
                <input type="submit" value="Converter">
            </form>
        </pre>        
        <section>
            <h2>Resultado</h2>
            <?php
                echo "$n1 quilômetros equivalem a " . number_format($resultado, 2) . " milhas";
            ?>
            <p class="voltar"><a href="javascript:history.go(-1)">Voltar</a></p>
        </section>
        
    </main>
</body>
</html>