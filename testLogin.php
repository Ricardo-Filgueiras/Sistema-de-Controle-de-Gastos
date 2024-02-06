<?php 
session_start();
if(isset($_POST['submit'])&& !empty($_POST['email'])&& !empty($_POST['senha'])){
include_once('config.php');
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $id=$_SESSION['id'];


    
    
   
$sqlVerifica="SELECT * FROM usuarios WHERE email='$email' and senha='$senha' ";

$result=$conexao->query($sqlVerifica);

if(mysqli_num_rows($result)>0){
    $dadosSelect= $result->fetch_assoc();
    $id = $dadosSelect["id"];
    $_SESSION['id']=$id;
   $_SESSION['email']=$email;
   $_SESSION['senha']=$senha;
  
   
   
   header('location:sistema.php');
}
else{
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('location:telaDeLogin.php');
}
  
}
else{
    header('location:telaDeLogin.php');
}
?>