<?php 
include_once('config.php');
if(isset($_POST['update'])){
   $id=$_POST['id'];
   $titulo=$_POST['titulo'];
   $categoria=$_POST['categoria'];
   $valor=$_POST['valor'];
   $vencimento=$_POST['vencimento'];
   $tipo=$_POST['tipo'];
   
   $sqlUpdate="UPDATE contas SET titulo='$titulo' ,categoria='$categoria',valor='$valor',vencimento='$vencimento',tipo='$tipo' WHERE id='$id'";
  
  $result=$conexao->query($sqlUpdate);



   

}

header('location:sistema.php');

?>