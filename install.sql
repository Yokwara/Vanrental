<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "vanrental";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 
CREATE TABLE vans (van_type VARCHAR(20), van_price INT, van_id INT, van_capacity INT );
INSERT INTO vans(van_type,van_price,van_id,van_capacity) 
VALUES("Van",1500,1,15);
INSERT INTO vans(van_type,van_price,van_id,van_capacity)
VALUES("Van/NGV",1800,2,12);
INSERT INTO vans(van_type,van_price,van_id,van_capacity) VALUES("Van/LPG",1800,3,12);

CREATE TABLE drivers( driver_name VARCHAR(20),driver_number INT,driver_id INT,driver_address VARCHAR(20),driver_start VARCHAR(20),driver_end VARCHAR(20));
INSERT INTO drivers(driver_name,driver_number,driver_id,driver_address,driver_start,driver_end)VALUES("AAA",0844444444,1,"Nonthaburi","1/1/2015","1/1/2020");
INSERT INTO drivers(driver_name,driver_number,driver_id,driver_address,driver_start,driver_end)VALUES("BBB",0855555555,2,"Phuket","2/2/2015","2/2/2020");
INSERT INTO drivers(driver_name,driver_number,driver_id,driver_address,driver_start,driver_end)VALUES("CCC",0866666666,3,"Bangkok","3/3/2015","3/3/2020");


CREATE TABLE customers( customer_name VARCHAR(20), customer_number INT, customer                                                                                                                                                     _id INT, customer_address VARCHAR(20),customer_crew INT);
INSERT INTO customers(customer_name,customer_number,customer_id,customer_address,customer_crew) VALUES("YOK",0811111111,1,"Bangkok",5);
INSERT INTO customers(customer_name,customer_number,customer_id,customer_address,customer_crew) VALUES("Warakorn",0822222222,2,"Bangkok",6);
INSERT INTO customers(customer_name,customer_number,customer_id,customer_address,customer_crew) VALUES("YK",0833333333,3,"Bangkok",7);


CREATE TABLE date(date_start VARCHAR(20), date_end VARCHAR(20));
INSERT INTO date(date_start,date_end)VALUES("1/1/2015","2/1/2020");
INSERT INTO date(date_start,date_end)VALUES("3/1/2015","4/1/2020");
INSERT INTO date(date_start,date_end)VALUES("5/1/2015","6/1/2020");

CREATE TABLE reserve (Customer_name VARCHAR(20), Customer_number VARCHAR(20), van_pricerate INT, day_of_trip INT );
INSERT INTO reserve(Customer_name, Customer_number, van_pricerate, day_of_trip) 
VALUES("yok",0811111111,1500,1);
INSERT INTO reserve(Customer_name, Customer_number, van_pricerate, day_of_trip) 
VALUES("yk",0822222222,1800,2)

