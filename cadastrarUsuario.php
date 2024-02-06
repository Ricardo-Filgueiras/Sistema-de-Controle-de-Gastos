<?php 
include_once('config.php');
if(!empty($_POST['submit'])){
  $nome=$_POST['nome'];
  $senha=$_POST['senha'];
  $email=$_POST['email'];
  $telefone=$_POST['telefone'];
  $sexo=$_POST['sexo'];
  $data_nasc=$_POST['data_nasc'];
  $cidade=$_POST['cidade'];
  $estado=$_POST['estado'];
  $endereco=$_POST['endereco'];
 
  /*$sqlCreate="CREATE TABLE `$nome`(
    id int(11) not null primary key auto_increment,
  titulo varchar(45) not null,
  categoria varchar(45) not null,
  valor decimal(9,2) not null,
  vencimento date not null,
  tipo varchar(45) not null)";*/
  $sqlInsert="INSERT INTO usuarios(nome,senha,email,telefone,sexo,data_nasc,cidade,estado,endereco)VALUES('$nome','$senha','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')";
  //$create=$conexao->query($sqlCreate);
  $result=$conexao->query($sqlInsert);
  
  header('location:telaDeLogin.php');

}

    
    
    
    
    
    
    ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right,rgb(20,147,220),rgb(17,54,71));
            }
            .box{
                 color:white;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
                background-color: rgba(0, 0,0, 0.6);
                padding: 15px;
                border-radius: 15px;
                width: 20%;
            }
            fieldset{
                border: 3px solid dodgerblue;
            }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
           
        }

        .inputbox{
            position: relative;
        }
        .inputuser{
           background: none; 
           border: none;
           border-bottom: 1px solid white;
           outline: none;
           color: white;
           font-size: 15px;
           width: 100%;
           letter-spacing: 2px;
        }
        .labelinput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputuser:focus ~ .labelinput, .inputuser:valid ~ .labelinput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nasc{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
            
        }
        #submit{
            background-image: linear-gradient(to right ,rgb(0,92,197),rgb(90,20,220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor:pointer;
            border-radius: 10px;
        }
      #submit:hover{
            background-image: linear-gradient(to right ,rgb(0,80,172),rgb(80,19,175));
            
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
    <div class="box">
      <fieldset>
         <form action="cadastrarUsuario.php" method="post">
            <legend>Cadastre-se</legend>
            <br><br>
            <div class="inputbox">
                <input type="text" name="nome" id="nome" class="inputuser" required>
                <label for="nome" class="labelinput">Nome Completo</label>
            </div>
            <br><br>
            <div class="inputbox">
                <input class="inputuser" type="password" name="senha" id="senha" required>
                <label for="senha" class="labelinput">Senha</label>

            </div>
            <br><br>
            <div class="inputbox">
                <input class="inputuser" type="text" name="email" id="email" required>
                <label for="email" class="labelinput">Email</label>

            </div>
            <br><br>
            <div class="inputbox">
                <input class="inputuser" type="text" name="telefone" id="telefone" required>
                <label for="telefone" class="labelinput">Telefone:</label>

            </div>
            <br><br>
            <p><b>Sexo:</b></p>
             <input type="radio" name="sexo" id="feminino" value="feminino" required>
            <label for="feminino">Feminino</label>
            <br>
            <input type="radio" name="sexo" id="masculino" value="masculino" required>
            <label for="masculino">Masculino</label>
            <br>
            <input type="radio" name="sexo" id="outro" value="outro" required>
            <label for="outro">Outro</label>
            <br><br>
            <label for="data_nasc"><b>Data de nascimento:</b></label>
            <input type="date" name="data_nasc" id="data_nasc">
            <br><br><br>
            <div class="inputbox">
                <input class="inputuser" type="text" name="cidade" id="cidade" required>
                <label for="cidade" class="labelinput">Cidade</label>

            </div>
            <br><br>
            <div class="inputbox">
                <input class="inputuser" type="text" name="estado" id="estado" required>
                <label for="estado" class="labelinput">Estado</label>

            </div>
            <br><br>
            <div class="inputbox">
                <input class="inputuser" type="text" name="endereco" id="endereco" required>
                <label for="endereco" class="labelinput">Endereço</label>
                <br><br><br>
            </div>
            <input type="submit" id="submit" name="submit" value="Enviar">




         </form>







      </fieldset>


    </div>
</body>
</html>