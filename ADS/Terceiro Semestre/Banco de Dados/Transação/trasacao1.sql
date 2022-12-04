

USE classicmodels;

set autocommit = 0;
SET FOREIGN_KEY_CHECKS=0;
START TRANSACTION;

select *from employees order by employeesNumber between 1165;

select count(*) from orders;
delete from orders;
commit;
rollback;
select @@global.tx_isolation;
/*isolamento global */
set session transaction isolation level serializable;

set session transaction isolation level Repeatable read;