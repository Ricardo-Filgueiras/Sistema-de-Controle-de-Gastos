

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela do Login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right,rgb(20,147,220),rgb(17,54,71));
        }
        div{
        background-color: rgba(0,0,0,0.6);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        padding: 80px;
        border-radius: 15px;
        color: white;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        .inputSubmit{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            
        }
        .inputSubimit:hover{
            background-color: deepskyblue;
            
        }
        #voltar{
            background-image: linear-gradient(to right ,rgb(0,92,197),rgb(90,20,220));
            
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor:pointer;
            border-radius: 10px;
        }
        #linkVoltar{
            color: white;
          }
    </style>
</head>
<body>
   
    <button id="voltar"><a id="linkVoltar" href="paginaInicial.php">Voltar</a></button>
      <div >
        <h1>Login</h1>
        <form action="testlogin.php" method="post">
        <input type="text" placeholder="Email" name="email" id="idUsuario">
        <br><br>
        <input type="password" placeholder="Senha" name="senha" id="idSenha">
        <br><br>
        <input class="inputSubmit" type="submit" name="submit" value="Enviar">
    </form>
    </div>
</body>
</html>