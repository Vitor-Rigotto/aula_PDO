<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil</title>
</head>

<body>

    <form enctype="multipart/form-data" action="enviar.php" method="POST">
        <!-- MAX_FILE_SIZE deve preceder o campo input -->
        <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
        <!-- O Nome do elemento input determina o nome da array $_FILES -->
        <div class="col-sm formularios ">
            Selecione uma foto <input name="userfile" type="file" class="btn btn-secondary" />
        </div>


        <input class="btn btn-primary" type="submit" value="Enviar arquivo" />
    </form>

    <!--CONFIRMAÇÃO DE ENVIO DO ARQUIVO (arquivo indicado no campo action do formulário acima)-->

    <?php
        $uploaddir = 'imagens/';
        $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
    ?>

    <?php
        echo '<pre>';
        if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
            echo "Arquivo válido e enviado com sucesso.\n";
            } else {
                echo "Possível ataque de upload de arquivo!\n";
            }
    ?>

</body>

</html>