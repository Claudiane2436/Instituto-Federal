#Ordenar os empregados pelo primeiro nome 
select *from employees order by FirstName;

#Buscar na tabela produtos as unidades em estoque que seja maiores que 40
select *from products where UnitsInStock >40;

#Retorna a quantidade de países com clientes diferentes
SELECT COUNT(DISTINCT Country) FROM Customers;


#Buscar na tabela produtos as unidades em estoque que seja maiores que 40 e o preço unitário seja maior que 40
select *from products where UnitsInStock >40 and UnitPrice>40;

#Buscar na tabela produtos as unidades em estoque que seja maiores que 40 ou preço unitário seja menor ou igual a 5
select *from products where UnitsInStock >40 or UnitPrice<=5;

#Selecionar as propriedade que o país for igual a Alemanha 
SELECT  *FROM suppliers
WHERE
  Country IN ('Germany');

#Selecionar as propriedade que o título não for representante de vendas
SELECT* FROM employees
WHERE
  Title NOT IN ('Sales Representative');

#Seleciona os nomes e o aniversários das pessoas que faz aniversário entre 1955-01-01 e 1965-01-01
SELECT
  LastName,
  FirstName, BirthDate
FROM
  employees
WHERE
  BirthDate BETWEEN '1955-01-01' AND '1965-01-01';

#Selecionar todos que tenham VINET na Identificação do Cliente 
SELECT *FROM orders WHERE CustomerID LIKE "%VINET%";

#Mostrar até 10 itens de detalhes do pedido 
SELECT * FROM orderdetails LIMIT 10;

#Mostrar todos os campos onde clientes na região estão nulos
SELECT *FROM customers WHERE Region IS NULL;

#LEFT JOIN da tabela produto e categoria
Select ProductID, ProductName,
 products.CategoryID, CategoryName
from products
left join categories ON
categories.CategoryID = products.CategoryID;


#Junção da tabela detalhes do pedido e produto
select OrderID, Quantity,
	orderdetails.ProductID, ProductName 
From orderdetails 
 INNER join products
on products.ProductID = orderdetails.ProductID;

#RIGHT outer JOIN com a tabela clientes e pedidos
select *from orders  RIGHT outer JOIN customers
on orders.CustomerID = customers.CustomerID;



#CROSS JOIN com as tabelas pedidos e clientes
SELECT Customers.ContactName, Orders.OrderID
FROM Customers
CROSS JOIN Orders
WHERE Customers.CustomerID=Orders.CustomerID;

#Consulta retorna os clientes que são da mesma cidade
SELECT A.ContactName AS ContactName1, B.ContactName AS ContactName2, A.City
FROM Customers A, Customers B
WHERE A.CustomerID <> B.CustomerID
AND A.City = B.City
ORDER BY A.City;

#Consulta que retorna a quantidade em estoque por categoria
select CategoryName, count(UnitsInStock) as 'unid_em_estoque'
	from products p INNER JOIN
    categories c on  p.CategoryID = c.CategoryID
	group by c.CategoryID order by unid_em_estoque DESC;

#Lista o número de clientes em cada país, do maior para o menor
SELECT COUNT(CustomerID) as 'qtd_de_cliente', Country as 'País'
FROM Customers
GROUP BY Country
HAVING COUNT(CustomerID) > 5
ORDER BY COUNT(CustomerID) DESC;

#Retorna a quantidade de pedidos na tabela detalhes do pedido 
select ProductName as 'Nome_Produto',
	  sum(Quantity) as 'Quantidade'
From orderdetails 
 INNER join products
on products.ProductID = orderdetails.ProductID
 group by Quantity with ROLLUP;
 
 #Retorna o nome da empresa e a Data do pedido
 select CompanyName, OrderDate 
From  orders 
 INNER join  customers
on customers.CustomerID = orders.CustomerID;
 
 #Ordenar pelo nome e o último nome do empregado
 SELECT * FROM employees
ORDER BY FirstName and LastName;
 
#Nome do produto, quantidade e o preço
 SELECT
    P.ProductName,
    P.UnitPrice
FROM
     products P
WHERE
    P.ProductName IN
    (
        SELECT
            O.OrderID
        FROM
            orderdetails O
        WHERE
            P.ProductName = O.OrderID
    );
 
 #Retorna a quantidade de pedidos feitos pelo empregados
 select FirstName as 'Nome', 
	(select count(o.EmployeeID) 
    from orders o
	where o.EmployeeID = e.EmployeeID) as 'qtd_pedido'
from  employees e
group by e.EmployeeID;
 
 
 #Retorna o nome do produto que o preço unitário seja maior do 200
 SELECT ProductName as 'Produto'
FROM products p
WHERE EXISTS
( SELECT 1
FROM orders o
WHERE UnitPrice > 200)
ORDER BY ProductName; 

#Retorna os empregados que são da cidade de London e tenham nascido depois de 1962
WITH employees_in_london AS (  
    SELECT * FROM employees WHERE City = 'London'   
    )   
    SELECT FirstName as 'Nome', BirthDate as 'Data de nascimento', 
    City as 'Cidade' FROM employees_in_london  
    WHERE BirthDate >= '1962-01-01' ORDER BY FirstName;  

 #Ordenar pelo preço unitário
 SELECT * FROM orderdetails
ORDER BY UnitPrice;

#União de dois nome da tabela clientes
SELECT ShipName, ShipAddress 
from Orders WHERE CustomerID ="WARTH" 
UNION 
SELECT ShipName, ShipAddress 
from Orders WHERE CustomerID ="VINET";

#Retorna  as linhas duplicadas do Nome do navio e Endereço do navio
SELECT ShipName, ShipAddress from Orders WHERE CustomerID ="VINET";


#Inner Join com as tabelas território e região
select TerritoryDescription, RegionDescription
From territories 
 INNER join region
on region.RegionID = territories.RegionID;
 select *from orderdetails;
 
 #Ordenar a tabela pelo número da região
 SELECT * FROM territories
ORDER BY RegionID;
 