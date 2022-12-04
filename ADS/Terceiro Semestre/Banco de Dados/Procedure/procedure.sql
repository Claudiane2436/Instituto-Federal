
DELIMITER // 
create PROCEDURE test(IN vendor_id_var INT) 
BEGIN 
    DECLARE max_invoice_total DECIMAL (9, 2);
    DECLARE min_invoice_total DECIMAL (9, 2);
    DECLARE percent_difference DECIMAL (9, 2);
    DECLARE count_invoice_id INT;
    #DECLARE vendor_id_var INT;
    #SET     vendor_id_var = 95;
    SELECT MAX(invoice_total),
           MIN(invoice_total),
           COUNT(invoice_id) INTO max_invoice_total,
           min_invoice_total,
           count_invoice_id
    FROM   invoices
    WHERE  vendor_id = vendor_id_var;
    SET percent_difference = (max_invoice_total - min_invoice_total) / min_invoice_total * 100;
    SELECT CONCAT('$', max_invoice_total) AS 'Maximum invoice',
           CONCAT('$', min_invoice_total) AS 'Minimum invoice',
           CONCAT(' % ', ROUND (percent_difference, 2 ) ) AS ' Percent difference ',
           count_invoice_id AS ' Number of invoices ';
END//
CALL test2(99);

DELIMITER // 
create PROCEDURE test2(OUT vendor_id_var INT) 
BEGIN 
    DECLARE max_invoice_total DECIMAL (9, 2);
    DECLARE min_invoice_total DECIMAL (9, 2);
    DECLARE percent_difference DECIMAL (9, 2);
    DECLARE count_invoice_id INT;
    #DECLARE vendor_id_var INT;
    #SET     vendor_id_var = 95;
    SELECT MAX(invoice_total),
           MIN(invoice_total),
           COUNT(invoice_id) INTO max_invoice_total,
           min_invoice_total,
           count_invoice_id
    FROM   invoices
    WHERE  vendor_id = vendor_id_var;
    SET percent_difference = (max_invoice_total - min_invoice_total) / min_invoice_total * 100;
    SELECT CONCAT('$', max_invoice_total) AS 'Maximum invoice',
           CONCAT('$', min_invoice_total) AS 'Minimum invoice',
           CONCAT(' % ', ROUND (percent_difference, 2 ) ) AS ' Percent difference ',
           count_invoice_id AS ' Number of invoices ';
END//
CALL test2(105);

DELIMITER $$
CREATE PROCEDURE GetCustomerLevel(
    IN  pCustomerNumber INT, 
    OUT pCustomerLevel  VARCHAR(20),
    OUT pCustomerName VARCHAR(20))
BEGIN
    DECLARE credit DECIMAL(10,2) DEFAULT 0;

    SELECT creditLimit 
    INTO credit
    FROM customers
    WHERE customerNumber = pCustomerNumber;

    IF credit > 50000 THEN
        SET pCustomerLevel = 'PLATINUM';
    ELSEIF credit <= 50000 AND credit > 10000 
    THEN
        SET pCustomerLevel = 'GOLD';
        SET pCustomerName = 'Gift Ideas Corp.';
    ELSE
        SET pCustomerLevel = 'SILVER';
    END IF;
    
    
END$$

CALL GetCustomerLevel(447, @level, @cnome);
select @level as 'status cliente', @cnome 'nome do cliente';


DELIMITER $$
CREATE PROCEDURE GetCustomerShipping(
	IN  pCustomerNumber INT, 
	OUT pShipping       VARCHAR(50),
    OUT pCity VARCHAR(50))
BEGIN
    DECLARE customerCountry VARCHAR(100);
	SELECT 
		country
	INTO customerCountry FROM
		customers
	WHERE
		customerNumber = pCustomerNUmber;
    CASE customerCountry
		WHEN  'USA' THEN
		   SET pShipping = '2-day Shipping';
           SET pCity = 'Las Vegas';
		WHEN 'Canada' THEN
		   SET pShipping = '3-day Shipping';
		ELSE
		   SET pShipping = '5-day Shipping';
	END CASE;
END$$
DELIMITER ;
#
CALL GetCustomerShipping(112,@shipping, @pcity);
SELECT @shipping as 'prazo de entrega', @pcity as 'cidade';


DELIMITER $$
CREATE PROCEDURE GetDeliveryStatus(
	IN pOrderNumber INT,
    OUT pDeliveryStatus VARCHAR(100),
    OUT pCustomerName VARCHAR(50)
)
BEGIN
	DECLARE waitingDay INT DEFAULT 0;
    SELECT 
		DATEDIFF(requiredDate, shippedDate)
	INTO waitingDay
	FROM orders
    WHERE orderNumber = pOrderNumber;
    
    CASE 
		WHEN waitingDay = 0 THEN 
			SET pDeliveryStatus = 'On Time';
        WHEN waitingDay >= 1 AND waitingDay < 5 THEN
			SET pDeliveryStatus = 'Late';
            SET pCustomerName = 'Online Diecast Creations Co.';
		WHEN waitingDay >= 5 THEN
			SET pDeliveryStatus = 'Very Late';
		ELSE
			SET pDeliveryStatus = 'No Information';
	END CASE;	
END$$
DELIMITER ;
#
CALL GetDeliveryStatus(10100,@delivery, @pcustomerName);
select @delivery as 'status da entrega', @pcustomerName as 'Nome do cliente';