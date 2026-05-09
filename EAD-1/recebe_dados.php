<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mensagem Recebida</title>
</head>
<body>
    <h1>Obrigado pelo contato!</h1>
    
    <?php
    // Pegando os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];
    
    // Usando htmlspecialchars para proteger
    $nome_seguro = htmlspecialchars($nome);
    $email_seguro = htmlspecialchars($email);
    $assunto_seguro = htmlspecialchars($assunto);
    $mensagem_segura = htmlspecialchars($mensagem);
    ?>
    
    <p>Olá <strong><?php echo $nome_seguro; ?></strong>, sua mensagem foi recebida!</p>
    
    <h3>Dados enviados:</h3>
    <p><strong>Email:</strong> <?php echo $email_seguro; ?></p>
    <p><strong>Assunto:</strong> <?php echo $assunto_seguro; ?></p>
    <p><strong>Mensagem:</strong> <?php echo $mensagem_segura; ?></p>
    
    <p>Responderemos em breve.</p>
    
    <br>
    <a href="index.html">Voltar ao formulário</a>
</body>
</html>