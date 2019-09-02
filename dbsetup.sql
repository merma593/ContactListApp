CREATE TABLE contactInfo (
 firstname varchar(255),
 lastname varchar(255) NOT NULL,
 phonenum varchar(20) NOT NULL,
 email varchar(80),
 PRIMARY KEY (phonenum)
 );

INSERT INTO contactInfo VALUES ('Markham', 'Meredith', '027776912423', 'markham@markham.com');
INSERT INTO contactInfo VALUES ('ollie', 'whiteman', '027776915643', 'ollie@whiteman.com');

