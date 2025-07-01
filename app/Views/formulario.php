<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Contato</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body class="container">

    <h1>Formulário de Contato</h1>

    <!-- MENSAGEM DE RETORNO -->
    <?php if (isset($mensagem)): ?>
        <div class="alert alert-info">
            <?= esc($mensagem) ?>
        </div>
    <?php endif; ?>

    <form action="<?= site_url('contato/enviar') ?>" method="post" class="form-horizontal">
        <div class="form-group">
            <label for="nome" class="control-label col-sm-2">Nome:</label>
            <div class="col-sm-10">
                <input type="text" name="nome" id="nome" class="form-control" required>
            </div>
        </div>

        <div class="form-group">
            <label for="email" class="control-label col-sm-2">Email:</label>
            <div class="col-sm-10">
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
        </div>

        <div class="form-group">
            <label for="mensagem" class="control-label col-sm-2">Mensagem:</label>
            <div class="col-sm-10">
                <textarea name="mensagem" id="mensagem" class="form-control" rows="5" required></textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>

</body>
</html>
