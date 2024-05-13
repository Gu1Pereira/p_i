<?php include "cabecalho.php"?>

    <h1>LB</h1>
    <p>bem vindo [usuario], converta suas palavras para linguagem de sinais   </p>
    

    <form action="buscar_imagem.php" method="post">
        <label for="palavra">Digite uma palavra:</label><br>
        <input type="text" id="palavra" name="palavra"><br><br>
        <input type="submit" value="Procurar">
    </form>

    <footer>       
        <!-- <button id="botao">Site</button> -->
        Aqui sera a area de comentarios
    </footer>
   
   <?php include "rodape.php"?>