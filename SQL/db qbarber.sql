create database qbarber
char set utf8
default collate utf8_general_ci;
use qbarber;

create table if not exists usuario (
	id_usuario int auto_increment primary key,
    login varchar(30) not null,
    senha varchar(30) not null,
    permissao tinyint		# Determina em qual rota vai entrar (Cliente/Barbeiro)
);

create table if not exists barbearia (
	id_barbearia int auto_increment primary key,
    nome varchar(50) not null ,
    id_dono int not null,
    endereco varchar(50) not null,
    horario_funcionamento varchar(50),
    cnpj varchar(30) not null,
    informacao text
);

create table if not exists fila (
	id_fila int auto_increment primary key,
    id_usuario int not null,
    id_barbeario int not null,
    id_servico int,
    atendido boolean,
    horario_inicio timestamp,
    horario_fim timestamp
);

create table if not exists servico (
	id_servico int auto_increment primary key,
    id_barbearia int not null,
    tipo varchar(30) not null,		# Ordena o tipos por categoria
    servico varchar(30) not null,
    tempo time
);

create table if not exists imagem (
	id_imagem int auto_increment primary key,
    caminho varchar(150) not null,		# Caminho que ela vai esta nas pastas
    id_barbearia int not null,
    posicao varchar(30) 		# Qual componente ela vai ficar
);
    
