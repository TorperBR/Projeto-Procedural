<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Deletar </title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    </head>

    <body>
        <div class="container">

        <?php 

            include_once("../servidor.php");

            // Fazer o código para deletar o produto
            $sql = "DELETE FROM `tb_livro` WHERE cod_liv = " . $_GET["cod_liv"];

            // Executar - Trocado pra forma procedural
            $resp = $POO->query($sql);

        ?>
    </body>

    <script src="../js/jquery-3.5.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
</html>