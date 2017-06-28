# Dynamic-Dropdown

Creates a dynamic drop down menu in PHP using a categories table in a mySQL database. 

# Setup

- Import the sql dump from `dynamic-dropdown/sql-dump.sql` into a mySQL database. 
- Run `composer install`
- 


```
$db = new MysqliDb ('host', 'username', 'password', 'databaseName');
```


## Select Query

After any select/get function calls amount or returned rows is stored in $count variable

```
$db2->where('parentid', '0');
$levels1 = $db2->get('category');

$db2->where('parentid', $level1['id']);
$levels2 = $db2->get('category');

$submenu_1 = '';
$ulmenu_1 = '';
$sub_text_1 = '';

```  
  
For this update to work properly, you must make sure of server runnability.

Thats all for today :)
  
![Alt text](https://github.com/peerfahad/Dynamic-Dropdown/blob/master/dropdown/pic.PNG?raw=true "Optional Title")
