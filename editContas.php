<?php 
include_once('config.php');
if(isset($_GET['id'])){
    $id=$_GET['id'];
$sqlSelect="SELECT * FROM contas  WHERE id='$id' "  ;
$result=$conexao->query($sqlSelect);

if($result->num_rows>0){
    while($dados_tabela=mysqli_fetch_assoc($result)){
        $titulo=$dados_tabela['titulo'];
       $categoria=$dados_tabela['categoria'];
       $valor=$dados_tabela['valor'];
       $vencimento=$dados_tabela['vencimento'];
       $tipo=$dados_tabela['tipo'];

      
    }
}
else{
    header('location:sistema.php');
}

}
else{
  header('location:sistema.php');
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de Dados</title>
   
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
        #vencimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
            
        }
        #update{
            background-image: linear-gradient(to right ,rgb(0,92,197),rgb(90,20,220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor:pointer;
            border-radius: 10px;
        }
      #update:hover{
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
     <button id="voltar"><a id="linkVoltar" href="sistema.php">Voltar</a></button>
    
       <div class="box">
          <form action="saveEditContas.php" method="post">
               <fieldset>
                   <legend>Atualização Cadastral</legend>
                   <br>
                   <div  class="inputbox">
                <input type="text" name="titulo" id="titulo" class="inputUser" required value=" <?php echo $titulo?>">
                  <label for="titulo" class="labelinput">Titulo</label >
                </div>
                <br><br>
                   <div  class="inputbox">
                       <input class="inputUser" type="text" name="categoria" id="categoria" required value="<?php echo $categoria?>">
                       <label for="categoria" class="labelinput">Categoria</label>
                   </div>
                   <br><br>
                   <div  class="inputbox">
                       <input class="inputUser" type="number" 
                       step="0.01"
                       name="valor" id="valor"
                      required value="<?php echo $valor?>">
                       <label for="valor" class="labelinput">Valor</label>
                   </div>
                   <br><br>

                       <label for="vencimento" class=""><b>Vencimento</b></label>
                       <input  type="date" name="vencimento" id="vencimento" required value="<?php echo $vencimento?>">
                       
                 
                   <br><br><br>

                   <div  class="inputbox">
                       <input class="inputUser" type="text" name="tipo" id="tipo" required value="<?php echo $tipo?>">
                       <label for="tipo" class="labelinput">Tipo</label>
                   </div>
                   <br>
                    <input type="submit" id="update" name="update" value="Salvar">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                   </div>
                </fieldset>
            </form>
        </div>
  </body>
</html>