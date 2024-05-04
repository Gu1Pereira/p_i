<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Busca</title>
</head>
<body>
    <h2>Resultado da Busca</h2>

    <?php
    // Verifica se a palavra foi enviada via POST
    if(isset($_POST['palavra'])) {
        // Sanitiza a entrada para evitar injeção de código malicioso
        $palavra = htmlspecialchars($_POST['palavra']);

        // Mapeamento simples entre palavras e imagens (pode ser substituído por uma consulta a um banco de dados)
        $imagens = array(
            "cachorro" => "cachorro.jpg",
            "gato" => "gato.jpg",
            "pássaro" => "passaro.jpg"
        );

        // Verifica se a palavra existe no array de imagens
        if(array_key_exists($palavra, $imagens)) {
            // Se a palavra existe, exibe a imagem correspondente
            echo "<img src='imagens/" . $imagens[$palavra] . "' alt='" . $palavra . "'>";
        } else {
            // Se a palavra não existe, exibe uma mensagem de erro
            echo "Nenhuma imagem encontrada para a palavra '" . $palavra . "'.";
        }
    } else {
        // Se a palavra não foi enviada via POST, exibe uma mensagem de erro
        echo "Nenhuma palavra enviada para busca.";
    }
    ?>

    <br><br>
    <a href="index.html">Voltar</a>
</body>
</html>
