<?php 
session_start();
include_once('config.php');



if(!isset($_SESSION['email'])==true and (!isset($_SESSION['senha'])==true)){
unset($_SESSION['email']);
unset($_SESSION['senha']);
header('location:telaDeLogin.php');

}

$idUsuario=$_SESSION['id'];
$selectSum="SELECT sum(valor) FROM contas WHERE idUsuario='$idUsuario' ";


if(!empty($_GET['pesquisa'])){
    $dadoPesquisa=$_GET['pesquisa'];

$SelectPesq="SELECT * FROM contas WHERE idUsuario='$idUsuario' and
 (titulo LIKE '%$dadoPesquisa%' OR categoria like '%$dadoPesquisa%' OR tipo LIKE '%$dadoPesquisa%')";

$result=$conexao->query($SelectPesq);
$soma=$conexao->query($selectSum);
$sigla='R$';
}



else{
  $sqlImprimirTudo="SELECT * FROM contas  WHERE idUsuario='$idUsuario'" ;
$result=$conexao->query($sqlImprimirTudo);
$soma=$conexao->query($selectSum);
$sigla='R$';
}









?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <style>
         body{
             background: linear-gradient(to right,rgb(20,147,220),rgb(17,54,71));
            text-align: center;
            color: white;
        }
        .table-bg{
            background: rgba(0, 0, 0,0.3);
            border-radius: 15px 15px 0 0;
        }
        .box-search{
          display: flex;
          justify-content: center;
          gap: .1%;
        }
    </style>
    <title>Sistema|ml</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Sistema ml</a>

     
  

      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  </div>

  <div class="d-flex">
<a href="sair.php" class="btn btn-danger me-5">sair</a>
   </div>

</nav>
<br>

<a class='btn btn-sm btn-primary' href='cadastrarContas.php'>
       <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-file-earmark-plus' viewBox='0 0 16 16'><path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5"/>
         <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z"/>
      </svg>
      
      </a>
 <div class="box-search">
   <input type="search" class="form-control w-25" name="pesquisa" id="pesquisa" placeholder="Pesquisar">
   <button class="btn btn-primary" onclick="pesquisaDados()">
   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
</svg>
   </button>
 </div>

<div class="m-5">
   <table class="table text-white table-bg">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titulo</th>
      <th scope="col">Categoria</th>
      <th scope="col">valor</th>
      <th scope="col">vencimento</th>
      <th scope="col">tipo</th>
      <th scope="col">Editar</th>
      <th scope="col">Excluir</th>
      
    </tr>
  </thead>
  <tbody>
   <?php 
   while($user_data=mysqli_fetch_assoc($result)){
    
    echo "<tr>";
    echo "<td>".$user_data['id']."</td>";
    echo "<td>".$user_data['titulo']."</td>";
    echo "<td>".$user_data['categoria']."</td>";
    echo "<td>R$".$user_data['valor']."</td>";
    echo "<td>".$user_data['vencimento']."</td>";
    echo "<td>".$user_data['tipo']."</td>";
    echo "<td> 
    <a class='btn btn-sm btn-primary' href='editContas.php?id=$user_data[id]'>
        <svg xmlns='http://www.w3.org/2000/ svg'width='16' height='16'    fill='currentColor' class='bi  bi-pencil' viewBox='0 0 16 16'>
           <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325'/>
       </svg>
    </a>
</td>";

echo "<td>
       <a class='btn btn-sm btn-danger' href='deleteContas.php?id=$user_data[id]'>
       <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
       <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0'/>
     </svg>

       </a>
     </td>";


    echo "</tr>";
   
   }
  
    
       while($sum=mysqli_fetch_assoc($soma)){
         echo "<tr>";
   echo "<td>  </td>";
   echo "<td> </td>";
   echo "<td> </td>";
   echo "<td>".$sigla.$sum['sum(valor)']."</td>";
   echo "<td> </td>";
   echo "<td> </td>";
   echo "<td>  </td>";
   echo "<td> </td>";


   echo "</tr>";
    }
    
   
   
   
   
   ?>
  </tbody>
</table>
   </div>
   
   
   
  
   
</body>
<script>
  var pesquisa=document.getElementById('pesquisa');



    pesquisa.addEventListener("keydown",function(event){
      if(event.key==="Enter")
      pesquisaDados();
    });

function pesquisaDados(){
window.location='sistema.php?pesquisa='+pesquisa.value;

}
</script>

</html>