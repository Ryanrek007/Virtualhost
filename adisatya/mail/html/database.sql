create database mail

use mail

CREATE TABLE 'user_mail' (
  'id' int(11) NOT NULL auto_increment,
  'name' varchar(100),
  'email' varchar(100),
  'mobile' varchar(15),
  PRIMARY KEY  ('id')
);