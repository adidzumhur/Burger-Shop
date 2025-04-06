CREATE DATABASE BurgerShop;
USE BurgerShop;


CREATE TABLE Customer (
    Id VARCHAR(255) PRIMARY KEY,
    FirstName VARCHAR(255),
    LastName VARCHAR(255),
    Email VARCHAR(255)
);


CREATE TABLE MenuItem (
    Id VARCHAR(255) PRIMARY KEY,
    Name VARCHAR(255),
    Description TEXT,
    Price DECIMAL(10, 2)
);

CREATE TABLE Orders (
    Id VARCHAR(255) PRIMARY KEY,
    CustomerId VARCHAR(255),
    OrderDate DATETIME,
    PaymentId VARCHAR(255),
    FOREIGN KEY (CustomerId) REFERENCES Customer(Id)
    
);


CREATE TABLE Payment (
    Id VARCHAR(255) PRIMARY KEY,
    OrderId VARCHAR(255),
    PaymentDate DATETIME,
    PaymentType VARCHAR(255),
    Amount DECIMAL(10, 2)
    
);





CREATE TABLE OrderItem (
    Id VARCHAR(255) PRIMARY KEY,
    OrderId VARCHAR(255),
    MenuItemId VARCHAR(255),
    Quantity INT,
    FOREIGN KEY (OrderId) REFERENCES Orders (Id),
    FOREIGN KEY (MenuItemId) REFERENCES MenuItem(Id)
);


