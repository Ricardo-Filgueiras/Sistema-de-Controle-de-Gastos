<?php 
$dbhost='localhost';
$dbuser='root';
$dbpassword='';
$dbname='integra';

$conexao=new mysqli($dbhost,$dbuser,$dbpassword,$dbname);

if($conexao->connect_errno){
echo "error";

}
else{
   
}
?>