drop database if exist Register;
create database Register;

use Register;

Create table 'Form'(
    'FirstName' varchar(20) NOT NULL,
    'SecondName' varchar(20) NOT NULL,
    'Email' varchar(200) NOT NULL,
    'ConfirmEmail' varchar(200) NOT NULL,
    'Password' varchar(200) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

insert into 'Form' ('FirstName', 'SecondName', 'Email', 'ComfirmEmail', 'Password')VALUES
('Liridona', 'Baliu', 'Liridona.baliu@gmail.com', 'Liridona.baliu@gmail.com','de321153d721ffdc5cb5bcf648813fd4');
