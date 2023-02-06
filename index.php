<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Comentários | PHP e AJAX</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <section class='container'>
        <div class='box-form'>
            <h1>Sistema de Comentários</h1>
            <form class='form' id='form'>
                <label for='name'>NOME:</label><br/>
                <input type='text' id='name'/><br/><br/>
                <label for='comment'>COMENTÁRIO:</label><br/>
                <input type='text' id='comment'/><br/><br/>
                <input type='submit' form='form' class='btn-form' value='Enviar comentário'/>
            </form>
        </div>
</section>
<div class='box-comment'>
</div>
<script src='../project-1/node_modules/jquery/dist/jquery.min.js'></script>
<script src="./script.js"></script>
</body>
</html>