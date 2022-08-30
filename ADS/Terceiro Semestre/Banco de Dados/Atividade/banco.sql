create database atividade;
use atividade;
CREATE TABLE `Customers` (
   `CustomerID`   VARCHAR(5)   NOT NULL,
       -- First 5 letters of CompanyName
       -- Probably better to use an UNSIGNED INT
   `CompanyName`  VARCHAR(40)  NOT NULL,
   `ContactName`  VARCHAR(30),
   `ContactTitle` VARCHAR(30),
   `Address`      VARCHAR(60),
   `City`         VARCHAR(15),
   `Region`       VARCHAR(15),
   `PostalCode`   VARCHAR(10),
   `Country`      VARCHAR(15),
   `Phone`        VARCHAR(24),
   `Fax`          VARCHAR(24),
   PRIMARY KEY (`CustomerID`),
   INDEX (`City`),
   INDEX (`CompanyName`),
   INDEX (`PostalCode`),
   INDEX (`Region`)
       -- Build indexes on these columns for fast search
);
CREATE TABLE `Employees` (
   `EmployeeID`      MEDIUMINT UNSIGNED  NOT NULL AUTO_INCREMENT,
                     -- [0, 65535]
   `LastName`        VARCHAR(20)         NOT NULL,
   `FirstName`       VARCHAR(10)         NOT NULL,
   `Title`           VARCHAR(30),  -- e.g., 'Sales Coordinator'
   `TitleOfCourtesy` VARCHAR(25),  -- e.g., 'Mr.' 'Ms.' (ENUM??)
   `BirthDate`       DATE,         -- 'YYYY-MM-DD'
   `HireDate`        DATE,
   `Address`         VARCHAR(60),
   `City`            VARCHAR(15),
   `Region`          VARCHAR(15),
   `PostalCode`      VARCHAR(10),
   `Country`         VARCHAR(15),
   `HomePhone`       VARCHAR(24),
   `Extension`       VARCHAR(4),
   `Photo`           BLOB,                          -- 64KB
   `Notes`           TEXT                NOT NULL,  -- 64KB
   `ReportsTo`       MEDIUMINT UNSIGNED  NULL,  -- Manager's ID
                                                -- Allow NULL for boss
   `PhotoPath`       VARCHAR(255),
   `Salary`          INT,
   INDEX (`LastName`),
   INDEX (`PostalCode`),
   PRIMARY KEY (`EmployeeID`)
);


