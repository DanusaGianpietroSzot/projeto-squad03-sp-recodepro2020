drop database if exists quiz_login;

create database magnolia_bd DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

create table usuarias(
    id int not null primary key AUTO_INCREMENT,
    nome varchar(80) not null,
    idade int not null,
    email varchar(80) not null UNIQUE,
    telefone int not null,
    telefone_contato int not null,
    regiao varchar(30) not null,
    senha char(60) not null
)engine=InnoDB default charset=utf8;

insert into usuaria (id, nome, idade, email, telefone, telefone_contato, regiao, senha) VALUES
(1, "Daniela Szot", 42, "daniela@gmail.com", 988776655, 977665544, "Sul", "nuvem"),
(2, "Ester Silva", 38, "ester@gmail.com", 933221122, 922331133, "Leste", "chuva"),
(3, "Marina Batista", 19, "marina@gmail.com", 955887744, 955446699, "Centro", "sol"),
(4, "Tatiana Goulart", 25, "tatiana@gmail.com", 911225588, 955448899, "Centro-Oeste", "nublado");

create table quiz_resultado(
    id int not null primary key AUTO_INCREMENT, 
    letra_escolhida varchar(10) not null,
	info_usuaria int not null,
    foreign key(info_usuaria) references usuaria(id)
)engine=InnoDB default charset=utf8;

insert into quiz_resultado (id, letra_escolhida, info_usuaria) VALUES
(1, "A", 4),
(2, "B", 3),
(3, "D", 2),
(4, "C", 1);

SELECT q.letra_escolhida,u.nome, u.email, u.telefone, u.telefone_contato FROM quiz_resultado q
JOIN usuaria u ON q.info_usuaria = u.id;
