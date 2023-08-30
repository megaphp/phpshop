create database shop;

use shop;

CREATE TABLE users (
 `id` int(11) NOT NULL auto_increment,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  'useremail' varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
    
);
