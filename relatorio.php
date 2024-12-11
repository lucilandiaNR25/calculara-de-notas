<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Receber as notas
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];
        $nota4 = $_POST['nota4'];

        // Calcular a média
        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

        // Definir se o aluno foi aprovado ou reprovado
        $status = $media >= 7 ? "Aprovado" : "Reprovado";

        // Exibir o resultado
        echo "<div class='result'>";
        echo "<p>Média: " . number_format($media, 2) . "</p>";
        echo "<p>Status: $status</p>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>