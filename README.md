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
INSERT INTO posts (subject, content, date) VALUES ('Subject One', 'Content with regards subject one.', '2019-02-25 18:51.00');
```
```
SELECT subject FROM posts;
SELECT content FROM posts;
SELECT * FROM posts;
```
```
SELECT * FROM posts WHERE id='1';
```
```
SELECT * FROM posts WHERE id='1' AND subject='Subject One';
SELECT * FROM posts WHERE id='1' OR subject='Subject One';
```


### COOKIES
```
// cookies expires in 1 day
setcookie("name", "Fred", time() + 86400);
```