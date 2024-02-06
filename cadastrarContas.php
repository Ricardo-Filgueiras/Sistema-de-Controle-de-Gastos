<?php 
session_start();
if(!empty($_POST['submit'])){
    include('config.php');
    $idUsuario=$_SESSION['id'];
    $titulo=$_POST['titulo'];
    $categoria=$_POST['categoria'];
    $valor=$_POST['valor'];
    $vencimento=$_POST['vencimento'];
    $tipo=$_POST['tipo'];

   
    $result=mysqli_query($conexao,"INSERT INTO contas(titulo,categoria,valor,vencimento,tipo,idUsuario)VALUES('$titulo','$categoria','$valor','$vencimento','$tipo','$idUsuario')");
    

    

    header('location:sistema.php');


     
    




}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Cadastrar</title>
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
        .inputUser{
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
        .inputUser:focus ~ .labelinput, .inputUser:valid ~ .labelinput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #idData_nascimento{
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
 <button id="voltar"><a id="linkVoltar" href="sistema.php" method="post">Voltar</a></button>
    <div class="box">
        <form action="cadastrarContas.php" method="post">
            <fieldset>
                <legend><b>Cadastrar Registros</b></legend>
                <br><br>
                <div  class="inputbox">
                <input type="text" name="titulo" id="titulo" class="inputUser" required >
                  <label for="titulo" class="labelinput">Titulo</label>
                </div>
                <br><br>
                <div  class="inputbox">
                <input type="text" name="categoria" id="categoria" class="inputUser" required >
                  <label for="categoria" class="labelinput">Categoria</label>
                </div>
                <br><br>
                <div  class="inputbox">
                <input type="number" name="valor" id="valor" 
                step="0.01"  class="inputUser" required >
                <label for="valor" class="labelinput">Valor</label>
            </div>
            <br><br>
            <label for="vencimento"><b>Vencimento</b></label>
            <input type="date" name="vencimento" id="vencimento" required>
            <br><br><br>
            <div  class="inputbox">
                <input type="text" name="tipo" id="tipo" class="inputUser" required >
                <label for="tipo" class="labelinput">Tipo</label>
            </div>
            <br><br>
            <input type="submit" name="submit" id="submit" value="Cadastrar">
            </fieldset>

        </form>

    </div>
 </body>
</html>