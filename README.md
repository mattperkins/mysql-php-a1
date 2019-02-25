## PHP backend connecting to mySQL database

### SQL
```
create table posts (
  id int(11) not null PRIMARY KEY AUTO_INCREMENT,
  subject varchar(255) not null,
  content TEXT not null,
  date datetime not null
);
```


### COOKIES
```
// cookies expires in 1 day
setcookie("name", "Fred", time() + 86400);
```