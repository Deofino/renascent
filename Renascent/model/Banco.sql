/*create database if not exists dbRenascent
go
use dbRenascent
go
create table if not exists tbFuncionario(
	idFuncionario integer primary key auto_increment,
	nomeFunionario varchar(100),
	cpfFuncionario char(14),
	dtNascimentoFuncionaio date
)character set utf8;
go
create table if not exists tbAutor(
	idAutor integer primary key auto_increment,
	nomeAutor varchar(100),
	paisOrigem varchar(30),
	nascimentoAutor date,
	falecimentoAutor date
)character set utf8;
go
create table if not exists tbClassificação(
	idClassificacao integer primary key auto_increment,
	descricaoClassificacao varchar(50)
)character set utf8;
go
create table if not exists tbPerido(
	idPeriodo integer primary key auto_increment,
	descricaoPeriodo varchar(50)
)character set utf8;
go
create table if not exists tbObra(
	idObra integer primary key auto_increment,
	tituloObra varchar(50),
	descricaoObra varchar(200),
	idAutor integer,
	dataObra date,
	idClassificacao integer,
	idPeriodo integer,
	paisObra varchar(30),
	idFuncionario integer,
	dataCadastro date
)character set utf8;
go
alter TABLE tbObra
add foreign key ('idAutor') references tbAutor(idAutor),
ADD	foreign key ('idClassificacao') references tbClassificacao(idClassificacao),
add	foreign key ('idPeriodo') references tbPeriodo(idPeriodo)