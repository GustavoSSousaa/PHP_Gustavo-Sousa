<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Saúde</title>
    <script src="Formulario.js"></script>
    <link rel="stylesheet" type="text/css" href="estilo_saude2.css">
</head>
<body>
    <form action="Atividade01.php" id="Formulario" onsubmit="return valida()" method="post">
        <fieldset>
            <h3>Cadastro e Visualização de Produtos no Estoque</h3>
            <hr><br>

            <h2>Gustavo Sousa</h2>

            <fieldset>
                <legend>Dados do Produto</legend>
                <label>Nome do produto: <input type="text" name="nome"></label><br><br>
                <label>S.K.U do produto: <input type="text" name="sku"></label><br><br>
                <label>Quantidade do produto: <input type="text" name="qtda"></label><br><br>
                <label>Preço do produto: <input type="text" name="preco"></label><br><br>
                <input type="submit" value="Cadastro">
            </fieldset>

            <fieldset>
                <legend>Dados Cadastrados</legend>
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
            </fieldset>
        </fieldset>
    </form>
</body>
</html>
