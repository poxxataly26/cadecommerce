<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de protudos </title>
</head>
<body>
<?php
    include_once('controller/conexao.php');
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produtos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="center">
            <h1>Cadastro de produto</h1>
            <a href="index.php" target="_self">Voltar</a>
        </div>
    </header>
    <section id="produtos">
        <form action="insere_produto.php" method="post">
            Nome: <input type="text" name="nome"><br>
            Descrição: <input type="text" name="descricao"><br>
            Estoque: <input type="number" name="estoque"><br>
            Preço: <input type="number" name="preco" min="0.00" max="10000.00" step="0.01"><br>
            Categoria:
 
        <select name="seleciona_categoria" id="">
            <option value="">Selecione</option>
            <?php
                $resultado_categoria = "SELECT * FROM categoria";
                $resultcategoria = mysqli_query($mysqli, $resultado_categoria);
                while($row_categorias = mysqli_fetch_assoc ($resultcategoria)){ ?>
                <option value="<?php echo $row_categorias['IDCATEGORIA'] ?>"> <?php echo $row_categorias['DESCRICAO'] ?></option>
            <?php
                }
            ?>
        </select>
        <br>
            Marca:
        <select name="seleciona_marca" id="marca">
            <option value="">Selecione</option>
            <?php
                $resultado_marca = "SELECT * FROM marca";
                $resultadomarca = mysqli_query($mysqli, $resultado_marca);
                while($row_marcas = mysqli_fetch_assoc ($resultadomarca)){ ?>
                <option value="<?php echo $row_marcas['IDMARCA'] ?>">
                <?php echo $row_marcas['DESCRICAO'] ?></option>
            <?php
                }
            ?>
        </select>
        <br><br>
            <input type="submit" value="cadastrar">
        </form>
        </section>
</body>
</html>
   
</body>
</html>