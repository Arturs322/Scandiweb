CREATE DATABASE scandiweb;

USE scandiweb;

CREATE TABLE `products` (
                            `id` int(11) NOT NULL auto_increment,
                            `SKU` varchar(255) NOT NULL,
                            `name` varchar(255) NOT NULL,
                            `price` int(100) NOT NULL,
                            `size` int(100) ,
                            `weight` int(100) ,
                            `dimensions` varchar(255) ,
                            PRIMARY KEY  (`id`)
);