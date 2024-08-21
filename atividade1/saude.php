<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>Saude</title>
</head>

<body>
    <div class="box">

        <div class="card">
            <div class="card-header">
                Resultado
            </div>
            <div class="card-body">
                <h5 class="card-title">Veja agora se voce vai ter futuro:</h5>
                <?php
                $nome = $_POST['nome'];
                $filhos = $_POST['qtdFilhos'] ? $_POST['qtdFilhos'] : 0;
                $escolaridade = $_POST['escolaridade'] ? $_POST['escolaridade'] : "escolaridade";
                $cargo = $_POST['cargo'] ? $_POST['cargo'] : "sem cargo";
                $salario = $_POST['salario'];

                switch ($cargo) {
                    case "professor":
                        $salario += 50;
                        break;
                    case "coordenador":
                        $salario += 650;
                        break;
                    case "superintendente":
                        $salario += 900;
                        break;
                    case "diretor":
                        $salario += 2000;
                        break;

                    default:
                        echo "erro";
                        break;
                }
                $salariobruto = $salario;

                if ($filhos >= 2) {
                    $salario += ($salario * 0.05);
                }
                if ($escolaridade == "mestrado" || $escolaridade == "doutorado") {
                    $salario += ($salariobruto * 0.1);
                }




                echo "
                    <br>
                    <h5 class='card-text'>Seu nome: $nome</h5><br>
                    <h5 class='card-text'>Suas crias (filhos): $filhos </h5><br>
                    <h5 class='card-text'>Seu nivel de inteligencia: $escolaridade </h5><br>
                    <h5 class='card-text'>Seu tipo de CLT: $cargo</h5>
                    <h5 class='card-text'>Salario: $salario</h5>
                    ";


                // echo '<h5 class="card-text">Seu nome: </h5>'.$nome.
                // '<h5 class="card-text">Seu prejuizo pra vida: </h5>'.$filhos.
                // '<h5 class="card-text">Seu nivel de inteligencia: </h5>'.$escolaridade.
                // '<h5 class="card-text">Seu tipo de escravatura: </h5>'.$nome;
                ?>

                <a href='https://www.nube.com.br/' class='btn btn-primary'>Ir trabalhar</a>
            </div>
        </div>

    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>