#Sistema simples ,mas muito versátil ,de acompanhamento e controle de gastos
<br>
<h1>Este projetos possui algumas funções do tipo:</h1>
<ul>
<li>Cadastro de Usuários</li>
<li>Inserção de dados</li>
<li>alteração de dados</li>
<li>remoção de dados</li>
<li>soma dos gastos</li>

</ul>
<h1>O que faço para conseguir usar o Projeto?</h1>
<p>Para usar o projeto é necessário:</p>
<ul>
<li>ter um servidor ,podendo ser local</li>
<li>ter um Banco de Dados instalado ,para o acesso e a manipulção de dados</li>
<li>As tabelas do banco de dados devem ser criadas com schema preparado para o projeto ,mostrado logo abaixo</li>
<p>Você pode usar o comando a seguir para fazer a criação do banco de dados e das tabelas</p>
<p>create database sys;
use sys;


create table usuarios(
id int(11) not null primary key auto_increment ,
nome varchar(35) not null,
senha varchar(45) not null,
email varchar(110) not null,
telefone  varchar(15) not null,
sexo varchar(15) not null,
data_nasc date not null,
cidade varchar(45) not null,
estado varchar(45) not null,
endereco varchar(45) not null
);

create table contas(
id int(11) primary key not null auto_increment,
idUsuario int(11) not null,
titulo varchar(45) not null,
tipo varchar(45) not null,
categoria varchar(45) not null,
valor decimal(9,2) not null,
vencimento date not null,
 foreign key (idUsuario) references usuarios(id)


);</p>
<p>Ou então pode importar o vardump nomeado dumpSys.sql</p>

</ul>
