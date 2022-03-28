
-- script de criacao do banco de dados basico east computer
-- 2022 redjoker software and technology

create database eastcomputerbanco;
use eastcomputerbanco;
create table clientes(cpf bigint primary key, nome varchar(50), telefone bigint, cep bigint,rua varchar(60),bairro varchar(50), cidade varchar(50), estado varchar(50),numero varchar(15), complemento varchar(30), email varchar(50), senha varchar(20));
create table pedidos(idpedido Int auto_increment primary key,cpf bigint not null,situacao varchar(15)); -- dinhpendente, confirmado, em processo, enviado, entregue 
create table pedidoproduto(idpedido Int not null, idproduto int not null, quantidade int, primary key(IDpedido, idproduto));
create table produtos(idproduto int auto_increment primary key, idcpu int, idgpu int, idplacamae int, idram int, idperiferico int,idfonte int, idgabinete int, preco varchar(20),foto varchar(45));
create table perifericos(idperiferico int auto_increment primary key,nome varchar(50),tipo varchar(15),descricao varchar(60),preco varchar(15),foto varchar(45));
create table ram(idram int auto_increment primary key,tiporam varchar(8),frequencia varchar(10),tamanho varchar(6),preco varchar(15),descricao varchar(60),foto varchar(45));
create table placamae(idplacamae int auto_increment primary key,nome varchar(50),fabricante varchar(20),cpusocket varchar(10),chipset varchar(10),tiporam varchar(8),tiposslots varchar(45),formato varchar(8), tipofonte varchar(14),qtdslotsram int,canaisram int,preco varchar(15),foto varchar(45),descricao varchar(60));
create table tabelacpu(idcpu int auto_increment primary key,nome varchar(50),fabricante varchar(45),cpusocket varchar(10),chipsets varchar(45),frequencia varchar(10),numnucleos int, numthreads int,preco varchar(15));
create table placavideo(idgpu int auto_increment primary key,nome varchar(50),fabricante varchar(45),vram varchar(20),barramento varchar(4),tiposlot varchar(8),preco varchar(15),foto varchar(45),conectorenergia varchar(11));
create table fonte(idfonte int auto_increment primary key,nome varchar(20),tipo varchar(11),watt varchar(8),formato varchar(6),preco varchar(15),descricao varchar(60),foto varchar(45));
create table gabinete(idgabinete int auto_increment primary key,nome varchar(15),formatoplaca varchar(10),conectores varchar(20),dimensoes varchar(15),formatofonte varchar(6),preco varchar(15),detalhes varchar(60),foto varchar(45));

-- testes do sistema- um usuario para testar.

insert into clientes(cpf,nome,telefone,cep,rua,bairro,cidade,estado,numero,complemento,email,senha) values (12345678900,"Zé",1122222222,11111111 ,"rua da tv","centro","São Paulo","São Paulo","3","","ze@ze.com","1234");
insert into pedidos(cpf, situacao) values(12345678900,"confirmado");
insert into pedidos(cpf, situacao) values(12345678900,"dinh pendente");
insert into pedidos(cpf, situacao) values(12345678900,"em processo");
insert into pedidos(cpf, situacao) values(12345678900,"em processo");


update pedidos set situacao="em processo" where idpedido=2;
update pedidos set situacao="enviado" where idpedido=1;







