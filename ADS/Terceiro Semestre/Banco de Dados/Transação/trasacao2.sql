set autocommit = 0;
SET FOREIGN_KEY_CHECKS=0;

START TRANSACTION;
update employees set firstName = 'David' where empleyeesNumber = 1665;
commit;

