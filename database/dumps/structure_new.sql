DROP DATABASE IF EXISTS EVENTOQI;

CREATE DATABASE EVENTOQI;

USE EVENTOQI;


CREATE TABLE Status (
	Id_Status Int NOT NULL PRIMARY KEY ,
	Descricao Varchar(50)
);

CREATE TABLE Evento (
Id_Evento INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
Nome Varchar(50),
Dt_Inicial_Inscricao Date,
Dt_Final_Inscricao Date,
Dt_Inicial_Execucao Date,
Dt_Final_Execucao Date,
Dt_Final_Disponibilidade Date,
Dt_Inicio_Disponibilidade Date,
Imagem Varchar(50),
Id_Status Int NOT NULL,
FOREIGN KEY(Id_Status) REFERENCES Status (Id_Status) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE Sala (
Id_Sala Int NOT NULL PRIMARY KEY AUTO_INCREMENT,
Descricao Varchar(50),
Adaptada Varchar(12)
);

CREATE TABLE Recurso (
Id_Recurso Int NOT NULL PRIMARY KEY AUTO_INCREMENT,
Descricao Varchar(50),
Quantidade Int
);

CREATE TABLE Palestrante (
Id_Palestrante INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
Nome Varchar(50),
Minicurriculo Text,
Foto Varchar(50)
);

CREATE TABLE Equipe (
Id_Equipe Int NOT NULL PRIMARY KEY AUTO_INCREMENT,
Nome Varchar(50),
Email Varchar(50),
Telefone Varchar(12),
Senha Varchar(16)
);

CREATE TABLE Palestra (
Id_Palestra Int NOT NULL PRIMARY KEY AUTO_INCREMENT,
Titulo Varchar(50),
DataHora Datetime,
Imagem Varchar(50),
Descricao Text,
Conteudo Varchar(100),
Id_Evento Int,
Id_Sala Int,
FOREIGN KEY(Id_Evento) REFERENCES Evento (Id_Evento) ON DELETE CASCADE ON UPDATE CASCADE,
FOREIGN KEY(Id_Sala) REFERENCES Sala (Id_Sala) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE Aluno (
RA Int NOT NULL PRIMARY KEY,
Nome Varchar(50),
Email Varchar(50),
Telefone Varchar(12),
Senha Varchar(16)
);

CREATE TABLE Participa (
RA Int,
Id_Palestra Int,
PRIMARY KEY(RA,Id_Palestra),
FOREIGN KEY(RA) REFERENCES Aluno (RA) ON DELETE CASCADE ON UPDATE CASCADE,
FOREIGN KEY(Id_Palestra) REFERENCES Palestra (Id_Palestra) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE Utiliza (
Id_Palestra Int,
Id_Equipe Int,
PRIMARY KEY(Id_Palestra,Id_Equipe),
FOREIGN KEY(Id_Palestra) REFERENCES Palestra (Id_Palestra) ON DELETE CASCADE ON UPDATE CASCADE,
FOREIGN KEY(Id_Equipe) REFERENCES Equipe (Id_Equipe) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE Ministra (
Id_Palestrante Int,
Id_Palestra Int,
PRIMARY KEY(Id_Palestrante,Id_Palestra),
FOREIGN KEY(Id_Palestrante) REFERENCES Palestrante (Id_Palestrante) ON DELETE CASCADE ON UPDATE CASCADE,
FOREIGN KEY(Id_Palestra) REFERENCES Palestra (Id_Palestra) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE Palestra_Recurso (
Id_Palestra Int,
Id_Recurso Int,
PRIMARY KEY(Id_Palestra,Id_Recurso),
FOREIGN KEY(Id_Palestra) REFERENCES Palestra (Id_Palestra) ON DELETE CASCADE ON UPDATE CASCADE,
FOREIGN KEY(Id_Recurso) REFERENCES Recurso (Id_Recurso) ON DELETE CASCADE ON UPDATE CASCADE
);

