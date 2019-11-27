create database gis

use gis

CREATE TABLE 'user_gis' (
  'id' int(11) NOT NULL auto_increment,
  'name' varchar(100),
  'email' varchar(100),
  'mobile' varchar(15),
  PRIMARY KEY  ('id')
);