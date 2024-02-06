<?php 
$dbhost='localhost';
$dbuser='root';
$dbpassword='';
$dbname='sys';

$conexao=new mysqli($dbhost,$dbuser,$dbpassword,$dbname);

if($conexao->connect_errno){
echo "error";

}
else{
   
}
?>