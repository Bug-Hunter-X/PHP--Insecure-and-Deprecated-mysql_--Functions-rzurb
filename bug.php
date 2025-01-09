This code uses the `mysql_*` functions, which are deprecated and have been removed from PHP 7.0 onwards.  They are also highly vulnerable to SQL injection. 
```php
<?php
$link = mysql_connect('localhost', 'user', 'password');
if (!$link) {
die('Could not connect: ' . mysql_error());
}
mysql_select_db('database', $link);
$result = mysql_query("SELECT * FROM table WHERE id = '1'", $link);
if (!$result) {
die('Invalid query: ' . mysql_error());
}
while ($row = mysql_fetch_assoc($result)) {
  //process each row
}
mysql_close($link);
?>
```