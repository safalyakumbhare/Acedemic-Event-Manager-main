CREATE TABLE IF NOT EXISTS `login`(
    `desig` VARCHAR(10),
    `name` VARCHAR(30),
    `email` VARCHAR(30),
    `dept` VARCHAR(30),
    `username` VARCHAR(30),
    `password` VARCHAR(30)
);

INSERT INTO `login` (`desig`,`name`,`email`,`dept`,`username`, `password`) VALUES ('Principle','Safalya Kumbhare','safalyakumbhare@gmail.com','Ghriet','admin', 'admin111');
INSERT INTO `login` (`desig`,`name`,`email`,`dept`,`username`, `password`) VALUES ('Hod','Pravin Paradkar','pravindparadkar2003@gmail.com
','Commerce and Management','pravin', 'pravin11');
INSERT INTO `login` (`desig`,`name`,`email`,`dept`,`username`, `password`) VALUES ('Faculty','Dhananjay',
'dhankawale2003@gmail.com','Commerce and Management','dhananjay', 'dhan');
INSERT INTO `login` (`desig`,`name`,`email`,`dept`,`username`, `password`) VALUES ('Hod','Sandhya','sandhya@gmail.com','Science and Technology','sandhya','sandhya11');
INSERT INTO `login` (`desig`,`name`,`email`,`dept`,`username`, `password`) VALUES ('Faculty','Divyani Lokhande','divyanilok@gmail.com','Science and Technology','divyani','divyani11');


CREATE TABLE  IF NOT EXISTS `activity` (
    `name` VARCHAR(30),
    `description` TEXT,
    `datefrom` DATE,
    `dateto`  DATE,
    `place` VARCHAR(30),
    `time` TIME,
    `orgby` VARCHAR(30),
    `approval` VARCHAR(50)
);


INSERT INTO `activity` (`name`,`description`,`datefrom`,`dateto`,`place`,`time`,`orgby`,`approval`) VALUES ('Ganesh Utsav','10 day Ganesh Chaturthi Festival in campus','2024-09-07','2024-09-17','Academic Building','11:00:00','Ghriet','Approved by Principal');
INSERT INTO `activity`(`name`,`description`,`datefrom`,`dateto`,`place`,`time`,`orgby`,`approval`) VALUES 
('Ganesh Idol Making Competition','Inter-Department Ganesh Idol Making Competition','2024-09-04','2024-09-05','Poly Building','10:30:00','Commerce and Management','Approved by Principal');
INSERT INTO `activity`(`name`,`description`,`datefrom`,`dateto`,`place`,`time`,`orgby`,`approval`) VALUES 
('FIESTA 2024','Freshers Party of BCA Department','2024-09-09','2024-09-09','Solitare Banqueet , Hingna T-Point , Nagpur','10:15:00','Science and Technology','Approved by Principal');



CREATE TABLE IF NOT EXISTS `requirement`(
    `eventname`  VARCHAR(30),
    `ground` VARCHAR(3),
    `sport` VARCHAR(3),
    `auditorium` VARCHAR(3),
    `sound` VARCHAR(3),
    `photo` VARCHAR(3),
    `video` VARCHAR(3),
    `from` DATE,
    `to`    DATE
);

INSERT INTO `requirement` (`eventname`,`ground`,`sport`,`auditorium`,`sound`,`photo`,`video`,`from`,`to`) VALUES ('FIESTA 2024','NO','NO','NO','NO','YES','YES','2024-09-09','2024-09-09'); 
INSERT INTO `requirement` (`eventname`,`ground`,`sport`,`auditorium`,`sound`,`photo`,`video`,`from`,`to`) VALUES ('Ganesh Idol Making Competition','NO','NO','YES','YES','YES','YES','2024-09-04','2024-09-05');
INSERT INTO `requirement` (`eventname`,`ground`,`sport`,`auditorium`,`sound`,`photo`,`video`,`from`,`to`) VALUES ('Ganesh Utsav','NO','NO','NO','YES','YES','YES','2024-09-07','2024-09-17');

CREATE TABLE IF NOT EXISTS `budget`(
    `eventname` VARCHAR(30),
    `particular`  VARCHAR(30),
    `amount` DECIMAL,
    `qty`  INT,
    `total` DECIMAL
);

INSERT INTO `budget` (`eventname`,`particular`,`amount`,`qty`,`total`) VALUES 
('FIESTA 2024','Solitare Hall Booking , Refreshments , DJ','800','80','64000');

INSERT INTO `budget` (`eventname`,`particular`,`amount`,`qty`,`total`) VALUES 
('Ganesh Idol Making Competition','Materials for Idol Making','500','50','25000');
INSERT INTO `budget` (`eventname`,`particular`,`amount`,`qty`,`total`) VALUES
('Ganesh Idol Making Competition','Cash Prize for 1st Winner','1000','1','1000');
INSERT INTO `budget` (`eventname`,`particular`,`amount`,`qty`,`total`) VALUES
('Ganesh Idol Making Competition','Cash Prize for 2nd Winner','500','1','500');
INSERT INTO `budget` (`eventname`,`particular`,`amount`,`qty`,`total`) VALUES
('Ganesh Idol Making Competition','Cash Prize for 3rd Winner','300','1','300');
INSERT INTO `budget` (`eventname`,`particular`,`amount`,`qty`,`total`) VALUES
('Ganesh Idol Making Competition','Miscellaneous','1000','1','1000');




CREATE TABLE IF NOT EXISTS `student`(
    `name` VARCHAR(30),
    `email` VARCHAR(30),
    `phone` VARCHAR(10),
    `dept` VARCHAR(30),
    `branch` VARCHAR(30),
    `year` VARCHAR(5),
    `rollno` VARCHAR(10),
    `password` VARCHAR(20),
    `approval` VARCHAR(20)
);

