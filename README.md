# PHP: Insecure and Deprecated mysql_* Functions
This repository demonstrates the use of deprecated `mysql_*` functions in PHP and provides a solution using PDO or MySQLi for secure database interaction. The original code is vulnerable to SQL injection and is no longer supported in modern PHP versions.

## Bug
The `bug.php` file contains code that uses the deprecated `mysql_*` functions to connect to and query a MySQL database. This is insecure and can lead to SQL injection vulnerabilities.  The code also will fail on PHP versions 7.0 and above.

## Solution
The `bugSolution.php` file demonstrates the correct way to interact with a MySQL database using PDO or MySQLi.  This approach uses prepared statements to prevent SQL injection attacks and remains compatible with current and future PHP versions.

## How to Run
1.  Clone this repository.
2.  Create a MySQL database and table.  Adjust the database credentials in both `bug.php` and `bugSolution.php` to match your setup.
3.  Run `bug.php` (only in a PHP version below 7.0) to see the deprecated code in action,  then `bugSolution.php` to observe the secure alternative.

Remember to never use the deprecated `mysql_*` functions in any production environment.