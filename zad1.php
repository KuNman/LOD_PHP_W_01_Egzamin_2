<?php
$exercise_1a = "create table Destinations(
  id int not null auto_increment,
  user_id int,
  address text,
  lat decimal (13,10),
  long decimal (13,10),
  PRIMARY KEY(id),
  FOREIGN KEY(user_id) 
  REFERENCES Users(id)
);";

$exercise_1b = "";

$exercise_1c = "";

$exercise_1d = "select * from Items where price > 50 order by ASC";

$exercise_1e = "insert into Orders (description) values ('Przykladowy opis 1)";

$exercise_1f = "delete from Users where id = 10";

$exercise_1g = "";
