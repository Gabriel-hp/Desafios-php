<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>
</head>
<body>
    <h1>Fatorial</h1>
    <p>Desenvolva um programa que calcula o fatorial de um número dado pelo usuário.</p>

    <?php 
        // Capturando os dados do formulario retroalimentado
        $fatorial = $_GET ['fatorial'] ?? 25;

        ?>
    
    <main>
        <h1>Calculadora de fatorial</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="altura"> Qual o valor você quer saber o fatorial</label>
            <input type="text" name="fatorial" id="idfatorial" value="<?=$fatorial?>"step="0.001">

            <input type="submit" value="calcular">
        </form>

    </main>


    <main>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

    <h1>Resultado</h1>
 
        <?php 

            $calc= 1;
                while($fatorial > 1){
                        $calc *= $fatorial;
                        $fatorial--;
                        
            }   
            echo "fatorial é $calc";
        
        ?>

    </main>
</body>
</html>