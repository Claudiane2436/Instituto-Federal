
create database mercado;
use mercado;

CREATE TABLE Produtos
(
	Referencia	VARCHAR(3) PRIMARY KEY,
	Descricao	VARCHAR(50) UNIQUE,
	Estoque	INT NOT NULL DEFAULT 0
);

INSERT INTO Produtos VALUES ('001', 'Feijão', 10);
INSERT INTO Produtos VALUES ('002', 'Arroz', 5);
INSERT INTO Produtos VALUES ('003', 'Farinha', 15);

CREATE TABLE Pedido
(
	Venda		INT,
	Produto	VARCHAR(3),
	Quantidade	INT
);

select* from Pedido;

DELIMITER $

CREATE TRIGGER Tgr_Pedidos_Insert AFTER INSERT
ON Pedido
FOR EACH ROW
BEGIN
	UPDATE Produtos SET Estoque = Estoque - NEW.Quantidade
WHERE Referencia = NEW.Produto;
END$

show triggers;

## Caso seja cancelada uma venda deve-se voltar a quantidade que havia no estoque
CREATE TRIGGER Tgr_Pedido_Delete AFTER DELETE
ON Pedido
FOR EACH ROW
BEGIN
	UPDATE Produtos SET Estoque = Estoque + OLD.Quantidade
WHERE Referencia = OLD.Produto;
END$

DELIMITER ;

################ Testando a trigger AFTER INSERT #######################
INSERT INTO Pedido VALUES (1, '001',3);
select * from produtos;

INSERT INTO Pedido VALUES (1, '002',1);
select * from produtos;

INSERT INTO Pedido VALUES (1, '003',5);
select * from produtos;

################ Testando a trigger AFTER DELETE ########################
DELETE FROM Pedido WHERE Venda = 1 AND Produto = '001';
select * from Pedido;

