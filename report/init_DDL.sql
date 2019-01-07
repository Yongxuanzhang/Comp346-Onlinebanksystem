drop database if exists eec353_2;
CREATE DATABASE eec353_2;
USE eec353_2

CREATE TABLE Client (
    id INT  PRIMARY KEY,
    name varchar(255) ,
    address varchar(255) ,
    dob DATE ,
    join_date DATE ,
    phone varchar(255) ,
    email varchar(255) , 
    password varchar(255) 
  
);



CREATE TABLE Branch (
    id INT PRIMARY KEY ,
    opening_date DATE ,
    location varchar(255),
    phone varchar(255) ,
    fax varchar(255) 

);


CREATE Table Admin(
    id INT PRIMARY KEY,
    email varchar(255),
    password varchar(255) 

);


CREATE TABLE Employee(
    id INT PRIMARY KEY,
    start_date DATE ,
    name varchar(255),
    address varchar(255) ,
    email varchar(255) ,
    phone varchar(255) ,
    title varchar(255) ,
    monthly_pay DOUBLE ,
    sick_days INT,
    holidays INT,
    password varchar(255),
    branch_id INT 
   
);  


CREATE TABLE Manager(
    id INT PRIMARY KEY,
    manager_id INT,
    branch_id INT
);


CREATE TABLE Schedule(
    id INT  PRIMARY KEY,
    employee_id INT,
    monday BOOLEAN,
    tuesday BOOLEAN,
    wednesday BOOLEAN,
    thursday BOOLEAN,
    friday BOOLEAN,
    saturday BOOLEAN,
    sunday BOOLEAN
); 


  CREATE TABLE Account (
    id INT   PRIMARY KEY ,
    type_ varchar(255) ,
    level varchar(255) ,
    balance DECIMAL(65,2) DEFAULT 0.00,
    liability_limit DECIMAL,
    option_ varchar(255) ,
    interest_rate DOUBLE ,
    transaction_count INT DEFAULT 0,
    client_id int(11) ,
    branch_id int(11)
);


CREATE TABLE Type(
    name varchar(255)  PRIMARY KEY,
    category varchar(255) 
);



CREATE TABLE ChargePlan(
    option_ varchar(255) PRIMARY KEY ,
    transaction_limits INT ,
    monthly_charge DOUBLE ,
    overage_fee DOUBLE
);

 
CREATE TABLE GeneralManager(
    id INT PRIMARY KEY,
    employee_id INT ,
    service varchar(255) 
   
);


CREATE TABLE Bill(
    id INT  PRIMARY KEY,
    account_id INT ,
    name varchar(255),
    amount DOUBLE,
    recurring BOOLEAN 
 
);


CREATE TABLE Transaction (
    id INT   PRIMARY KEY,
    sender INT ,
    receiver INT ,
    date DATE ,
    category varchar(255) ,
    amount DOUBLE 
 
);
    alter table Manager add foreign key(manager_id) references Employee(id);
    alter table Employee add foreign key(branch_id) references Branch(id) on delete cascade on update cascade;
    alter table Manager add foreign key (branch_id) references Branch(id) on delete cascade on update cascade;

    alter table GeneralManager add foreign key(employee_id) references Employee(id) on delete cascade on update cascade;


    alter table Account add foreign key (client_id) references Client(id) on delete cascade on update cascade;
    alter table Account add foreign key (branch_id) references Branch(id) on delete cascade on update cascade;
    alter table Account add foreign key (type_) references Type(name) on delete cascade on update cascade;
    alter table Account add foreign key (option_) references ChargePlan(option_) on delete cascade on update cascade;

    alter table Transaction add foreign key (sender) references Account(id) on delete cascade on update cascade;
    alter table Transaction add foreign key (receiver) references Account(id) on delete cascade on update cascade;
    alter table Schedule add foreign key(employee_id) references Employee(id) on delete cascade on update cascade;
    alter table Bill add foreign key(account_id) references Account(id) on delete cascade on update cascade;
    
