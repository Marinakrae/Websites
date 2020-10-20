DROP DATABASE IF EXISTS coala_shop; 

CREATE DATABASE IF NOT EXISTS coala_shop 
DEFAULT CHARSET utf8
COLLATE utf8_general_ci;

USE coala_shop;


CREATE TABLE produtos (
  id int(11) unsigned NOT NULL AUTO_INCREMENT,
  nome varchar(255) NOT NULL,
  valor decimal(6,2) unsigned NOT NULL,
  quantidade smallint(3) unsigned NOT NULL DEFAULT 0,
  descricao varchar(255),
  PRIMARY KEY (id)
);

CREATE TABLE usuario (
  id int(11) unsigned NOT NULL AUTO_INCREMENT,
  nome varchar(255) NOT NULL,
  senha varchar(32) NOT NULL,
  email varchar(255) NOT NULL,
  data_nasc date NOT NULL,
  telefone bigint(11) UNSIGNED NOT NULL,
  admin bit(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (id)
);

CREATE TABLE pedidos (
	fk_produto int(11) unsigned NOT NULL,
	CONSTRAINT fk3 FOREIGN KEY (fk_produto) REFERENCES produtos(id),
	fk_usuario int(11) unsigned NOT NULL,
	CONSTRAINT fk1 FOREIGN KEY (fk_usuario) REFERENCES usuario(id),
	quantidade smallint(3) unsigned NOT NULL DEFAULT 0,
	hora TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO produtos (id, nome, valor, quantidade, descricao) VALUES
	(1, 'Jaqueta Transparente', 60.00, 20, 'Você consegue ver através dela. Disponível nos tamanhos: M, P, G, PP'),
	(2, 'Moletom Pandinha', 50.00, 40, 'Uma gracinha, não é? Disponível nos tamanhos: M, P, G, PP'),
	(3, 'Meias Harijuku', 10.00, 200, 'Você PRECISA de todas!! Disponível nos tamanhos: M, P, G, PP e em cinco modelos diferentes.'),
	(4, 'Moletom Tubarão', 50.00, 60, 'Tá todo mundo querendo um, garanta já o seu!. Disponível nos tamanhos: M, P, G, PP'),
	(5, 'Camisa Xadrex Coelhinho', 70.00, 20, 'O item mais fofo da loja. Disponível nos tamanhos: M, P, G, PP'),
	(6, 'Mochila Unicórnio', 90.00, 30, 'Aproveite o desconto e torne seus dias mais mágicos com essa linda mochila.'),
	(7, 'Mochila Rilakkuma', 150.00, 10, 'Mochila de ótima qualidade, aproveite!'),
	(8, 'Pelúcia Kawaii', 50.00, 70, 'Importada do Japão, 100% algodão. Disponível em dois modelos.'),
	(9, 'Gatinho de Pelúcia', 40.00, 50, 'Adquira todos hoje mesmo! Disponível em cinco cores diferentes.'),
	(10, 'Meia Longa Gatinho', 30.00, 30, '80% algodão e 10% elastano. Disponível nos tamanhos: M, P, G e nas cores rosa, preto e branco.');


INSERT INTO usuario (id, nome, senha, email) VALUES
	(1, 'Marina', '421359a899e6aeb972c11a26fb52ad15', 'marinakrae@bol.com'), /*ado*/
	(2, 'Admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@admin.com');
