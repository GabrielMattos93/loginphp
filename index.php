<?php
include 'config.php'; 
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sistema de Login PHP">
    <meta name="author" content="Gabriel Mattos">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Sistema de Login</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">


    <!-- Css -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body class="text-center">

    <main class="form-signin">
  
        <form method="POST" action="">
            <h1 class="h3 mb-3 fw-normal">Faça Login</h1>
            <?php
            $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
            //var_dump($dados);
            
            if(!empty($dados['btnlogin'])){
                //var_dump($dados);
            }
        
            ?>
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="Digite seu email" required>
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Senha" required>
                <label for="floatingPassword">Senha</label>
            </div>

            <div class="checkbox mb-3">
            </div>
            <input  name="btnlogin" class="w-100 btn btn-lg btn-primary" type="submit" value="Acessar"></input>
            <p class="mt-5 mb-3 text-muted">&copy; <script>
                document.write(new Date().getFullYear());
                </script>
            </p>
        </form>
    </main>



</body>

</html>