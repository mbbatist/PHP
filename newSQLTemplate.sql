/*Questão 03*/
select *from assuntos;
insert into assuntos (nome) values ('Banco de Dados'), ('Drama'), ('Romance'), ('Ficcção Científica'), ('Terror');

select *from livros;
insert into livros (titulo, autor, datalan, copias, assuntos_idassuntos) values 
('A culpa é das estrelas','John fact','2014-05-23',16,3),
('The vampire Diaries','Kristen Valerie','2009-10-12',30,2),
('Crepusculo','Stephenie Meyer','2005-12-11',50,3),
('Star Wars: O cavalheiro Jedi','Muller Frinx','2010-06-15',47,4),
('Jupiter','Colt bland','2011-04-22',23,4),
('View','Steve Jobs','2013-11-19',21,1);

select *from emprestimos;
insert into emprestimos (dataret, dataprev, datadev, multa, livros_idlivros, livros_assuntos_idassuntos, alunos_idalunos) values
('2013-09-20','2013-10-09','2014-01-23','25.50',2,2,1);
insert into emprestimos (dataret, dataprev, datadev, multa, livros_idlivros, livros_assuntos_idassuntos, alunos_idalunos) values
('2006-07-18','2006-09-03','2006-08-05','30.00',3,3,2);
insert into emprestimos (dataret, dataprev, datadev, multa, livros_idlivros, livros_assuntos_idassuntos, alunos_idalunos) values
('2015-09-09','2015-11-24','2015-12-29','10.00',5,1,3);

select *from alunos;
insert into alunos (nome, email, fone) values
('Cauã','kua@gmail.com','6392023453'),
('Thaynara','thay@hotmail.com','6392674956'),
('Marielly','elly@gmail.com','6381235478'),
('Emilya','lya@hotmal.com','6399012367'),
('Katilene','ktln@gmail.com','6392450213');

/*Questão 04*/

/*Questão 05*/

select titulo, autor, datalan from livros order by titulo asc;

/*Questão 02*/
select *from livros where datalan >="2012-01-01" or  datalan >= "2015-01-01";

/*Questão 03*/
select *from livros where assuntos_idassuntos=1;

/*Questão 04*/
select livros.titulo, assuntos.nome, livros.copias from livros, assuntos;

/*Questão 05*/
select livros.titulo, livros.autor from livros where assuntos_idassuntos=1;

/*Questão 06*/
select assuntos.nome, livros.copias from livros, assuntos order by assuntos.nome asc; 

/*Questão 07*/
update `biblioteca`.`livros` SET `copias`='10' WHERE `idlivros`='6' and`assuntos_idassuntos`='4';

/*Questão 08*/
select livros.copias, alunos.nome, emprestimos.dataret from livros, alunos, emprestimos;

/*Questão 09*/
select sum(multa) from emprestimos where dataret>"2014-01-01" and dataret<"2014-12-31";

/*Questão 10*/
insert into alunos (nome, email, fone) values('Pietro','pet@hotmail.com','6392430223');