CREATE TABLE `Region` (
   `RegionID`           TINYINT UNSIGNED  NOT NULL AUTO_INCREMENT,
                        -- [0,255]
   `RegionDescription`  VARCHAR(50)       NOT NULL,
                        -- e.g., 'Eastern','Western','Northern','Southern'
                        -- Could use an ENUM and eliminate this table
   PRIMARY KEY (`RegionID`)
);
CREATE TABLE `Territories` (
   `TerritoryID`           VARCHAR(20)       NOT NULL,  -- ZIP code
   `TerritoryDescription`  VARCHAR(50)       NOT NULL,  -- Name
   `RegionID`              TINYINT UNSIGNED  NOT NULL,
                           -- Could use an ENUM to eliminate `Region` table
   PRIMARY KEY (`TerritoryID`),
   FOREIGN KEY (`RegionID`) REFERENCES `Region` (`RegionID`)
);
CREATE TABLE `EmployeeTerritories` (
   `EmployeeID`  MEDIUMINT UNSIGNED  NOT NULL,
   `TerritoryID` VARCHAR(20) NOT NULL,
   PRIMARY KEY (`EmployeeID`, `TerritoryID`),
   FOREIGN KEY (`EmployeeID`) REFERENCES `Employees` (`EmployeeID`),
   FOREIGN KEY (`TerritoryID`) REFERENCES `Territories` (`TerritoryID`)
);
CREATE TABLE `Categories` (
   `CategoryID`   TINYINT UNSIGNED  NOT NULL AUTO_INCREMENT,
                  -- [0, 255], not expected to be large
   `CategoryName` VARCHAR(30)       NOT NULL,
                  -- e.g., 'Beverages','Condiments',etc
   `Description`  TEXT,       -- up to 64KB characters
   `Picture`      BLOB,       -- up to 64KB binary
   PRIMARY KEY  (`CategoryID`),
   UNIQUE INDEX (`CategoryName`)
      -- Build index on this unique-value column for fast search
);
CREATE TABLE `Suppliers` (
   `SupplierID`   SMALLINT UNSIGNED  NOT NULL AUTO_INCREMENT,
                                     -- [0, 65535]
   `CompanyName`  VARCHAR(40)        NOT NULL,
   `ContactName`  VARCHAR(30),
   `ContactTitle` VARCHAR(30),
   `Address`      VARCHAR(60),
   `City`         VARCHAR(15),
   `Region`       VARCHAR(15),
   `PostalCode`   VARCHAR(10),
   `Country`      VARCHAR(15),
   `Phone`        VARCHAR(24),
   `Fax`          VARCHAR(24),
   `HomePage`     TEXT,          -- 64KB?? VARCHAR(255)?
    PRIMARY KEY (`SupplierID`),
    INDEX (`CompanyName`),       -- UNIQUE?
    INDEX (`PostalCode`)
);
CREATE TABLE `Products` (
   `ProductID`       SMALLINT UNSIGNED       NOT NULL AUTO_INCREMENT,
   `ProductName`     VARCHAR(40)             NOT NULL,
   `SupplierID`      SMALLINT UNSIGNED       NOT NULL,  -- one supplier only
   `CategoryID`      TINYINT UNSIGNED        NOT NULL,
   `QuantityPerUnit` VARCHAR(20),            -- e.g., '10 boxes x 20 bags'
   `UnitPrice`       DECIMAL(10,2) UNSIGNED  DEFAULT 0,
   `UnitsInStock`    SMALLINT                DEFAULT 0,  -- Negative??
   `UnitsOnOrder`    SMALLINT UNSIGNED       DEFAULT 0,
   `ReorderLevel`    SMALLINT UNSIGNED       DEFAULT 0,
   `Discontinued`    BOOLEAN                 NOT NULL DEFAULT FALSE,
   PRIMARY KEY (`ProductID`),
   INDEX (`ProductName`),
   FOREIGN KEY (`CategoryID`) REFERENCES `Categories` (`CategoryID`),
   FOREIGN KEY (`SupplierID`) REFERENCES `Suppliers` (`SupplierID`)
);
CREATE TABLE `Shippers` (
   `ShipperID`   TINYINT UNSIGNED  NOT NULL AUTO_INCREMENT,
   `CompanyName` VARCHAR(40)       NOT NULL,
   `Phone`       VARCHAR(24),
   PRIMARY KEY (`ShipperID`)
);
CREATE TABLE `Orders` (
   `OrderID`        INT UNSIGNED        NOT NULL AUTO_INCREMENT,
                    -- Use UNSIGNED INT to avoid run-over
   `CustomerID`     VARCHAR(5),
   `EmployeeID`     MEDIUMINT UNSIGNED  NOT NULL,
   `OrderDate`      DATE,
   `RequiredDate`   DATE,
   `ShippedDate`    DATE,
   `ShipVia`        TINYINT UNSIGNED,
   `Freight`        DECIMAL(10,2) UNSIGNED  DEFAULT 0,
   `ShipName`       VARCHAR(40),
   `ShipAddress`    VARCHAR(60),
   `ShipCity`       VARCHAR(15),
   `ShipRegion`     VARCHAR(15),
   `ShipPostalCode` VARCHAR(10),
   `ShipCountry`    VARCHAR(15),
   PRIMARY KEY (`OrderID`),
   INDEX (`OrderDate`),
   INDEX (`ShippedDate`),
   INDEX (`ShipPostalCode`),
   FOREIGN KEY (`CustomerID`) REFERENCES `Customers` (`CustomerID`),
   FOREIGN KEY (`EmployeeID`) REFERENCES `Employees` (`EmployeeID`),
   FOREIGN KEY (`ShipVia`)    REFERENCES `Shippers`  (`ShipperID`)
);
CREATE TABLE `OrderDetails` (
   `OrderID`   INT UNSIGNED           NOT NULL,
   `ProductID` SMALLINT UNSIGNED      NOT NULL,
   `UnitPrice` DECIMAL(8,2) UNSIGNED  NOT NULL DEFAULT 999999.99,
                                      -- max value as default
   `Quantity`  SMALLINT(2) UNSIGNED   NOT NULL DEFAULT 1,
   `Discount`  DOUBLE(8,0)            NOT NULL DEFAULT 0, -- e.g., 0.15
   PRIMARY KEY (`OrderID`, `ProductID`),
   FOREIGN KEY (`OrderID`)   REFERENCES `Orders`   (`OrderID`),
   FOREIGN KEY (`ProductID`) REFERENCES `Products` (`ProductID`)
);

CREATE TABLE `CustomerDemographics` (
   `CustomerTypeID`  VARCHAR(10)  NOT NULL,
   `CustomerDesc`    TEXT,        -- 64KB
   PRIMARY KEY (`CustomerTypeID`)
);
CREATE TABLE `CustomerCustomerDemo` (
   `CustomerID`     VARCHAR(5)   NOT NULL,
   `CustomerTypeID` VARCHAR(10)  NOT NULL,
   PRIMARY KEY (`CustomerID`, `CustomerTypeID`),
   FOREIGN KEY (`CustomerTypeID`) REFERENCES `CustomerDemographics` (`CustomerTypeID`),
   FOREIGN KEY (`CustomerID`) REFERENCES `Customers` (`CustomerID`)
);