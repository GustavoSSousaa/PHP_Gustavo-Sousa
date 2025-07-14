<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Saúde</title>
</head>
<body>
    <form id="Formulario" onsubmit="return valida()" method="post">
        <!-- seus campos -->
        <input type="submit" value="Cadastro">
    </form>

    <div class="cadastro">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = $_POST['nome'];
            $sku = $_POST['sku'];
            $qtda = $_POST['qtda'];
            $preco = $_POST['preco'];

            echo "Nome : $nome<br><br>";
            echo "S.K.U : $sku<br><br>";
            echo "Quantidade : $qtda<br><br>";
            echo "Preço : $preco<br><br>";
        }
        ?>
    </div>
</body>
</html>
