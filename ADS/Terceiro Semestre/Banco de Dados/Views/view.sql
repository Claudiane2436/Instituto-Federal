create view open_items as
select v.vendor_name,
i.invoice_id,
i.invoice_total ,
(i.invoice_total - i.payment_total - i.credit_total)
as "balance_due"
from vendors v
inner join
invoices i on
v.vendor_id = i.vendor_id
where (i.invoice_total - i.payment_total -
i.credit_total) > 0
order by vendor_name;

select *from open_items;

select * from open_items where balance_due > 1000;


CREATE OR REPLACE VIEW open_items_summary AS
SELECT vendor_name, COUNT(*) AS
open_item_count,
SUM(invoice_total - credit_total - payment_total) AS
open_item_total
FROM vendors JOIN invoices ON
vendors.vendor_id = invoices.vendor_id
WHERE invoice_total - credit_total -payment_total > 0
GROUP BY vendor_name
ORDER BY open_item_total DESC;

select *from open_items_summary;

SELECT * FROM open_items_summary LIMIT 5;

CREATE OR REPLACE VIEW vendor_address
AS
SELECT vendor_id,
vendor_address1,
vendor_address2,
vendor_city,
vendor_state,
vendor_zip_code
FROM vendors;

select *from vendor_address;

