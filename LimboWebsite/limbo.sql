#Buildings in marist
#Jack Kendrat, Devin Racaniello, Colin Salvato, Ian Bette, Brandon Kline
#Version 1.0.0

drop database if exists limbo_db; create database limbo_db;
use limbo_db;

DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS stuff;
DROP TABLE IF EXISTS locations;

CREATE TABLE users(
  user_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(20) NOT NULL,
  pass CHAR(40) NOT NULL);

INSERT INTO users (username, pass)
 VALUES ('admin','gaze11e');

CREATE TABLE stuff(
  id INT AUTO_INCREMENT PRIMARY KEY,
  location_id INT NOT NULL,
  description TEXT NOT NULL,
  create_date DATETIME NOT NULL,
  update_date DATETIME NOT NULL,
  room TEXT,
  owner TEXT,
  ownerNum TEXT,
  finder TEXT,
  finderNum TEXT,
  status SET('found','lost','claimed') NOT NULL);

CREATE TABLE locations(
  id INT AUTO_INCREMENT PRIMARY KEY,
  create_date DATETIME NOT NULL,
  update_date DATETIME NOT NULL,
  name TEXT NOT NULL );

INSERT INTO locations (create_date, update_date, name)
 VALUES (NOW(), NOW(), 'Byrne House'),
 (NOW(), NOW(), 'Cannavino Library'),
 (NOW(), NOW(), 'Chapagnat Hall'),
 (NOW(), NOW(), 'Chapel'),
 (NOW(), NOW(), 'Cornell Boathouse'),
 (NOW(), NOW(), 'Donnely Hall'),
 (NOW(), NOW(), 'Dyson Centre'),
 (NOW(), NOW(), 'Fern Tor'),
 (NOW(), NOW(), 'Fontaine Hall'),
 (NOW(), NOW(), 'Foy Townhouses'),
 (NOW(), NOW(), 'Lower Fulton'),
 (NOW(), NOW(), 'Upper Fulton'),
 (NOW(), NOW(), 'GreyStone Hall'),
 (NOW(), NOW(), 'Hancock Centre'),
 (NOW(), NOW(), 'Kieran Gatehouse'),
 (NOW(), NOW(), 'Kirk House'),
 (NOW(), NOW(), 'Leo Hall'),
 (NOW(), NOW(), 'Longview Park'),
 (NOW(), NOW(), 'Lowell Thomas'),
 (NOW(), NOW(), 'Lower Townhouses'),
 (NOW(), NOW(), 'Marian Hall'),
 (NOW(), NOW(), 'Marist Boathouse'),
 (NOW(), NOW(), 'McCann Centre'),
 (NOW(), NOW(), 'Mid-Rise Hall'),
 (NOW(), NOW(), 'North Campus Housing Complex'),
 (NOW(), NOW(), 'St. Anns Hermitage'),
 (NOW(), NOW(), 'Science and Allied Health Building'),
 (NOW(), NOW(), 'Sheahan Hall'),
 (NOW(), NOW(), 'Steel Plant Studios and Gallery'),
 (NOW(), NOW(), 'Student Centre/Music Building'),
 (NOW(), NOW(), 'Lower West'),
 (NOW(), NOW(), 'Upper West');
 
  INSERT INTO stuff (location_id,description,create_date,update_date,owner,finder,ownerNum,finderNum,status)
    VALUES (1,'rock', NOW(), NOW(), 'tate','derf','8728753876','871153876',4);
 
 INSERT INTO stuff (location_id,description,create_date,update_date,finder,finderNum,status)
    VALUES (1,'iphone 6', NOW(), NOW(), 'Nate','5342653876',1),
    (1,'iphone 7', NOW(), NOW(), 'Greg','8764699281',1);
    
 INSERT INTO stuff (location_id,description,create_date,update_date,owner,ownerNum,status)
    VALUES (1,'piano', NOW(), NOW(), 'sally','9989353889',2),
    (1,'slime', NOW(), NOW(), 'Preg','8939853476',2);
 
 