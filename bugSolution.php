This code uses PDO (PHP Data Objects), a more modern and secure way to interact with databases. It prevents SQL injection vulnerabilities using prepared statements.
```php
<?php
try {
  $pdo = new PDO('mysql:host=localhost;dbname=database', 'user', 'password');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $pdo->prepare('SELECT * FROM table WHERE id = ?');
  $stmt->execute([1]);
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    //process each row
  }
} catch (PDOException $e) {
  die('Database error: ' . $e->getMessage());
}
?>
```
Alternatively, you can use MySQLi:
```php
<?php
$mysqli = new mysqli('localhost', 'user', 'password', 'database');
if ($mysqli->connect_error) {
die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}
$result = $mysqli->prepare("SELECT * FROM table WHERE id = ?");
$result->bind_param("i", $id);
$id = 1;
$result->execute();
$result->bind_result($column1, $column2); //replace with your column names
while ($result->fetch()) {
  //process each row
}
$mysqli->close();
?>
```