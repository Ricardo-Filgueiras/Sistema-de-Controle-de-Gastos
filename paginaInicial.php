<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site|Gn</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right,rgb(20,147,220),rgb(17,54,71));
            text-align: center;
            color: white;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0,0.6);
            padding: 30px;
            border-radius: 10px;
        }
        .botoes{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0,0.6);
            padding: 30px;
            border-radius: 10px;
        }
        #home{
            background-image: linear-gradient(to right ,rgb(0,92,197),rgb(90,20,220));
            
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor:pointer;
            border-radius: 10px;
        }
        #linkHome{
            color: white;
          }
          
       
    </style>
</head>
<body>
    <h1>tela de login</h1>
    <h2>Seja bem vindo!!</h2>
    <div class="botoes">
        <button id="home"><a id="linkHome"  href="telaDeLogin.php">Login</a></button>
        <button id="home"><a id="linkHome" href="cadastrarUsuario.php">Cadastre-se</a></button>
        
    </div>
    
</body>

</html>