
CREATE TABLE reservations (
id int(6) not null auto_increment,
name varchar(30) not null,
email varchar(30) not null,
phone int(12) not null, 
service varchar(20) not null, 
starttime int(12) not null, 
endtime int(12) not null, 
status varchar(20) not null,
SysDateTime timestamp not null DEFAULT current_timestamp, 
PRIMARY KEY (id),
FOREIGN KEY (email) REFERENCES client (email)
); 
