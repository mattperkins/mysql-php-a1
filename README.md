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
```
insert into posts (subject, content, date) VALUES ('Subject One', 'Content with regards subject one.', '2019-02-25 18:51.00');
```
```
select subject from posts;
select content from posts;
select * from posts;
```

### COOKIES
```
// cookies expires in 1 day
setcookie("name", "Fred", time() + 86400);
```