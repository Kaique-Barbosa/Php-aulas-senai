<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>Saude</title>
</head>

<body>
    <div class="box">
        <?php
        $nome = $_POST['nome'];
        $altura = number_format($_POST['altura'], 2);
        $peso = number_format( $_POST['peso'], 2);
        $hipertenso = $_POST['radio'];
        $situacao = '';
        $imc = round($peso / ($altura**2), 2);
        if ($imc) {
        };

        switch ($imc) {
            case $imc < 18.5:
                $situacao = "Magreza";
                break;
            case $imc > 18.5 && $imc < 24.9:
                $situacao = "Normal";
                break;
            case $imc >= 25 && $imc < 29.9:
                $situacao = "sobrepeso";
                break;
            case $imc > 30 && $imc < 34.9:
                $situacao = "Obesidade Grau 1";
                break;
            case $imc > 30 && $imc < 34.9:
                $situacao = "Obesidade grau 2";
                break;
            case $imc > 35:
                $situacao = "Obesidade grau 3";
                break;

            default:
                echo ('erro');
                break;
        }
        
        echo "<h2> O seu imc é {$imc}, voce está {$situacao} </h2>";
      
      
        
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>