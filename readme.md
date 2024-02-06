<h1>Sistema simples ,mas muito versátil ,de acompanhamento e controle de gastos<h1></h1>
<br>
<h2>Este projetos possui algumas funções do tipo:</h2>
<ul>
<li>Cadastro de Usuários</li>
<li>Inserção de dados</li>
<li>alteração de dados</li>
<li>remoção de dados</li>
<li>soma dos gastos</li>
</ul>

<h2>O que faço para conseguir usar o Projeto?</h2>
<p>Para usar o projeto é necessário:</p>
<ul>
<li>ter um servidor ,podendo ser local</li>
<li>ter um Banco de Dados instalado ,para o acesso e a manipulção de dados</li>
<li>As tabelas do banco de dados devem ser criadas com schema preparado para o projeto ,mostrado logo abaixo</li>
 <br>
 <li>
 O usuário pode pode importar o vardump disponível nos arquivos do projeto, nomeado dumpSys.sql,para seu sgbd,já com as queries necessárias para a criação do banco de dados e das tabelas</li>
 <br>
<li>Ou então se caso deseje fazer manualmente,o usuário pode copiar e colar as queries abaxio para a criação do banco de dados e das tableas</li>
 <br>
 </ul>
<p>

 <br>
 create database sys;
 <br>
use sys;
<br>

create table usuarios(
<br>
id int(11) not null primary key auto_increment ,<br>
nome varchar(35) not null,
<br>
senha varchar(45) not null,
<br>
email varchar(110) not null,
<br>
telefone  varchar(15) not null,
<br>
sexo varchar(15) not null,
<br>
data_nasc date not null,
<br>
cidade varchar(45) not null,
<br>
estado varchar(45) not null,
<br>
endereco varchar(45) not null<br>
);

create table contas(
id int(11) primary key not null auto_increment,
<br>
idUsuario int(11) not null,
<br>
titulo varchar(45) not null,
<br>
tipo varchar(45) not null,
<br>
categoria varchar(45) not null,
<br>
valor decimal(9,2) not null,
<br>
vencimento date not null,
<br>
 foreign key (idUsuario) references usuarios(id)
<br>

);</p>


<ul>
<li>Caso deseje o Usuário pode alterar os dados da conexão com o banco de dados atráves do arquivo config.php</li>
<li>Feito isso o proejto ja estará pronto para uso</li>
</ul>
