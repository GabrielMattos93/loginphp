<?php
session_start(); 
ob_start();
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
            <h1 class="h3 mb-3 fw-normal">Login</h1>
            <p>Por Favor, Insira seus dados de acesso!</p>
            <?php
            $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);    
            if(!empty($dados['btnlogin'])){
                //var_dump($dados);

                $query_usuario ="SELECT id, nome, usuario, senha 
                FROM usuarios 
                WHERE usuario =:usuario
                LIMIT 1"; 
                $result_usuario = $conn->prepare($query_usuario); 
                $result_usuario->bindParam(':usuario', $dados['usuario'], PDO::PARAM_STR); 
                $result_usuario->execute(); 
                if(($result_usuario) AND ($result_usuario->rowCount() !=0)) {
                    $row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC); 
                    //var_dump($row_usuario);
                    if(password_verify($dados['senha'],  $row_usuario['senha']));
                     {
                        $_SESSION['id'] = $row_usuario['id'];
                        $_SESSION['nome'] = $row_usuario['nome'];
                        //redirecionando
                        header("Location: admin.php"); 
                    }
                }else{
                    $_SESSION['msg'] = "<p style='color:#ef1313'>Erro: Usu??rio ou Senha Inv??lida</p>"; 
                }

                if(isset($_SESSION['msg'])){
                    echo ($_SESSION['msg']); 
                    unset($_SESSION['msg']); 
                }
             
            }
            ?>
            <div class="form-floating">
                <input type="email" class="form-control" id="usuario" name="usuario"  placeholder="Digite seu email" required>
                <label for="email">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="senha" name="senha"  placeholder="Senha" required>
                <label for="senha">Senha</label>
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