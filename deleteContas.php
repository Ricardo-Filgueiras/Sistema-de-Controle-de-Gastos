<?php 
include_once('config.php');
if(isset($_GET['id'])){
    $id=$_GET['id'];
    
$sqlVerificaId="SELECT * FROM contas WHERE id='$id'";
$result=$conexao->query($sqlVerificaId);

if($result->num_rows>0){
    $sqlDelete="DELETE FROM contas WHERE id='$id'";
    $result=$conexao->query($sqlDelete);
    header('location:sistema.php');
}
else{
    header('location:sistema.php');
}
    

}
else{
    header('location:sistema.php');
}
?>