<?php

echo "Hello World";

?>

SELECT customers.customerNumber,customers.customerName FROM customers INNER JOIN orders ON customers.customerNumber !=orders.customerNumber;


SELECT customers.customerNumber,customers.customerName FROM customers WHERE NOT EXISTS (SELECT customerNumber FROM orders WHERE orders.customerNumber=customers.customerNumber);