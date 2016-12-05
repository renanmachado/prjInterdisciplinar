
insert into Status values (1, 'Aberto'),
(2, 'Em andamento'), 
(3, 'Concluido');

INSERT INTO Evento VALUES
(NULL, 'SEMANA ACADEMICA', '2016-09-01', '2016-10-15', '2016-11-20', '2016-11-24', '2016-11-25', '2016-11-19', NULL, 3),
(NULL, 'SEMANA DE SEGURAN�A FAQI', '2016-10-01', '2016-11-15', '2016-11-20', '2016-11-24', '2016-11-25', '2016-11-19', NULL, 1),
(NULL, 'EMPREENDEDORISMO', '2016-08-01', '2016-08-25', '2016-11-20', '2016-11-24', '2016-11-25', '2016-11-19', NULL, 2);

SELECT * FROM Evento;

INSERT INTO Sala VALUES
(NULL, 'AUDITORIO POA TERREO', 'SIM'),
(NULL, 'AUDITORIO POA 2� ANDAR', 'NAO'),
(NULL, 'AUDITORIO POA 3� ANDAR', 'NAO');

SELECT * FROM Sala;

INSERT INTO Recurso VALUES
(NULL,'PROJETOR', 10),
(NULL,'NOTEBOOK', 5),
(NULL,'FLIP CHART', 2);

SELECT * FROM Recurso;

INSERT INTO Palestrante VALUES
(NULL,'MARK ZUKERBERG', 'Mark Elliot Zuckerberg � um programador e empres�rio norte-americano, que ficou conhecido internacionalmente por ser um dos fundadores do Facebook, a maior rede social do mundo.', '\zuckerberg.jpg'),
(NULL,'BILL GATES','William Henry Gates III mais conhecido como Bill Gates, � um magnata, filantropo e autor norte-americano, que ficou conhecido por fundar junto com Paul Allen a Microsoft, a maior e mais conhecida empresa','\bill.jpg'),
(NULL,'STEVE JOBS','Steven Paul Jobs foi um inventor, empres�rio e magnata americano no setor da inform�tica. Notabilizou-se como co-fundador, presidente e diretor executivo da Apple Inc.','\jobs.jpg');

SELECT * FROM Palestrante;

INSERT INTO Aluno VALUES
(20160801, 'LARRY PAGE', 'larry@google.com', '5199999991', '123456'),
(20160802, 'ELON MUSK', 'musk@tesla.com', '5199999992', '123456'),
(20160803, 'MICHAEL DELL', 'dell@dell.com', '5199999993', '123456');

SELECT * FROM Aluno;

INSERT INTO Equipe VALUES
(NULL, 'QUADRADO', 'QUADRADO@QI.EDU.BR', '5199999999', 123456),
(NULL, 'MINUZZI', 'MINUZZI@QI.EDU.BR', '5199999999', 123456),
(NULL, 'REUS', 'REUS@QI.EDU.BR', '5199999999', 123456),
(NULL, 'VIEGAS', 'VIEGAS@QI.EDU.BR', '5199999999', 123456),
(NULL, 'LANGER', 'LANGER@QI.EDU.BR', '5199999999', 123456);

SELECT * FROM Equipe;


INSERT INTO Palestra VALUES
(NULL, 'A INTERNET DAS COISAS', '23/08/2016',NULL, 'A INTERNET DAS COISAS', NULL, 1, 1),
(NULL, 'PRIVACIDADE NA INTERNET 2.0', '24/08/2016',NULL, 'PRIVACIDADE NA INTERNET 2.0', NULL, 2, 2),
(NULL, 'CRIANDO STARTUPS RENTAVEIS', '25/08/2016',NULL, 'CRIANDO STARTUPS RENTAVEIS', NULL, 3, 3);

SELECT * FROM Palestra;

INSERT INTO Utiliza VALUES
(1,1),
(1,2),
(2,3),
(2,4);

SELECT * FROM Utiliza;

INSERT INTO Palestra_Recurso VALUES
(1, 1),
(1,2),
(1,3);

SELECT * FROM Palestra_Recurso;

INSERT INTO Ministra VALUES
(1,1),
(2,2),
(3,3);

SELECT * FROM Ministra;

INSERT INTO Participa VALUES
(20160801, 1),
(20160802, 2),
(20160803, 3);

SELECT * FROM Participa;