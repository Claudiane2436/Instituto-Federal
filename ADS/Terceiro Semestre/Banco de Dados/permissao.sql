drop user ray_gu3021611;
create user ray_gu3021611 identified by 'ray_gu3021611' password expire interval 90 day;

select *from mysql.user;

drop  database ap_3021611;
use ap_3021611;

grant all on ap_gu3020461 to bd2_dev with grant option;
grant select, insert, update
	on ap_21579x.vendors to ray_gu3021611;
    
use ap1;
select *from vendors;
insert into verdors(vendor_id, vendor_name, vendor_city)
values (124, 'Renato Bueno', 'Guarulhos', 'SP');