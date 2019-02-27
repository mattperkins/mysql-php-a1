## PHP backend connecting to mySQL database

### SQL
```
create table posts (
  id int(11) not null PRIMARY KEY AUTO_INCREMENT,
  subject varchar(255) not null,
  content TEXT not null
);
```
```
INSERT INTO posts (subject, content) VALUES ('Subject One', 'Content with regards subject one.');
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
```
UPDATE posts
SET subject='Update Subject One', content='Content One has been updated!'
WHERE id='1';
```
```
DELETE FROM posts
WHERE id='1';
```
```
SELECT * FROM posts ORDER BY id ASC;
SELECT * FROM posts ORDER BY id DESC;
SELECT * FROM posts ORDER BY subject DESC;
```


### COOKIES
```
// cookies expires in 1 day
setcookie("name", "Fred", time() + 86400);
```

```
<ul>
// explode array at empty space and render loop
<?php foreach(explode(' ', $products['details']) as $detail) { ?>
  <li><?php echo htmlspecialchars($detail); ?></li>
<?php } ?>
</ul>
```