-- Criação da DB
create database banca;

-- selecione a DB
use banca;

-- tabela de usuarios
create table if not exists usuarios(
cod_user int auto_increment primary key,
nome varchar(60),
email varchar(60),
cpf bigint,
celular bigint,
senha_user varchar(12)
) default charset utf8mb4;


-- Tabela de livros de cada usuário
create table if not exists livros_user(
cod int NOT NULL,
cod_user int NOT NULL,
nome_user varchar(100),
nomeLivro varchar(200),
categoria varchar(100),
emprestou date,
devolver date,
foreign key(cod_user) references usuarios (cod_user),
foreign key(cod) references livros (cod)
)default charset utf8mb4;

-- Tabela de livros
create table if not exists livros(
cod int primary key auto_increment,
nome varchar(150),
categoria varchar(100)
)default charset utf8mb4;