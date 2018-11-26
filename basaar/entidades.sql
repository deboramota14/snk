CREATE DATABASE basaar;
USE basaar;
CREATE TABLE tblproduto (
	idProduto INT AUTO_INCREMENT not null,
	nomeproduto VARCHAR (60) not null,
	descricao VARCHAR(100) not null,
	tipoproduto VARCHAR (100) not null,
	preco VARCHAR(20) not null,
	quantidade INT,
	imagem VARCHAR(500),

	PRIMARY KEY (idProduto)

) engine = innodb;

CREATE TABLE tblusuario (
	idusuario INT AUTO_INCREMENT not null,
	nomeusuario VARCHAR(60),
	dataNasci DATE,
	cpf VARCHAR(14),
	email VARCHAR(100),
	telefone VARCHAR(14),
	sexo VARCHAR(1),
	senha VARCHAR (8),
	tipouser INT,
	endereco VARCHAR(100),
	cep VARCHAR(14),
	cidade VARCHAR (60),
	numero VARCHAR (8),

	PRIMARY KEY(idUsuario)
) engine = innodb;

CREATE TABLE tblPedido (
	idPedido INT AUTO_INCREMENT not null,
	precofrete VARCHAR (8),
	idProduto int,
	nomeproduto VARCHAR (60) not null,
	unidade VARCHAR(2) not null,
	PRIMARY KEY (IdPedido),
	FOREIGN KEY (idProduto) REFERENCES tblproduto(idProduto)
) engine = innodb;

CREATE TABLE cupom (
	idcupom INT AUTO_INCREMENT,
	nomecupom VARCHAR (60),
	desconto INT,

	PRIMARY KEY (idcupom)
) engine = innodb;

INSERT INTO tblusuario(nomeusuario, cpf, email, telefone, sexo, senha, tipouser, endereco, cep, cidade, numero)
VALUES("Cadé","1546585","cade@gmail.com","9965845","F","123",1, "José Benedito", "18211205", "Itapetininga", "71");

INSERT INTO tblproduto(nomeproduto, descricao, preco, quantidade, imagem)
VALUES("sapato", "sapatos", "50", "60", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZH6IFHNkkZthC8_sIrZGAnNDN0H6VInTdfE4UZFHU3K2nFeOS");

INSERT INTO tblproduto(nomeproduto, descricao, preco, quantidade, imagem)
VALUES("blusa", "blusas", "50", "60", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTv9pBeQ2VGwHBqg4gS2rpYpZF3UsZbMoebvOkT5kVEhIq3gubn");

INSERT INTO tblproduto(nomeproduto, descricao, preco, quantidade, imagem)
VALUES("shorts", "shorts", "50", "60", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZH6IFHNkkZthC8_sIrZGAnNDN0H6VInTdfE4UZFHU3K2nFeOS");

INSERT INTO tblproduto(nomeproduto, descricao, preco, quantidade, imagem)
VALUES("sapato", "sapatos", "50", "60", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZH6IFHNkkZthC8_sIrZGAnNDN0H6VInTdfE4UZFHU3K2nFeOS");

INSERT INTO tblproduto(nomeproduto, descricao, preco, quantidade, imagem)
VALUES("meias", "meias", "50", "60", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZH6IFHNkkZthC8_sIrZGAnNDN0H6VInTdfE4UZFHU3K2nFeOS");

INSERT INTO tblproduto(nomeproduto, descricao, preco, quantidade, imagem)
VALUES("camisa", "camisas", "50", "60", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpkiHp7PFdbDXx0NuQjBvqS5xs2-OgMcA0oYqtXFCkC4MhqmZMyQ");

INSERT INTO tblproduto(nomeproduto, descricao, preco, quantidade, imagem)
VALUES("sapato", "sapatos", "50", "60", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZH6IFHNkkZthC8_sIrZGAnNDN0H6VInTdfE4UZFHU3K2nFeOS");

INSERT INTO tblproduto(nomeproduto, descricao, preco, quantidade, imagem)
VALUES("blusa", "blusas", "50", "60", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZH6IFHNkkZthC8_sIrZGAnNDN0H6VInTdfE4UZFHU3K2nFeOS");

INSERT INTO tblproduto(nomeproduto, descricao, preco, quantidade, imagem)
VALUES("sapato", "sapatos", "50", "60", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZH6IFHNkkZthC8_sIrZGAnNDN0H6VInTdfE4UZFHU3K2nFeOS");

INSERT INTO tblproduto(nomeproduto, descricao, preco, quantidade, imagem)
VALUES("sapato", "sapatos", "50", "60", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZH6IFHNkkZthC8_sIrZGAnNDN0H6VInTdfE4UZFHU3K2nFeOS");





