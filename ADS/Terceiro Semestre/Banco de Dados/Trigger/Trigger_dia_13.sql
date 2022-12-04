DELIMITER $$
 
create TRIGGER tgr_afterinsert_customer_purchase 
after insert on customer_purchases for each row
begin 
	update inventory set number_in_stock = number_in_stock - 1
		where inventory_id = new.inventory_id;
end$$
DELIMITER ;

    
select *from  customer_purchases;

alter table customer_purchases and total_de_itens int;
DELIMITER $$
 
create TRIGGER tgr_afterupdate_cp 
after update on customer_purchases for each row
begin 
	update inventory set number_in_stock = number_in_stock - new.total_de_itens
		where inventory_id = new.inventory_id;
end$$
DELIMITER ;

create TRIGGER tgr_afterdelete_cp 
after delete on customer_purchases for each row
begin 
	update inventory set number_in_stock = number_in_stock = old.total_de_itens
		where inventory_id = old.inventory_id;
end$$
DELIMITER ;

delete *from customer_purchases where customer_purchases = 5;